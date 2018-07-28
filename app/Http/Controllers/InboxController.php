<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Message ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session ;
use Illuminate\Support\Facades\Redirect ;

class InboxController extends BaseController
{


    public function inbox()
    {
        $messages = Message::orderBy('id','DESC')->get();
        return view('dashboard.inbox.inbox')->with([
            'messages' => $messages,
            'read' => count($messages->where('read_by_receiver', 1)),
            'unread' => count($messages->where('read_by_receiver', 0)),
            'title' => __('inbox.inbox'),
            'active' => 'inbox'
        ]);
    }

    public function inboxDetail($id)
    {
        $messages  = Message::all();

        $message = Message::find($id);
        if($message->from == User::adminEmail()){
            $message->read_by_sender = 1;

        }else{
            $message->read_by_receiver = 1;
        }

        $message->save();
        return view('dashboard.inbox.detail')->with([
            'message' => $message,
            'title' => $message->subject,
            'active' => 'inbox',
            'read' => count($messages->where('read_by_receiver', 1)),
            'unread' => count($messages->where('read_by_receiver', 0)),
        ]);
    }

    public function compose()
    {
        return view('dashboard.inbox.compose')->with([
            'title' => __('inbox.compose'),
            'active' => 'inbox'
        ]);
    }

    public function replyMessage(Request $request)
    {
        $message=Message::create([
            'message' => $request->get('message'),
            'from' => User::adminEmail(),
            'subject' => $request->get('subject'),
            'to' => $request->get('to') ,
            'read_by_sender '=>1
        ]);
        Session::Flash('success','Operation terminee avec success');

        return redirect()->back();
    }

    public function sendMessage(Request $request)
    {


        $message=Message::create([
            'message' => $request->get('message'),
            'sender' => User::adminEmail() ,
            'subject' => $request->get('subject'),
            'from' => $request->get('from') ,
            'to' => User::adminEmail() ,
            'read_by_sender' => 1
        ]);
        Session::Flash('success','Operation terminee avec success');

        return redirect()->back();
    }

    public function reply(Request $request)
    {
//        $email = $request->get('email');
//        $subject = $request->get('subject');
//        Mail::send('dashboard.mail.reply', ['reply' => $request->get('message')], function ($message) use ($email, $subject) {
//            $message->to($email)
//                ->subject($subject);
//            $message->from('istikdam@gmail.com', $subject);
//        });


        return redirect()->back();
    }
}
