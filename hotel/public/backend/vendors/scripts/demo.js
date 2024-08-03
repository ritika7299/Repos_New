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
