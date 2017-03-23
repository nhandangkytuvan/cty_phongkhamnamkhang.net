@extends('layout.desktop')
@section('title')
	<title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
<meta id="metaDescription" name="description" content="{{ $setting->web_description }}">
<meta id="metaKeywords" name="keywords" content="{{ $setting->web_keyword }}">
@endsection('keyword')
@section('css')
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-about.css') }}">
@endsection('css')
@section('content')
	<main class="about">
		<div class="row1">
			<div><img src="{{ asset('public/images/desktop/about-1.png') }}" class="center-block img-responsive"></div>
		</div>
		<div class="row2">
			<div><img src="{{ asset('public/images/desktop/about-2-1.png') }}" class="center-block img-responsive"></div>
		</div>
		<div class="row3">
			<div><img src="{{ asset('public/images/desktop/about-3-1.png') }}" class="center-block img-responsive"></div>
		</div>
		<div class="row4">
			<div><img src="{{ asset('public/images/desktop/about-4-1.png') }}" class="center-block img-responsive"></div>
		</div>
		<div class="row5">
			<div><img src="{{ asset('public/images/desktop/about-5-1.png') }}" class="center-block img-responsive"></div>
		</div>
		<div class="row6">
			<div><img src="{{ asset('public/images/desktop/about-6-1.png') }}" class="center-block img-responsive"></div>
		</div>
		<div class="row7">
			<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/about-7-1.png') }}" class="center-block img-responsive"></a></div>
		</div>
	</main>
@endsection('content')