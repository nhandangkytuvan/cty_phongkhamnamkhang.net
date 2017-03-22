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
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-term.css') }}">
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
					<a href=""><i class="fa fa-home"></i> Trang chủ ></a>
					<a href="">Bệnh lây qua đường tình dục</a>
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
			<h1 class="text-uppercase"><i></i> Tên bệnh</h1>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3><a href=""><img src="{{ asset('public/images/desktop/term-3.png') }}" class="center-block"></a></h3>
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
						<div class="flex2col1"><a href="">Tư vấn trực tuyến</a></div>
						<div class="flex2col1"><a href="">Chuyên gia giải đáp</a></div>
						<div class="flex2col1"><a href="">Hẹn khám qua mạng</a></div>
					</div>
				</div>
			</div>
			<div class="posts">
				<div class="post">
					<div class="clearfix">
						<div class="pull-left">
							<h3><a href="">Bài viết về bệnh trong mục tên bệnh</a></h3>
						</div>	
						<div class="pull-right">
							<span>12-06-17</span>
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
						<div class="pull-right">
							<span>12-06-17</span>
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
						<div class="pull-right">
							<span>12-06-17</span>
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
			<div class="row1">
				<h3>Phòng khám Nam Khang</h3>
				<h4><a href=""><img src="{{ asset('public/images/desktop/term-4.png') }}" class="center-block"></a></h4>
			</div>
			<div class="row2">
				<div class="flex flex2 justify-content-between">
					<div class="flex1col1">
						<h5 class="text-center"><a href=""><i class="bg bg1"></i></a></h5>
						<h5 class="text-center">
							<a href="">Tư vấn<br>trực tuyến</a>
						</h5>
					</div>
					<div class="flex1col1">
						<h5 class="text-center"><a href=""><i class="bg bg2"></i></a></h5>
						<h5 class="text-center">
							<a href="">Bác sĩ<br>giải đáp</a>
						</h5>
					</div>
					<div class="flex1col1">
						<h5 class="text-center"><a href=""><i class="bg bg3"></i></a></h5>
						<h5 class="text-center">
							<a href="">Hẹn khám<br>qua mạng</a>
						</h5>
					</div>
				</div>
			</div>
			<div class="row3">
				<div class="bg bg1">
					<p>Đường dây nóng sức khỏe</p>
					<h3><a href="tel:1800 - 6181">1800 - 6181</a></h3>
				</div>
				<div class="bg bg2">
					<p>Địa chỉ phòng khám</p>
					<h4><a href="tel:1800 - 6181">Số 193c1 Bà Triệu, Hai Bà Trưng Hà Nội</a></h4>
				</div>
			</div>
			<div class="row4">
				<div>Hiện tại có <span>9</span><span>8</span> bệnh nhân đặt hẹn</div>
				<div>
					<div id="demo">
						<div id="demo1">
							<p>
								<span>Anh Đoàn</span>
								<span>: 0168****154 </span>
								<span>xuất tinh sớm</span>
							</p>
							<p>
								<span>Anh Quân</span>
								<span>: 0125****231 </span>
								<span>sùi mào gà</span>
							</p>
							<p>
								<span>Anh Đạt</span>
								<span>: 0168****154 </span>
								<span>bệnh lậu</span>
							</p>
							<p>
								<span>Anh Đoàn</span>
								<span>: 098****144</span>
								<span>xuất tinh sớm</span>
							</p>
						</div>
					</div>
				</div>
				<script type="text/javascript">
	                new Marquee(
					{
						MSClassID : "demo",
						ContentID : "demo1",
					 	Direction : 0,
						Step	  : 0,
						Width	  : 272,
						Height	  : 145,
						Timer	  : 4,
						DelayTime : 5000,
						WaitTime  : 0,
						ScrollStep: 5000,
						SwitchType: 0,
						AutoStart : 1
					})
	            </script>
				<div class="text-center">
					<a href="" class="dis-inline-block">Đặt hẹn ngay</a>
				</div>
			</div>
			<div class="row5">
				<h3 class="text-center text-uppercase">Tư vấn bệnh ngay</h3>
				<div class="flex flex2 justify-content-between flex-wrap-wrap">
					<div class="flex2col1"><h5 class="text-container-center"><a href="">Sùi mào gà</a></h5></div>
					<div class="flex2col1"><h5 class="text-container-center"><a href="">Bệnh lậu</a></h5></div>
					<div class="flex2col1"><h5 class="text-container-center"><a href="">Giang mai</a></h5></div>

					<div class="flex2col1"><h5 class="text-container-center"><a href="">Mụn rộp<br>sinh dục</a></h5></div>
					<div class="flex2col1"><h5 class="text-container-center"><a href="">Rối loạn<br>chức năng<br>sinh dục</a></h5></div>
					<div class="flex2col1"><h5 class="text-container-center"><a href="">Liệt dương</a></h5></div>

					<div class="flex2col1"><h5 class="text-container-center"><a href="">Xuất tinh sớm</a></h5></div>
					<div class="flex2col1"><h5 class="text-container-center"><a href="">Rối loạn<br>cương dương</a></h5></div>
					<div class="flex2col1"><h5 class="text-container-center"><a href="">Dài bao<br>quy đầu</a></h5></div>

					<div class="flex2col1"><h5 class="text-container-center"><a href="">Hẹp bao<br>quy đầu</a></h5></div>
					<div class="flex2col1"><h5 class="text-container-center"><a href="">Viêm tuyến<br>tiền liệt</a></h5></div>
					<div class="flex2col1"><h5 class="text-container-center"><a href="">Tăng sinh<br>tuyến tiền liệt</a></h5></div>

					<div class="flex2col1"><h5 class="text-container-center"><a href="">Viêm quy đầu</a></h5></div>
					<div class="flex2col1"><h5 class="text-container-center"><a href="">Viêm niệu đạo</a></h5></div>
					<div class="flex2col1"><h5 class="text-container-center"><a href="">Viêm bàng quang</a></h5></div>

					<div class="flex2col1"><h5 class="text-container-center"><a href="">Viêm tinh hoàn</a></h5></div>
					<div class="flex2col1"><h5 class="text-container-center"><a href="">Ít tinh trùng</a></h5></div>
					<div class="flex2col1"><h5 class="text-container-center"><a href="">Yếu tinh trùng</a></h5></div>

					<div class="flex2col1"><h5 class="text-container-center"><a href="">Vô sinh nam</a></h5></div>
					<div class="flex2col1"><h5 class="text-container-center"><a href="">Chảy mủ<br>bao quy đầu</a></h5></div>
					<div class="flex2col1"><h5 class="text-container-center"><a href="">U nang<br>tuyến tiền liệt</a></h5></div>

				</div>
			</div>
			<div class="row6">
				<h3>Liệu pháp đặc biệt</h3>
				<h4><a href=""><img src="{{ asset('public/images/desktop/term-5.png') }}" class="center-block"></a></h4>
				<ul>
					<li><h5><i>1</i><a href="">Bài viết về liệu pháp</a></h5></li>
					<li><h5><i>2</i><a href="">Bài viết về liệu pháp</a></h5></li>
					<li><h5><i>3</i><a href="">Bài viết về liệu pháp</a></h5></li>
					<li><h5><i class="active">4</i><a href="">Bài viết về liệu pháp</a></h5></li>
					<li><h5><i class="active">5</i><a href="">Bài viết về liệu pháp</a></h5></li>
					<li><h5><i class="active">6</i><a href="">Bài viết về liệu pháp</a></h5></li>
				</ul>
			</div>
		</div>
	</div>
</main>
@endsection('content')