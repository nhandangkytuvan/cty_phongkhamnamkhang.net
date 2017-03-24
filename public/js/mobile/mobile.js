$(document).ready(function() {
	$('footer .row.flex2').scrollToFixed( { bottom: 0} );
    $('#my_popup').popup({
        blur:false,
        transition: 'all 0.3s',
        scrolllock: false,
        background: false,
        backgroundactive:false,
        onclose: function() {setTimeout(showchat, 40000);}
    });
    var d = new Date();
    var gio = d.getHours();
    var phut = d.getMinutes();
    if((7<gio&&gio<22)||(gio==22&&phut<=30)||(gio==7&&phut>=30)){
        setTimeout(showchat, 15000);
    }
    // 

    $('.home .row3 .flex1col1').hover(function() {
        var index = $(this).index();
        $(this).addClass('active');
        $(this).siblings('div').removeClass('active');
        $('.home .row3 .tab-contents-1').children('div').eq(index).addClass('active');
        $('.home .row3 .tab-contents-1').children('div').eq(index).siblings('div').removeClass('active');
    }, function() {
        
    });

    // 
    $('.footer-toolbar').scrollToFixed( { bottom: 0} );
    //
    setInterval(alertFunc, 5000);
});
function showchat() {
    $('#my_popup').popup('show');
}
function alertFunc() {
    var obj = $('.home .row3 .flex1col1.active');
    var index = obj.next().index();
    obj.removeClass('active');
    if(obj.next().length){
        obj.next().addClass('active');
        $('.home .row3 .tab-contents-1').children('div').eq(index).addClass('active');
        $('.home .row3 .tab-contents-1').children('div').eq(index).siblings('div').removeClass('active');
    }
    else{
        $('.home .row3 .flex1col1').first().addClass('active');
        $('.home .row3 .tab-contents-1').children('div').first().addClass('active');
        $('.home .row3 .tab-contents-1').children('div').first().siblings('div').removeClass('active');
    }
}

$(function(){
    // $('menu .flex1col1 >.box').css({'height':($('menu .flex1col1').height())+'px'});
    // $('main .flex1col1 >.box').css({'height':($('main .flex1col1').height())+'px'});
    // $('.sualoipvtruong .lists .flex3col1 >.box').css({'height':($('.sualoipvtruong .lists .flex3col1').height())+'px'});
    // $('.sualoipvtruong .lists .flex4col1 >.box').css({'height':($('.sualoipvtruong .lists .flex4col1').height())+'px'});
    // $('.sualoipvtruong .lists .flex2col1 >.box').css({'height':($('.sualoipvtruong .lists .flex2col1').height())+'px'});
    // $(window).resize(function(){
    //     $('menu .flex1col1 >.box').css({'height':($('menu .flex1col1').height())+'px'});
    //     $('main .flex1col1 >.box').css({'height':($('main .flex1col1').height())+'px'});
    //     $('.sualoipvtruong .lists .flex3col1 >.box').css({'height':($('.sualoipvtruong .lists .flex3col1').height())+'px'});
    //     $('.sualoipvtruong .lists .flex4col1 >.box').css({'height':($('.sualoipvtruong .lists .flex4col1').height())+'px'});
    //     $('.sualoipvtruong .lists .flex2col1 >.box').css({'height':($('.sualoipvtruong .lists .flex2col1').height())+'px'});
    // });
});