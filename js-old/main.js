;(function () {

	'use strict';

	// OffCanvass
	var offCanvass = function() {
		$('body').on('click', '.js-kids-nav-toggle', function(event){

			var $this = $(this);

			$('#kids-offcanvass').toggleClass('kids-awake');
			$('#kids-page, #kids-menu').toggleClass('kids-sleep');

			$('#kids-offcanvass').css('z-index',990);  //メニューを前に
			$('.kids-nav-toggle').css('z-index',1000); //メニューボタンを前に

			if ( $('#kids-offcanvass').hasClass('kids-awake') ) {
				$this.addClass('active');
			} else {
				$this.removeClass('active');
			}
			event.preventDefault();

		});
	};

	//-------一定の高さでヘッダーをアニメート-------//

	(function($) {
	    $(function() {
	        var $header = $('#kids-menu');
	        var $SiteTitle = $('.navbar-brand img');
	        var $SiteDescription = $('.navbar-brand-sub');
					var $menuCircle = $('.menu_circle');
					var $contentBar = $('.content_bar');


	        $(window).scroll(function() {
	            if ($(window).scrollTop() > 50) {
	                //$header.css({'background':'rgba(239,130,0,0.6)','padding':'0.2em'});
									$header.css({'background':'rgba(128,180,207,0.6)','padding':'0.2em'});
	                $SiteTitle.css({'width':'80%'});
	                $SiteDescription.css({'margin-top':'-20px','opacity':'1'});
									//$menuCircle.css({'border-width':'0','border-color':'rgba(128,180,207,0)'});
									$menuCircle.css({'border-width':'0','border-color':'rgba(239,130,0,0)'});
									$contentBar .css({'display':'flex'});

	            } else {
	                $header.css({'color':'#666','background':'rgba(255,255,255,0)','padding':'1em'});
	                $SiteTitle.css({'width':'100%'});
									$SiteDescription.css({'margin-top':'0','opacity':'0'});
									//$menuCircle.css({'border-width':'50px','border-color':'rgba(128,180,207,1)'});
									$menuCircle.css({'border-width':'50px','border-color':'rgba(239,130,0,1)'});
									$contentBar .css({'display':'none'});;
	            }
	        });
					//固定ボタンフッターで消す//
					$(window).scroll(function() {
						if ($(window).scrollTop() > 4000) {
							$contentBar .css({'display':'none'});
						}
					});
	        });
	})(jQuery);


	//-------コースページのフッターコンテンツのモーダル-------//

	$(function radio(){
      $('.js-modal-open1').on('click',function(){
          $('.js-modal1').hide().fadeIn(500).css({"display": "block"});
					$('.youtube_url_1').attr('src', 'https://www.youtube.com/embed/avDTkvS7PJY');
          return false;
      });
      $('.js-modal-close').on('click',function(){
        $('.js-modal1').fadeIn(500).css({"display": "none"});
				$('.youtube_url_1').attr('src', '');
          return false;
      });
  });

	$(function groupLesson(){
			$('.js-modal-open2').on('click',function(){
					$('.js-modal2').hide().fadeIn(500).css({"display": "block"});
					return false;
			});
			$('.js-modal-close').on('click',function(){
				$('.js-modal2').fadeIn(500).css({"display": "none"});
					return false;
			});
	});

	$(function homework(){
			$('.js-modal-open3').on('click',function(){
					$('.js-modal3').hide().fadeIn(500).css({"display": "block"});
					$('.youtube_url_2').attr('src', 'https://www.youtube.com/embed/Es0Z0BK1Buo');
					return false;
			});
			$('.js-modal-close').on('click',function(){
				$('.js-modal3').fadeIn(500).css({"display": "none"});
				$('.youtube_url_2').attr('src', '');
					return false;
			});
	});

	$(function counseling(){
			$('.js-modal-open4').on('click',function(){
					$('.js-modal4').hide().fadeIn(500).css({"display": "block"});
					return false;
			});
			$('.js-modal-close').on('click',function(){
				$('.js-modal4').fadeIn(500).css({"display": "none"});
					return false;
			});
	});

	$(function video(){
      $('.js-modal-open5').on('click',function(){
          $('.js-modal5').hide().fadeIn(500).css({"display": "block"});
					$('.youtube_url_3').attr('src', 'https://www.youtube.com/embed/VE3cbOx38IQ');
          return false;
      });
      $('.js-modal-close').on('click',function(){
        $('.js-modal5').fadeIn(500).css({"display": "none"});
				$('.youtube_url_3').attr('src', '');
          return false;
      });
  });

	$(function live(){
      $('.js-modal-open6').on('click',function(){
          $('.js-modal6').hide().fadeIn(500).css({"display": "block"});
					$('.youtube_url_4').attr('src', 'https://www.youtube.com/embed/vJaNoVvy8rE');
          return false;
      });
      $('.js-modal-close').on('click',function(){
        $('.js-modal6').fadeIn(500).css({"display": "none"});
				$('.youtube_url_4').attr('src', '');
          return false;
      });
  });

//	// Single Page Nav
//	var clickMenu = function() {
//		$('a:not([class="external"])').click(function(){
//			var section = $(this).data('nav-section')
//		    $('html, body').animate({
//		        scrollTop: $('[data-section="' + section + '"]').offset().top
//		    }, 500);
//		    return false;
//		});
//	};

	// Owl Carousel
	var carouselTestimony = function() {

		var owl = $(".owl-carousel");

		owl.owlCarousel({
			items: 1,
		    margin: 0,
		    responsiveClass: true,
		    loop: true,
		    nav: true,
		    dots: true,
		    autoplay: true,
		    smartSpeed: 500,
			responsive:{
				0:{
					nav:false
				},
				480: {
					nav:false
				},
				768:{
					nav:false
				},
				1000:{
					nav:true,
				}
			},
		    navText: [
		      "<i class='icon-arrow-left owl-direction'></i>",
		      "<i class='icon-arrow-right owl-direction'></i>"
	     	]
		});
	};


//	var footerFixed = function() {
//	var fh = $('#kids-footer').innerHeight();
//		$('#kids-wrap').css({
//			marginBottom : fh + 'px'
//		});
//
//		if ( $(window).width() < 991 ) {
//			$('#kids-wrap').css({
//				marginBottom: ''
//			})
//		}
//
//		$(window).resize(function(){
//
//			var fh = $('#kids-footer').innerHeight();
//			$('#kids-wrap').css({
//				marginBottom : fh + 'px'
//			});
//
//			if ( $(window).width() < 991 ) {
//				$('#kids-wrap').css({
//					marginBottom: ''
//				})
//			}
//		});
//	};

	// Counter
	var counter = function() {
		$('.js-counter').countTo({
			formatter: function (value, options) {
		      	return value.toFixed(options.decimals);
		    },
		});
	};

	//  Faqs Accordion
	var faqsAccordion = function() {

		var faqAcc = $('.faq-accordion h3');

		// Click
		faqAcc.on('click', function(event){
			var $this = $(this);

			$('.faq-accordion').removeClass('active');
			$('.faq-accordion').find('.faq-body').slideUp(400, 'easeInOutExpo');

			if ( !$this.closest('.faq-accordion').find('.faq-body').is(':visible')) {
				$this.closest('.faq-accordion').addClass('active');
				$this.closest('.faq-accordion').find('.faq-body').slideDown(400, 'easeInOutExpo');
			} else {
				$this.closest('.faq-accordion').removeClass('active');
				$this.closest('.faq-accordion').find('.faq-body').slideUp(400, 'easeInOutExpo');
			}


			setTimeout(function(){
				// alert($this.closest('.faq-accordion.active').innerHeight());
				$('html, body').animate({
			        scrollTop: $this.closest('.faq-accordion.active').offset().top - 90
			    }, 500);
			}, 700);


			event.preventDefault();
			return false;

		});

	};

	// Click outside of offcanvass
	var mobileMenuOutsideClick = function() {
		$(document).click(function (e) {
	    var container = $("#kids-offcanvass, .js-kids-nav-toggle");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	    	if ( $('#kids-offcanvass').hasClass('kids-awake') ) {
	    		$('#kids-offcanvass').removeClass('kids-awake');
	    		$('#kids-page, #kids-menu').removeClass('kids-sleep');

	    		$('.js-kids-nav-toggle').removeClass('active');
	    	}
	    }
		});

		$(window).scroll(function(){
			var $menu = $('#kids-menu');

			if ( $(window).scrollTop() < 500 ) {
				$('#kids-offcanvass ul li').removeClass('active');
				$('#kids-offcanvass ul li').first().addClass('active');
			}


			if ( $(window).scrollTop() > 150 ) {
				if ( $('#kids-offcanvass').hasClass('kids-awake') ) {
		    		$('#kids-offcanvass').removeClass('kids-awake');
		    		$('#kids-page, #kids-menu').removeClass('kids-sleep');

		    		$('.js-kids-nav-toggle').removeClass('active');
		    	}
	    	}
		});
	};




	// Magnific Popup

	var magnifPopup = function() {
		$('.image-popup').magnificPopup({
			type: 'image',
			removalDelay: 300,
			mainClass: 'mfp-with-zoom',
			titleSrc: 'title',
			gallery:{
				enabled:true
			},
			zoom: {
				enabled: true, // By default it's false, so don't forget to enable it

				duration: 300, // duration of the effect, in milliseconds
				easing: 'ease-in-out', // CSS transition easing function

				// The "opener" function should return the element from which popup will be zoomed in
				// and to which popup will be scaled down
				// By defailt it looks for an image tag:
				opener: function(openerElement) {
				// openerElement is the element on which popup was initialized, in this case its <a> tag
				// you don't need to add "opener" option if this code matches your needs, it's defailt one.
				return openerElement.is('img') ? openerElement : openerElement.find('img');
				}
			}
		});
	};


	// Scroll Animations

	// Intro Animate
	var introWayPoint = function() {
		if ( $('#kids-hero').length > 0 ) {
			$('#kids-hero').waypoint( function( direction ) {

				if( direction === 'down' && !$(this).hasClass('animated') ) {

					setTimeout(function(){
						$('.intro-animate-1').addClass('fadeInUp animated');
					}, 100);
					setTimeout(function(){
						$('.intro-animate-2').addClass('fadeInUp animated');
						$('.intro-animate-5').addClass('active');
					}, 400);
					setTimeout(function(){
						$('.intro-animate-3').addClass('fadeInUp animated');
						$('.intro-animate-4').addClass('fadeInUp animated');
					}, 700);

					$(this.element).addClass('animated');

				}
			} , { offset: '75%' } );
		}
	};

	var HeaderToggle = function() {

		var $this = $( '#kids-main' );


		$this.waypoint(function(direction) {

			if( direction === 'down' ) {
				$('body').addClass('scrolled');
			}
			else if( direction === 'up' ){
				$('body').removeClass('scrolled');
			}

		}, { offset: '-10vh' } );

	};


	// Client Animate
	var clientAnimate = function() {
		if ( $('#kids-clients').length > 0 ) {
			$('#kids-clients .to-animate').each(function( k ) {

				var el = $(this);

				setTimeout ( function () {
					el.addClass('fadeIn animated');
				},  k * 200, 'easeInOutExpo' );

			});
		}
	};
	var clientWayPoint = function() {
		if ( $('#kids-clients').length > 0 ) {
			$('#kids-clients').waypoint( function( direction ) {

				if( direction === 'down' && !$(this).hasClass('animated') ) {


					setTimeout(clientAnimate, 100);


					$(this.element).addClass('animated');

				}
			} , { offset: '75%' } );
		}
	};

	// Features Animate
	var featuresAnimate = function() {
		if ( $('#kids-features').length > 0 ) {
			$('#kids-features .to-animate').each(function( k ) {

				var el = $(this);

				setTimeout ( function () {
					el.addClass('fadeInUp animated');
				},  k * 200, 'easeInOutExpo' );

			});
		}
	};
	var featuresWayPoint = function() {
		if ( $('#kids-features').length > 0 ) {
			$('#kids-features').waypoint( function( direction ) {

				if( direction === 'down' && !$(this).hasClass('animated') ) {


					setTimeout(featuresAnimate, 100);


					$(this.element).addClass('animated');

				}
			} , { offset: '75%' } );
		}
	};


	// Features 2 Animate
	var features2AnimateTitle = function() {
		if ( $('#kids-features-2').length > 0 ) {
			$('#kids-features-2 .to-animate').each(function( k ) {

				var el = $(this);

				setTimeout ( function () {
					el.addClass('fadeIn animated');
				},  k * 200, 'easeInOutExpo' );

			});
		}
	};
	var features2WayPoint = function() {
		if ( $('#kids-features-2').length > 0 ) {
			$('#kids-features-2').waypoint( function( direction ) {

				if( direction === 'down' && !$(this).hasClass('animated') ) {


					setTimeout(features2AnimateTitle, 100);

					setTimeout(function(){
						$('.features-2-animate-2').addClass('fadeInUp animated');
					}, 800);

					setTimeout(function(){
						$('.features-2-animate-3').addClass('fadeInRight animated');
						$('.features-2-animate-5').addClass('fadeInLeft animated');
					}, 1200);
					setTimeout(function(){
						$('.features-2-animate-4').addClass('fadeInRight animated');
						$('.features-2-animate-6').addClass('fadeInLeft animated');
					}, 1400);


					$(this.element).addClass('animated');

				}
			} , { offset: '75%' } );
		}
	};


	var counterWayPoint = function() {
		if ( $('#kids-counter').length > 0 ) {
			$('#kids-counter').waypoint( function( direction ) {

				if( direction === 'down' && !$(this).hasClass('animated') ) {

					setTimeout(function(){
						$('.counter-animate').addClass('fadeInUp animated');
						counter();
					}, 100);


					$(this.element).addClass('animated');

				}
			} , { offset: '75%' } );
		}
	};


	// Products Animate
	var productsAnimate = function() {
		if ( $('#kids-products').length > 0 ) {
			$('#kids-products .to-animate').each(function( k ) {

				var el = $(this);

				setTimeout ( function () {
					el.addClass('fadeInUp animated');
				},  k * 200, 'easeInOutExpo' );

			});
		}
	};
	var productsWayPoint = function() {
		if ( $('#kids-products').length > 0 ) {
			$('#kids-products').waypoint( function( direction ) {

				if( direction === 'down' && !$(this).hasClass('animated') ) {




					setTimeout(function(){
						$('.product-animate-1').addClass('fadeIn animated');
					}, 200);

					setTimeout(function(){
						$('.product-animate-2').addClass('fadeIn animated');
					}, 400);

					setTimeout(productsAnimate, 800);


					$(this.element).addClass('animated');

				}
			} , { offset: '75%' } );
		}
	};

	// Call To Actions Animate
	var ctaAnimate = function() {
		if ( $('#kids-cta').length > 0 ) {
			$('#kids-cta .to-animate').each(function( k ) {

				var el = $(this);

				setTimeout ( function () {
					el.addClass('fadeInUp animated');
				},  k * 200, 'easeInOutExpo' );

			});
		}
	};
	var ctaWayPoint = function() {
		if ( $('#kids-cta').length > 0 ) {
			$('#kids-cta').waypoint( function( direction ) {

				if( direction === 'down' && !$(this).hasClass('animated') ) {



					setTimeout(ctaAnimate, 100);


					$(this.element).addClass('animated');

				}
			} , { offset: '75%' } );
		}
	};


	// Pricing Animate
	var pricingAnimate = function() {
		if ( $('#kids-pricing').length > 0 ) {
			$('#kids-pricing .to-animate').each(function( k ) {

				var el = $(this);

				setTimeout ( function () {
					el.addClass('fadeInUp animated');
				},  k * 200, 'easeInOutExpo' );

			});
		}
	};
	var pricingWayPoint = function() {
		if ( $('#kids-pricing').length > 0 ) {
			$('#kids-pricing').waypoint( function( direction ) {

				if( direction === 'down' && !$(this).hasClass('animated') ) {


					setTimeout(function(){
						$('.pricing-animate-1').addClass('fadeInUp animated');
					}, 100);
					setTimeout(function(){
						$('.pricing-animate-2').addClass('fadeInUp animated');
					}, 400);

					setTimeout(pricingAnimate, 800);


					$(this.element).addClass('animated');

				}
			} , { offset: '75%' } );
		}
	};



	// Features 3 Animate
	var features3Animate = function() {
		if ( $('#kids-features-3').length > 0 ) {
			$('#kids-features-3 .to-animate').each(function( k ) {

				var el = $(this);

				setTimeout ( function () {
					el.addClass('fadeInUp animated');
				},  k * 200, 'easeInOutExpo' );

			});
		}
	};
	var features3WayPoint = function() {
		if ( $('#kids-features-3').length > 0 ) {
			$('#kids-features-3').waypoint( function( direction ) {

				if( direction === 'down' && !$(this).hasClass('animated') ) {




					setTimeout(function(){
						$('.features3-animate-1').addClass('fadeIn animated');
					}, 200);

					setTimeout(function(){
						$('.features3-animate-2').addClass('fadeIn animated');
					}, 400);

					setTimeout(features3Animate, 800);


					$(this.element).addClass('animated');

				}
			} , { offset: '75%' } );
		}
	};

	// Features 3 Animate
	var faqsAnimate = function() {
		if ( $('#kids-faqs').length > 0 ) {
			$('#kids-faqs .to-animate').each(function( k ) {

				var el = $(this);

				setTimeout ( function () {
					el.addClass('fadeInUp animated');
				},  k * 200, 'easeInOutExpo' );

			});
		}
	};
	var faqsWayPoint = function() {
		if ( $('#kids-faqs').length > 0 ) {
			$('#kids-faqs').waypoint( function( direction ) {

				if( direction === 'down' && !$(this).hasClass('animated') ) {




					setTimeout(function(){
						$('.faqs-animate-1').addClass('fadeIn animated');
					}, 200);

					setTimeout(function(){
						$('.faqs-animate-2').addClass('fadeIn animated');
					}, 400);

					setTimeout(faqsAnimate, 800);


					$(this.element).addClass('animated');

				}
			} , { offset: '75%' } );
		}
	};

	// animate-box
	var contentWayPoint = function() {

		$('.animate-box').waypoint( function( direction ) {

			if( direction === 'down' && !$(this).hasClass('animated') ) {

				$(this.element).addClass('fadeInUp animated');

			}

		} , { offset: '75%' } );

	};


	// Reflect scrolling in navigation
	var navActive = function(section) {
		var el = $('#kids-offcanvass > ul');
		el.find('li').removeClass('active');
		el.each(function(){
			$(this).find('a[data-nav-section="'+section+'"]').closest('li').addClass('active');
		});
	};
	var navigationSection = function() {

		var $section = $('div[data-section]');

		$section.waypoint(function(direction) {
		  	if (direction === 'down') {
		    	navActive($(this.element).data('section'));

		  	}
		}, {
		  	offset: '150px'
		});

		$section.waypoint(function(direction) {
		  	if (direction === 'up') {
		    	navActive($(this.element).data('section'));
		  	}
		}, {
		  	offset: function() { return -$(this.element).height() + 155; }
		});

	};






	// Document on load.
	$(function(){

		magnifPopup();
		offCanvass();
		mobileMenuOutsideClick();
		// footerFixed();
		faqsAccordion();
		carouselTestimony();
//		clickMenu();
		HeaderToggle();

		// Animations
		introWayPoint();
		clientWayPoint();
		featuresWayPoint();
		features2WayPoint();
		counterWayPoint();
		productsWayPoint();
		features3WayPoint();
		ctaWayPoint();
		pricingWayPoint();
		faqsWayPoint();
		contentWayPoint();

		navigationSection();

	});


}());

