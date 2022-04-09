<?php 
if( isset($_POST["submit"]) ){
    if( $_POST["username"] == "aszaychik" && $_POST["password"] == "890890" ) {
        header("Location: home.html");
        exit;
    }else{
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">username / password is incorrect!</p>
    <?php endif; ?>
    <ul>
    <form action="" method="post">
        <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
    </form>
    </ul>



</body>
</html>