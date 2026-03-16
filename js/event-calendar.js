// 矢印アニメーション
function arrow() {
    $('.kids-arrow-short').animate({
        left: '3px'
    }, 1000).animate({
        left: '-3px'
    }, 1000);
    // setTimeout(arrow(), 1600);
}
function arrowLong() {
  $('.kids-arrow-long').animate({
      left: '3px'
  }, 1000).animate({
      left: '-3px'
  }, 1000);
  // setTimeout(arrowLong(), 1600);
}


$(function() {
  // arrow();


  $('.kids-calendar-event p.check').on('click', function() {
    $('.kids-arrow-short').hide();
    $('.time-zone-content').delay(100).fadeIn(1000);
  });

$('.fc-event-container .check').on('click', function() {
  $('.kids-arrow-short').hide();
  $('.time-zone-content').delay(100).fadeIn(1000);
});




  $('.time-zone td').on('click', function() {
    $('.kids-arrow-long').hide();


    var adjust = -200;
    $('.result-content').delay(100).fadeIn(1000, function() {
      var position = $('.result-content').offset().top + adjust;
      $('html, body').animate({
        scrollTop: position
      }, 1000);
      return false;
    });
  });

});
