@extends('layout.desktop')
@section('title')
	<title>{{ $data['post']->post_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
@if($data['post']->post_avatar)
<meta property="og:image" content="{{ asset('public/img/'.$data['post']->post_avatar) }}">
@else
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
@endif
<meta id="metaDescription" name="description" content="{{ $data['post']->post_description }}">
<meta id="metaKeywords" name="keywords" content="{{ $data['post']->post_keyword }}">
@endsection('keyword')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-post.css') }}">
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
					@php 
						$term = $data['post']->term;
					@endphp
					<a href="{{ MyAPI::getUrlTerm($term->id) }}">{{ $term->term_name }}</a>
				</div>
				<div class="pull-right">
					<form action="" method="post">
						<button><i class="fa fa-search"></i></button>
						<input type="text" placeholder="Nhập nội dung">
						<button type="submit">Tìm kiếm</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<main class="container term post">
	<div class="flex flex0 justify-content-between">
		<div class="flex0col1">
			<h1 class="text-uppercase"><i></i> {{ $data['post']->post_name }}</h1>
			<div class="post-description">
				<p>{{ $data['post']->post_description }}</p>
			</div>
			<div class="post-detail">
				{!! $data['post']->post_detail !!}
			</div>
			<div class="post-footer">
				<div class="order1">
					<p class="text-justify">
						<span>Cảnh báo:</span> Nếu muốn chữa khỏi bệnh, đầu tiên bệnh nhân cần xây dựng lòng tin có thể hồi phục, sau đó tích cực phối hợp với bác sĩ điều trị, nghiêm ngặt tuân theo yêu cầu của bác sĩ, có như vậy mới có thể hồi phục càng nhanh, bệnh nhân nếu như có gì bất thường thì cần phải đến bệnh viện kiểm tra thăm khám, vì bệnh tật sẽ không tự khỏi khi bạn kéo dài thời gian, nhưng chắc chắn do điều trị không kịp thời mà bệnh càng nặng lên, vì thế kịp thời đi khám, kiểm tra sớm, điều trị sớm mới là tốt.
					</p>
				</div>
				<div class="order2">
					<h3>Tình trạng hiện tại của bạn là gì?</h3>
					<div class="flex flex1 flex-wrap-wrap">
						<div class="flex1col1 flex justify-content-center align-items-center" onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<h4 class="text-center"><i class="bg bg1"></i></h4>
								<h5 class="text-center">Xuất hiện triệu chứng</h5>
								<h6 class="text-center">Tìm phương pháp giải quyết phiền phức</h6>
								<h6 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></h6>
							</div>
						</div>
						<div class="flex1col1 flex justify-content-center align-items-center active"  onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<h4 class="text-center"><i class="bg bg2"></i></h4>
								<h5 class="text-center">Muốn đến thăm khám</h5>
								<h6 class="text-center">Hi vọng tìm được nguyên nhân gây bệnh</h6>
								<h6 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></h6>
							</div>
						</div>
						<div class="flex1col1 flex justify-content-center align-items-center"  onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<h4 class="text-center"><i class="bg bg3"></i></h4>
								<h5 class="text-center">Đã được chẩn đoán</h5>
								<h6 class="text-center">Tìm phương án điều trị nhanh, chính xác</h6>
								<h6 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></h6>
							</div>
						</div>
						<div class="flex1col1 flex justify-content-center align-items-center"  onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<h4 class="text-center"><i class="bg bg4"></i></h4>
								<h5 class="text-center">Tìm hiểu chi phí</h5>
								<h6 class="text-center">Muốn tìm hiểu chi phí để yên tâm điều trị</h6>
								<h6 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></h6>
							</div>
						</div>
						<div class="flex1col1 flex justify-content-center align-items-center"  onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<h4 class="text-center"><i class="bg bg5"></i></h4>
								<h5 class="text-center">Tư vấn tham khảo</h5>
								<h6 class="text-center">Trao đổi trực tuyến riêng với bác sĩ nam khoa</h6>
								<h6 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></h6>
							</div>
						</div>
						<div class="flex1col1 flex justify-content-center align-items-center"  onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<h4 class="text-center"><i class="bg bg6"></i></h4>
								<h5 class="text-center">Xếp số khám ngay</h5>
								<h6 class="text-center">Hưởng dịch vụ an toàn đơn giản không cần xếp hàng</h6>
								<h6 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="post-related">
				<div class="flex justify-content-between flex2">
					<div class="flex2col1">
						<ul>
							<li><h5><i class="fa fa-circle" aria-hidden="true"></i><a href="">Bài viết bệnh trong mục bài trước</a></h5></li>
							<li><h5><i class="fa fa-circle" aria-hidden="true"></i><a href="">Bài viết bệnh trong mục bài trước</a></h5></li>
							<li><h5><i class="fa fa-circle" aria-hidden="true"></i><a href="">Bài viết bệnh trong mục bài trước</a></h5></li>
						</ul>
					</div>
					<div class="flex2col1">
						<ul>
							<li><h5><i class="fa fa-circle" aria-hidden="true"></i><a href="">Bài viết bệnh trong mục bài sau</a></h5></li>
							<li><h5><i class="fa fa-circle" aria-hidden="true"></i><a href="">Bài viết bệnh trong mục bài sau</a></h5></li>
							<li><h5><i class="fa fa-circle" aria-hidden="true"></i><a href="">Bài viết bệnh trong mục bài sau</a></h5></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="post-number">
				<h4>Hôm nay đã có</h4>
				<div>
					<div class="flex flex3 justify-content-between">
						<div class="flex3col1">
							<p>
								<span>2</span>
								<span>3</span>
								<span>8</span>
								người đặt hẹn
							</p>
						</div>
						<div class="flex3col2">
							<div class="flex">
								<div class="flex4col1">
									<form method="post">
										<input type="text" name="" placeholder="Nhập triệu chứng của bạn để được tư vấn">
									</form>
								</div>
								<div class="flex4col2 flex justify-content-center align-items-center">
									<div>
										<h3 class="text-center">
											<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/icon-13.png') }}" class="center-block"></a>
										</h3>
										<h4 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="flex0col2">
			@include('web.desktop.slidebar')
		</div>
	</div>
</main>
@endsection('content')