function password_1(){
    if(document.getElementById("nname").value!=document.getElementById("cname").value){
        alert("password is not match");
        return false;
    }
    else{
        return true;
    }
}