<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMessageController extends Controller
{
    public function messages()
    {
        $messages = Message::all();
        $users = User::where('admin', 0)->get();
        return view('admin.message.create', compact('messages', 'users'));
    }

    public function sendMessage(Request $request)
    {
        $message = new Message();
        $message->user_id = $request->user_id;
        $message->message = $request->message;
        $message->save();
        return redirect()->back()->with('success', "Message Sent Successfully");

    }

    public function editMessage($id)
    {
        $message = Message::findOrFail($id);
        $users = User::where('admin', 0)->get();
        return view('admin.message.edit-message', compact('message', 'users'));
    }
    public function updateMessage(Request $request, $id)
    {
        $message = Message::findOrFail($id);
        $message->update(['user_id' => $request->user_id, 'message'=> $request->message]);
        return redirect()->route('admin.sendMessage')->with('update', "Message Updated Successfully");
    }
}
