<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;

class contactcontroller extends Controller
{
    //
    public  function emailget(){
	    return view('/mail');
	        }
    //create new function to send HTML email
    public  function emailpost(Request $request){

    	$this->validate($request,[
    		'email'=>'required|email',
    		'sender'=>'required',
            'title'=>'required',
            'description'=>'required',
            ]);


    		$data=array(
    				'email' => $request->email,
    				'sender' => $request->sender,
    				'title'=> $request->title,
    				'description' => $request->description
    			);
    	Mail::send(['html'=>'email.contact'],$data,function($message) use ($data){
    		$message->from($data['email']);
    		$message->to('dannienctu@gmail.com');
    		$message->subject($data['title']);
    		
    	});
    	return view('/Blog');
	}
	

	/*public  function attachment_email(){
    	$data=['name'=>'dannie'];
    	Mail::send(['text'=>'mail'],$data,function($message){
    		$message->to('dannienctu@gmail.com','DANNIE')->subject('from laravel with picture');
    		// image file
    		$message->attach('email/email.png');
    		$message->from('dannienctu@gmail.com','dannie');
    	});
    	echo 'attachment email was sent!';

	}*/
}
