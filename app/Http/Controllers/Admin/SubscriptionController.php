<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        $packages = Subscription::all();
        return view('admin.sub.list', compact('packages'));
    }

    public function create()
    {
        $packages = Subscription::all();
        return view('admin.sub.create', compact('packages'));
    }


    public function store(Request $request)
    {
        $data = $this->getData($request);
        Subscription::create($data);
        return redirect()->back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $package = Subscription::findOrFail($id);
        return view('admin.sub.edit', compact('package'));
    }


    public function update(Request $request, $id)
    {
        $package = Subscription::findOrFail($id);
        $data = $this->getData($request);
        $package->update($data);
        return redirect()->route('admin.package.index');
    }


    public function destroy($id)
    {
        $package = Subscription::findOrFail($id);
        $package->delete();
        return redirect()->back();
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'amount' => 'required',
            'term_days' => 'required',
            'total_return' => 'required',
        ];
        return $request->validate($rules);
    }
}