// iPad and iPod detection
var isiPad = function(){
	return (navigator.platform.indexOf("iPad") != -1);
};

var isiPhone = function(){
		return (
		(navigator.platform.indexOf("iPhone") != -1) ||
		(navigator.platform.indexOf("iPod") != -1)
		);
};

var access = GetCookie('ACCESS');
var date   = GetCookie('DATE');

if(!access){access = 0;}

var ndate = new Date();
var year  = ndate.getYear();
var month = ndate.getMonth() + 1;
var day   = ndate.getDate();
var hour  = ndate.getHours();
var min   = ndate.getMinutes();
var sec   = ndate.getSeconds();
if(year < 1900){year += 1900;}
if(month < 10){month = '0' + month;}
if(day < 10){day = '0' + day;}
if(hour < 10){hour = '0' + hour;}
if(min < 10){min = '0' + min;}
if(sec < 10){sec = '0' + sec;}

SetCookie('ACCESS', ++access);
SetCookie('DATE', year + '/' + month + '/' + day + ' ' + hour + ':' + min + ':' + sec);

function GetCookie(key){
	var tmp = document.cookie + ";";
	var index1 = tmp.indexOf(key, 0);
	if(index1 != -1){
		tmp = tmp.substring(index1,tmp.length);
		var index2 = tmp.indexOf('=',0) + 1;
		var index3 = tmp.indexOf(';',index2);
		return(unescape(tmp.substring(index2,index3)));
	}
	return('');
}

