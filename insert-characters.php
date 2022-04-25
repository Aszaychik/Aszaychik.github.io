<?php 
require 'functions.php';
$conn = mysqli_connect("localhost","root","","aszaychik");

if (isset($_POST['submit'])){
    if(insert($_POST) > 0){
        echo "
        <script>
         alert('Insert Successfully');
         document.location.href = 'characters.php';
        </script>";
    }else{
        echo "
        <script>
        alert('Failure');
        document.location.href = 'characters.php';
        </script>";
    }
};?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- MY CSS -->
    <title>INSERT CHARACTERS</title>
  </head>
<body class="bg-dark">
    <!-- Jumbotron -->
    <section class="jumbotron">
        <h1 class="text-center mt-5">Insert Character</h1>
        <div class="m-auto w-50 mt-3">
            <form action="" method="post">
                <ul>
                    <li class="input-group">
                        <label class="form-control w-25" for="w_name">Character Name</label>
                        <input class="form-control w-50" type="text" name="w_name" id="w_name" required>
                    </li>
                    <li class="input-group">
                        <label class="form-control w-25" for="w_id">ID</label>
                        <input class="form-control w-50" type="text" name="w_id" id="w_id" required>
                    </li>
                    <li class="input-group">
                        <label class="form-control w-25" for="w_age">Age</label>
                        <input class="form-control w-50" type="text" name="w_age" id="w_age">
                    </li>
                    <li class="input-group">
                        <label class="form-control w-25" for="w_gender">Gender</label>
                        <input class="form-control w-50" type="text" name="w_gender" id="w_gender" required>
                    </li>
                    <li class="input-group">
                        <label class="form-control w-25" for="w_from">From</label>
                        <input class="form-control w-50" type="text" name="w_from" id="w_from" required>
                    </li>
                    <li class="input-group">
                        <label class="form-control w-25" for="w_pict">Pict</label>
                        <input class="form-control w-50" type="text" name="w_pict" id="w_pict">
                    </li>
                    <div class="mt-5 d-flex justify-content-evenly">
                        <button class="btn btn-dark" type="submit" name="submit">Submit</button>
                    </div>
                </ul>
            </form>
            <a href="characters.php"><button class="btn btn-dark mt-3" type="submit">Back</button></a>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#212529"
          fill-opacity="1"
          d="M0,96L120,122.7C240,149,480,203,720,224C960,245,1200,235,1320,229.3L1440,224L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"
          data-darkreader-inline-fill=""
          style="--darkreader-inline-fill: #1c1e1f"
        ></path>
      </svg>        
    </section>
    <!-- Footer -->
    <footer class="bg-dark text-center pb-5">
      <p class="text-light">Created by <a href="https://www.facebook.com/AsZaychik" class="text-light fw-bold">AsZaychik</a></p>
    </footer>
    <!-- Footer -->
</body>
</html>