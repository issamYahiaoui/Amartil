<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session ;
use Illuminate\Support\Facades\Redirect ;

class InboxController extends BaseController
{


    public function inbox()
    {
        $messages = Message::all()->sortByDesc('created_at');
        return view('dashboard.inbox.inbox')->with([
            'messages' => $messages,
            'read' => count($messages->where('read', 1)),
            'unread' => count($messages->where('read', 0)),
            'title' => __('inbox.inbox'),
            'active' => 'inbox'
        ]);
    }

    public function inboxDetail($id)
    {
        $messages = Message::where('user_id' , Auth::user()->id)->get();
        $message = Message::find($id);
        $message->read = 1;
        $message->save();
        return view('dashboard.inbox.detail')->with([
            'message' => $message,
            'title' => $message->subject,
            'active' => 'inbox',
            'read' => count($messages->where('read', 1)),
            'unread' => count($messages->where('read', 0)),
        ]);
    }

    public function compose()
    {
        return view('dashboard.inbox.compose')->with([
            'title' => __('inbox.compose'),
            'active' => 'inbox'
        ]);
    }

    public function sendMessage(Request $request)
    {
        $user_id = null ;
        if(!$request->get('user_id') === "guest") $user_id = $request->get('user_id') ;
        $message=Message::create([
            'message' => $request->get('message'),
            'sender' => $request->get('sender'),
            'subject' => $request->get('subject'),
            'email' => $request->get('email') ,
            'user_id' => $user_id
        ]);
        Session::Flash('success','Operation terminee avec success');

        return redirect()->back();
    }

    public function reply(Request $request)
    {
        $email = $request->get('email');
        $subject = $request->get('subject');
        Mail::send('dashboard.mail.reply', ['reply' => $request->get('message')], function ($message) use ($email, $subject) {
            $message->to($email)
                ->subject($subject);
            $message->from('istikdam@gmail.com', $subject);
        });


        return redirect()->back();
    }
}
