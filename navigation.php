<?php
session_start();
?>
<!-- Start: Header Section -->
        <?php
        if(isset($_SESSION['login_user']))
        {?>

            <header id="header-v1" class="navbar-wrapper">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="navbar-header">
                                        <div class="navbar-brand">
                                            <h1>
                                                <a href="index-2.html">
                                                    <img src="images/libraria-logo-v1.png" alt="LIBRARIA" />
                                                </a>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <!-- Header Topbar -->
                                    <div class="header-topbar hidden-sm hidden-xs">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="topbar-info">
                                                    <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+61-3-8376-6284</a>
                                                    <span>/</span>
                                                    <a href="mailto:support@libraria.com"><i class="fa fa-envelope"></i>support@libraria.com</a>
                                                    <span>/</span>
                                                    <?php
                                                    echo "Welcome ".$_SESSION['login_user'];
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="topbar-links">
                                                    <a href="delogare.php"><i class="fa fa-lock"></i>Delogare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navbar-collapse hidden-sm hidden-xs">
                                        <ul class="nav navbar-nav">
                                            <li class="dropdown active">
                                                <a data-toggle="dropdown" class="dropdown-toggle disabled" href="index-2.html">Home</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="index-2.html">Home V1</a></li>
                                                    <li><a href="home-v2.html">Home V2</a></li>
                                                    <li><a href="home-v3.html">Home V3</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="lista-carti.php">Books & Media</a>
                                            </li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-menu hidden-lg hidden-md">
                                <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                                <div id="mobile-menu">
                                    <ul>
                                        <li class="mobile-title">
                                            <h4>Navigation</h4>
                                            <a href="#" class="close"></a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">Home</a>
                                            <ul>
                                                <li><a href="index-2.html">Home V1</a></li>
                                                <li><a href="home-v2.html">Home V2</a></li>
                                                <li><a href="home-v3.html">Home V3</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="lista-carti.php">Books &amp; Media</a>
                                        </li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
            <!-- End: Header Section -->
            <?php
        }
        else
        {   ?>
            <header id="header-v1" class="navbar-wrapper">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="navbar-header">
                                        <div class="navbar-brand">
                                            <h1>
                                                <a href="index-2.html">
                                                    <img src="images/libraria-logo-v1.png" alt="LIBRARIA" />
                                                </a>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <!-- Header Topbar -->
                                    <div class="header-topbar hidden-sm hidden-xs">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="topbar-info">
                                                    <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+61-3-8376-6284</a>
                                                    <span>/</span>
                                                    <a href="mailto:support@libraria.com"><i class="fa fa-envelope"></i>support@libraria.com</a>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="topbar-links">
                                                    <a href="autentificare.php"><i class="fa fa-lock"></i>Login / Register</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navbar-collapse hidden-sm hidden-xs">
                                        <ul class="nav navbar-nav">
                                            <li class="dropdown active">
                                                <a data-toggle="dropdown" class="dropdown-toggle disabled" href="index-2.html">Home</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="index-2.html">Home V1</a></li>
                                                    <li><a href="home-v2.html">Home V2</a></li>
                                                    <li><a href="home-v3.html">Home V3</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="lista-carti.php">Books & Media</a>
                                            </li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-menu hidden-lg hidden-md">
                                <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                                <div id="mobile-menu">
                                    <ul>
                                        <li class="mobile-title">
                                            <h4>Navigation</h4>
                                            <a href="#" class="close"></a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">Home</a>
                                            <ul>
                                                <li><a href="index-2.html">Home V1</a></li>
                                                <li><a href="home-v2.html">Home V2</a></li>
                                                <li><a href="home-v3.html">Home V3</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="lista-carti.php">Books &amp; Media</a>
                                        </li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>

            <?php
        }
        ?>
        <!-- End: Header Section -->