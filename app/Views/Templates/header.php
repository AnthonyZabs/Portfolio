<!DOCTYPE html>
<html lang="<?php echo $this->lang; ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $this->Model->Page . ' - ' . $this->Model->PageDesc;?></title>
    <meta name="author" content="Anthony Zabs">
    <meta content="Backend &amp; Web Developer" name="description">
    <meta content="jose antonio aguilar zab, antonio aguilar, anthony zabs, zabs, anthony, programming, code, developer, portolio, portafolio, programacion, codigo, programas, developer, develop, desarrollador, blog, projects, proyectos, c#, java, php, html, web page" name="keywords">

    <meta property="og:title" content="Anthony Zabs">
    <meta property="og:locale" content="en_US">
    <meta property="og:description" content="Backend &amp; Web Developer" name="description">
    <meta property="og:url" content="https://anthonyzabs.com">
    <meta property="og:site_name" content="Anthony Zabs">
    <meta property="og:image" content="<?php echo Config::$SOURCES; ?>/img/og_thumbnail.png">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@JoseAntonioAZ">
    <meta name="twitter:creator" content="@JoseAntonioAZ">
    <meta name="twitter:title" content="Anthony Zabs">
    <meta name="twitter:description" content="Backend &amp; Web Developer. I love to take advantage of my free time in creating new technological tools that can contribute positively to society.">
    <meta name="twitter:image" content="<?php echo Config::$SOURCES; ?>/img/og_thumbnail.png">
    <meta name="twitter:image:alt" content="Anthony Zabs">

    <!-- Favicons -->
    <link href="<?php echo Config::$SOURCES; ?>/img/favicon/favicon.ico" rel="icon">
    <link href="<?php echo Config::$SOURCES; ?>/img/favicon/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo Config::$SOURCES; ?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo Config::$SOURCES; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Config::$SOURCES; ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo Config::$SOURCES; ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo Config::$SOURCES; ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo Config::$SOURCES; ?>/css/style.css" rel="stylesheet">

    <!-- Animation CSS File -->
    <link href="<?php echo Config::$SOURCES; ?>/css/animate.css" rel="stylesheet">

    <!-- Custom Slider -->
    <link href="<?php echo Config::$SOURCES; ?>/vendor/multislider/css/custom.css" rel="stylesheet">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="<?php echo Config::$SOURCES; ?>/vendor/magnific-popup/magnific-popup.css">
</head>
<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1><a href="/"><img src="<?php echo Config::$SOURCES; ?>/img/logo.png" alt="" class="img-fluid"></a></h1>
            <!-- <a href="/">< ?php echo $this->Model->Page; ?></a> -->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="#about"><?php echo $this->LM->NAVABOUT; ?></a></li>
                <li><a href="#portfolio"><?php echo $this->LM->NAVPORT; ?></a></li>
                <li><a href="#contact"><?php echo $this->LM->NAVCON; ?></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        </div>
    </header>

    <main id="main">