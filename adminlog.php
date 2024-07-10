<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Admin Login</title>
<style>

body {
    font-family: Arial, sans-serif;
    background-color: #f3f3f3;
    margin: 0;
    padding: 0;
}

.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
    width: 100%
}

.login-form {
    background-color: #fff;
    padding: 10px 50px 40px 40px ;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.login-form h2 {
    text-align: center;
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background-image: url('images/great.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}

.container {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 130vh;
}

.box {
    background: #fdfdfd;
    display: flex;
    flex-direction: column;
    padding: 35px 35px;
    border-radius: 20px;
    box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1), 0 32px 64px -48px rgba(0, 0, 0, 0.5);
}

.form-box {
    width: 450px;
    margin: 0px 10px;
}

.form-box header {
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
    border-bottom: 1px solid #e6e6e6;
    margin-bottom: 10px;
}

.form-box form .field {
    display: flex;
    margin-bottom: 10px;
    flex-direction: column;
}

.form-box form .input input {
    height: 40px;
    width: 100%;
    font-size: 16px;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
}

.btn {
    height: 35px;
    background: rgba(76, 68, 182, 0.808);
    border: 0;
    border-radius: 5px;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
    transition: all .3s;
    margin-top: 10px;
    padding: 0px 10px;
}

.btn:hover {
    opacity: 0.82;
}

.submit {
    width: 100%;
}

.links {
    margin-bottom: 15px;
}

.nav {
    background: #fff;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    line-height: 60px;
    z-index: 100;
}

.logo {
    font-size: 25px;
    font-weight: 900;
}

.logo a {
    text-decoration: none;
    color: #000;
}

main {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 60px;
}

.main-box {
    display: flex;
    flex-direction: column;
    width: 70%;
}

.main-box .top {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.bottom {
    width: 100%;
    margin-top: 20px;
}

@media only screen and (max-width: 840px) {
    .main-box .top {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .top .box {
        margin: 10px 10px;
    }

    .bottom {
        margin-top: 0;
    }
}

.message {
    text-align: center;
    background: #f9eded;
    padding: 15px 0px;
    border: 1px solid #699053;
    border-radius: 5px;
    margin-bottom: 10px;
    color: red;
}

</style></head>

<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin_username = 'admin';
    $admin_password = 'password';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['username'] = $username;
        header('Location: submit.php');
        exit();
    } else {
        $error_message = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Admin Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="login-container">
        <form action="adminlog.php" method="post" class="login-form">
            <h2>Cinema Admin Login</h2>
            <?php if (isset($error_message)) : ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>
