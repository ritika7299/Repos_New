
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        var isValid = true;

        // Validate name
        var name = document.getElementById('name').value;
        if (name === '') {
            document.getElementById('nameError').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('nameError').style.display = 'none';
        }

        // Validate email
        var email = document.getElementById('email').value;
        if (email === '') {
            document.getElementById('emailError').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('emailError').style.display = 'none';
        }

        // Validate password
        var password = document.getElementById('password').value;
        if (password === '') {
            document.getElementById('passwordError').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('passwordError').style.display = 'none';
        }

        // Validate confirm password
        var cpass = document.getElementById('cpass').value;
        if (cpass === '') {
            document.getElementById('cpassError').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('cpassError').style.display = 'none';
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
