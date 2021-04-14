<!DOCTYPE html>
<html lang="<?php echo $this->lang; ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $this->Model->Page . ' - ' . $this->Model->PageDesc;?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

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
                <li><a href="#about">Sobre m&iacute;</a></li>
                <li><a href="#portfolio">Portafolio</a></li>
                <li><a href="#contact">Contáctame</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        </div>
    </header>

    <main id="main">