@extends('layout.desktop')
@section('title')
	<title>{{ $data['term']->term_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
<meta id="metaDescription" name="description" content="{{ $data['term']->term_name }}">
<meta id="metaKeywords" name="keywords" content="{{ $data['term']->term_keyword }}">
@endsection('keyword')
@section('css')
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-thietbi.css') }}">
@endsection('css')
@section('js')
<script type="text/javascript" src="{{ asset('public/js/global/MSClass.js') }}"></script>
@endsection('js')
@section('content')
<div class="banner">
	<div class="container">
		<div class="search">
			<div class="clearfix">
				<div class="pull-left">
					<a href="{{ url('/') }}"><i class="fa fa-home"></i> Trang chủ ></a>
					<a href="{{ MyAPI::getUrlTerm($data['term']->id) }}">{{ $data['term']->term_name }}</a>
				</div>
				<div class="pull-right">
					<form action="">
						<button><i class="fa fa-search"></i></button>
						<input type="text" placeholder="Nhập nội dung">
						<button type="submit">Tìm kiếm</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<main class="container term">
	<div class="flex flex0 justify-content-between">
		<div class="flex0col1">
			<h1 class="text-uppercase"><i></i> {{ $data['term']->term_name }}</h1>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3>
						<a href="{{ MyAPI::getUrlTerm($data['term']->id) }}">
							@if($data['term']->term_avatar)
								<img src="{{ asset('public/img/'.$data['term']->term_avatar) }}" class="center-block">
							@else
								<img src="{{ asset('public/images/desktop/term-3.png') }}" class="center-block">
							@endif
						</a>
					</h3>
				</div>
				<div class="flex1col2">
					<h4>Bài xem nhiều</h4>
					<ul>
						<li><h5><a href="#"><i>1</i> Bài viết về bệnh xem nhiều.</a></h5></li>
						<li><h5><a href="#"><i>2</i> Bài viết về bệnh xem nhiều.</a></h5></li>
						<li><h5><a href="#"><i>3</i> Bài viết về bệnh xem nhiều.</a></h5></li>
						<li><h5><a href="#"><i class="active">4</i> Bài viết về bệnh xem nhiều.</a></h5></li>
						<li><h5><a href="#"><i class="active">5</i> Bài viết về bệnh xem nhiều.</a></h5></li>
					</ul>
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a></div>
						<div class="flex2col1"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia giải đáp</a></div>
						<div class="flex2col1"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Hẹn khám qua mạng</a></div>
					</div>
				</div>
			</div>
			<div class="posts">
				<div class="post">
					<div class="clearfix">
						<div class="pull-left">
							<h3><a href="">Bài viết về bệnh trong mục tên bệnh</a></h3>
						</div>	
					</div>
					<p>
						Mô tả bệnh , đoạn mô tả bệnh trong bài viết trong mục tên bệnh một đoạn mô tả gồm khoảng 20 đến 30 từ liên quan tóm tắt về nội dung bài viết. đoạn tóm tắt về nội dung bài viết. đoạn tóm tắt về nội dung bài viết.đoạn tóm tắt về nội dung bài viết.
						<a href="#">Chi tiết</a>
					</p>
				</div>
				<div class="post">
					<div class="clearfix">
						<div class="pull-left">
							<h3><a href="">Bài viết về bệnh trong mục tên bệnh</a></h3>
						</div>	
					</div>
					<p>
						Mô tả bệnh , đoạn mô tả bệnh trong bài viết trong mục tên bệnh một đoạn mô tả gồm khoảng 20 đến 30 từ liên quan tóm tắt về nội dung bài viết. đoạn tóm tắt về nội dung bài viết.đoạn tóm tắt về nội dung bài viết.đoạn tóm tắt về nội dung bài viết.
						<a href="#">Chi tiết</a>
					</p>
				</div>
				<div class="post">
					<div class="clearfix">
						<div class="pull-left">
							<h3><a href="">Bài viết về bệnh trong mục tên bệnh</a></h3>
						</div>	
					</div>
					<p>
						Mô tả bệnh , đoạn mô tả bệnh trong bài viết trong mục tên bệnh một đoạn mô tả gồm khoảng 20 đến 30 từ liên quan tóm tắt về nội dung bài viết. đoạn tóm tắt về nội dung bài viết.đoạn tóm tắt về nội dung bài viết.đoạn tóm tắt về nội dung bài viết.
						<a href="#">Chi tiết</a>
					</p>
				</div>
			</div>
		</div>
		<div class="flex0col2">
			@include('web.desktop.slidebar')
		</div>
	</div>
</main>
@endsection('content')