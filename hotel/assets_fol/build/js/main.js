
//   Show message for valid and invalid 
$(".danger-div").delay(2000).slideUp(200, function () {
    $(this).alert('close');
  });

  // Show pass
  function showPassword() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
