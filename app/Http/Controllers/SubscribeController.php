<?php

namespace App\Http\Controllers;

use App\Subscribe;
use App\Subscription;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function plans()
    {
        $plans = Subscription::all();
        return view('dashboard.subscription.plans', compact('plans'));
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'amount' => 'required'
        ]);
        $sub_id = $request->subscription_id;
        $sub_plan = Subscription::findOrFail($sub_id);
        $sub = new Subscribe();
        if ($request->amount > \auth()->user()->balance){
            return redirect()->back()->with('insufficient', "Insufficient balance! proceed to make deposit");
        }else{

            if ($request->amount < $sub_plan->amount){
                return redirect()->back()->with('declined', "Amount entered is less than the minimum amount");
            }
            $sub->amount = $request->amount;
            $sub->user_id = Auth::id();
            $sub->subscription_id = $request->subscription_id;
            $sub->status = 1;
            $sub->save();
            return redirect()->route('user.Subsuccess', $sub->id);
        }

    }

    public function Subsuccess($id)
    {
        return view('dashboard.subscription.success');
    }

    public function history()
    {
        $sub = Subscribe::whereUserId(\auth()->id())->get();
        return view('dashboard.subscription.history', compact('sub'));
    }

    public function details($id){
        $sub = Subscribe::findOrFail($id);
        $user = User::findOrFail($sub->user_id);
        return view('dashboard.subscription.details', compact('user', 'sub'));
    }
}
