<?php
    $websiteTitle = 'II Asiapac Partners';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">
        <meta name="description" content="A boutique advisory firm focused on the infrastructure and resource sectors in the Asia Pacific region.">
        <meta name="keywords" content="asia, law, legal, advice, advisory, ports, infrastructure, international, Ross Ramsay, asiapacpartners">
        <meta name="author" content="Nick Ramsay">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

        <link rel="icon" href="img/favicon.png" type="image/png">

        <title><?php echo $websiteTitle.' '.$pageTitle; ?></title>

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Lumen:  --><link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/lumen/bootstrap.min.css" rel="stylesheet" />
        <!-- Paper: <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/paper/bootstrap.min.css" rel="stylesheet" /> -->

        <!-- Custom CSS -->
        <link href="css/styles.css" rel="stylesheet">

    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="navbar-brand app-color" style="color: #1F4E79;"><?php echo $websiteTitle.' '.$pageTitle; ?></span>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php" style="color: #1F4E79;"><span class="glyphicon glyphicon-home"> </span> Home</a>
                        </li>
                        <li>
                            <a href="contact.php" style="color: #1F4E79;"><span class="glyphicon glyphicon-envelope"> </span> Contact</a>
                        </li>
                        <li style="display: none">
                            <a href="services.php" style="color: #1F4E79;"><span class="glyphicon glyphicon-list-alt"> </span> Services</a>
                        </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Header Carousel -->
        <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill" style="background-image:url('img/1.jpg');"></div>
                    <div class="carousel-caption">
                        <h2></h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('img/2.jpg');"></div>
                    <div class="carousel-caption">
                        <h2></h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('img/3.jpg');"></div>
                    <div class="carousel-caption">
                        <h2></h2>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </header>

        <!-- Page Content -->
        <div class="container">
            <!-- Marketing Icons Section -->
