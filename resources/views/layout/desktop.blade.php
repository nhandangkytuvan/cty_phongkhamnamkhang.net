<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <meta name="author" content="phongkhamnamkhang.net">
    <meta property="og:site_name" content="phongkhamnamkhang.net">
    <meta property="og:type" content="website">
    @yield('keyword')
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting->web_icon) }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-footer.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/desktop/desktop.js') }}"></script>
	@yield('js')
</head>
<body>
    <header>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div class="text-container-center">
						<div>
							<div class="bg"></div>
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/images/desktop/header-1.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="text-container-center">
						<img src="{{ asset('public/images/desktop/header-2.png') }}" alt="">
					</div>
				</div>
				<div class="flex1col1">
					<div class="text-container-center">
						<a href="tel:0911.501.709">
							<img src="{{ asset('public/images/desktop/header-3.png') }}" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
    <menu>
		<div class="container">
			<div class="flex flex1">
				<div class="flex1col1 chidanbenh">
					<h3 class="text-container-center"><a class="text-container-center" href="#">Danh mục bệnh</a></h3>
					<div class="menu-items">
						<div>
							<h4 class="bg bg1"><a href="">Bệnh về tuyến tiền liệt</a></h4>
							<div class="flex flex2 justify-content-between">
								<div class="flex2col1">
									<h5><a href="#">Viêm tuyến tiền liệt</a></h5>
									<h5><a href="#">U nang tuyến tiền liệt</a></h5>
								</div>
								<div class="flex2col1">
									<h5><a href="#">Tăng sinh tuyến tiền liệt</a></h5>
									<h5><a href="#">Phì đại tuyến tiền liệt</a></h5>
								</div>
							</div>
						</div>
						<div>
							<h4 class="bg bg2"><a href="">Rối loạn chức năng sinh dục</a></h4>
							<div class="flex flex2 justify-content-between">
								<div class="flex2col1">
									<h5><a href="#">Liệt dương</a></h5>
									<h5><a href="#">Rối loạn cương dương</a></h5>
								</div>
								<div class="flex2col1">
									<h5><a href="#">Xuất tinh sớm</a></h5>
									<h5><a href="#">Rối loạn xuất tinh</a></h5>
								</div>
							</div>
						</div>
						<div>
							<h4 class="bg bg3"><a href="">Chỉnh hình bộ phận sinh dục</a></h4>
							<div class="flex flex2 justify-content-between">
								<div class="flex2col1">
									<h5><a href="#">Dài bao quy đầu</a></h5>
									<h5><a href="#">Kéo dài dương vật</a></h5>
								</div>
								<div class="flex2col1">
									<h5><a href="#">Thủ thuật hẹp bao quy đầu</a></h5>
									<h5><a href="#">Tăng kích thước dương vật</a></h5>
								</div>
							</div>
						</div>
						<div>
							<h4 class="bg bg4"><a href="">Viêm nhiễm hệ thống sinh dục</a></h4>
							<div class="flex flex2 justify-content-between">
								<div class="flex2col1">
									<h5><a href="#">Viêm quy đầu</a></h5>
									<h5><a href="#">Viêm bàng quang</a></h5>
								</div>
								<div class="flex2col1">
									<h5><a href="#">Viêm niệu đạo</a></h5>
									<h5><a href="#">Viêm tinh hoàn</a></h5>
								</div>
							</div>
						</div>
						<div>
							<h4 class="bg bg5"><a href="">Vô sinh nam</a></h4>
							<div class="flex flex2 justify-content-between">
								<div class="flex2col1">
									<h5><a href="#">Ít tinh trùng</a></h5>
									<h5><a href="#">Xuất tinh ra máu</a></h5>
								</div>
								<div class="flex2col1">
									<h5><a href="#">Vô tinh</a></h5>
									<h5><a href="#">Yếu tinh trùng</a></h5>
								</div>
							</div>
						</div>
						<div>
							<h4 class="bg bg6"><a href="">Bệnh xã hội</a></h4>
							<div class="flex flex2 justify-content-between">
								<div class="flex2col1">
									<h5><a href="#">Sùi mào gà</a></h5>
									<h5><a href="#">Giang mai</a></h5>
								</div>
								<div class="flex2col1">
									<h5><a href="#">Bệnh lậu</a></h5>
									<h5><a href="#">Mụn rộp sinh dục</a></h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center"><a class="text-container-center" href="{{ url('/') }}">Trang chủ</a></h3>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center"><a class="text-container-center" href="{{ MyAPI::getUrlPost(3) }}">Kỹ thuật<br>điều trị</a></h3>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center"><a class="text-container-center" href="{{ MyAPI::getUrlTerm(28) }}">Thiết bị<br>tiên tiến</a></h3>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center"><a class="text-container-center" href="{{ MyAPI::getUrlTerm(29) }}">Bệnh án<br>điển hình</a></h3>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center"><a class="text-container-center" href="{{ MyAPI::getUrlPost(2) }}">Địa chỉ <br>phòng khám</a></h3>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center"><a class="text-container-center" href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đặt hẹn <br>trực tuyến</a></h3>
				</div>
			</div>
		</div>
	</menu>
	@yield('content')
	<footer>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3><a href=""><img src="{{ asset('public/images/desktop/logo-footer.png') }}" class="center-block"></a></h3>
					<h3 class="text-center text-uppercase"><a href="">Phòng khám chuyên khoa Nam Khang</a></h3>
					<p><a href=""><address>Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội</address></a></p>
				</div>
				<div class="flex1col2">
					<p>Thời gian làm việc của phòng khám</p>
					<p>( 8:00 -20:00) bao gồm cả ngày lễ tết </p>
					<p>Điện thoại liên hệ :</p>
					<p><a href="tel:1833 - 6181">1833 - 6181</a></p>
				</div>
				<div class="flex1col3">
					<h4 class="text-center text-uppercase">Phòng khám của nam giới</h4>
					<h4 class="text-center text-uppercase">Nam Khang - Hà Nội - Việt Nam</h4>
				</div>
			</div>
		</div>
		<div class="footer-status">
			
		</div>
	</footer>
</body>
</html>
