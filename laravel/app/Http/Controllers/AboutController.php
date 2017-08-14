<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Message;

class AboutController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required'
        ]) ;
        //create New Message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->comment = $request->input('comment');
        //save message
        $message->save();
        //redirect
        return redirect('/home')->with('success','Message Sent ');
    }

    public function getMessages()
    {
        $messages = Message::all();
        return view ('messages')->width('messages',$messages);
    }
}
