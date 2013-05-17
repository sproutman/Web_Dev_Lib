function check(){
	var name = document.getElementById('name').value;
	var pass = document.getElementById('pass').value;
	if (name == "" || name == null) {
		alert("姓名不能为空!");
		document.getElementById('name').focus();
		return false;
	}
	if (pass == "" || pass == null) {
		alert("密码不能为空!");
		document.getElementById('pass').focus();
		return false;
	}
	return true;
}