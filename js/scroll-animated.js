// スクロールしたらアニメーション
$(window).on('load scroll', function(){

  var elem = $('.animated');

  elem.each(function () {

    var isAnimate = $(this).data('animated');
    var elemOffset = $(this).offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();

    if(scrollPos > elemOffset - wh + (wh / 2)){
      $(this).addClass(isAnimate);
    }else{
      $(this).removeClass(isAnimate);
    }
  });

});