var hasError=false;

function get(id){
	
	return document.getElementById(id);
}

function validate(){
	refresh()
	if(get("name").value == ""){
	    hasError =true;
	    get("err_name").innerHTML="*Name is required";
	}
	else if(get("name").value.length <2){
		hasError =true;
		get("err_name").innerHTML="*Name must be greater than 2 characters";
	}
	if(get("uname").value == ""){
		hasError =true;
		get("err_uname").innerHTML="*Username is required";
	}
	
	if(get("pass").value == ""){
	    hasError =true;
	    get("err_pass").innerHTML="*Valid password required";
	}
	else if(get("pass").value.length <8){
		hasError =true;
		get("err_pass").innerHTML="*Password must be greater than 6 characters";
	}
	if(get("cpass").value == ""){
	    hasError =true;
	    get("err_cpass").innerHTML="*didn't match";
	}
    if(get("email").value == ""){
	    hasError =true;
	    get("err_email").innerHTML="*Valid email required";
	}
	if(get("phone").value == ""){
		hasError =true;
		get("err_phone").innerHTML="*Valid phone required";
	}
	else if(get("phone").value.length <= 10){
		hasError =true;
		get("err_phone").innerHTML="*Name must be 11 digits";
	}
	
	return !hasError;
}
function refresh(){
	hasError=false;
	alert("NOT VALID");
	get("err_name").innerHTML="";
	get("err_uname").innerHTML="";
	get("err_pass").innerHTML="";
	get("err_cpass").innerHTML="";
	get("err_email").innerHTML="";
	get("err_phone").innerHTML="";
	

}