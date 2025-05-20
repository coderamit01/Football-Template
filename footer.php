  <footer class="footer d-flex align-items-center">
    <div class="container">
      <p class="m-0 text-center">Crafted by ❤ <a href="http://webase.com.bd" target="_blank">Webase</a></p>
    </div>
  </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    $(document).ready(function() {
      $(".hero-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplaySpeed: 3000,
        dragEndSpeed: 500,
      });
    });
    // Result match slider 
    $(document).ready(function() {
      $(".result-carousel").owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        margin: 10,
        nav: true,
        pagination: true,
        navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 2
          },
          1024: {
            items: 3
          },
          1280: {
            items: 4
          },
        }
      });
    });
  </script>
</body>
</html>