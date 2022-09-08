<?php

namespace App\Http\Controllers\Admin;

use App\Deposit;
use App\Http\Controllers\Controller;
use App\Mail\ApproveDeposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminDeposit extends Controller
{

    public function deposits()
    {
        $deposits = Deposit::all();
        return view('admin.transactions.deposits', compact('deposits'));
    }

    public function view_deposit($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('admin.transactions.deposit-details', compact('deposit'));
    }

    public function approve_deposit($id)
    {
        $deposit = Deposit::findOrFail($id);
        $user = \App\User::findOrFail($deposit->user_id);
        $user->balance += $deposit->amount;
        $user->save();
        $deposit->status = 1;
        $deposit->save();
        Mail::to($user->email)->send(new ApproveDeposit($deposit));
        return redirect()->back()->with('success', "Deposit approved successfully");
    }

    public function deleteDeposit($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->delete();
        return redirect()->back();
    }
}
