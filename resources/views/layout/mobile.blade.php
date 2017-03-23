<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <meta name="author" content="phongkhamnamkhang.net">
    @yield('keyword')
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting->web_icon) }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-footer.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.popupoverlay.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/mobile/mobile.js') }}"></script>
	@yield('js')
</head>
<body>
	<header>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex flex1col1">
					<div class="flex2col1">
						<h2><a href=""><img src="{{ asset('public/images/mobile/logo.png') }}" class="center-block"></a></h2>
					</div>
					<div class="flex flex2col2">
						<div class="box-center">
							<h3 class="text-uppercase">phòng khám chuyên khoa nam khang</h3>
							<h4 class="text-uppercase">số 193C1 bà triệu - hai bà trưng - hà nội</h4>
						</div>
					</div>
				</div>
				<div class="flex flex1col2">
					<div class="flex4col1">
						<h4><a href=""><img src="{{ asset('public/images/mobile/icon-0.png') }}" class="center-block img-responsive"></a></h5>
					</div>
					<div class="flex flex4col2">
						<div class="box-center">
							<h6><a href="">Bác sĩ đang trực tuyến</a></h5>
							<h5><a href="" class="text-uppercase">Tư vấn ngay</a></h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="banner container">
		<div class="slick-home">
			<div>
				<a href="#">
					<img src="{{ asset('public/images/mobile/slide-1.png') }}" alt="" class="center-block img-responsive">
				</a>
			</div>
		</div>
		<script>
			$('.slick-home').slick({
				autoplay: true,
				autoplaySpeed: 5000,
			});
		</script>
	</div>
	<menu class="container">
		<div class="search">
			<div class="">
				<div class="flex1col1">
					<form action="" method="post">
						<input type="text" placeholder="Hãy nhập từ khóa">
						<button type="submit">Tìm kiếm</button>
					</form>
				</div>
			</div>
		</div>
		<div class="menu">
			<div class="flex flex2 flex-wrap-wrap justify-content-around align-content-around">
				<div class="flex2col1">
					<div class="flex">
						<div class="box-center">
							<h3 class="text-center"><a href=""><i class="bg bg1"></i></a></h3>
							<h4 class="text-uppercase text-center"><a href="">Giới thiệu bác sĩ</a></h4>
							<h5 class="text-center"><a href="">Năng lực, phẩm chất</a></h5>
						</div>
					</div>
				</div>
				<div class="flex2col1">
					<div class="flex">
						<div class="box-center">
							<h3 class="text-center"><a href=""><i class="bg bg2"></i></a></h3>
							<h4 class="text-uppercase text-center"><a href="">Đặt hẹn nhanh</a></h4>
							<h5 class="text-center"><a href="">Mã số khám bệnh ưu tiên</a></h5>
						</div>
					</div>
				</div>
				<div class="flex2col1">
					<div class="flex">
						<div class="box-center">
							<h3 class="text-center"><a href=""><i class="bg bg3"></i></a></h3>
							<h4 class="text-uppercase text-center"><a href="">Bản đồ</a></h4>
							<h5 class="text-center"><a href="">Ô tô xe máy, xe bus</a></h5>
						</div>
					</div>
				</div>
				<div class="flex2col1">
					<div class="flex">
						<div class="box-center">
							<h3 class="text-center"><a href=""><i class="bg bg4"></i></a></h3>
							<h4 class="text-uppercase text-center"><a href="">Hỏi bác sĩ</a></h4>
							<h5 class="text-center"><a href="">Chi phí, điều trị</a></h5>
						</div>
					</div>
				</div>
				<div class="flex2col1">
					<div class="flex">
						<div class="box-center">
							<h3 class="text-center"><a href=""><i class="bg bg5"></i></a></h3>
							<h4 class="text-uppercase text-center"><a href="">Liệu pháp điều trị</a></h4>
							<h5 class="text-center"><a href="">Tiên tiến, an toàn</a></h5>
						</div>
					</div>
				</div>
				<div class="flex2col1">
					<div class="flex">
						<div class="box-center">
							<h3 class="text-center"><a href=""><i class="bg bg6"></i></a></h3>
							<h4 class="text-uppercase text-center"><a href="">Trường hợp hồi phục</a></h4>
							<h5 class="text-center"><a href="">Điển hình, thực tế</a></h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</menu>
	@yield('content')	
	<footer>
		<div class="container">
			<p>Điện thoại tư vấn đặt hẹn: <a href="tel:18006181">1800 6181</a></p>
			<p>Thời gian mở cửa: <a href="tel:18006181">8:00 - 20:00</a></p>
			<p>Địa chỉ phòng khám: <a href="tel:18006181">193C1 BÀ TRIỆU – HAI BÀ TRƯNG – HÀ NỘI</a></p>
		</div>
		<div class="container footer-toolbar">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div class="box-center">
						<h3 class="text-center"><a href="tel:18006181"><i class="fa fa-phone-square"></i></a></h3>
						<h4 class="text-center"><a href="tel:18006181">Gọi điện</a></h4>
					</div>
				</div>
				<div class="flex1col1">
					<div class="box-center">
						<h3 class="text-center"><a href=""><i class="fa fa-calendar"></i></a></h3>
						<h4 class="text-center"><a href="">Đặt hẹn</a></h4>
					</div>
				</div>
				<div class="flex1col1">
					<div class="box-center">
						<h3 class="text-center"><a href=""><i class="fa fa-comment"></i></a></h3>
						<h4 class="text-center"><a href="">Tư vấn</a></h4>
					</div>
				</div>
				<div class="flex1col1">
					<div class="box-center">
						<h3 class="text-center"><a href=""><i class="fa fa-map-marker"></i></a></h3>
						<h4 class="text-center"><a href="">Địa chỉ</a></h4>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- <div id="my_popup">
	    <p>Bác sỹ đang yêu cầu được chát với bạn</p>
	    <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đồng ý</a>
	    <a class="my_popup_close">Từ chối</a>
	</div> -->
</body>
</html>