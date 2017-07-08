<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Term;
//use App\Events\VisitTermEvent;
use BrowserDetect;
class TermController extends Controller{
    public $term = null;
    public $term_parent = null;
    public $term_childs = null;
    public $post_views = null;
    public $post_terms = null;

    public function show($term_alias,$term_id,Request $request){
        $term = Term::find($term_id);
        //check term exit
        if(!$term){
            return redirect('/');
        }
        // -----------
        //event(new VisitTermEvent($term));
        // -----------
        if(BrowserDetect::isDesktop()){
            switch ($term_id) {
                case 33:
                    $data['term'] = $term;
                    return view('web.desktop.thietbi',['data'=>$data]); 
                    break;
                case 32:
                    $post_terms = $term ? $term->post()->paginate(7) : null;
                    $data['post_terms'] = $post_terms;
                    $data['term'] = $term;
                    return view('web.desktop.kythuat',['data'=>$data]); 
                    break;
                case 34:
                    $data['term'] = $term;
                    return view('web.desktop.hoiphuc',['data'=>$data]); 
                    break;
                default:
                    $post_views = $term ? $term->post()->orderBy('id','desc')->limit(5)->get() : null;
                    $post_terms = $term ? $term->post()->paginate(7) : null;
                    $data['term'] = $term;
                    $data['post_views'] = $post_views;
                    $data['post_terms'] = $post_terms;
                    return view('web.desktop.term',['data'=>$data]); 
                    break;
            }
        }else{
            switch ($term_id) {
                default:
                    $term_parent = $term ? $term->parent : null;
                    $term_childs = $term_parent ? $term_parent->children : null;
                    $post_terms = $term ? $term->post()->paginate(6) : null;
                    $data['term'] = $term;
                    $data['term_parent'] = $term_parent;
                    $data['term_childs'] = $term_childs;
                    $data['post_terms'] = $post_terms;
                    return view('web.mobile.term',['data'=>$data]);  
                    break;
            }
        }
    }
}