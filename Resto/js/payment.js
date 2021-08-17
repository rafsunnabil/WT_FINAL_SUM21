var hasError=false;

function get(id){
	
	return document.getElementById(id);
}

function validate(){
	refresh()
	if(get("uname").value == ""){
	    hasError =true;
	    get("err_uname").innerHTML="*Username is required";
	}
	
	if(get("pass").value == ""){
	    hasError =true;
	    get("err_pass").innerHTML="*Valid password required";
	}
	
    if(get("card").value == ""){
	    hasError =true;
	    get("err_card").innerHTML="*Valid email required";
	}
	else if(get("card").value.length <= 15){
		hasError = true;
		get("err_card").innerHTML = "*Name must be 16 digits";
	}
	if(get("pin").value == ""){
		hasError =true;
		get("err_pin").innerHTML = "*Valid pin is required";
	}
	else if(get("pin").value.length <= 3){
		hasError =true;
		get("err_pin").innerHTML = "*Name must be 4 digits";
	}
	if(get("amount").value == ""){
		hasError =true;
		get("err_amount").innerHTML="*Type correct amount";
	}
	return !hasError;
}
function refresh(){
	hasError=false;
	alert("NOT VALID");
	get("err_uname").innerHTML="";
	get("err_pass").innerHTML="";
	get("err_card").innerHTML="";
	get("err_pin").innerHTML="";
	get("err_amount").innerHTML="";
	
}