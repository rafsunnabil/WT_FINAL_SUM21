var hasError=false;
function get(id){
    return document.getElementById(id);
    
}
function validate(){
    refresh()
    if(get("name").value == ""){
        hasError =true;
        get("err_name").innerHTML="*Name required";
        get("err_name").style.color="blue";
    }
    return !hasError;
}
function refresh(){

    hasError=false;
    alert("Error!!!");
    get("err_name").innerHTML="";

}