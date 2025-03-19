<?php

namespace App\Http\Controllers;

//use App\Services\OrderService;
use App\Models\Deposit;
use App\Models\DepositPeriod;
use App\Models\RazorpayTransaction;
use App\Models\TransactionDetail;
use App\Models\TransactionHistory;
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
        try {
            $id = decrypt($id);
            TransactionHistory::where('deposit_id', $id)->delete();
            TransactionDetail::where('deposit_id', $id)->delete();
            RazorpayTransaction::where('deposit_id', $id)->delete();
            DepositPeriod::where('deposit_id', $id)->delete();
            Deposit::findOrFail($id)->delete();

            return redirect()->route('deposits.index')->with('success', 'Transaction deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('deposits.index')->with('error', $e->getMessage());
        }
    }
}
