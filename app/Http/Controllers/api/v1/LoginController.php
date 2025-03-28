<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Customer;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Arr;
use DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Helpers\OtpHelper;
use Illuminate\Support\Facades\Hash;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Exception\MessagingException;



class LoginController extends Controller
{

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user_count = Customer::where(function ($query) use ($request) {
            $query->where('mobile', $request->username)
                ->orWhere('referrel_code', $request->username);
        })->count();

        if (Auth::attempt(array('email' => $request->username, 'password' => $request->password))) {

            $user = User::where('email', $request->username)->first();
            $token = $user->createToken('mykuri-app-token')->plainTextToken;


            $customer = Customer::where('user_id', $user->id)->first();
            if ($customer) {
                $customer->is_verified = true;
                $customer->save();
            }
            $user_out = User::where('email', $request->username)->with('customer')->first();

            if ($user_out->customer->is_verified == true) {

                return response([
                    'status' => true,
                    'user' => $user_out,
                    'token' => $token,
                    'message' => 'Login Successful',
                ]);
            }
        } elseif ($user_count == '1') {


            $customer = Customer::where(function ($query) use ($request) {
                $query->where('mobile', $request->username)
                    ->orWhere('referrel_code', $request->username);
            })->first();


            if (!$customer || !Hash::check($request->password, $customer->password)) {
                return response([
                    'status' => false,
                    'message' => 'Wrong Credentials',
                ]);
            } else {

                $customer = Customer::where('user_id',  $customer->user_id)->first();
                $customer->is_verified = true;
                $customer->update();
                $user = User::where('id', $customer->user_id)->first();
                $token = $user->createToken('mykuri-app-token')->plainTextToken;
                $user_out = User::where('email', $user->email)->with('customer')->first();
                if ($user_out->customer->is_verified == true) {
                    return response([
                        'status' => true,
                        'user' => $user_out,
                        'token' => $token,
                        'message' => 'Login Successful',
                    ]);
                }
            }
        } else {

            return response()->json([
                'message' => 'Invalid Login',
                'status' => false
            ]);
        }
    }

    public function verifyReferalCode(Request $request)
    {
        $request->validate([
            'referrel_code' => 'required',
        ]);

        $customer = Customer::where('referrel_code', $request->referrel_code)->first();
        if ($customer) {
            if ($customer->is_verified == false) {
                $otp = OtpHelper::getOtp();
                $customer->otp = $otp;
                $customer->is_verified = true;
                $customer->save();

                OtpHelper::sendOtp($customer->mobile, $otp);

                return response()->json([
                    'message' => 'User is verified successfully. Please Login to use App',
                    'status' => true
                ]);
            } else {
                return response()->json([
                    'message' => 'This Referral Code is already verified. Try Login',
                    'status' => false
                ]);
            }
        } else {
            return response()->json([
                'message' => 'This Referral Code does not exist. Please check your Referral Code',
                'status' => '0'
            ]);
        }
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'username' => 'required',
        ]);

        $user = User::where('email', $request->username)->first();
        if ($user) {
            $customer = Customer::where('user_id', $user->id)->first();
            $otp = OtpHelper::getOtp();
            $customer->otp = $otp;
            $customer->is_verified = false;
            $customer->save();

            OtpHelper::sendOtp($customer->mobile, $otp);

            return response()->json([
                'message' => 'Please Verify the Account using OTP',
                'status' => true
            ]);
        } else {
            return response()->json([
                'message' => 'This account does not exist',
                'status' => true
            ]);
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'referrel_code' => 'required|unique:customers,referrel_code',
            'mobile' => 'required|unique:customers,mobile',
            'password' => 'required',
        ]);

        $input = $request->all();
        $input['password'] = isset($input['password']) ? $input['password'] : '123456';

        // Create the User
        $user = User::create([
            'name'     => $input['name'],
            'email'    => $input['email'],
            'password' => bcrypt($input['password']),
        ]);
        $user->assignRole('customer');

        // Create the Customer
        $customer = Customer::create([
            'user_id'       => $user->id,
            'mobile'        => $input['mobile'],
            'password'      => bcrypt($input['password']),
            'referrel_code' => $input['referrel_code'],
            'otp'           => OtpHelper::getOtp(),
        ]);

        // Send OTP via SMS
        OtpHelper::sendOtp($input['mobile'], $customer->otp);

        $user_out = User::with('customer')->where('email', $request->email)->first();

        return response()->json([
            'message' => 'Your account has been registered. Please verify the account using OTP.',
            'user' => $user_out,
            'status' => true
        ]);
    }

    public function resendOtp(Request $request)
    {
        $request->validate([
            'username' => 'required',
        ]);

        if (User::where('email', $request->username)->exists()) {
            $user = User::where('email', $request->username)->first();
            $customer = Customer::where('user_id', $user->id)->first();
            $customer->otp = OtpHelper::getOtp();
            $customer->is_verified = false;
            $customer->update();

            // Resend OTP via SMS
            OtpHelper::sendOtp($customer->mobile, $customer->otp);

            return response()->json([
                'message' => 'OTP has been sent to your mobile.',
                'status' => true
            ]);
        } else {
            return response()->json([
                'message' => 'This account does not exist.',
                'status' => false
            ]);
        }
    }

    public function otp(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'otp' => 'required|numeric',
        ]);

        $input = $request->all();
        $user = User::where('email', $input['username']);
        $count = $user->count();

        if ($count == 1) {
            $user_data = $user->first();
            $customer = Customer::where('user_id', $user_data->id)->where('otp', $input['otp'])->first();

            if ($customer != "") {
                $input['is_verified'] = true;
                $customer->update($input);
                $token = $user_data->createToken('mykuri-app-token')->plainTextToken;

                return response()->json([
                    'message' => 'Your account has been verified.',
                    'token' => $token,
                    'status' => true
                ]);
            } else {
                return response()->json([
                    'message' => 'Invalid OTP.',
                    'status' => false
                ]);
            }
        } else {
            $customer = Customer::where('mobile', $input['username'])->where('otp', $input['otp'])->first();

            if ($customer != "") {
                $input['is_verified'] = true;
                $customer->update($input);
                $user = User::where('id', $customer->user_id)->first();
                $token = $user->createToken('mykuri-app-token')->plainTextToken;

                return response()->json([
                    'message' => 'Your account has been verified.',
                    'token' => $token,
                    'status' => true
                ]);
            } else {
                return response()->json([
                    'message' => 'Invalid OTP.',
                    'status' => false
                ]);
            }
        }
    }

    public function forgotOtp(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'otp' => 'required|numeric',
        ]);

        $input =  $request->all();
        $user = User::where('email', $input['username']);
        $count = $user->count();

        if ($count == 1) {
            $user_data =  $user->first();
            $customer = Customer::where('user_id', $user_data->id)->where('otp', $input['otp'])->first();
            if ($customer != "") {
                $input['is_verified'] = true;
                $customer->update($input);
                $token = $user_data->createToken('mykuri-app-token')->plainTextToken;

                return response()->json([
                    'message' => 'Your account has been verified.',
                    'token' => $token,
                    'status' => true
                ]);

            } else {
                return response()->json([
                    'message' => 'Invalid Otp',
                    'status' => false
                ]);
            }
        } else {
            $customer = Customer::where('mobile', $input['username'])->where('otp', $input['otp'])->first();
           
            if ($customer != "") {
                $input['is_verified'] = true;
                $customer->update($input);
                $user = User::where('id', $customer->user_id)->first();
                $token = $user->createToken('mykuri-app-token')->plainTextToken;

                return response()->json([
                    'message' => 'Your account has been verified.',
                    'token' => $token,
                    'status' => true
                ]);
            } else {
                return response()->json([
                    'message' => 'Invalid Otp',
                    'status' => false
                ]);
            }
        }
    }

    public function loginNotVerifiedOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric',
        ]);

        $input = $request->all();
        $input['is_verified'] = true;
        $id = auth()->user()->id;
        $customer = Customer::where('user_id', $id)->first();
        
        if ($input['otp'] == $customer->otp) {
            $customer->update($input);

            return response()->json([
                'message' => 'Your account has been verified.',
                'status' => true
            ]);
        } else {
            return response()->json([
                'message' => 'Invalid Otp',
                'status' => false
            ]);
        }
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'cpassword' => 'required',
        ]);

        $input = $request->all();
        $id = auth()->user()->id;
        $customer = Customer::where('user_id', $id)->first();
        $user = User::where('id', $id)->first();

        if ($input['password'] == $input['cpassword']) {
            $input['password'] =  (isset($input['password']) && $input['password']) ? $input['password'] : '123456';
            $input['password'] = Hash::make($input['password']);
            $customer->update($input);
            $user->update($input);
            $logout = Auth::user()->tokens->each(function ($token, $key) {
                $token->delete();
            });

            return response()->json([
                'message' => 'Password changed successfully',
                'status' => true
            ]);
        } else {
            return response()->json([
                'message' => 'Password and confirm Password should be same',
                'status' => false
            ]);
        }
    }

    public function logout()
    {
        $logout = Auth::user()->tokens->each(function ($token, $key) {
            $token->delete();
        });

        return response()->json([
            'message' => 'Successfully Logout',
            'status' => true
        ]);
    }
}
