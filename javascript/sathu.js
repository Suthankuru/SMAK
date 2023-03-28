function password(){
    if(document.getElementById("pwd").value!=document.getElementById("rpwd").value){
       alert("Password is not match");
	    return false;
    }
    else{
        return true;
    }
}
function button(){
    if(document.getElementById("check").checked){
        document.getElementById("submit").disabled=false;
    }
    else{
        document.getElementById("submit").disabled=true;
    }
}