function SetCookie(key, val){
	document.cookie = key + '=' + escape(val) + ';expires=Fri, 31-Dec-2030 23:59:59;';
}

jQuery(function($){
	var nowDate = new Date();
	var nowYear = nowDate.getFullYear();
	var nowMonth = nowDate.getMonth() + 1;
	var nowDay = nowDate.getDate();
	var nowHour = nowDate.getHours();
	var nowMin = nowDate.getMinutes();
	var nowSec = nowDate.getSeconds();


	if ( nowMonth < 10 ) {
		nowMonth = '0' + nowMonth;
	}
	if ( nowDay < 10 ) {
		nowDay = '0' + nowDay;
	}

	function compareDate(nowYear, nowMonth, nowDay, year, month, day) {
    var dt1 = new Date(year, month - 1, day);
    var dt2 = new Date(nowYear, nowMonth - 1, nowDay);
    var diff = dt1 - dt2;
    var diffDay = diff / 86400000;//1日は86400000ミリ秒
    return diffDay;
	}


	if(compareDate(year, month, day, nowYear, nowMonth, nowDay) < 1) {
			if(access < 2) {
				$('.modal').removeClass('hide');
				$('.modal').addClass('show');
				$('.modal').modal('toggle');
			}
	 } else {
			SetCookie('ACCESS', 0);
			SetCookie('DATE', null);
	 }
	 $('button.off-modal').on('click', function() {
		 $('.modal').removeClass('show');
		 $('.modal').addClass('hide');
		});

});
$(function () {
    setTimeout('reasonBabble()'); //アニメーションを実行
});

