@extends('layout.chuyende-mobile')
<!-- title -->
@section('title')
	<title>Viêm bao quy đầu</title>
@endsection('title')
<!-- seo -->
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
<!-- css -->
@section('css')
<link rel="canonical" href="{{ url('chuyen-de/viem-bao-quy-dau') }}" />
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/viem-bao-quy-dau.css') }}">
@endsection('css')
<!-- logo -->
@section('logo')
<img src="{{ asset('public/images/chuyende/mobile/viembaoquydau/1.png') }}" class="center-block">
@endsection('logo')
<!-- doc -->
@section('doc')
<img src="{{ asset('public/images/chuyende/mobile/viembaoquydau/2.png') }}" alt="doc">
@endsection('doc')
<!-- banner -->
@section('banner')
	<img src="{{ asset('public/images/chuyende/mobile/viembaoquydau/3.png') }}" alt="Phòng khám Nam Khang" class="center-block img-responsive">
@endsection('banner')
<!-- content -->
@section('content')
	<div class="container">
		<div class="row1 text-center">
			Triệu chứng bất thường của quy đầu
			Cảnh báo bệnh <strong>VIÊM BAO QUY ĐẦU!</strong>
		</div>
	</div>
@endsection('content')
@section('toolbar')
	<div class="container footer-toolbar">
		<div class="dis-table width-100">
			<div class="table-cell cell1">
				<div class="dis-table width-100">
					<div class="table-cell">
						<h3 class="text-center"><a href="tel:18006181"><i class="bg bg1"></i></a></h3>
					</div>
					<div class="table-cell">
						<h4 class="text-center"><a href="tel:18006181">Điện thoại tư vấn</a></h4>
					</div>
				</div>
			</div>
			<div class="table-cell cell2">
				<div class="dis-table width-100">
					<div class="table-cell">
						<h3 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg bg2"></i></a></h3>
					</div>
					<div class="table-cell">
						<h4 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a></h4>
					</div>
				</div>
			</div>
			<div class="table-cell cell1">
				<div class="dis-table width-100">
					<div class="table-cell">
						<h3 class="text-center"><a href="#top"><i class="bg bg3"></i></a></h3>
					</div>
					<div class="table-cell">
						<h4 class="text-center"><a href="{{ url('/') }}">Quay lại</a></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection('toolbar')