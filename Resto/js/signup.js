var hasError=false;
function get(id){
	return document.getElementById(id);
	
}
function validate(){
	refresh()
	if(get("name").value == ""){
	    hasError =true;
	    get("err_name").innerHTML="*Name required";
		get("err_name").style.color="red";
	}
	else if(get("name").value.length <3){
		hasError =true;
		get("err_name").innerHTML="*Name must be greater than 3 characters";
		get("err_name").style.color="red";
	}
	if(get("uname").value == ""){
		hasError =true;
		get("err_uname").innerHTML="*Username required";
		get("err_uname").style.color="red";
	}
	else if(get("uname").value.length <6){
		hasError =true;
		get("err_uname").innerHTML="*Username must be greater than 6 characters";
		get("err_uname").style.color="red";
	}
	if(get("pass").value == ""){
	    hasError =true;
	    get("err_pass").innerHTML="*Valid password required";
		get("err_pass").style.color="red";
	}
	else if(get("pass").value.length <6){
		hasError =true;
		get("err_pass").innerHTML="*Name must be greater than 6 characters";
		get("err_pass").style.color="red";
	}
	if(get("cpass").value == ""){
	    hasError =true;
	    get("err_cpass").innerHTML="*Confirm password required";
		get("err_cpass").style.color="red";
	}
    if(get("email").value == ""){
	    hasError =true;
	    get("err_email").innerHTML="*Valid email required";
		get("err_email").style.color="red";
	}
	if(get("phone").value == ""){
		hasError =true;
		get("err_phone").innerHTML="*Valid phone required";
		get("err_phone").style.color="red";
	}
	else if(get("phone").value.length <=10){
		hasError =true;
		get("err_phone").innerHTML="*Name must be contain 11 characters";
		get("err_phone").style.color="red";
	}
	return !hasError;
}
function refresh(){

	hasError=false;
	alert("Error!!!");
	get("err_name").innerHTML="";
	get("err_uname").innerHTML="";
	get("err_pass").innerHTML="";
	get("err_cpass").innerHTML="";
	get("err_email").innerHTML="";
	get("err_phone").innerHTML="";
	

}