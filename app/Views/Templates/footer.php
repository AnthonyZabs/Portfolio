  </main>
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-12 mb-4 mb-md-0">
        <div class="logo">
          <h1><a href="/"><img src="<?php echo Config::$SOURCES; ?>/img/logo2.png" alt="" class="img-fluid"></a></h1>
        </div>
          <p>Sigue de cerca mi trabajo. Me gusta compartir mi conocimiento para ayudar a m&aacute;s de uno a la vez.</p>
          <p class="social">
            <a href="#"><span class="bi bi-github"></span></a>
            <a href="#"><span class="bi bi-linkedin"></span></a>
          </p>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; <?php echo date("Y") . ", " . $this->Model->Page; ?>. Cr&eacute;ditos a los respectivos clientes y/o agencias.</p>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo Config::$SOURCES; ?>/vendor/aos/aos.js"></script>
  <script src="<?php echo Config::$SOURCES; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo Config::$SOURCES; ?>/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo Config::$SOURCES; ?>/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo Config::$SOURCES; ?>/js/main.js"></script>

  <!-- Include jQuery -->
  <script src="<?php echo Config::$SOURCES; ?>/vendor/multislider/js/jquery-2.2.4.min.js"></script>

  <!-- Include Multislider -->
  <script src="<?php echo Config::$SOURCES; ?>/vendor/multislider/js/multislider.min.js"></script>
  <script>
    $('#blogSlider').multislider({
      duration: 750,
      interval: 3000
    });
  </script>
  
  <!-- Magnific Popup core JS file -->
  <script src="<?php echo Config::$SOURCES; ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script>
    $('.project__image').magnificPopup({
    type: 'ajax',
    closeBtnInside: false,
    closeOnBgClick: false,
    removalDelay: 300,
    mainClass: 'is-active'
  });
  </script>
</body>
</html>