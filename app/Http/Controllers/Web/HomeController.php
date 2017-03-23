<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use BrowserDetect;
class HomeController extends Controller{
	public function show(Request $request){
		$setting = Setting::first();
		$data['request'] = $request;
		$data['home'] = true;
		$data['setting'] = $setting;
		if(BrowserDetect::isDesktop()){
			return view('web.desktop.home',['data'=>$data]);
		}else{
			return view('web.mobile.home',['data'=>$data]);
		}
	}
	public function about(Request $request){
		$setting = Setting::first();
		$data['setting'] = $setting;
		if(BrowserDetect::isDesktop()){
			return view('web.desktop.about',['data'=>$data]);
		}else{
			return view('web.mobile.about',['data'=>$data]);
		}
	}
	public function address(Request $request){
		$setting = Setting::first();
		$data['setting'] = $setting;
		if(BrowserDetect::isDesktop()){
			return view('web.desktop.address',['data'=>$data]);
		}else{
			return view('web.mobile.address',['data'=>$data]);
		}
	}
}