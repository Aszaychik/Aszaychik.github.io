<?php 
if( isset($_POST["submit"]) ){
    if( $_POST["username"] == "aszaychik" && $_POST["password"] == "890890" ) {
        header("Location: index.html");
        exit;
    }else{
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
	<title>Login</title>
</head>
<body id="login" class="">
    <div class="container-fluid w-50 mt-5 container">
        <section class="text-light bg-secondary rounded-top rounded-bottom shadow m-auto">
            <div class="bg-dark mb-5 text-center rounded-top shadow-lg p-3">
                <h1 class="">LOGIN</h1>
            </div>
            <?php if( isset($error) ) : ?>
                <p style="color: red; font-style: italic;">Username / Password is incorrect!</p>
            <?php endif; ?>
        
            <div class="d-flex justify-content-center p-3">
                <form action="" method="post" class="">
                <ul>
                    <div class="">
                        <label for="username" class="">Username :</label>
                        <input type="text" name="username" id="username" class="form-control w-100 mb-3">
                    </div>
                        <label for="password" class="">Password :</label>
                        <input type="password" name="password" id="password" class="form-control w-100 mb-5">
                    <div class="">
                        <button type="submit" name="submit" class="btn btn-dark btn-landing mb-5">Login</button>
                    </div>
                </ul>
                </form>
            </div>
        </section>
    </div>
</body>
</html>