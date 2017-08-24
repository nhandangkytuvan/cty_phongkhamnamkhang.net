<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="classification" content="Bệnh viện, phòng khám, Y tế." />
	<meta name="distribution" content="Bệnh viện, phòng khám, Y tế" />
	<meta name="rating" content="General" />
	<meta name="robots" content="index, follow" />
	<meta name="creator" content="Phòng khám Nam Khang,Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội" />
	<meta name="publisher" content="Phòng khám Nam Khang,Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội" />
    <meta name="author" content="{{ $setting->web_name }}">
    <!-- csrf -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- facebook -->
    <meta property="og:site_name" content="Phòng Khám Nam Khang" />
	<meta property="og:type" content="Bệnh viện, Phòng Khám Đa Khoa, Y tế" />
    <meta property="og:locale " content="vi_VN">
    <!-- link rss,sitemap -->
    <link rel="canonical" href="{{ url('sitemap.xml') }}" />
    <!-- link icon -->
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting->web_icon) }}" type="image/x-icon">
    @yield('title')
    @yield('keyword')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/glyphicon-bootstrap/glyphicon-bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-header2.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-zalo.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-footer.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.popupoverlay.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.form.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/shake.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/mobile/mobile.js') }}"></script>
	@yield('js')
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85212676-9', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body class="pos-relative">
	<div class="leftBody pos-absolute">
		<ul>
			<li class="home2 text-center"><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
			<li class="bg">
				<table>
					<tr>
						<td>
							<a href="{{ url('/dia-chi-phong-kham') }}"><i class="bg bg1"></i></a>
						</td>
						<td>
							<div class="name"><a href="{{ url('/dia-chi-phong-kham') }}">BẢN ĐỒ</a></div>
							<div class="des"><a href="{{ url('/dia-chi-phong-kham') }}">Ô tô,xe máy, xe bus</a></div>
						</td>
					</tr>
				</table>
			</li>
			<li class="bg bg2">
				<table>
					<tr>
						<td>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg bg2"></i></a>
						</td>
						<td>
							<div class="name"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Hỏi bác sĩ</a></div>
							<div class="des"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chi phí, điều trị</a></div>
						</td>
					</tr>
				</table>
			</li>
			<li class="bg bg3">
				<table>
					<tr>
						<td>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg bg3"></i></a>
						</td>
						<td>
							<div class="name"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Đặt hẹn nhanh</a></div>
							<div class="des"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Mã số khám bệnh, ưu tiên</a></div>
						</td>
					</tr>
				</table>
			</li>
			<li class="bg bg4">
				<table>
					<tr>
						<td>
							<a href="{{ url('/ve-chung-toi') }}"><i class="bg bg4"></i></a>
						</td>
						<td>
							<div class="name"><a href="{{ url('/ve-chung-toi') }}">Giới thiệu phòng khám</a></div>
							<div class="des"><a href="{{ url('/ve-chung-toi') }}">Năng lực, phẩm chất</a></div>
						</td>
					</tr>
				</table>
			</li>
			<li class="bg bg5">
				<table>
					<tr>
						<td>
							<a href="{{ MyAPI::getUrlTermID(32) }}"><i class="bg bg5"></i></a>
						</td>
						<td>
							<div class="name"><a href="{{ MyAPI::getUrlTermID(32) }}">liệu pháp điều trị</a></div>
							<div class="des"><a href="{{ MyAPI::getUrlTermID(32) }}">Tiên tiến, an toàn</a></div>
						</td>
					</tr>
				</table>
			</li>
			<li class="bg bg6">
				<table>
					<tr>
						<td>
							<a href="{{ MyAPI::getUrlTermID(34) }}"><i class="bg bg6"></i></a>
						</td>
						<td>
							<div class="name"><a href="{{ MyAPI::getUrlTermID(34) }}">TRƯỜNG HỢP HỒI PHỤC</a></div>
							<div class="des"><a href="{{ MyAPI::getUrlTermID(34) }}">Điển hình, thực tế</a></div>
						</td>
					</tr>
				</table>
			</li>
		</ul>
	</div>
	<div class="rightBody">
		<div id="my-header">
			<div class="container">
				<a href="tel:18006181">
					<img src="{{ asset('public/images/chuyende/mobile/daibaoquydau/gif.gif') }}" alt="" class="img-responsive center-block">
				</a>
			</div>
		</div>
		<script>
			$(document).ready(function() {
			  	$('#my-header').scrollToFixed();
			});
		</script>
		<header>
			<div class="container">
				<div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('public/images/mobile3/logo.png') }}" alt="" class="center-block"></a></div>
				<div class="name text-center text-uppercase">PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</div>
				<div class="address text-center text-uppercase">SỐ 193C1 BÀ TRIỆU - HAI BÀ TRƯNG - HÀ NỘI</div>
				<menu class="pos-relative">
					<button class="myToogleMenu"><i class="fa fa-align-justify" aria-hidden="true"></i></button>
					<span class="pos-absolute size1">Hotline</span> 
					<a href="tel:18006181" class="pos-absolute size2">1800 - 6181</a> 
					<span class="pos-absolute size3">Miễn phí tư vấn và cước gọi</span>
				</menu>
				<script>
					$(document).ready(function() {
						$("menu button.myToogleMenu").click(function(event) {
							$("body").toggleClass('active');
						});	
					});
				</script>
			</div>
		</header>
		<div class="banner container">
			<div class="slick-home">
				@yield('banner')
			</div>
			<script>
				$('.slick-home').slick({
					autoplay: true,
					autoplaySpeed: 5000,
				});
			</script>
		</div>
		@yield('content')	
		<footer>
			<div class="container">
				<p>Điện thoại tư vấn đặt hẹn: <a href="tel:18006181">1800 6181</a> - <a href="tel:02439.656.999">02439.656.999</a></p>
				<p>Thời gian mở cửa: <a href="tel:18006181">8:00 - 20:00</a> (cả chủ nhật, ngày lễ)</p>
				<p>Địa chỉ: <a href="tel:18006181">193C1 BÀ TRIỆU – HAI BÀ TRƯNG – HÀ NỘI</a></p>
			</div>
			@yield('toolbar')	
		</footer>
	</div>
	<script language="javascript" src="http://swt.phongkham193.com/JS/LsJS.aspx?siteid=MFI63108226&float=1&lng=en"></script>
	@include('popup.mypopup0')
	@include('popup.popupZalo')
	<img src="{{ asset('public/images/mobile/shake.gif') }}" alt="" style="position: fixed; top: 15%;right: 0px;z-index: 999;width:55px;">
</body>
</html>