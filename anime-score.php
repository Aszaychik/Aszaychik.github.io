<?php 

require 'functions.php';
$anime_list = query("SELECT * FROM anime LIMIT 100");

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
    <title>ANIME LIST</title>
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
    <section class="jumbotron text-center">
      <h1 class="mt-5">Anime List</h1>
      <div class="table-responsive">
        <table cellspacing="" cellpadding="" class="mt-5 mb-5 characters-table">
        
        <tr class="bg-dark text-light">
            <th>No.</th>
            <th>Name</th>
            <th>Popularity</th>
            <th>Members</th>
            <th>Dropped</th>
            <th>Score</th>
        </tr>
        <?php $i = 1 ;?>
        <?php foreach ($anime_list as $row): ?>
        <tr class="">
            <td><?= $i; ?></td>
            <td><?= $row["Name"]; ?></td>
            <td><?= $row["Popularity"]; ?></td>
            <td><?= $row["Members"]; ?></td>
            <td><?= $row["Dropped"] ;?></td>
            <td><?= $row["Score"] ;?></td>
            </tr>
        <?php $i++; ?>
            <?php endforeach; ?>
          </table>  
          <a href="anime-fuzzy.php"><button type="submit" class="btn btn-dark btn-landing" method="POST" name="submit" value="">Show Fuzzy</button></a>
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
    <!-- Jumbotron -->
    <!-- Footer -->
    <footer class="bg-dark text-center pb-5">
      <p class="text-light">Created by <a href="https://www.facebook.com/AsZaychik" class="text-light fw-bold">AsZaychik</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