function reasonBabble() {
    $('.reason-babble').animate({
        marginTop: '-=10px'
    }, 800).animate({
        marginTop: '+=10px'
    }, 800);
    setTimeout('reasonBabble()', 1600); //アニメーションを繰り返す間隔
}

//説明会スケジュール取得
function getSchedule(start, end, obj) {
    var start_date       = start;
    var end_date         = end;
		var url              = obj["url"];
		var submit_school_id = obj["submit_school_id"];
    var _token = $('#token').val();

    //tokenをセット
    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : _token }
    });

    return $.ajax({
        type: 'post',
        scriptCharset: 'utf-8',
        url:  url,
        dataType:'json',
        data: {'start_date':start_date, 'end_date':end_date, 'submit_school_id':submit_school_id}
        });


};


$(function() {
	//対象の要素が無ければスルー
	if($('#appear').length == 0){
		return;
	}

  var winWidth = $('body').outerWidth(true);
  //画面下位置を取得
  var bottomPos = $('#appear').offset().top - $(window).height()/6*5;
  var showFlug = false;

  // ウィンドウより小さかったら開く
  panelOpen();
  $(window).scroll(function () {
        panelOpen();
  });

  //ウィンドウリサイズしたらwidth変更
  $(window).resize(function(){
        winWidth = $('body').outerWidth(true);
        bottomPos = $('#appear').offset().top - $(window).height()/6*5;
  });

  function panelOpen() {
   if ($(this).scrollTop() >= bottomPos) {
              if (showFlug == false) {
                    showFlug = true;
		                $('#appear').addClass('appear-effect');
              }
        }
  }
});

//多重submitを防止
$('form').submit(function(e){
  $('.submit_button').prop('disabled',true);
  $('.submit_button').html('通信中…');
});


(function($) {
	// lazyload
	$(".lazy").lazyload({
		effect: 'fadeIn',
		threshold: 500,
	});
	$("#kids-footer").lazyload({
		effect: 'fadeIn',
		threshold: 500,
	});

	//iphoneでposition:fixed 要素がスクロール中にz-indexを無視するバグ対応
	if(isiPhone){
		$('#kids-offcanvass').addClass('translate3d-on');
	}


})(jQuery);
