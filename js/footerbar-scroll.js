$(function() {
    var footerBtn = $('#footer-bar');
    //ボタンを非表示にする
    footerBtn.hide();
    //スマホでスクロールしてページトップから100に達したらボタンを表示
	if (window.matchMedia('(max-width: 767px)').matches) {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				//フェードインで表示
				footerBtn.fadeIn();
			} else {
				//フェードアウトで非表示
				footerBtn.fadeOut();
			}
		});
    }else{
		footerBtn.hide();
	}

    //フッター手前でボタンを止める（ここを追加する）
    $(window).scroll(function () {
        var height = $(document).height(); //ドキュメントの高さ 
        var position = $(window).height() + $(window).scrollTop(); //ページトップから現在地までの高さ
        var footer = $("footer").height(); //フッターの高さ
        if ( height - position  < footer ) { 
            footerBtn.css({
              bottom : 30
            });
        } else { 
            footerBtn.css({
              position : "fixed",
              bottom : 0
            });
        }
    });
});