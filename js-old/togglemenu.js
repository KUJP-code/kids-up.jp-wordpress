$(function(){
			$('#nav_toggle').click(function(){
						$("header").toggleClass('open');
						$("#nav-top").toggleClass('open');
						$("nav").slideToggle(500);
					});
 
		});