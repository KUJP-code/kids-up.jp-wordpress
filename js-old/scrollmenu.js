$(function() {
	var headNav = $("#top-header");
	//scrollだけだと読み込み時困るのでloadも追加
	$(window).on('load scroll', function () {
		//現在の位置が500px以上かつ、クラスfixedが付与されていない時
		if($(this).scrollTop() > 400 && headNav.hasClass('m_fixed') == false) {
			//headerの高さ分上に設定
			headNav.css({"top": '-80px'});
			//クラスfixedを付与
			headNav.addClass('m_fixed');
			//位置を0に設定し、アニメーションのスピードを指定
			headNav.animate({"top": 0},400);
		}
		//現在の位置が300px以下かつ、クラスfixedが付与されている時にfixedを外す
		else if($(this).scrollTop() < 300 && headNav.hasClass('m_fixed') == true){
			headNav.removeClass('m_fixed');
		}
	});
});