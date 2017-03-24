@extends('layout.mobile')
@section('title')
    <title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
<meta id="metaDescription" name="description" content="{{ $setting->web_description }}">
<meta id="metaKeywords" name="keywords" content="{{ $setting->web_keyword }}">
@endsection('keyword')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-home.css') }}">
@endsection('css')
@section('content')
	<main class="container home">
		<div class="row1">
			<div class="headding">
				<h2 class="text-center text-uppercase">Danh mục bệnh</h2>
			</div>
			<div class="flex flex1 justify-content-around">
				<div class="flex flex1col1 order1 arrow_box align-items-center justify-content-center">
					<div class="box-center">
						<h3 class="text-center text-uppercase">Rối loạn chức năng sinh dục</h3>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(8) }}">Liệt dương</a></h4>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(9) }}">Rối loạn cương dương</a></h4>
						</div>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(10) }}">Xuất tinh sớm</a></h4>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(11) }}">Rối loạn xuất tinh</a></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="flex flex1 justify-content-around">
				<div class="flex flex1col1 order1 arrow_box align-items-center justify-content-center">
					<div class="box-center">
						<h3 class="text-center text-uppercase">Chỉnh hình cơ quan sinh dục</h3>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(13) }}">Dài bao quy đầu</a></h4>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(15) }}">Thủ thuật hẹp bao quy đầu</a></h4>
						</div>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(14) }}">Kéo dài dương vật</a></h4>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(16) }}">Tăng kích cỡ dương vật</a></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="flex flex1 justify-content-around">
				<div class="flex flex1col1 order1 arrow_box align-items-center justify-content-center">
					<div class="box-center">
						<h3 class="text-center text-uppercase">Bệnh về tuyến tiền liệt</h3>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(3) }}">Viêm tuyến tiền liệt</a></h4>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(6) }}">Phì đại tuyến tiền liệt</a></h4>
						</div>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(5) }}">Tăng sinh tuyến tiền liệt</a></h4>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(4) }}">U nang tuyến tiền liệt</a></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="flex flex1 justify-content-around">
				<div class="flex flex1col1 order1 arrow_box align-items-center justify-content-center">
					<div class="box-center">
						<h3 class="text-center text-uppercase">Viêm nhiễm bộ phận sinh dục</h3>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(18) }}">Viêm quy đầu</a></h4>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(19) }}">Viêm bàng quang</a></h4>
						</div>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(20) }}">Viêm niệu đạo</a></h4>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(21) }}">Viêm tinh hoàn</a></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="flex flex1 justify-content-around">
				<div class="flex flex1col1 order1 arrow_box align-items-center justify-content-center">
					<div class="box-center">
						<h3 class="text-center text-uppercase">Vô sinh nam</h3>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(23) }}">Ít tinh trùng</a></h4>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(24) }}">Xuất tinh ra máu</a></h4>
						</div>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(25) }}">Vô tinh</a></h4>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(26) }}">Tinh trùng yếu</a></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="flex flex1 justify-content-around">
				<div class="flex flex1col1 order1 arrow_box align-items-center justify-content-center">
					<div class="box-center">
						<h3 class="text-center text-uppercase">Bệnh lây truyền qua đường tình dục</h3>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(28) }}">Sùi mào gà</a></h4>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(29) }}">Giang mai</a></h4>
						</div>
					</div>
				</div>
				<div class="flex1col1 order2 flex flex-wrap-wrap align-content-between">
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(30) }}">Bệnh lậu</a></h4>
						</div>
					</div>
					<div class="flex align-items-center justify-content-center">
						<div class="box-center">
							<h4 class="text-center"><a href="{{ MyAPI::getUrlTerm(31) }}">Mụn rộp sinh dục</a></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row2">
			<h3><a href=""><img src="{{ asset('public/images/mobile/home-1.png') }}" class="center-block img-responsive"></a></h3>
		</div>
		<div class="row3">
			<div class="headding">
				<h2 class="text-center text-uppercase">Phương pháp điều trị của Nam Khang</h2>
			</div>
			<div class="flex flex1">
				<div class="flex flex1col1 active">
					<div class="box-center">
						<h3 class="text-center text-uppercase"><a href="javascript:;">xuất tinh sớm</a></h3>
						<h5 class="text-center"><a href="javascript:;">Thời gian quan hệ ngắn</a></h5>
					</div>
				</div>
				<div class="flex flex1col1">
					<div class="box-center">
						<h3 class="text-center text-uppercase"><a href="javascript:;">Cắt bao quy đầu</a></h3>
						<h5 class="text-center"><a href="javascript:;">Dài bao quy đầu</a></h5>
					</div>
				</div>
				<div class="flex flex1col1">
					<div class="box-center">
						<h3 class="text-center text-uppercase"><a href="javascript:;">Liệt dương</a></h3>
						<h5 class="text-center"><a href="javascript:;">Dương vật không đủ cương cứng</a></h5>
					</div>
				</div>
				<div class="flex flex1col1">
					<div class="box-center">
						<h3 class="text-center text-uppercase"><a href="javascript:;">Viêm tuyến tiền liệt</a></h3>
						<h5 class="text-center"><a href="javascript:;">Tiểu nhiều, tiểu buốt</a></h5>
					</div>
				</div>
			</div>
			<div class="tab-contents-1">
				<div class="active">
					<h4><a href=""><img src="{{ asset('public/images/mobile/home-2.png') }}" class="img-responsive center-block"></a></h4>
				</div>
				<div>
					<h4><a href=""><img src="{{ asset('public/images/mobile/home-3.png') }}" class="img-responsive center-block"></a></h4>
				</div>
				<div>
					<h4><a href=""><img src="{{ asset('public/images/mobile/home-4.png') }}" class="img-responsive center-block"></a></h4>
				</div>
				<div>
					<h4><a href=""><img src="{{ asset('public/images/mobile/home-5.png') }}" class="img-responsive center-block"></a></h4>
				</div>
			</div>
		</div>
		<div class="row4">
			<div class="headding">
				<h2 class="text-center text-uppercase">Khám nam khoa chọn Phòng khám Nam Khang Hà Nội</h2>
				<h3 class="text-center">Chuyên chữa bệnh nam khoa khó điều trị, tái phát nhiều lần</h3>
			</div>
			<div class="flex flex1 flex-wrap-wrap">
				<div class="flex1col1 flex">
					<div class="box-center">
						<h3>Nhiều năm</h3>
						<h4>Thương hiệu chuyên nghiệp tại Hà Nội</h4>
					</div>
				</div>
				<div class="flex1col1 flex">
					<div class="box-center">
						<h3>30 năm</h3>
						<h4>Bác sĩ nhiều kinh nghiệm khám và điều trị</h4>
					</div>
				</div>
				<div class="flex1col1 flex">
					<div class="box-center">
						<h3>10 điểm lớn</h3>
						<h4>Hệ thống thăm khám điều trị tiên tiến</h4>
					</div>
				</div>
				<div class="flex1col1 flex">
					<div class="box-center">
						<h3>100%</h3>
						<h4>Cơ chế đảm bảo bảo mật</h4>
					</div>
				</div>
				<div class="flex1col1 flex">
					<div class="box-center">
						<h3>365 ngày</h3>
						<h4>Thăm khám cả năm không nghỉ ngày nào</h4>
					</div>
				</div>
				<div class="flex1col1 flex">
					<div class="box-center">
						<h3>24 giờ</h3>
						<h4>Đặt hẹn tư vấn trực tuyến</h4>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection('content')