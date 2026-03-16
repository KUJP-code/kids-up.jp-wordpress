$(function() {
    var topBtn = $('.l-floating__sns');
    //ボタンを非表示にする
    topBtn.hide();
    //スクロールしてページトップから100に達したらボタンを表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
			//フェードインで表示
            topBtn.fadeIn();
        } else {
			//フェードアウトで非表示
            topBtn.fadeOut();
        }
    });
    //フッター手前でボタンを止める（ここを追加する）
    $(window).scroll(function () {
        var height = $(document).height(); //ドキュメントの高さ 
        var position = $(window).height() + $(window).scrollTop(); //ページトップから現在地までの高さ
        var footer = $("footer").height(); //フッターの高さ
        if ( height - position  < footer ) { 
            topBtn.css({
              bottom : 30
            });
        } else { 
            topBtn.css({
              position : "fixed",
              bottom : 0
            });
        }
    });
});

$(function() {
    var topBtn = $('.to-top');
    //ボタンを非表示にする
    topBtn.hide();
    //スクロールしてページトップから100に達したらボタンを表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
			//フェードインで表示
            topBtn.fadeIn();
        } else {
			//フェードアウトで非表示
            topBtn.fadeOut();
        }
    });
    //フッター手前でボタンを止める（ここを追加する）
    $(window).scroll(function () {
        var height = $(document).height(); //ドキュメントの高さ 
        var position = $(window).height() + $(window).scrollTop(); //ページトップから現在地までの高さ
        var footer = $("footer").height(); //フッターの高さ
        if ( height - position  < footer ) { 
            topBtn.css({
              bottom : 30
            });
        } else { 
            topBtn.css({
              position : "fixed",
              bottom : 0
            });
        }
    });
    //スクロールしてトップへ戻る
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});