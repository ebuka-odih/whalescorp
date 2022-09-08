<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function users()
    {
        $users = User::where('admin', 0)->latest()->paginate(10);
        return view('admin.user.list', compact('users'));
    }

    public function userDetails($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.personal', compact('user'));
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }

    public function wallet()
    {
        return view('admin.user.wallet');
    }

    public function storeWallet(Request $request){
        setting($request->except('_token'))->save();
        return redirect()->back()->with('success', 'Settings updated successfully');
    }

    public function suspend($id)
    {
        $user = User::findOrFail($id);
        $user->status = 0;
        $user->save();
        return redirect()->back()->with('suspend', "Account Has Been Suspended");
    }
    public function unsuspend($id)
    {
        $user = User::findOrFail($id);
        $user->status = 1;
        $user->save();
        return redirect()->back()->with('unsuspend', "Account Has Been Unsuspended");
    }
}
