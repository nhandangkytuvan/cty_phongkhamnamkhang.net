<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Setting;
use App\Events\ViewSumEvent;
use App\Events\ViewPostEvent;
use Session;
use BrowserDetect;
class PostController extends Controller{
    public function show($post_alias,$post_id,Request $request){
    	$setting = Setting::first();
        if(!Session::has('user')){
            event(new ViewSumEvent($setting));
        }
    	$post = Post::find($post_id);
        if(!$post){
            return redirect('/');
        }
        // --------------
        event(new ViewPostEvent($post));
        // ------------
        $data['post'] = $post;
        if(BrowserDetect::isDesktop()){
        	return view('web.desktop.post',['data'=>$data]); 
        }else{
        	return view('web.mobile.post',['data'=>$data]); 
        }
    }
}