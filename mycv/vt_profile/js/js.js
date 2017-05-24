$(document).ready(function() {
	$(".navbar-brand").click(function(event) {
		$(".content div.panel").slideDown(function(){
			$('body .navbar-default .navbar-collapse ul li').removeClass('active');
		});
	});
	$('body .navbar-default .navbar-collapse ul li a').click(function(event) {
		$(this).parent('li').addClass('active');
		$(this).parent('li').siblings('li').removeClass('active');
		var id = $(this).attr('data-target');
		//$(id).siblings('div').slideUp('slow');
		//$(id).slideDown('slow');
		//var myModal = $("#myModal");
		var html = '<div class="panel-footer">'+
						'<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+
					'</div>';
		$(id).clone().append($(html)).prependTo("#myModal div.modal-dialog");
		$("#myModal").find('div.collapse').addClass('in');
		$("#myModal").find('span.fa.fa-angle-down').remove();
		$("#myModal").modal('show');
		$('#myModal').on('hidden.bs.modal', function (e) {
		  	$('#myModal div.modal-dialog').empty();
		})
	});


});