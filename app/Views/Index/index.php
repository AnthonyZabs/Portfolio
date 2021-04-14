    <!-- Presentation -->
    <section class="hero-section" id="hero">

        <div class="wave">

            <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                    <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
                </g>
                </g>
            </svg>

        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 hero-text-image">
                    <div class="row">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 data-aos="fade-right"><?php echo $this->Model->PageDesc; ?></h1>
                            <p class="mb-5 text-justify" data-aos="fade-right" data-aos-delay="100">
                                <?php echo $this->LM->PRESENTATION; ?>
                            </p>
                        </div>
                        <div class="col-lg-4 avatar-wrap">
                            <img src="<?php echo Config::$SOURCES; ?>/img/az_avatar.svg" alt="Anthony Zabs Avatar" class="az-avatar" data-aos="fade-right">
                        </div>
                        <a href="#about" class="splash__arrow" style="pointer-events: initial;"></a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    <!-- About -->
    <section id="about" class="section">
        <div class="container">

            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-5" data-aos="fade-up">
                    <h2 class="section-heading"><?php echo $this->LM->TITABOUT; ?></h2>
                </div>
            </div>
            
            <div class="row text-justify">
                <div class="col-md-6 ms-auto order-2">
                    <h2 class="mb-4"><?php echo $this->LM->ABHI; ?></h2>
                    <p class="mb-4">
                        <?php echo $this->LM->ABPAR1; ?>
                    </p>
                    <p class="mb-4">
                        <?php echo $this->LM->ABPAR2; ?>
                    <p>
                </div>
                <div class="col-md-6" data-aos="fade-right">
                    <img src="<?php echo Config::$SOURCES; ?>/img/undraw_svg_3.svg" alt="Image" class="img-fluid">
                </div>
            </div>

        </div>
    </section>

    <!-- Skills -->
    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 me-auto">
            <h2 class="mb-4"><?php echo $this->LM->TITSKILLS; ?></h2>

            <div id="blogSlider" class="">
                <div class="MS-content">
                    <div class="item">
                        <img class="skill-logo skill-transition" src="<?php echo Config::$SOURCES; ?>/img/skills/java-4.svg" alt="Java" title="Java">
                    </div>
                    <div class="item">
                        <img class="skill-logo skill-transition" src="<?php echo Config::$SOURCES; ?>/img/skills/c-sharp.svg" alt="C#" title="C#">
                    </div>
                    <div class="item">
                        <img class="skill-logo skill-transition" src="<?php echo Config::$SOURCES; ?>/img/skills/php.svg" alt="PHP" title="PHP">
                    </div>
                    <div class="item">
                        <img class="skill-logo skill-transition" src="<?php echo Config::$SOURCES; ?>/img/skills/python-5.svg" alt="Python" title="Python">
                    </div>
                    <div class="item">
                        <img class="skill-logo skill-transition" src="<?php echo Config::$SOURCES; ?>/img/skills/azure-1.svg" alt="Microsoft Azure" title="Microsoft Azure">
                    </div>
                    <div class="item">
                        <img class="skill-logo skill-transition" src="<?php echo Config::$SOURCES; ?>/img/skills/github.svg" alt="GitHub" title="GitHub">
                    </div>
                    <div class="item">
                        <img class="skill-logo skill-transition" src="<?php echo Config::$SOURCES; ?>/img/skills/html5.svg" alt="HTML5" title="HTML5">
                    </div>
                    <div class="item">
                        <img class="skill-logo skill-transition" src="<?php echo Config::$SOURCES; ?>/img/skills/css3.svg" alt="CSS3" title="CSS3">
                    </div>
                    <div class="item">
                        <img class="skill-logo skill-transition" src="<?php echo Config::$SOURCES; ?>/img/skills/js.svg" alt="Javascript" title="Javascript">
                    </div>
                    <div class="item">
                        <img class="skill-logo skill-transition" src="<?php echo Config::$SOURCES; ?>/img/skills/bootstrap.svg" alt="Bootstrap" title="Bootstrap">
                    </div>
                    <div class="item">
                        <img class="skill-logo skill-transition" src="<?php echo Config::$SOURCES; ?>/img/skills/jquery-1.svg" alt="JQuery" title="JQuery">
                    </div>
                    <div class="item">
                        <img class="skill-logo skill-transition" src="<?php echo Config::$SOURCES; ?>/img/skills/unity.svg" alt="Unity" title="Unity">
                    </div>
                    <div class="item">
                        <img class="skill-logo skill-transition" src="<?php echo Config::$SOURCES; ?>/img/skills/sql.svg" alt="SQL Server" title="SQL Server">
                    </div>
                    <div class="item">
                        <img class="skill-logo skill-transition" src="<?php echo Config::$SOURCES; ?>/img/skills/mysql.svg" alt="MySQL" title="MySQL">
                    </div>
                    <div class="item">
                        <img class="skill-logo skill-transition" src="<?php echo Config::$SOURCES; ?>/img/skills/android.svg" alt="Android" title="Android">
                    </div>
                    <div class="item">
                        <img class="skill-logo skill-transition" src="<?php echo Config::$SOURCES; ?>/img/skills/arduino-1.svg" alt="Arduino" title="Arduino">
                    </div>
                </div>
                <div class="MS-controls">
                    <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5" data-aos="fade-up">
                <h2 class="section-heading"><?php echo $this->LM->TITPORT; ?></h2>
                <p class="mb-4"><?php echo $this->LM->PORTDESC; ?></p>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <a href="/projects/cfe/index.php" class="project__image">
                    <img class="project__image card-img-top" alt="CFE Transmisi&oacute;n" style="height: 225px; width: 100%; display: block;" src="<?php echo Config::$SOURCES; ?>/img/portfolio/cfe-card.png" data-holder-rendered="true">
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <a href="/projects/sieed/index.php" class="project__image">
                    <img class="project__image card-img-top" alt="SIEED - TecNM" style="height: 225px; width: 100%; display: block;" src="<?php echo Config::$SOURCES; ?>/img/portfolio/sieed-card.png" data-holder-rendered="true">
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <a href="/projects/acexani/index.php" class="project__image">
                    <img class="project__image card-img-top" alt="ACEXANI-II - CENEVAL" style="height: 225px; width: 100%; display: block;" src="<?php echo Config::$SOURCES; ?>/img/portfolio/acexani-card.png" data-holder-rendered="true">
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <a href="/projects/inmospacio/index.php" class="project__image">
                    <img class="project__image card-img-top" alt="InmoSpacio" style="height: 225px; width: 100%; display: block;" src="<?php echo Config::$SOURCES; ?>/img/portfolio/inmospacio-card.png" data-holder-rendered="true">
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <a href="/projects/futsoft/index.php" class="project__image">
                    <img class="project__image card-img-top" alt="FutSoft" style="height: 225px; width: 100%; display: block;" src="<?php echo Config::$SOURCES; ?>/img/portfolio/futsoft-card.png" data-holder-rendered="true">
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <a href="/projects/itplibrary/index.php" class="project__image">
                    <img class="project__image card-img-top" alt="ITP Library" style="height: 225px; width: 100%; display: block;" src="<?php echo Config::$SOURCES; ?>/img/portfolio/itplibrary-card.png" data-holder-rendered="true">
                </a>
              </div>
            </div>
            
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
            <h2><?php echo $this->LM->TITCON; ?></h2>
            <p class="mb-4"><?php echo $this->LM->CONDESC; ?></p>
            <p>
                <?php echo $this->Model->DB->GetRow("site_config", "site_email"); ?>
            </p>
          </div>
          <div class="col-md-5">
            <form action="" method="post" role="form" onsubmit="return SendContact('<?php echo substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); ?>');">

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="name"><?php echo $this->LM->CONLABNAME; ?></label>
                        <input type="text" name="name" class="form-control" id="name" required="">
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label for="name"><?php echo $this->LM->CONLABEMAIL; ?></label>
                        <input type="email" class="form-control" name="email" id="email" required="">
                    </div>
                    <div class="col-md-12 form-group mt-3">
                        <label for="name"><?php echo $this->LM->CONLABMSG; ?></label>
                        <textarea id="message" class="form-control" name="message" maxlength="450" required="" style="height: 130px;max-height: 130px;"></textarea>
                    </div>
                    <div class="col-md-6 form-group mt-3">
                        <input id="sendmsg" type="submit" class="btn btn-primary d-block w-100" value="<?php echo $this->LM->CONLABBTN; ?>">
                    </div>
                </div>

            </form>
          </div>
        </div>
      </div>
    </section>