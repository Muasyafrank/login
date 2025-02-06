<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B.R.A.S.H</title>
    <link rel="icon" href="header.png">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>

</head>
<body>
    <header>
        <nav><link rel="stylesheet" href="style.css">
            <div class="nav-header">
              <div class="nav-logo">
                <a href="#">B.R.A.S.H</a>
              </div>
              <div class="nav-menu-btn" id="menu-btn">
                <i class="ri-menu-line"></i>
              </div>  
            </div>
            <ul class="nav-links" id="nav_links">
                <li><a href="#home">Home</a></li>
                <li><a href="rent.html">Accommodation</a></li>
                <li><a href="#service">Shops</a></li>
                <li><a href="#ride">Emergency</a></li>
                <li><a href="#contact">Health</a></li>
            </li>
            <li class="nav-link-btn">
                <button class="btn">Sign Up</button>
            </li>
            <li class="nav-link-btn">
                <button class="btn">Sign In</button>
            </li>
            </ul>
            <div class="nav-btns">
                <a href="" class="btn btn_primary">Sign Up</a>
                <a href="" class="btn btn_secondary">Sign in</a>
            </div>
        </nav>
        <div class="section_header header_container" id="home">
            <div class="header_image">
                <img src="reds.jpg" alt="header">
            </div>
            <div class="header_content">
                <h1>Looking  for a place to stay as a student?</h1>
                <p>
                    Discover various hostels around our area. 
                 </p>
                <div class="header-links">
                    <a href="#">
                        View More
                    </a>
                    
                </div>
            </div>
        </div>

    </header>

    

    <section class="section_container experiment_container" id="ride">
        <p class="section_subheader">CUSTOMER EXPERIENCE</p>
        <h2 class="section_header">
            We are offer the best customer experience.
        </h2>
        <div class="experience_content">
            <div class="experience_card">
                <span><i class="ri-home-3-line"></i></span>
                <h4> Accommodation Contact info</h4>
            </div>
            <div class="experience_card">
                <span><i class="ri-money-rupee-circle-fill"></i></span>
                <h4>Affordable Houses</h4>
            </div>
            <div class="experience_card">
                <span><i class="ri-contacts-line"></i></span>
                <h4>Ease of Contact with available service providers.</h4>
            </div>
            <div class="experience_card">
                <span><i class="ri-police-car-line"></i></span>
                <h4>Law Enforcements Contacts</h4>
            </div>
            <div class="experience_card">
                <span><i class="ri-first-aid-kit-line"></i></span>
                <h4>Ease of access of emergency contacts</h4>
            </div>
            <div class="experience_card">
                <span><i class="ri-car-fill"></i></span>
                <h4>Your Choice Of Mechanic</h4>
            </div>
            <img src="resde.jpg" alt="experience">
        </div>     
        </section>

        <footer>
            <div class="section_container footer_container">
            </div>
            <div class="section_container footer_bar">
                <h4>B.R.A.S.H</h4>
                <p>
                  Copyright 2025 B.R.A.S.H .All rights reserved.  
                </p>
                <ul class="footer-socials">
                    <li><a href="#"><i class="ri-facebook-circle-fill"></i></a></li>
                    <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                    <li><a href="#"><i class="ri-tiktok-fill"></i></a></li>
                    <li><a href="#"><i class="ri-whatsapp-line"></i></a></li>
                </ul>
            </div>
        </footer>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="index.js"></script>
</body>
</html>