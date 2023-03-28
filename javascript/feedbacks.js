function validateFormm() {
    var x = document.forms["myForm"]["phone"].value;
    if (x == "") {
      alert("Bill Number must be filled out");
      return false;
    }
}