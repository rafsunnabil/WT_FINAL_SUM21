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
	if(get("f_id").selectedIndex==0){
		hasError = true;
		get("err_f_id").innerHTML = "*Valid Id Required";
		get("err_f_id").style.color="red";
	}
	
	if(get("qty").value == ""){
	    hasError =true;
	    get("err_qty").innerHTML="*Insert Quantity";
		get("err_qty").style.color="red";
	}
	return !hasError;
}
function refresh(){

	hasError=false;
	alert("Error!!!");
	get("err_name").innerHTML="";
	get("err_f_id").innerHTML="";
	get("err_qty").innerHTML="";
	
	

}