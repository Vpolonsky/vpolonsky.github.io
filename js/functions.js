function checkForm(form){
	var name = form.name.value;
	var email = form.email.value;
	var comment = form.comment.value;
	var bad = "";
	if (name.length == 0) bad += "YOU HAVE NOT ENTER YOUR NAME!" + "\n";
	if (email.length == 0) bad += "YOU HAVE NOT ENTER YOUR E-MAIL!" + "\n";
	if (comment.length == 0) bad += "YOU HAVE NOT ENTER YOUR MESSAGE!" + "\n";
	if (bad) {
		alert(bad);
		return false;
	}
	return true;	
}