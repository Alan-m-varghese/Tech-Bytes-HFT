<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #000;
    color: #fff;
}

.login-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-form {
    background-color: rgba(0, 0, 0, 0.8);
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    text-align: center;
}

.login-form h2 {
    margin-bottom: 20px;
}

.form-group {
    position: relative;
    margin-bottom: 20px;
}

.form-group img {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
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

.signup-box {
    margin-top: 20px;
}

.signup-box p {
    color: #fff;
    font-size: 14px;
}

.signup-box a {
    color: #007bff;
    text-decoration: none;
}

    </style>

</head>
<body>
    <div class="login-container">
        <form class="login-form" action="authenticate.php" method="post">
            <h2>Login</h2>
            <div class="form-group">
                <label for="username"><i class='bx bxs-user-circle' ></i></label>
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="password"><i class='bx bxs-lock-alt'></i></label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Login</button><a href="abc.php"></a>
        </form>
        <div class="signup-box">
            <p>New user? <a href="signup.php">Signup</a></p>
        </div>
    </div>
</body>
</html>
