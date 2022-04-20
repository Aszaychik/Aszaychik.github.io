<?php 

require 'functions.php';
$BD_list = query("SELECT * FROM `blu-ray`");
$BD_rating_13 = query("SELECT * FROM `blu-ray` WHERE `BD_rating` = 'PG - Children' OR BD_rating = 'PG-13 - Teens 13 or older'");
$BD_rating_kid = query("SELECT * FROM `blu-ray` WHERE `BD_rating` = 'PG - Children'");
?>
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
    <title>Age restriction movies</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="portfolio.html">AsZaychik</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="characters.php">Characters</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html">OLD WEBSITE</a>
            </li>
            <li class="nav-item">
              <a class="active btn btn-dark btn-landing" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
    <!-- Jumbotron -->
    <section class="jumbotron">
      <h1 class="mt-5 text-center">Age restriction movies</h1>
      <form method="post" class="mt-5 w-25 input-group m-auto">
          <label for="input" class="input-group-text">Your age</label>
          <input type="number" name="input" id="input" class="form-control">
          <input type="submit" value="submit" name="submit" class="btn-dark btn-landing"/>
      </form>
    <!-- Jumbotron -->
    <!-- Result -->
      <br>
      <h4 class="mt-5 text-center">You can watch all this movies :</h4>
      <div class="table-responsive d-flex justify-content-center">
        <table cellspacing="" cellpadding="5" class="mt-5 mb-5 characters-table m-auto">
        <?php 
        if(isset($_POST["submit"]))
        {
          $input = $_POST["input"];
          echo "<br><br>";?>
        <tr class="bg-dark text-light text-center">
          <th>No.</th>
          <th>Picture</th>
          <th>Name</th>
          <th>Aired</th>
          <th>Genre</th>
          <th>Rating</th>
        </tr>  
          <?php
          if($input >= 17){?>
            <?php $i = 1 ;?>
            <?php foreach ($BD_list as $row){ ?>
            <tr class="text-center">
              <td><?= $i; ?></td>
              <td><img src="src/<?= $row["BD_pict"]; ?>" width="50" class="character-pict rounded-circle"></td>
              <td><?= $row["BD_name"] ;?></td>
              <td><?= $row["BD_aired"] ;?></td>
              <td><?= $row["BD_genre"] ;?></td>
              <td><?= $row["BD_rating"] ;?></td>
            </tr>
            <?php $i++; ?>
            <?php };?> 
            <?php 
            }elseif($input < 17 and $input >= 13){?>
            <?php $i = 1 ;?>
            <?php foreach ($BD_rating_13 as $row){ ?>
            <tr class="text-center">
              <td><?= $i; ?></td>
              <td><img src="src/<?= $row["BD_pict"]; ?>" width="50" class="character-pict rounded-circle"></td>
              <td><?= $row["BD_name"] ;?></td>
              <td><?= $row["BD_aired"] ;?></td>
              <td><?= $row["BD_genre"] ;?></td>
              <td><?= $row["BD_rating"] ;?></td>
            </tr>
            <?php $i++; ?>
            <?php };?> 
            <?php  }elseif($input < 13 and $input > 0){?>
            <?php $i = 1 ;?>
            <?php foreach ($BD_rating_kid as $row){ ?>
            <tr class="text-center">
              <td><?= $i; ?></td>
              <td><img src="src/<?= $row["BD_pict"]; ?>" width="50" class="character-pict rounded-circle"></td>
              <td><?= $row["BD_name"] ;?></td>
              <td><?= $row["BD_aired"] ;?></td>
              <td><?= $row["BD_genre"] ;?></td>
              <td><?= $row["BD_rating"] ;?></td>
            </tr>
            <?php $i++; ?>
            <?php };?>
            <?php }else{?>
            <?php $i = 1 ;?>
            <?php foreach ($BD_list as $row){ ?>
            <tr class="text-center">
              <td><?= $i; ?></td>
              <td><img src="src/<?= $row["BD_pict"]; ?>" width="50" class="character-pict rounded-circle"></td>
              <td><?= $row["BD_name"] ;?></td>
              <td><?= $row["BD_aired"] ;?></td>
              <td><?= $row["BD_genre"] ;?></td>
              <td><?= $row["BD_rating"] ;?></td>
            </tr>
            <?php $i++; ?>
            <?php };?>                
            <?php  };?>
        <?php
        }
        ?>
        </table>
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
    <!-- Result -->
    <!-- Footer -->
    <footer class="bg-dark text-center pb-5">
      <p class="text-light">Created by <a href="https://www.facebook.com/AsZaychik" class="text-light fw-bold">AsZaychik</a></p>
    </footer>
    <!-- Footer -->
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>