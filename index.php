<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Football</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href=""><img src="images/logo.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mb-2 mb-lg-0  ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <!-- Hero Section start  -->
    <section>
      <div class="owl-carousel">
        <div class="slide slide-1 d-flex align-items-center">
          <div class="container">
            <div class="hero-content">
              <h1 class="hero-title">Football club United</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eligendi odio magnam culpa laudantium eos natus accusamus vel ex enim quisquam in doloribus quibusdam consequuntur autem, et maxime quas! Tempore.</p>
              <a class="hero-btn" href="#">View More</a>
            </div>
          </div>
        </div>
        <div class="slide slide-2 d-flex align-items-center">
          <div class="container">
            <div class="hero-content">
              <h1 class="hero-title">Get ready for the game of your life!</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eligendi odio magnam culpa laudantium eos natus accusamus vel ex enim quisquam in doloribus quibusdam consequuntur autem, et maxime quas! Tempore.</p>
              <a class="hero-btn" href="#">View More</a>
            </div>
          </div>
        </div>
        <div class="slide slide-3 d-flex align-items-center">
          <div class="container">
            <div class="hero-content">
              <h1 class="hero-title">Detailed soccer match news & reviews</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eligendi odio magnam culpa laudantium eos natus accusamus vel ex enim quisquam in doloribus quibusdam consequuntur autem, et maxime quas! Tempore.</p>
              <a class="hero-btn" href="#">View More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section end  -->
    <!-- Next match section start  -->
     <section class="next-match-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6">
            <h2 class="text-center">Next Match</h2>
            <div class="row next-teams d-flex justify-content-between pt-4 g-4">
              <div class="col-4 next-team d-flex flex-column align-items-center justify-content-center">
                <img src="images/logo1.png" alt="Team Flag">
                <h5 class="text-center">FC United</h5>
              </div>
              <div class="col-4 next-match-schedule d-flex flex-column justify-content-center">
                <span class="text-center">VS</span>
                <span class="schedule-time text-center">Jun 20, 2025</span>
              </div>
              <div class="col-4 next-team d-flex flex-column align-items-center justify-content-center">
                <img src="images/logo2.png" alt="Team Flag">
                <h5 class="text-center">West Ham United</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
     </section>
    <!-- Next match section end  -->
  </main>
  <footer> </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplaySpeed: 2000,
      });
    });
  </script>
</body>

</html>