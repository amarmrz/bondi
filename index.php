<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>learning-boostrap</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bondi.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>

<body>
  <!--start our nav bar-->
  <nav class="navbar fixed-top navbar-expand-lg  navbar-dark bg-dark ">
    <div class="container">
      <a class="navbar-brand" href="#">Amar <span>M.</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Sevice1</a></li>
              <li><a class="dropdown-item" href="#">Sevice2</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Special services</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!--end our nav bar-->
  <!--Start slider-->
  <div id="slider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="5000">
        <img src="images\adam-kool-ndN00KmbJ1c-unsplash.jpg" class="d-block w-100" alt="nature">
        <div class="carousel-caption">
          <h1 class="bigtitles">Take Look At The nature Feel Free</h1>
          <div class="btn btn-primary">Explore</div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="images\qingbao-meng-01_igFr7hd4-unsplash.jpg" class="d-block w-100" alt="nature">
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="images\tim-swaan-eOpewngf68w-unsplash.jpg" class="d-block w-100" alt="nature">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--end slider-->









  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>