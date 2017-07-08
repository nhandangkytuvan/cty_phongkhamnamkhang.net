<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
//use App\Setting;
// App\Events\VisitSumEvent;
//use App\Events\VisitPostEvent;
use BrowserDetect;
class PostController extends Controller{
    public $post = null;
    public $post_pre = null;
    public $post_next = null;
    public $post_lienquans = null;
    public $term = null;

    public function show($post_alias,$post_id,Request $request){
    	//$setting = Setting::first();
        //event(new VisitSumEvent($setting));
    	$post = Post::find($post_id);
        $term = $post->term;
        // check exit post
        if(!$post){
            return redirect('/');
        }
        // --------------
        //event(new VisitPostEvent($post));
        // ------------
        
        if(BrowserDetect::isDesktop()){
            $post_pre = $term ? $term->post()->where('id','<',$post->id)->orderBy('id','desc')->first() : null;    
            $post_next = $term ? $term->post()->where('id','>',$post->id)->orderBy('id','asc')->first() : null;
            $post_lienquans = $term ? $term->post()->where('id','<>',$post->id)->limit(6)->get() : null;
            $data['post'] = $post;
            $data['term'] = $term;
            $data['post_pre'] = $post_pre;
            $data['post_next'] = $post_next;
            $data['post_lienquans'] = $post_lienquans;
        	return view('web.desktop.post',['data'=>$data]); 
        }else{
            $post_lienquans = $term ? $term->post()->where('id','<>',$post->id)->limit(6)->get() : null;
            $data['post'] = $post;
            $data['term'] = $term;
            $data['post_lienquans'] = $post_lienquans;
        	return view('web.mobile.post',['data'=>$data]); 
        }
    }
}