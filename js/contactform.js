function check_contactform() {
	var name = $('input[name="name"]').val();
	var furigana = $('input[name="furigana"]').val();
	var address = $('input[name="address"]').val();
	var tel = $('input[name="tel"]').val();
	var otoiawase = $('textarea[name="otoiawase"]').val();
	var errmsg = "";
	if(name == "") {
		errmsg = "お名前を入力して下さい\n";
	}
	if(furigana == "") {
		errmsg = errmsg + "フリガナを入力して下さい\n";
	}
	if(address == "") {
		errmsg = errmsg + "メールアドレスを入力して下さい\n";
	}
	if(!address.match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)) {
		errmsg = errmsg + "メールアドレスをご確認下さい\n";
	}
	if(tel == "") {
		errmsg = errmsg + "電話番号を入力して下さい\n";
	}
	if(otoiawase == "") {
		errmsg = errmsg + "お問い合わせ内容を入力して下さい\n";
	}
	if(errmsg != "") {
		alert(errmsg);
		return false;
	}
	$('form[name="myform"]').submit();
}