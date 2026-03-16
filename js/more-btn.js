// 続きを読むボタン
$(function(){
  $(".more").on("click", function() {
    $(this).toggleClass("on-click");
    $(".txt-hide").slideToggle(1000);
  });
}); 

$(function(){
  $(".more1").on("click", function() {
    $(this).toggleClass("on-click");
    $(".txt-hide1").slideToggle(1000);
  });
}); 