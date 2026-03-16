// スライダーTOPFV.SEASONAL EVENT,NEWS,COLUMN
$(function() {
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
	autoplay: false,
    autoplaySpeed: 2500,
    asNavFor: '.slider-nav'
  });  
  $('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
	autoplay: false,  
    focusOnSelect: true,
  });
  $('.slider-wide').slick({
    dots: true,
    centerMode: false,
    centerPadding: '60px',
    slidesToShow: 4,
	autoplay: false,
    autoplaySpeed: 0,
    //cssEase: 'linear',
    //speed: 5000,  
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 750,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
  $('.slider-wide1').slick({
    dots: true,
    centerMode: false,
    centerPadding: '60px',
    slidesToShow: 2,
    responsive: [
      {
        breakpoint: 750,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  }); 
});