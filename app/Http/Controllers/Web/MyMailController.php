<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
class MyMailController extends Controller
{
    public function sendmail(Request $request){
    	Mail::send('emails.send',['request'=>$request], function ($message)
		{
		    $message->from('nhandangkytuvan@gmail.com', 'PK Nam Khang');
		    $message->to('phongkhamnamkhang193@gmail.com');
		    $message->subject('Người dùng đăng ký khám');
		});
		return 1;
    }
}