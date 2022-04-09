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
              <a class="nav-link" href="#about">-</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="characters.php">Characters</a>
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
      <h2 class="text-center mb-3">Input</h2>
      <hr />

      <div class="mt-3">
        <div class="input-group mb-3 w-25">
          <span class="input-group-text label-input">Radius (R)</span>
          <input type="text" class="form-control" id="radius" aria-label="" />
        </div>
        <div class="input-group mb-3 w-25">
          <span class="input-group-text label-input">Diameter (D)</span>
          <input type="text" class="form-control" id="diameter" aria-label="" />
        </div>
        <div class="input-group mb-3 w-25">
          <span class="input-group-text label-input">Circumference (C)</span>
          <input type="text" class="form-control" id="circumference" aria-label="" />
        </div>
        <div class="input-group mb-3 w-25">
          <span class="input-group-text label-input">Area (A)</span>
          <input type="text" class="form-control" id="area" aria-label="" />
        </div>
        <div class="text-center">
          <a href="" class="btn btn-dark btn-landing">Clear</a>
          <a href="" class="btn btn-dark btn-landing">Calculate</a>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="darkgrey"
          fill-opacity="1"
          d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          data-darkreader-inline-fill=""
          style="--darkreader-inline-fill: #007acc"
        ></path>
      </svg>
    </section>
    <!-- Input -->
    <!-- Result -->
    <section class="result">
      <div>
        <h2 class="text-center">Result :</h2>
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