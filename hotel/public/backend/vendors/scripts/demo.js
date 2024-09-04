// hide and show password 
function showPassword() {
    var passwordField = document.getElementById("password");
    var icon = document.querySelector(".dw.dw-padlock1");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        icon.classList.remove("dw-padlock1");
        icon.classList.add("dw-unlock");
    } else {
        passwordField.type = "password";
        icon.classList.remove("dw-unlock");
        icon.classList.add("dw-padlock1");
    }
}

 // Hide the success message after 5 seconds
 setTimeout(function() {
    var successMessage = document.getElementById('success-message');
    if (successMessage) {
        successMessage.style.display = 'none';
    }
}, 5000); // 5000 milliseconds = 5 seconds

// Hide the errors message after 5 seconds
setTimeout(function() {
    var errorMessage = document.getElementById('error-message');
    if (errorMessage) {
        errorMessage.style.display = 'none';
    }
}, 5000); // 5000 milliseconds = 5 seconds