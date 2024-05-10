<?php
// Get the current page filename
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-header navbar-expand-lg fixed-top">
    <div class="topbar">
        <div class="container">
            <div class="topbar-inner">
                <div class="topbar-left">
                    <a href="mailto:info@zivirialab.com" class="topbar-link">
                        <i class="bi bi-envelope-fill"></i>
                        <span>info@zivirialab.com</span>
                    </a>
                </div>
                <div class="topbar-right">
                  <ul class="social-list">
                      <li><a href=""><i class="bi bi-instagram"></i></a></li>
                      <li><a href=""><i class="bi bi-linkedin"></i></a></li>
                      <li><a href=""><i class="bi bi-facebook"></i></a></li>
                      <li><a href=""><i class="bi bi-twitter-x"></i></a></li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">
            <i class="bi bi-list"></i>
        </button>
        <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" class="img-fluid" alt="">
        </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Navigation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-lg-3">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about_dry_eyes.html" class="nav-link">Diseases</a>
                    </li>
                    <li class="nav-item">
                        <a href="products.html" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="resources.html" class="nav-link">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                    </li>
                </ul>
                <button class="btn btn-primary btn-play">Play Game</button>
                
            </div>
        </div>
    </div>
</nav>
