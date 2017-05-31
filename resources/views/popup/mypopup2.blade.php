<link rel="stylesheet" type="text/css" href="{{ asset('public/css/popup/mypopup2.css') }}">
<div class="myoverlay" id="myoverlay2">
	<div class="mypopup2" id="mypopup2">
		<div class="heading pos-relative">
			<div class="dis-table width-100">
				<div class="table-cell">
					<img src="{{ asset('public/images/popup/mypopup2/mypopup-1.png') }}" alt="" class="center-block">
				</div>
			</div>
		</div>
		<div class="panel-body">
			<div class="inputphone text-center">
				<div class="bg">
					<form action="{{ url('sendmail') }}" method="post" id="formMailSend2">
						{{ csrf_field() }}
						<input type="number" name="phone" placeholder="Nhập số điện thoại để tư vấn" required>
						<button type="submit">gửi</button>
					</form>
				</div>
			</div>
			<div class="text-des text-center text-uppercase">
				<div class="bg">
					<span class="color1">Số điện thoại</span><br><span>hoàn toàn được bảo mật</span>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$('#formMailSend2').ajaxForm(function() { 
	            alert("Cảm ơn bạn đã đăng ký!"); 
	            $('#formMailSend2').resetForm();
	            $('#mypopup2').popup('hide');
	        });	
		});
	</script>
	<div class="pos-absolute mypopup2_close">
		<img src="{{ asset('public/images/popup/mypopup1/mypopup-2.png') }}" alt="">
	</div>
</div>