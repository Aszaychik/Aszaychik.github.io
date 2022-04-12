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
    <title>CIRCLE FORMULA</title>
  </head>
  <body id="circle-formula">
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
      <img src="src/luis-eusebio-5SUt9q8jQrQ-unsplash.jpg" class="rounded-circle img-thumbnail mt-5 mb-3" width="200" />
      <h1>Welcome To The Circle Formula</h1>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="grey"
          fill-opacity="1"
          d="M0,96L48,101.3C96,107,192,117,288,138.7C384,160,480,192,576,218.7C672,245,768,267,864,245.3C960,224,1056,160,1152,154.7C1248,149,1344,203,1392,229.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          style="--darkreader-inline-fill: #323639"
          data-darkreader-inline-fill=""
        ></path>
      </svg>
    </section>
    <!-- Jumbotron -->
    <!-- Input -->
    <section class="input">
      <h2 class="text-center">Input</h2>
      <hr class="mb-5" />
      <form method="post" class="text-center">
      <table border="0" class="m-auto">
      <tr>
      <td class="input-group mb-3">
        <label for="radius" class="input-group-text form-control bg-dark text-light">Radius (R)</label>
        <input type="number" name="radius" id="radius" value="0" class="form-control w-50 bg-dark text-light" placeholder="Enter the radius of a circle"/>
      </td>
      </tr>
      <tr>
      <td>
        <input type="submit" name="clear" class="btn-dark btn-landing"value="clear">
        <input type="submit" name="calculate" class="btn-dark btn-landing"value="calculate"/>
      </td>
      </tr>
      </table>
      </form>
    </section>
    <!-- Input -->
    <!-- Result -->
    <section class="result">
      <div>
        <h2 class="text-center">Result :</h2>
        <hr class="mb-5" />
        <div class="w-100 m-auto text-center lead">
          <?php
          if(isset($_POST["calculate"])):
              $radius = $_POST['radius'];
              $pi = 3.14;
              $circle_area = $pi * ($radius * $radius);
              $circumference = 2 * $pi  * $radius; 
                echo "AREA OF CIRCLE =  $circle_area";
                echo "<br><br>";
                echo "CIRCUMFERENCE OF CIRCLE = $circumference";
                echo "<br><br>";
          endif;
          ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>