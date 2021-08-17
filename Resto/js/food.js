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
	if(get("c_id").selectedIndex==0){
		hasError = true;
		get("err_c_id").innerHTML = "*Valid Id Required";
		get("err_c_id").style.color="red";
	}
	
	if(get("price").value == ""){
	    hasError =true;
	    get("err_price").innerHTML="*Insert Price";
		get("err_price").style.color="red";
	}
	
	if(get("rec").value == ""){
	    hasError =true;
	    get("err_rec").innerHTML="*Insert Recipy";
		get("err_rec").style.color="red";
	}
	return !hasError;
}
function refresh(){

	hasError=false;
	alert("Error!!!");
	get("err_name").innerHTML="";
	get("err_c_id").innerHTML="";
	get("err_price").innerHTML="";
	get("err_rec").innerHTML="";
	

}