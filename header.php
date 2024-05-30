<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- css link -->
  <link rel="stylesheet" href="./assets/css/index.css">
  <!-- bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- font awesome icons cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>

  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light main_header_banner_section p-0">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-nowrap">
      <a class="navbar-brand header_logo me-auto" href="#">
        <img src="./assets/images/logo/logo.png" alt>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggle_button"><i class="fa-solid fa-bars"></i></span>
      </button>
      </div>
      <div class='navbar-collapse1'>
        <ul class="navbar_lists navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">About US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Gallary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
      <div class="navbar-icons ms-auto d-none d-lg-flex">
        <input type="text" name id="navbar-search" placeholder="Search" class="form-control">
        <a href="#" class="nav-link p-2"><i class="fas fa-search text-dark"></i></a>
        <a href="#" class="nav-link"><i class="fa-regular fa-heart text-dark fs-5 p-2"></i></a>
        <a href="#" class="nav-link"><i class="fa-solid fa-bag-shopping text-dark"></i></a>
      </div>
      
 
   
  </nav>

  <!-- nav section2 -->
  <nav class="navbar navbar-expand-lg navbar-light main_header_banner_section_2">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <a class="navbar-brand header_logo" href="#">
        <div class="d-flex left_header_banner">
          <div class="navbar_location_title me-4">
            <div class="d-flex align-items-center header_icons">
              <i class="fa-solid fa-location-dot me-2 fs-5"></i>
              <div>
                <p class="mb-0">OUR SHOP:</p>
                <h6 class="mb-0">London, Central Ave 15/2</h6>
              </div>
            </div>
          </div>
          <div class="navbar_location_title">
            <div class="d-flex align-items-center header_icons">
              <i class="fa-solid fa-mobile-screen me-2 fs-5"></i>
              <div>
                <p class="mb-0">SUPPORT HOTLINE:</p>
                <h6 class="mb-0">+1 (123) 456 78 90</h6>
              </div>
            </div>
          </div>
        </div>
      </a>
    
      <div class="collapse navbar-collapse justify-content-center align-items-center" >
        <!-- Add any additional navbar items here if needed -->
      </div>
      <div class="navbar-icons ms-auto d-none d-lg-flex">
        <a href="#" class="nav-link text-dark p-2"><i class="fas fa-user text-dark pe-2"></i> My Account</a>
        <a href="#" class="nav-link p-2 text-dark"><i class="fa-solid fa-arrow-right-from-bracket text-dark me-2 fs-5"></i>Sign In</a>
        <a href="#" class="nav-link text-dark">USD, $</a>
      </div>
    </div>
  </nav>

  <hr class="m-0" style="color: #f3d400; height: 4px;">

  <!-- nav section3 -->
  <nav class="navbar_3">
    <div class="navbar-menu shadow" class="collapse navbar-collapse justify-content-center align-items-center" id="navbarSupportedContent">
      <ul class="navbar-list"  >
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link shop-dropdown" href="#">Shop</a>
          <ul class="dropdown-menu" >
            <li class="nav-item dropdown">
              <div class=" d-flex">
                <div class="dropdown-column">
                  <ul>
                    <li class="dropdown-header">BRACELETS</li>
                    <li class="dropdown-item"><a href="#">Bands</a></li>
                    <li class="dropdown-item"><a href="#">Emerald Spring</a></li>
                    <li class="dropdown-item"><a href="#">Men’s Bands</a></li>
                    <li class="dropdown-item"><a href="#">Ruthenium</a></li>
                    <li class="dropdown-item"><a href="#">Wedding Band Sets</a></li>
                    <li class="dropdown-header">BY METAL</li>
                    <li class="dropdown-item"><a href="#">Gold</a></li>
                    <li class="dropdown-item"><a href="#">Platinum</a></li>
                    <li class="dropdown-item"><a href="#">Silver</a></li>
                  </ul>
                </div>
                <div class="dropdown-column">
                  <ul>
                    <li class="dropdown-header">EARRINGS</li>
                    <li class="dropdown-item"><a href="#">All Stones</a></li>
                    <li class="dropdown-item"><a href="#">Aquamarines</a></li>
                    <li class="dropdown-item"><a href="#">Diamonds</a></li>
                    <li class="dropdown-item"><a href="#">Sterling Silver</a></li>
                    <li class="dropdown-item"><a href="#">White Gold</a></li>
                    <li class="dropdown-header">BY METAL</li>
                    <li class="dropdown-item"><a href="#">Gold</a></li>
                    <li class="dropdown-item"><a href="#">Platinum</a></li>
                    <li class="dropdown-item"><a href="#">Silver</a></li>
                  </ul>
                </div>
                <div class="dropdown-column">
                  <ul>
                    <li class="dropdown-header">PENDANTS</li>
                    <li class="dropdown-item"><a href="#">Amethyst</a></li>
                    <li class="dropdown-item"><a href="#">Colored Gemstones</a></li>
                    <li class="dropdown-item"><a href="#">No Gemstone</a></li>
                    <li class="dropdown-item"><a href="#">White Gold</a></li>
                    <li class="dropdown-header">BY METAL</li>
                    <li class="dropdown-item"><a href="#">Gold</a></li>
                    <li class="dropdown-item"><a href="#">Platinum</a></li>
                    <li class="dropdown-item"><a href="#">Silver</a></li>
                  </ul>
                </div>
                <div class="dropdown-column dropdown-image">
                  <!-- Images will be shown here on hover -->
                  <img id="dropdownImage" src="./assets/images/banner/card1_jew.png" alt="Dropdown Image" />

                </div>
              </div>
            </li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#">New Collection</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Sale</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Woman</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Men</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Watches</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#">Pages</a>
          <ul class="dropdown-menu">
            <li class="dropdown-item"><a href="#">About</a></li>
            <li class="dropdown-item"><a href="#">Contact Us</a></li>
            <li class="dropdown-item"><a href="#">Blog</a></li>
            <li class="dropdown-item"><a href="#">Gallery</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#">Blog Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
      </ul>
    </div>
  </nav>

  <hr class="m-0" style="color: #f3d400; height: 2px;">

  <script>
    // Add an event listener to the toggle button
document.getElementById('navbar-toggler').addEventListener('click', function() {
  // Toggle the visibility of the navigation menu
  var navMenu = document.getElementById('navbarSupportedContent');
  if (navMenu.classList.contains('show')) {
    navMenu.classList.remove('show');
  } else {
    navMenu.classList.add('show');
  }
});

  </script>