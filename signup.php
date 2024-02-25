<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #000;
    color: #fff;
}

.signup-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.signup-form {
    background-color: rgba(0, 0, 0, 0.8);
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    text-align: center;
}

.signup-form h2 {
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #fff;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.1);
    color: #fff;
}

button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    transition: transform 0.3s;
}

button:hover {
    background-color: #0056b3;
    transform: scale(1.1);
}

.signin-link {
    margin-top: 20px;
}

.signin-link p {
    color: #fff;
    font-size: 14px;
}

.signin-link a {
    color: #007bff;
    text-decoration: none;
}

    </style>
    <script>
        function validatePassword() {
            var password = document.getElementById("password").value;
            var re_password = document.getElementById("re_password").value;

            if (password != re_password) {
                alert("Passwords do not match");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="signup-container">
        <form class="signup-form" action="abc.php" method="post" onsubmit="return validatePassword()">
            <h2>Sign Up</h2>
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" id="re_password" name="re_password" placeholder="Re-enter Password" required>
            </div>
            <button type="submit">Sign Up</button>
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
</body>
</html>
