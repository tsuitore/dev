$(function(){

	var count = 0;

	$('.header').on('click', '#menu', function(e) {
		if(count%2 == 0) {
			$(this).addClass('is-open');
			$('.header .fade').fadeIn('slow');
			$('.catch').fadeOut('fast');
		} else {
			$('.header .fade').fadeOut('fast');
			$(this).removeClass('is-open');
			$('.catch').fadeIn('fast');
		}
		count++;
	});


	$('#tab-menu li').on('click', function(){
		if($(this).not('active')){
		  // タブメニュー
		  $(this).addClass('active').siblings('li').removeClass('active');
		  // タブの中身
		  var index = $('#tab-menu li').index(this);
		  $('#tab-box div').eq(index).addClass('active').siblings('div').removeClass('active');
		}
	});

});
