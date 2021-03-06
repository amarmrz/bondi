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
  <!--start section about-->
  <section class="about text-center">
    <div class="container">
      <h1>MEET OUR NEW TEMPLATE <span>Amar Inc.</span></h1>
      <p class="d-none d-sm-block lead">Is simply dummy text of the industry.Ipsum has been the industry's standard <strong>dummy</strong> text ever since the 1500s</p>
  </section>
  </div>
  <!--end section about-->
  <!--start section feature-->
  <section class="features text-center">
    <div class="container">
      <h1>Features</h1>
      <div class="row">

        <div class="col-lg-3 col-md-6">

          <div class="feat">
            <i class="fa-solid fa-circle-check"></i>
            <h3>Hi first icon</h3>
            <p>Is simply dummy text of the industry.Ipsum has been the industry's standard Is simply dummy text of the industry.Ipsum has been the industry's standard</p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6">

          <div class="feat">
            <i class="fa-solid fa-face-smile"></i>
            <h3>Hi first icon</h3>
            <p>Is simply dummy text of the industry.Ipsum has been the industry's standard Is simply dummy text of the industry.Ipsum has been the industry's standard</p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6">

          <div class="feat">
            <i class="fa-solid fa-anchor"></i>
            <h3>Hi first icon</h3>
            <p>Is simply dummy text of the industry.Ipsum has been the industry's standard Is simply dummy text of the industry.Ipsum has been the industry's standard</p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6">

          <div class="feat">
            <i class="fa-solid fa-cube"></i>
            <h3>Hi first icon</h3>
            <p>Is simply dummy text of the industry.Ipsum has been the industry's standard Is simply dummy text of the industry.Ipsum has been the industry's standard</p>
          </div>

        </div>


      </div>
    </div>

  </section>
  <!--end  section feature-->
  <!--********************************-->
  <section class="Nature text-center">
    <div class="nature">
      <div class="container">
        <h1>Nature</h1>
        <!--<img src="images\adam-kool-ndN00KmbJ1c-unsplash.jpg" alt="feg"> -->
      </div>
  </section>
  <!--********************************-->
  <!--start  section testimenial-->
  <section class="testienial text-center">
    <div class="container">
      <h1>What our client say</h1>
      <div id="testimen" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#testimen" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#testimen" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#testimen" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <p class="lead">Is simply dummy text of the industry.Ipsum has been the industry's standard Is simply dummy text of the indu</p>
            <span>Ali bentiba</span>
          </div>

          <div class="carousel-item" data-bs-interval="5000">
            <p class="lead">Is simply dummy text of the industry.Ipsum has been the industry's standard Is simply dummy text of the indu</p>
            <span>Ali bentiba</span>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <p class="lead">Is simply dummy text of the industry.Ipsum has been the industry's standard Is simply dummy text of the indu</p>
            <span>Ali bentiba</span>
          </div>
        </div>
      </div>
    </div>
    </div>

  </section>
  <section class="price_table text-center">
    <div class="container">
      <h1>our amazing prices</h1>
      <div class="row">

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="price-box">
            <h2 class="text-primary">plan#1</h2>
            <p class="center-block">40??</p>
            <ul class="list-unstyled">
              <li>Space: 30GB</li>
              <li>Email: 30</li>
              <li>lbs: 2 IP</li>
              <li>Databases: 10</li>
              <li>Ftp accounts: 5</li>
            </ul>
            <a href="#" class="btn btn-primary">Order Now</a>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="price-box">
            <h2 class="text-success">plan#2</h2>
            <p class="center-block">40??</p>
            <ul class="list-unstyled">
              <li>Space: 30GB</li>
              <li>Email: 30</li>
              <li>lbs: 2 IP</li>
              <li>Databases: 10</li>
              <li>Ftp accounts: 5</li>
            </ul>
            <a href="#" class="btn btn-success">Order Now</a>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="price-box">
            <h2 class="text-info">plan#3</h2>
            <p class="center-block">40??</p>
            <ul class="list-unstyled">
              <li>Space: 30GB</li>
              <li>Email: 30</li>
              <li>lbs: 2 IP</li>
              <li>Databases: 10</li>
              <li>Ftp accounts: 5</li>
            </ul>
            <a href="#" class="btn btn-info">Order Now</a>
          </div>

        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="price-box">
            <h2 class="text-danger">plan#4</h2>
            <p class="center-block">40??</p>
            <ul class="list-unstyled">
              <li>Space: 30GB</li>
              <li>Email: 30</li>
              <li>lbs: 2 IP</li>
              <li>Databases: 10</li>
              <li>Ftp accounts: 5</li>
            </ul>
            <a href="#" class="btn btn-danger">Order Now</a>
          </div>
        </div>

      </div>
    </div>



  </section>
  <section class="our_team text-center">
    <div class="team">
      <div class="container">
        <h1>Our team</h1>
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="person">
              <img class="rounded-circle" src="images/pexels-andrea-piacquadio-733872.jpg" alt="people">
              <h3>Marissa Omri</h3>
              <p>This is owner of css grid and the talented girl</p>
              <i class="fa-brands fa-facebook-square fa-2x"></i>
              <i class="fa-brands fa-google-plus-square fa-2x"></i>
              <i class="fa-brands fa-twitter-square fa-2x"></i>
              <i class="fa-brands fa-youtube-square fa-2x "></i>

            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="person">
              <img class="rounded-circle" src="images/pexels-andrea-piacquadio-733872.jpg" alt="people">
              <h3>Marissa Omri</h3>
              <p>This is owner of css grid and the talented girl</p>
              <i class="fa-brands fa-facebook-square fa-2x"></i>
              <i class="fa-brands fa-google-plus-square fa-2x"></i>
              <i class="fa-brands fa-twitter-square fa-2x"></i>
              <i class="fa-brands fa-youtube-square fa-2x "></i>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="person">
              <img class="rounded-circle" src="images/pexels-andrea-piacquadio-733872.jpg" alt="people">
              <h3>Marissa Omri</h3>
              <p>This is owner of css grid and the talented girl</p>
              <i class="fa-brands fa-facebook-square fa-2x"></i>
              <i class="fa-brands fa-google-plus-square fa-2x"></i>
              <i class="fa-brands fa-twitter-square fa-2x"></i>
              <i class="fa-brands fa-youtube-square fa-2x "></i>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="person">
              <img class="rounded-circle" src="images/pexels-andrea-piacquadio-733872.jpg" alt="people">
              <h3>Marissa Omri</h3>
              <p>This is owner of css grid and the talented girl</p>
              <i class="fa-brands fa-facebook-square fa-2x"></i>
              <i class="fa-brands fa-google-plus-square fa-2x"></i>
              <i class="fa-brands fa-twitter-square fa-2x"></i>
              <i class="fa-brands fa-youtube-square fa-2x "></i>
            </div>
          </div>
        </div>
      </div>


  </section>
  <section class="Subscribe text-center">
    <div class="container">
      <h1>keep in ouch</h1>
      <p class="lead">Sign Up For Newsletter Dont Worry about Spam we hate it too</p>
      <form class="form-inline">

        <input class="form-control" type="text" placeholder="Enter your email">
        <button class="btn btn-danger "><i class="fa-solid fa-arrow-right-to-bracket fa-lg"></i>Subscribe</button>

      </form>
    </div>
  </section>
  <section class="statistic text-center">
    <div class="stat">
      <div class="container">
        <h1>Our Statistics</h1>
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="stats">
              <i class="fa-solid fa-user-check fa-4x" style="padding-left:20px ;"></i>
              <p>1200</p>
              <span>Our Users </span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats">
              <i class="fa-solid fa-code fa-4x"></i>
              <p>1200</p>
              <span>Our Users </span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats">
              <i class="fa-solid fa-database fa-4x"></i>
              <p>200</p>
              <span>Our Users </span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats">

              <i class="fa-solid fa-boxes-packing fa-4x"></i>
              <p>100</p>
              <span>Our Users </span>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>


  <section class="our-skills text-center">
    <div class="container">
      <h1>Our Skills</h1>
      <div class="row">
        <!--sart progress-->
        <div class="col-md-5">
          <div class="skills-progress ">
            <div class="progress" style="height: 40px;">
              <div class="progress-bar progress-bar-primary progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75% ;">html css</div>
            </div>

            <div class="progress " style="height: 40px;">
              <div class="progress-bar progress-bar-primary progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90% ;">bootstrap</div>
            </div>
            <div class="progress " style="height: 40px;">
              <div class="progress-bar progress-bar-primary progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50% ;">Php sql</div>
            </div>
            <div class="progress " style="height: 40px;">
              <div class="progress-bar progress-bar-primary progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90% ;">react</div>
            </div>
          </div>

        </div>
        <!--end progress-->

        <!--sart team info-->
        <div class="col-md-6 offset-md-1">
          <div class="skills-info">
            <h3>About The Team</h3>
            <p class="lead">is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it to make a type
              specimen book. It has survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged. It was popularised in
              the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
              and more recently with desktop publishing
            </p>
            <button type="button" class="btn btn-primary">Talk With Professional</button>
          </div>
        </div>
        <!--end team info-->
      </div>
    </div>

  </section>
  <!-- begin of contact us -->
  <section class="contcat-us text-center">
    <div class="fields">
      <div class="container">
        <div class="row">
          <i class="fa-solid fa-headphones-simple fa-4x"></i>
          <h1>Contact Us</h1>
          <p class="lead">Feel Free To Contact Us Anytime</p>

          <!-- start contact form -->

          <form role="form">

            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control input-lg" placeholder="UserName">
              </div>
              <div class="form-group">
                <input type="text" class="form-control input-lg" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control input-lg" placeholder="Cell Phone">
              </div>
              
            </div>
            <div class="col-md-6">
              
              <textarea class="form-control input-lg"></textarea>
            
          </div>
          </form>
           
          <!-- end contact form -->

        </div>
      </div>
    </div>

  </section>

  <!-- end of contact us -->



  <script src="https://kit.fontawesome.com/31b5d2b3ad.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>