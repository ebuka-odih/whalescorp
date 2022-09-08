<?php

namespace App\Http\Controllers;

use App\WithdrawMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawMethodController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
       $wallets = WithdrawMethod::whereUserId(\auth()->id())->get();
       return view('dashboard.user.account', compact('wallets'));
    }

//    public function account()
//    {
//        return view('dashboard.user.account');
//    }



    public function store(Request $request)
    {
        $data = $this->getBTCData($request);
        $data['user_id'] = Auth::id();
        WithdrawMethod::create($data);
        return redirect()->back();
    }

    protected function getBTCData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'value' => 'nullable',
        ];
        return $request->validate($rules);
    }
    public function show(WithdrawMethod $withdrawMethod)
    {
        //
    }


    public function edit(WithdrawMethod $withdrawMethod)
    {
        //
    }


    public function update(Request $request, WithdrawMethod $withdrawMethod)
    {
        //
    }


    public function deleteWallet($id)
    {
        $wallet = WithdrawMethod::findOrFail($id);
        $wallet->delete();
        return redirect()->back();
    }
}
