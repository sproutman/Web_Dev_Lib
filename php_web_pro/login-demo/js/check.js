function check(){
	var name = document.getElementById('name').value;
	var pass = document.getElementById('pass').value;
	if (name == "" || name == null) {
		alert("��������Ϊ��!");
		document.getElementById('name').focus();
		return false;
	}
	if (pass == "" || pass == null) {
		alert("���벻��Ϊ��!");
		document.getElementById('pass').focus();
		return false;
	}
	return true;
}