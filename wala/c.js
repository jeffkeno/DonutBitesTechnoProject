$(document).ready(function(){
 
				$('.lightboxtwo').click(function(){
					$('.backdroptwo, .boxtwo').animate({'opacity':'.50'}, 300, 'linear');
					$('.boxtwo').animate({'opacity':'1.00'}, 300, 'linear');
					$('.backdroptwo, .boxtwo').css('display', 'block');
				});
 
				$('.closetwo').click(function(){
					close_box();
				});
 
				$('.backdroptwo').click(function(){
					close_box();
				});
 
			});
 
			function close_box()
			{
				$('.backdroptwo, .boxtwo').animate({'opacity':'0'}, 300, 'linear', function(){
					$('.backdroptwo, .boxtwo').css('display', 'none');
				});
			}