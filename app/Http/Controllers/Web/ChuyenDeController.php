<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use BrowserDetect;
class ChuyenDeController extends Controller{
	public function viemtuyentienliet(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.chuyende.viemtuyentienliet');
		}else{
			//return view('web.mobile.home');
		}
	}
}