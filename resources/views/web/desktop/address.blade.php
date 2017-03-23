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
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-term.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-address.css') }}">
@endsection('css')
@section('js')
<script type="text/javascript" src="{{ asset('public/js/global/MSClass.js') }}"></script>
@endsection('js')
@section('content')
	<main class="container term address">
		<div class="flex flex0 justify-content-between">
			<div class="flex0col1">
				<h1 class="text-uppercase"><i></i> Địa chỉ phòng khám</h1>
				<h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.58029052751!2d105.84724954324604!3d21.00945489010672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab8a5b96e8d5%3A0x8a65517cee98a0b0!2sPh%C3%B2ng+Kh%C3%A1m+Chuy%C3%AAn+Khoa+Nam+Khang!5e0!3m2!1svi!2s!4v1490176160826" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					<p>
						
					</p>
				</h3>
				<h2>
					Các bạn thân mến, để thuận tiện hơn cho việc tìm đường đến khám bệnh, chúng tôi hướng dẫn chỉ đường đến phòng khám cho bạn!
				</h2>
				<div class="address-bus">
					<h4>
						<img src="{{ asset('public/images/desktop/icon-10.jpg') }}" alt=""> 
						Đi xe bus nào đến phòng khám? <a href="">Bấm vào tư vấn >></a>
					</h4>
					<h3>Tuyến xe</h3>
					<div class="flex flex1">
						<div class="flex1col1">Tuyến 08: </div>
						<div class="flex1col2">
							Yên Phụ-Long Biên- Bà Triệu-Bạch Mai- Đại La- Giải Phóng- Giáp Bát- Quốc Lộ 1- Ngũ Hiệp- Đông Mỹ
						</div>
					</div>
					<div class="flex flex1">
						<div class="flex1col1">Tuyến 23: </div>
						<div class="flex1col2">
							Nguyễn Công Trứ- Phố Huế- Bà Triệu- Phương Mai- La Thành- Giảng Võ- Nguyễn Thái Học- Long Biên- Ngô Thì Nhậm- Nguyễn Công Trứ
						</div>
					</div>
					<div class="flex flex1">
						<div class="flex1col1">Tuyến 31: </div>
						<div class="flex1col2">
							ĐH Mỏ- Phú Thượng- Bà Triệu- Bách Khoa
						</div>
					</div>
					<div class="flex flex1">
						<div class="flex1col1">Tuyến 35: </div>
						<div class="flex1col2">
							Trần Khánh Dư- Phạm Ngọc Thạch- Nguyễn Chí Thanh- Phạm Hùng- Nam Thăng Long
						</div>
					</div>
					<div class="flex flex1">
						<div class="flex1col1">Tuyến 36: </div>
						<div class="flex1col2">
							Yên Phụ- Triệu Quốc Đạt- Bà Triệu- Bạch Mai- Trương Định- Giải Phóng- KĐT Linh Đàm
						</div>
					</div>
					<div class="flex flex1">
						<div class="flex1col1">Tuyến 38: </div>
						<div class="flex1col2">
							BĐX Nam Thăng Long- ĐTC Cầu Giấy- Kim Mã- Lê Duẩn- Bạch Mai- Minh Khai- Tam Trinh- Mai Động
						</div>
					</div>
					<div class="flex flex1">
						<div class="flex1col1">Tuyến 52: </div>
						<div class="flex1col2">
							CV Thống Nhất- Đại Cồ Việt- Minh Khai- Nguyễn Văn Linh- Lệ Chi
						</div>
					</div>
					<div class="flex flex1">
						<div class="flex1col1">Tuyến 52: </div>
						<div class="flex1col2">
							CV Thống Nhất- Bà Triệu- Bạch Mai- Minh Khai- Thạch Bàn- KĐT Ecopark- Đường 179- Ỷ Lan- Đặng Xá (Gia Lâm).
						</div>
					</div>
					<h5>Đến Vincom Bà Triệu xuống xe, đi thẳng 50m là đến nơi.</h5>
				</div>
				<div class="address-bus">
					<h4>
						<img src="{{ asset('public/images/desktop/icon-11.jpg') }}" alt=""> 
						Làm thế nào để đi taxi hoặc tự lái xe đến phòng khám.Cung cấp chỗ đỗ xe miễn phí.? 
						<a href="">Bấm vào tư vấn >></a>
					</h4>
					<h3>Đi taxi hoặc tự lái xe</h3>
					<p>Hãy trực tiếp đến 193C1 Bà Triệu- Quận Hai Bà Trưng- Hà Nội, nếu như không biết đường, có thể gọi đến điện thoại tư vấn 1800-6181 để hỏi, phòng khám có chỗ đỗ xe miễn phí, thuận tiện cho bạn đỗ xe.</p>
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