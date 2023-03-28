function validateForm() {
    var x = document.forms["myForm"]["billnum"].value;
    if (x == "") {
      alert("Bill Number must be filled out");
      return false;
    }

    var y = document.forms["myForm"]["fname"].value;
    if (y == "") {
      alert("First name must be filled out");
      return false;
    }

    var z = document.forms["myForm"]["lname"].value;
    if (z == "") {
      alert("Last name must be filled out");
      return false;
    }

  }