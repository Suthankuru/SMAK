function getInfo() {
	var username = document.getElementById('username').value
    var password = document.getElementById('password').value

    username: "admin"
	password: "admin"
    
    if(username == username && password == username) {
        window.location.href = '../php/viewpayment.php';
    }

}