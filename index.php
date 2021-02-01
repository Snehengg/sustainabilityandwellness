<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Inframind | Sustainability and Wellness</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>
<header id="site-header" class="fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.php">
          <span class="fa fa-shield"></span> Sustainability & Wellness
      </a>
      <button class="navbar-toggler bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav m-auto">
              <li class="nav-item active">
                 
              </li>
              <li class="nav-item">
                  
              </li>
              <li class="nav-item">
                  
              </li>
              <li class="nav-item">
                  
              </li>
          </ul>
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a href="enter.php" class="btn btn-primary btn-style">ENTER YOUR DATA</a>
              </li>
          </ul>
      </div>
  </nav>
</header>
<section id="home" class="banner">
    <div id="banner-bg-effect" class="banner-effect"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12 col-sm-12 order-lg-first mt-lg-0 mt-4">
                <h1 class="mb-4 title"><div class="mt-5">
                    <a class="btn btn-primary btn-style mr-2" href="view.php">Check Records </a>
                    <a class="btn btn-outline btn-outline-style" href="mail.php">Email Automation </a>
                </div>
                </h1>               
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 order-first text-lg-left text-center">
                <div>
                    <img src="assets/images/banner-round.png" alt="" class="rounded-circle img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="site-footer"> 
  <div class="bottom-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-lg-left text-center mb-lg-0 mb-3">
          <p class="copyright">© 2021 Inframind Round 2. All Rights Reserved. Developed by Sneh </p>
        </div>
        <div class="col-lg-4 align-center text-lg-right text-center">          
          <a href="https://www.linkedin.com/in/sneh-das-35920b192/" class="social-item" target="_blank"><span class="fa fa-linkedin"></span></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  window.onscroll = function () {
    scrollFunction()
  };
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/lightbox-plus-jquery.min.js"></script>
<script src='assets/js/particles.min.js'></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script>
  $(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      margin: 10,
      nav: true,
      loop: false,
      responsive: {
        0: {
          items: 1
        },
        767: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  })
</script>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
