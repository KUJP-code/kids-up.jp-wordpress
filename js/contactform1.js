function check_contactform() {
	var name = $('input[name="name"]').val();
	var companyname = $('input[name="companyname"]').val();
	var email = $('input[name="email"]').val();
	var tel = $('input[name="tel"]').val();
	var errmsg = "";
	if(name == "") {
		errmsg = "Name please\n";
	}
	if(companyname == "") {
		errmsg = errmsg + "会社名を入力して下さい\n";
	}
	if(email == "") {
		errmsg = errmsg + "メールアドレスを入力して下さい\n";
	}
	if(!email.match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)) {
		errmsg = errmsg + "メールアドレスをご確認下さい\n";
	}
	if(tel == "") {
		errmsg = errmsg + "電話番号を入力して下さい\n";
	}

	if(errmsg != "") {
		alert(errmsg);
		return false;
	}
	$('form[name="myform"]').submit();
}