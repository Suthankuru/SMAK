function validate(){
var cid = document.getElementById("cid").value;
var phone = document.getElementById("phone").value;
var message = document.getElementById("message").value;
var error_message = document.getElementById("error_message");

error_message.style.padding = "10px";

var text;
  if(cid.length< 8){
    text = "Please Enter valid customer ID";
error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone) || phone.length != 10){
    text = "Please Enter valid Phone Number";
error_message.innerHTML = text;
    return false;
  }
  if(message.length<=50){
    text = "Please Enter More Than 50 Characters";
error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}

