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
	<!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- MY CSS -->
    <title>Login</title>
</head>
<body id="login" class="">
        <section class="text-light">
            <div class="container">
                <h1 class="text-center">LOGIN</h1>
                <div class="d-flex justify-content-center p-3 form-container">
                <form action="" method="post" class="w-75">
                    <ul>
                        <div class="">
                            <label for="username" class="mb-2">Username :</label>
                            <input type="text" name="username" id="username" class="form-control w-100 mb-3">
                        </div>
                            <label for="password" class="mb-2">Password :</label>
                            <input type="password" name="password" id="password" class="form-control w-100 mb-5">
                        <div class="">
                            <button type="submit" name="submit" class="btn btn-dark btn-landing mb-5">Login</button>
                            <?php if( isset($error) ) : ?>
                             <p style="color: red; font-style: italic;">Username / Password is incorrect!</p>
                            <?php endif; ?>
                        </div>
                    </ul>
                </form>
            </div>
        </section>
    </div>
</body>
</html>