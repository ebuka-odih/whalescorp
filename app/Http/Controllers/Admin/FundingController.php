<?php

namespace App\Http\Controllers\Admin;

use App\Funding;
use App\Http\Controllers\Controller;
use App\Mail\FundingMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FundingController extends Controller
{
    public function fund()
    {
        $users = User::where('admin', 0)->get();
        return view('admin.user.add-fund', compact('users'));
    }
    public function sendFund(Request $request)
    {
        $data = $this->getData($request);
        $data['user_id'] = $request->user_id;
        $data['status'] = 1;
        $data = Funding::create($data);
        if ($data['type'] == 'Referral-Bonus'){
            $user = User::findOrFail($data->user_id);
            $user->ref_bonus += $request->amount;
            $user->balance += $request->amount;
            $user->save();
        }elseif($data['type'] == 'Loss'){
            $user = User::findOrFail($data->user_id);
            $user->balance -= $request->amount;
            $user->save();
        }
        $user = User::findOrFail($data->user_id);
        $user->balance += $request->amount;
        $user->profit += $request->amount;
        $user->save();
        Mail::to($data->user->email)->send(new FundingMail($data));
        return redirect()->back()->with('success', "Fund sent successfully");
    }

    protected function getData(Request $request)
    {
        $rules = [
            'type' => 'required',
            'amount' => 'required',
        ];
        return $request->validate($rules);
    }

    public function defund()
    {
        $users = User::where('admin', 0)->get();
        return view('admin.user.defund', compact('users'));
    }
    public function sendDefund(Request $request)
    {
        $data = $this->getData($request);
        $data['user_id'] = $request->user_id;
        $data['status'] = 1;
        $data = Funding::create($data);
        if ($data['type'] == 'Referral-Bonus'){
            $user = User::findOrFail($data->user_id);
            $user->ref_bonus -= $request->amount;
            $user->balance -= $request->amount;
            $user->save();
        }
        $user = User::findOrFail($data->user_id);
        $user->balance -= $request->amount;
        $user->profit -= $request->amount;
        $user->save();
        return redirect()->back()->with('debit', "Account debited successfully");
    }

}
