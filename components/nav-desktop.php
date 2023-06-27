<?php

$currentRoute = basename($_SERVER['PHP_SELF']);

// Example navigation links
$navLinks = array(
    'Home' => 'index.php',
    'About' => 'about.php',
    'Contact' => 'contact.php'
);
?>
<nav class="navbar d-block navbar-expand-md navbar-dark primaryColor">
    <div class="container-fluid">

        <div @click="navigatorClick()" :style="navTran" :class="navIcon" style="font-size: 25px;" class="navbar-toggler border-0 p-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav-small-device" aria-controls="offcanvasWithBackdrop">
        </div>

        <span class="text-light d-md-none fw-bold">THIDA AUTO CENTER </span>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="m-auto"></ul>
            <ul class="navbar-nav me-auto mb-lg-0  m-auto">

                <li class="nav-item">
                    <a class="nav-link 
                    <?php if($currentRoute == $navLinks['Home']) { echo 'active'; }?>" href="index.php">Home <span class="text-light m-2">|</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link 
                    <?php if($currentRoute == $navLinks['About']) { echo 'active'; }?>" href="about.php">About Us <span class="text-light m-2">|</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link 
                    <?php if($currentRoute == $navLinks['Contact']) { echo 'active'; }?>" href="contact.php">Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <span class="text-light fw-bold">THIDA AUTO CENTER </span>
            </ul>
        </div>
    </div>
</nav>