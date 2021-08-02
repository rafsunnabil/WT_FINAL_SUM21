function get (id){
    return document.getElementById(id);
}

function search (e){
    if(e.value == ""){
        get("suggestions").innerHTML="";
        return;
    }
    var xhr = new XMLHTTpRequest();
    xhr.open("GET", "product_suggestions.php?key="+e.value,true);
    xhr.onreadystatechange = funtion(){
        if(this.readyState == 4 && this.status == 200){
            get("suggestions").innerHTML=this.responseText;
        } 
    };
    xhr.send();

}