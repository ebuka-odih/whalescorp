<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{

    public function index()
    {
        return view('admin.wallets');
    }


    public function create()
    {
        $wallets = PaymentMethod::all();
        return view('admin.add-wallet', compact('wallets'));
    }


    public function store(Request $request)
    {
        $data = $this->getData($request);
        PaymentMethod::create($data);
        return redirect()->back()->with('success', "Wallet Created Successfully");
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $wallet = PaymentMethod::findOrFail($id);
        return view('admin.edit-wallet', compact('wallet'));
    }


    public function update(Request $request, $id)
    {
        $wallet = PaymentMethod::findOrFail($id);
        $data = $this->getData($request);
        $wallet->update($data);
        return redirect()->route('admin.wallet.create');

    }


    public function destroy($id)
    {
        $wallet = PaymentMethod::findOrFail($id);
        $wallet->delete();
        return redirect()->back();
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'value' => 'required',
        ];
        return $request->validate($rules);
    }

}
