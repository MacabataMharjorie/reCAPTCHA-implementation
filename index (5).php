<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login reCAPTCHA V2</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<style>
    body{
        background-color:yellow;

    }
    form{
        background-color:white;
        width:25%;
        margin:120px auto;
        padding:50px;
        box-shadow:10px 10px 5px rgb(105,15,190);
        border-radius:50px;
    }
</style>
<body>
    <form id="loginform">
        <h1>Login form</h1>
        <input id="username" type="text"name="user"  placeholder="Username"><br></br>
        <input id="password" type="password" name="pass" placeholder="Password"><br></br>
        <button type="submit">Login</button>
        <div class="g-recaptcha" data-sitekey="6LchNE0qAAAAADosWfwFWCHw8lpsdUpgzA2Puib6"></div>
    </form>

    <script>
        document.getElementById('loginform').addEventListener('submit', function(event) {
            event.preventDefault();
             // Read form inputs for username and password
            var user = document.getElementById('Username').value;
            var pass = document.getElementById('Password').value;
             // Get the reCAPTCHA response
            var recaptchaResponse = grecaptcha.getResponse();
             // Verify reCAPTCHA success
            if (!recaptchaResponse) {
                alert('Complete reCAPTCHA!');
                return;
            }
             // Confirm the username and password are correct
            if (user === "mharjorie" && pass === "mharjorie123") {
                alert('Login success');
                window.location.href = "admin.php";
            } else {
                alert("Invalid username or password");
            }

            console.log('Form submitted', { user, pass, recaptchaResponse });
        });
    </script>
</body>
</html>