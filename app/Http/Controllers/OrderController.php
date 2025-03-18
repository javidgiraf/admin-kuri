<?php

namespace App\Http\Controllers;

//use App\Services\OrderService;
use App\Models\Deposit;
use App\Models\DepositPeriod;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {

        return view('orders.index');
    }

    public function destory($id)
    {
        $id = decrypt($id);
        DepositPeriod::where('deposit_id', $id)->delete();
        Deposit::findOrFail($id)->delete();

        return redirect()->route('deposits.index')->with('success', 'Deposit deleted successfully');
    }
}
