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
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-home.css') }}">
@endsection('css')
@section('content')
	<div class="baner">
		<div class="slick-home">
			<div><img src="{{ asset('public/images/desktop/slide-1.png') }}" alt="" class="center-block"></div>
			<div><img src="{{ asset('public/images/desktop/slide-2.png') }}" alt="" class="center-block"></div>
		</div>
		<script>
			$('.slick-home').slick({
			  	slidesToShow: 1,
			  	slidesToScroll: 1,
			  	autoplay: true,
			  	autoplaySpeed: 2000,
			});	
		</script>
	</div>
	<main class="container home">
		<div class="search">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h4>Hỗ trợ bệnh nhân</h4>
				</div>
				<div class="flex1col2">
					<form action="">
						<input type="text" placeholder="Hãy nhập từ khóa">
						<button type="submit">Tìm kiếm</button>
					</form>
				</div>
				<div class="flex1col3">
					<a href="" class="dis-inline-block">Tư vấn trực tuyến</a>
				</div>
				<div class="flex1col4">
					<div>Đã có <span>106322</span> người được hỗ trợ</div>
				</div>
			</div>
		</div>
		<div class="row1">
			<a href="">
				<img src="{{ asset('public/images/desktop/home-1.png') }}" class="center-block">
			</a>
		</div>
		<div class="row2">
			<div class="flex1 flex justify-content-between">
				<div class="flex1col1">
					<h1 class="text-center text-uppercase"><span>về chúng tôi</span><span>/</span><span>about us</span></h1>
					<p class="text-justify">
						Phòng khám Nam Khang Hà Nội là cơ sở y tế chuyên điều trị nam khoa hiếm có ở khu vực Hà Nội, phòng khám đạt tiêu chuẩn y tế JCI quốc tế, hội tụ đội ngũ chuyên gia cao cấp trong và ngoài nước, dịch vụ chất lượng cao, môi trường khám chữa bệnh ấm cúng đạt chất lượng 5 sao, vượt qua mô hình truyền thống của ngành y tế Hà Nội, mở ra thời đại mới về khám điều trị bệnh nam khoa đỉnh cao tại Hà Nội, kết hợp với dịch vụ đặc biệt chuyên khoa, chuyên bệnh, chuyên trị, xây dựng thương hiệu chuyên nghiệp về nam khoa trên toàn quốc.
					</p>
					<div class="text-center"><a href="">Xem chi tiết</a></div>
				</div>
				<div class="flex1col2">
					<img src="{{ asset('public/images/desktop/home-2.png') }}" alt="">
				</div>
			</div>
		</div>
		<div class="row3">
			<h2 class="text-center text-uppercase">Hình ảnh nhân viên</h2>
			<h3 class="text-center"><span>Chúng tôi luôn nỗ lực hết mình</span></h3>
			<div class="slick-pk">
				<div><a href=""><img src="{{ asset('public/images/desktop/pk-1.png') }}" class="center-block"></a></div>
				<div><a href=""><img src="{{ asset('public/images/desktop/pk-2.png') }}" class="center-block"></a></div>
				<div><a href=""><img src="{{ asset('public/images/desktop/pk-3.png') }}" class="center-block"></a></div>
				<div><a href=""><img src="{{ asset('public/images/desktop/pk-4.png') }}" class="center-block"></a></div>
				<div><a href=""><img src="{{ asset('public/images/desktop/pk-5.png') }}" class="center-block"></a></div>
				<div><a href=""><img src="{{ asset('public/images/desktop/pk-6.png') }}" class="center-block"></a></div>
				<div><a href=""><img src="{{ asset('public/images/desktop/pk-7.png') }}" class="center-block"></a></div>
			</div>
			<script>
				$('.slick-pk').slick({
				  	slidesToShow: 4,
				  	slidesToScroll: 1,
				  	// autoplay: true,
				  	// autoplaySpeed: 2000,
				});	
			</script>
		</div>
		<div class="row4">
			<div><a href=""><img src="{{ asset('public/images/desktop/home-4.png') }}" class="center-block"></a></div>
		</div>
		<div class="row5">
			<div class="groups-btn">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1">
						<button class="active"><i class="fa fa-caret-right" aria-hidden="true"></i> Bệnh lây truyền qua<br>đường tình dục</button>
					</div>
					<div class="flex1col1">
						<button><i class="fa fa-caret-right" aria-hidden="true"></i> Rối loạn chức năng<br>sinh dục</button>
					</div>
					<div class="flex1col1">
						<button><i class="fa fa-caret-right" aria-hidden="true"></i> Bệnh về tuyến<br>tiền liệt</button>
					</div>
					<div class="flex1col1">
						<button><i class="fa fa-caret-right" aria-hidden="true"></i> Viêm nhiễm sinh dục</button>
					</div>
					<div class="flex1col1">
						<button><i class="fa fa-caret-right" aria-hidden="true"></i> Vô sinh nam</button>
					</div>
					<div class="flex1col1">
						<button><i class="fa fa-caret-right" aria-hidden="true"></i> Chỉnh hình bộ phận<br>sinh dục</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row6">
			<div class="flex1 flex justify-content-between">
				<div class="flex1col1">
					<img src="{{ asset('public/images/desktop/home-5.png') }}" class="center-block">
				</div>
				<div class="flex1col2">
					<p class="text-justify">
						Bệnh lây truyền qua đường tình dục là một trong những bệnh điều trị trọng điểm của phòng khám chúng tôi, kết hợp chặt chẽ giữa nghiên cứu khoa học lâm sàng và nghiên cứu giảng dạy, nhập thiết bị y tế và kĩ thuật điều trị tiên tiến trong và ngoài nước, như máy xét nghiệm sinh hóa tự động Abbott Hoa Kỳ, hệ thống kiểm tra DNA vi sinh vật, máy huỳnh quang hóa học miễn dịch, máy ELISA, hình thành mô hình khám chữa bệnh cột sống bằng điều trị xâm lấn tối thiểu đặc biệt, hội tụ nhiều chuyên gia về bệnh lây truyền qua đường tình dục trong và ngoài nước, mang đến cho bệnh nhân dịch vụ hiện đại hóa, chuyên nghiệp hóa, nhân văn hóa.
					</p>
					<div>
						<p>Hạng mục khai thác điều trị: <a href="">Sùi mào gà</a>, <a href="">lậu</a>, <a href="">giang mang</a>, <a href="">mụn rộp sinh dục</a></p>
					</div>
					<div>
						<a href="" class="dis-inline-block">Tư vấn trực tuyến</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row7">
			<div><a href=""><img src="{{ asset('public/images/desktop/home-6.png') }}" class="center-block"></a></div>
		</div>
		<div class="row8">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3 class="text-center">Đội ngũ chuyên gia nam khoa, người tiên phong <br>về nam khoa trên toàn quốc</h3>
					<p class="text-justify">
						Khám bệnh phải tìm chuyên gia là quan điểm phổ biến của người dân. Khám bệnh nam khoa càng cần các chuyên gia có y thuật cao minh, kinh nghiệm lâm sàng phong phú. Phòng khám Nam Khang Hà Nội đã kiểm tra nghiêm trình độ chuyên môn của các chuyên gia ra nhập đội ngũ bác sỹ, tại đây hội tụ những chuyên gia lâu năm nổi tiếng trong và ngoài nước, kiên trì sử dụng kĩ thuật khám và điều trị trình độ cao phục vụ cho đông đảo bệnh nhân nam giới…<a href="">Chi tiết</a>
					</p>
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<div class="text-center"><i class="dis-inline-block bg bg1"></i></div>
							<h4 class="text-center">
								<a href="">Kinh nghiệm lâm <br>sàng phong phú</a>
							</h4>
						</div>
						<div class="flex2col1">
							<div class="text-center"><i class="dis-inline-block bg bg2"></i></div>
							<h4 class="text-center">
								<a href="">Nguồn lực kĩ thuật<br>chuyên nghiệp</a>
							</h4>
						</div>
						<div class="flex2col1">
							<div class="text-center"><i class="dis-inline-block bg bg3"></i></div>
							<h4 class="text-center">
								<a href="">Thành tựu cá nhân<br>xuất sắc</a>
							</h4>
						</div>
					</div>
				</div>
				<div class="flex1col2">
					<img src="{{ asset('public/images/desktop/home-7.png') }}" class="center-block">
				</div>
			</div>
		</div>
		<div class="row9">
			<div><a href=""><img src="{{ asset('public/images/desktop/home-8.png') }}" class="center-block"></a></div>
		</div>
		<div class="row10">
			<h2 class="text-center text-uppercase">10 kĩ thuật điều trị trọng điểm</h2>
			<h3 class="text-center"><span>Điều trị bệnh nam khoa toàn diện hơn</span></h3>
			<div class="slick-kt">
				<div>
					<div class="flex flex1">
						<div class="flex1col1">
							<h4><a href=""><img src="{{ asset('public/images/desktop/kt-1.png') }}" alt=""></a></h4>				
						</div>
						<div class="flex1col2">
							<h4><a href="">Kĩ thuật miễn dịch nhiễm trùng tiết niệu CRS</a></h4>
							<ul>
								<li><i class="fa fa-caret-right"></i>Thích hợp điều trị các bệnh: Viêm quy đầu, viêm niệu đạo, viêm bàng quang, viêm tinh hoàn</li>
								<li><i class="fa fa-caret-right"></i>Ưu điểm: kĩ thuật mới, điều trị càng khoa học, tránh tái phát</li>
							</ul>
						</div>
					</div>
				</div>
				<div>
					<div class="flex flex1">
						<div class="flex1col1">
							<h4><a href=""><img src="{{ asset('public/images/desktop/kt-2.png') }}" alt=""></a></h4>				
						</div>
						<div class="flex1col2">
							<h4><a href="">Kĩ thuật miễn dịch nhiễm trùng tiết niệu CRS</a></h4>
							<ul>
								<li><i class="fa fa-caret-right"></i>Thích hợp điều trị các bệnh: Viêm quy đầu, viêm niệu đạo, viêm bàng quang, viêm tinh hoàn</li>
								<li><i class="fa fa-caret-right"></i>Ưu điểm: kĩ thuật mới, điều trị càng khoa học, tránh tái phát</li>
							</ul>
						</div>
					</div>
				</div>
				<div>
					<div class="flex flex1">
						<div class="flex1col1">
							<h4><a href=""><img src="{{ asset('public/images/desktop/kt-1.png') }}" alt=""></a></h4>				
						</div>
						<div class="flex1col2">
							<h4><a href="">Kĩ thuật miễn dịch nhiễm trùng tiết niệu CRS</a></h4>
							<ul>
								<li><i class="fa fa-caret-right"></i>Thích hợp điều trị các bệnh: Viêm quy đầu, viêm niệu đạo, viêm bàng quang, viêm tinh hoàn</li>
								<li><i class="fa fa-caret-right"></i>Ưu điểm: kĩ thuật mới, điều trị càng khoa học, tránh tái phát</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<script>
				$('.slick-kt').slick({
				  	slidesToShow: 2,
				  	slidesToScroll: 1,
				  	// autoplay: true,
				  	// autoplaySpeed: 2000,
				});	
			</script>
		</div>
		<div class="row11">
			<h2 class="text-center text-uppercase">THIẾT BỊ KHÁM ĐIỀU TRỊ TIÊN TIẾN</h2>
			<h3 class="text-center"><span>Dịch vụ khám điều trị cao cấp</span></h3>
			<div class="slick-tb">
				<div>
					<div class="tb">
						<h5><a href=""><img src="{{ asset('public/images/desktop/tb-1.png') }}" class="center-block"></a></h5>
						<p class="text-center"><a href="">Máy hồi phục chức năng sinh dục</a></p>
					</div>
				</div>
				<div>
					<div class="tb">
						<h5><a href=""><img src="{{ asset('public/images/desktop/tb-2.png') }}" class="center-block"></a></h5>
						<p class="text-center"><a href="">Máy điều trị sóng ngắn</a></p>
					</div>
				</div>
				<div>
					<div class="tb">
						<h5><a href=""><img src="{{ asset('public/images/desktop/tb-3.png') }}" class="center-block"></a></h5>
						<p class="text-center"><a href="">Máy điều trị hồng ngoại</a></p>
					</div>
				</div>
				<div>
					<div class="tb">
						<h5><a href=""><img src="{{ asset('public/images/desktop/tb-4.png') }}" class="center-block"></a></h5>
						<p class="text-center"><a href="">Máy hồi phục tuyến tiền liệt</a></p>
					</div>
				</div>
				<div>
					<div class="tb">
						<h5><a href=""><img src="{{ asset('public/images/desktop/tb-5.png') }}" class="center-block"></a></h5>
						<p class="text-center"><a href="">Quầy lễ tân</a></p>
					</div>
				</div>
				<div>
					<div class="tb">
						<h5><a href=""><img src="{{ asset('public/images/desktop/tb-6.png') }}" class="center-block"></a></h5>
						<p class="text-center"><a href="">Phòng phẫu thuật vô khuẩn</a></p>
					</div>
				</div>
				<div>
					<div class="tb">
						<h5><a href=""><img src="{{ asset('public/images/desktop/tb-7.png') }}" class="center-block"></a></h5>
						<p class="text-center"><a href="">Phòng phẫu thuật vô khuẩn</a></p>
					</div>
				</div>
			</div>
			<script>
				$('.slick-tb').slick({
				  	slidesToShow: 3,
				  	slidesToScroll: 1,
				  	// autoplay: true,
				  	// autoplaySpeed: 2000,
				});	
			</script>
			<div class="text-center">
				<a href="" class="dis-inline-block text-center">
					Xem thêm môi trường<br>thiết bị phòng khám
				</a>
				<a href="" class="dis-inline-block text-center">
					Tư vấn với<br>chuyên gia nam khoa
				</a>
			</div>
		</div>
		<div class="row12">
			<div><a href=""><img src="{{ asset('public/images/desktop/home-10.png') }}" class="center-block"></a></div>
			<p class="text-justify">
				Phòng khám Nam Khang Hà Nội nỗ lực gánh vác trách nhiệm xã hội, phòng khám thường xuyên tổ chức các hoạt động xã hội, miễn phí kiểm tra sức khỏe cho người dân, mục đích giúp được nhiều hơn cho bệnh nhân có hoàn cảnh khó khăn, nhận được lời khen ngợi của đông đảo quần chúng nhân dân.
			</p>
			<div>
				<a href=""><img src="{{ asset('public/images/desktop/home-9.png') }}" class="center-block"></a>
			</div>
		</div>
	</main>
@endsection('content')