@extends('layout.mobile')
@section('title')
    <title>{{ $data['term']->term_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ $setting->web_logo }}">
<meta id="metaDescription" name="description" content="{{ $data['term']->term_name }}">
<meta id="metaKeywords" name="keywords" content="{{ $data['term']->term_keyword }}">
@endsection('keyword')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-pagination.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-term.css') }}">
@endsection('css')
@section('content')
	<div class="container">
		<div class="menu">
			<div class="flex flex-wrap-wrap justify-content-center">
				<div class="col1 flex justify-content-center">
					<div class="col1col1 flex align-items-center justify-content-between">
						<div class="width-100"><h5><a href=""><i class="bg bg1"></i></a></h5></div>
					</div>
					<div class="col1col2 flex align-items-center justify-content-between">
						<div class="width-100">
							<h5>
								<a href="">Giới thiệu phòng khám</a></h3>
							</h5>
						</div>
					</div>
				</div>
				<div class="col1 flex justify-content-center">
					<div class="col1col1 flex align-items-center justify-content-between">
						<div class="width-100"><h5><a href=""><i class="bg bg2"></i></a></h5></div>
					</div>
					<div class="col1col2 flex align-items-center justify-content-between">
						<div class="width-100">
							<h5>
								<a href="">Tư vấn bác sĩ</a></h5>
							</h5>
						</div>
					</div>
				</div>
				<div class="col1 flex justify-content-center">
					<div class="col1col1 flex align-items-center justify-content-between">
						<div class="width-100"><h5><a href=""><i class="bg bg3"></i></a></h5></div>
					</div>
					<div class="col1col2 flex align-items-center justify-content-between">
						<div class="width-100">
							<h5>
								<a href="">Liệu pháp uy tín</a></h5>
							</h5>
						</div>
					</div>
				</div>
				<div class="col1 flex justify-content-center">
					<div class="col1col1 flex align-items-center justify-content-between">
						<div class="width-100"><h5><a href=""><i class="bg bg4"></i></a></h5></div>
					</div>
					<div class="col1col2 flex align-items-center justify-content-between">
						<div class="width-100">
							<h5>
								<a href="">Bệnh án điển hình</a></h5>
							</h5>
						</div>
					</div>
				</div>
				<div class="col1 flex justify-content-center">
					<div class="col1col1 flex align-items-center justify-content-between">
						<div class="width-100"><h5><a href=""><i class="bg bg5"></i></a></h5></div>
					</div>
					<div class="col1col2 flex align-items-center justify-content-between">
						<div class="width-100">
							<h5>
								<a href="">Đặt hẹn nhanh</a></h5>
							</h5>
						</div>
					</div>
				</div>
				<div class="col1 flex justify-content-center">
					<div class="col1col1 flex align-items-center justify-content-between">
						<div class="width-100"><h5><a href=""><i class="bg bg6"></i></a></h5></div>
					</div>
					<div class="col1col2 flex align-items-center justify-content-between">
						<div class="width-100">
							<h5>
								<a href="">Chỉ đường</a></h5>
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="term-name">
			<h3 class="text-center"><a href="">Liệt dương <i class="fa fa-chevron-circle-down"></i></a></h3>
			<div class="flex justify-content-around">
				<div class="col1 flex justify-content-center align-items-center">
					<h5><a href="">Liệt dương</a></h5>
				</div>
				<div class="col1 flex justify-content-center align-items-center">
					<h5><a href="">Xuất tinh sớm</a></h5>
				</div>
				<div class="col1 flex justify-content-center align-items-center">
					<h5><a href="">Rối loạn cương dương</a></h5>
				</div>
				<div class="col1 flex justify-content-center align-items-center">
					<h5><a href="">Rối loạn xuất tinh</a></h5>
				</div>
			</div>
		</div>
		<div class="crub">
			<div class="flex">
				<div class="col1 flex justify-content-center align-items-center">
					<h5><a href="">Trang trước <i class="fa fa-angle-right"></i> tên bài viết</a></h5>
				</div>
			</div>
		</div>
		<div class="post-name">
			<h1 class="text-center"><a href="">Bệnh lý đặc trưng của liệt dương là gì?</a></h1>
			<p class="text-justify post-description">
				Liệt dương nam giới là bệnh rối loạn cương dương, chỉ khi có ham muốn dương vật không thể cương cứng hoặc cương cứng không được lâu, hoặc tuy có cương cứng nhưng chỉ ở mức độ nhất định, nhưng không thể kéo dài thời gian quan hệ, từ đó gây trở ngại đến quan hệ tình dục hoặc không thể hoàn thành quá trình quan hệ…<a href="">Chi tiết</a>
			</p>
			<div class="flex trieu-trung justify-content-around">
				<div class="col1 flex justify-content-center align-items-center">
					<h5><a href="">Cương cứng không lâu</a></h5>
				</div>
				<div class="col1 flex justify-content-center align-items-center">
					<h5><a href="">Không thể cương cứng</a></h5>
				</div>
				<div class="col1 flex justify-content-center align-items-center">
					<h5><a href="">Cương cứng khó khăn</a></h5>
				</div>
				<div class="col1 flex justify-content-center align-items-center">
					<h5><a href="">Quy đầu không cứng</a></h5>
				</div>
			</div>
		</div>
		<div class="posts">
			<div class="post">
				<h4><a href=""><i class="fa fa-plus-square"></i> Tiêu đề bài viết</a></h4>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, nemo atque. Quod quos voluptate eum repellendus dicta temporibus, unde eius.dus dicta temporibus,dus dicta temporibus,
				</p>
			</div>
			<div class="post">
				<h4><a href=""><i class="fa fa-plus-square"></i> Tiêu đề bài viết</a></h4>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, nemo atque. Quod quos voluptate eum repellendus dicta temporibus, unde eius.dus dicta temporibus,dus dicta temporibus,
				</p>
			</div>
			<div class="post">
				<h4><a href=""><i class="fa fa-plus-square"></i> Tiêu đề bài viết</a></h4>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, nemo atque. Quod quos voluptate eum repellendus dicta temporibus, unde eius.dus dicta temporibus,dus dicta temporibus,
				</p>
			</div>
			<div class="post">
				<h4><a href=""><i class="fa fa-plus-square"></i> Tiêu đề bài viết</a></h4>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, nemo atque. Quod quos voluptate eum repellendus dicta temporibus, unde eius.dus dicta temporibus,dus dicta temporibus,
				</p>
			</div>
		</div>
		<div class="posts-lienquan">
			<div class="post">
				<h4><a href=""><i class="fa fa-plus-square"></i> Bài viết liên quan</a></h4>
				<ul>
					<li><a href="">【 lorem 】 Lorem ipsum dolor sit.</a></li>
					<li><a href="">【 lorem 】 Lorem ipsum dolor sit.</a></li>
					<li><a href="">【 lorem 】 Lorem ipsum dolor sit.</a></li>
					<li><a href="">【 lorem 】 Lorem ipsum dolor sit.</a></li>
				</ul>
			</div>
		</div>
		<div class="my_pagination">
			<ul class="pagination">
			    <li>
			      <a href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li>
			      <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
		  </ul>
		</div>
		<div class="uudiem-thuonghieu">
			<div class="flex2 flex">
				<div class="flex2col1">
					<h5>Ưu điểm của thương hiệu</h5>
				</div>
				<div class="flex2col1">
					<h5>/</h5>
				</div>
				<div class="flex2col1">
					<h5>Brand advantage</h5>
				</div>
			</div>
			<div class="flex justify-content-between first">
				<div class="col1 flex">
					<div class="col1col1 flex justify-content-center align-items-center">
						<h5><i class="bg bg1"></i></h5>
					</div>
					<div class="col1col2 flex justify-content-center align-items-center">
						<h5><a href="">Trình độ phòng khám</a></h5>
					</div>
				</div>
				<div class="col2 flex justify-content-center align-items-center">
					<p class="text-justify">
						Phòng khám chuyên khoa Nam Khang Hà Nội là phòng khám nam khoa tại Hà Nội với mô hình lớn, hiện đại hóa có trình độ y tế chuyên nghiệp đã được đăng kí với Sở Y tế nhà nước.
					</p>
				</div>
			</div>
			<div class="flex justify-content-between">
				<div class="col1 flex">
					<div class="col1col1 flex justify-content-center align-items-center">
						<h5><i class="bg bg2"></i></h5>
					</div>
					<div class="col1col2 flex justify-content-center align-items-center">
						<h5><a href="">Vinh dự của phòng khám</a></h5>
					</div>
				</div>
				<div class="col2 flex justify-content-center align-items-center">
					<p class="text-justify">
						Từ khi thành lập đến nay, phòng khám vinh dự được nhiều bệnh nhân khen ngợi, công nhận, được đông đảo quần chúng nhân dân đón nhận.
					</p>
				</div>
			</div>
			<div class="flex justify-content-between">
				<div class="col1 flex">
					<div class="col1col1 flex justify-content-center align-items-center">
						<h5><i class="bg bg3"></i></h5>
					</div>
					<div class="col1col2 flex justify-content-center align-items-center">
						<h5><a href="">Bác sĩ phòng khám</a></h5>
					</div>
				</div>
				<div class="col2 flex justify-content-center align-items-center">
					<p class="text-justify">
						Được bác sĩ trong và ngoài nước thăm khám, đảm bảo mỗi một bệnh nhân đều có thể được hưởng dịch vụ, bác sĩ chuyên nghiệp.
					</p>
				</div>
			</div>
			<div class="flex justify-content-between">
				<div class="col1 flex">
					<div class="col1col1 flex justify-content-center align-items-center">
						<h5><i class="bg bg4"></i></h5>
					</div>
					<div class="col1col2 flex justify-content-center align-items-center">
						<h5><a href="">Liệu pháp điều trị</a></h5>
					</div>
				</div>
				<div class="col2 flex justify-content-center align-items-center">
					<p class="text-justify">
						Hợp tác theo chiều sâu với nhiều mô hình y tế đỉnh cao trong nước, nhập và nghiên cứu 10 kĩ thuật lớn, thành lập 6 khoa nam khoa trọng điểm lớn.
					</p>
				</div>
			</div>
			<div class="flex justify-content-between">
				<div class="col1 flex">
					<div class="col1col1 flex justify-content-center align-items-center">
						<h5><i class="bg bg5"></i></h5>
					</div>
					<div class="col1col2 flex justify-content-center align-items-center">
						<h5><a href="">Đảm bảo riêng tư</a></h5>
					</div>
				</div>
				<div class="col2 flex justify-content-center align-items-center">
					<p class="text-justify">
						Mô hình thăm khám “một bác sĩ một bệnh nhân”, đảm bảo riêng tư cho bệnh nhân, nâng cao chất lượng thăm khám, điều trị.
					</p>
				</div>
			</div>
			<div class="flex justify-content-between">
				<div class="col1 flex">
					<div class="col1col1 flex justify-content-center align-items-center">
						<h5><i class="bg bg6"></i></h5>
					</div>
					<div class="col1col2 flex justify-content-center align-items-center">
						<h5><a href="">Bệnh án điển hình</a></h5>
					</div>
				</div>
				<div class="col2 flex justify-content-center align-items-center">
					<p class="text-justify">
						Thống kê đến năm 2016, bệnh án bệnh nhân nam giới hồi phục tại Nam Khang lên tới 56800 hồ sơ, tất cả đều đã hồi phục.
					</p>
				</div>
			</div>
		</div>
		<div class="comments">
			<div class="flex2 flex">
				<div class="flex2col1">
					<h5>Bình luận của bệnh nhân</h5>
				</div>
				<div class="flex2col1">
					<h5>/</h5>
				</div>
				<div class="flex2col1">
					<h5>Comments</h5>
				</div>
			</div>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex align-items-center justify-content-center">
					<h5>Tổng điểm đánh giá : 5</h5>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<h5>Dịch vụ : 5</h5>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<h5>Môi trường : 5</h5>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<h5>Hiệu quả : 5</h5>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<h5><a href="">Tôi muốn bình luận</a></h5>
				</div>
			</div>
			<div class="list-comments">
				<div class="comment">
					<h5>Người dùng tại Hà Nội  Điểm đánh giá 5 điểm</h5>
					<p class="text-justify">
						Cắt bao quy đầu mất khoảng hơn 10 phút, nhẹ nhàng đơn giản, cắt xong có thể về nhà, lễ tân của phòng khám rất tuyệt, luôn hướng dẫn tận nơi.
					</p>
				</div>
				<div class="comment">
					<h5>Người dùng tại Hà Nội  Điểm đánh giá 5 điểm</h5>
					<p class="text-justify">
						Cắt bao quy đầu mất khoảng hơn 10 phút, nhẹ nhàng đơn giản, cắt xong có thể về nhà, lễ tân của phòng khám rất tuyệt, luôn hướng dẫn tận nơi.
					</p>
				</div>
				<div class="comment">
					<h5>Người dùng tại Hà Nội  Điểm đánh giá 5 điểm</h5>
					<p class="text-justify">
						Cắt bao quy đầu mất khoảng hơn 10 phút, nhẹ nhàng đơn giản, cắt xong có thể về nhà, lễ tân của phòng khám rất tuyệt, luôn hướng dẫn tận nơi.
					</p>
				</div>
				<div class="comment">
					<h5>Người dùng tại Hà Nội  Điểm đánh giá 5 điểm</h5>
					<p class="text-justify">
						Cắt bao quy đầu mất khoảng hơn 10 phút, nhẹ nhàng đơn giản, cắt xong có thể về nhà, lễ tân của phòng khám rất tuyệt, luôn hướng dẫn tận nơi.
					</p>
				</div>
				<div class="comment">
					<h5>Người dùng tại Hà Nội  Điểm đánh giá 5 điểm</h5>
					<p class="text-justify">
						Cắt bao quy đầu mất khoảng hơn 10 phút, nhẹ nhàng đơn giản, cắt xong có thể về nhà, lễ tân của phòng khám rất tuyệt, luôn hướng dẫn tận nơi.
					</p>
				</div>
				<div class="comment">
					<h5>Người dùng tại Hà Nội  Điểm đánh giá 5 điểm</h5>
					<p class="text-justify">
						Cắt bao quy đầu mất khoảng hơn 10 phút, nhẹ nhàng đơn giản, cắt xong có thể về nhà, lễ tân của phòng khám rất tuyệt, luôn hướng dẫn tận nơi.
					</p>
				</div>
				<div class="comment">
					<h5>Người dùng tại Hà Nội  Điểm đánh giá 5 điểm</h5>
					<p class="text-justify">
						Cắt bao quy đầu mất khoảng hơn 10 phút, nhẹ nhàng đơn giản, cắt xong có thể về nhà, lễ tân của phòng khám rất tuyệt, luôn hướng dẫn tận nơi.
					</p>
				</div>
				<div class="comment">
					<h5>Người dùng tại Hà Nội  Điểm đánh giá 5 điểm</h5>
					<p class="text-justify">
						Cắt bao quy đầu mất khoảng hơn 10 phút, nhẹ nhàng đơn giản, cắt xong có thể về nhà, lễ tân của phòng khám rất tuyệt, luôn hướng dẫn tận nơi.
					</p>
				</div>
				<div class="comment">
					<h5>Người dùng tại Hà Nội  Điểm đánh giá 5 điểm</h5>
					<p class="text-justify">
						Cắt bao quy đầu mất khoảng hơn 10 phút, nhẹ nhàng đơn giản, cắt xong có thể về nhà, lễ tân của phòng khám rất tuyệt, luôn hướng dẫn tận nơi.
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection('content')