<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Unico Sentral Distribusi</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?= assets() ?>css/materialize.min.css">
    <link rel="stylesheet" href="<?= assets() ?>css/style.css">

    <script src="<?= assets() ?>js/jquery-3.4.1.min.js"></script>
    <script src="<?= assets() ?>js/materialize.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="white" role="navigation">
        <div class="nav-wrapper">
            <a id="logo-container" href="#" class="brand-logo black-text">
                <img src="<?= assets() ?>image/logo.png" style="padding-top: 10px;">
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?= site_url('user-list') ?>" class="black-text darken-4">User List</a></li>
                <li><a href="<?= site_url('logout') ?>" class="black-text darken-4">Log Out</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="<?= site_url('user-list') ?>">User List</a></li>
                <li><a href="<?= site_url('logout') ?>">Log Out</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Slide -->
    <div class="carousel carousel-slider center">
        <div class="carousel-item grey white-text" href="#one!">
            <h2>First Slide</h2>
        </div>
        <div class="carousel-item grey white-text" href="#two!">
            <h2>Second Slide</h2>
        </div>
        <div class="carousel-item grey white-text" href="#three!">
            <h2>Thirt Slide</h2>
        </div>
    </div>
    <hr>
    <!-- End Slide -->

    <!-- Form Search and Grid Menu  -->
    <div class="container">
        <div class="search-form">
            <span class="icon"><i class="material-icons">search</i></span>
            <input type="search" id="search" placeholder="Search..." />
        </div>
        <div class="row center">
            <div class="col s3 lighten-1">
                <div class="grid-menu black-text">
                    <img src="<?= assets() ?>image/giftcard.png">
                    Material
                </div>
            </div>
            <div class="col s3 lighten-1">
                <div class="grid-menu black-text">
                    <img src="<?= assets() ?>image/build.png">
                    Tools
                </div>
            </div>
            <div class="col s3 lighten-1">
                <div class="grid-menu black-text">
                    <img src="<?= assets() ?>image/data-setting.png">
                    Fitting
                </div>
            </div>
            <div class="col s3 lighten-1">
                <div class="grid-menu black-text">
                    <img src="<?= assets() ?>image/category.png">
                    Others
                </div>
            </div>
        </div>
    </div>
    <!-- End Form Search and Grid Menu  -->

    <!-- Mobile Navbar -->
    <div class="mobile-nav">
        <div class="mobile-nav-item">
            <a href="">
                <div class="mobile-nav-item-content mobile-nav-item-active">
                    <i class="material-icons">home</i>
                </div>
            </a>
        </div>
        <div class="mobile-nav-item">
            <a href="">
                <div class="mobile-nav-item-content black-text">
                    <i class="material-icons">person</i>
                </div>
            </a>
        </div>
    </div>
    <!-- End Mobile Navbar -->

    <script>
        (function($) {
            $(function() {
                $('.sidenav').sidenav();
            });
        })(jQuery);
        $(document).ready(function() {
            $(".carousel.carousel-slider").carousel({
                fullWidth: true,
                indicators: true
            });
            autoplay();

            function autoplay() {
                $('.carousel.carousel-slider').carousel('next');
                setTimeout(autoplay, 4500);
            }
        });
    </script>
</body>

</html>