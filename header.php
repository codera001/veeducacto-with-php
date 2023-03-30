<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg p-3 header-first d-none d-md-block">
    <div class="container-fluid">
      <div class="icon">
        <span class="icon-text mx-1">Follow us:-</span>
        <span class="icons fab fa-facebook-f"></span>
        <span class="icons fab fa-instagram"></span>
        <span class="icons fab fa-twitter"></span>
        <span class="icons fab fa-youtube"></span>
      </div>

      <div class="nav-contact">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item d-flex">
            <img src="./assests/phone-call.png" />
            <a class="nav-link mx-2 text-white" aria-current="page" href="#"><small>Call Now!</small> <br />
              <b>+91 7052 101 786</b></a>
          </li>
          <li class="nav-item d-flex">
            <img src="./assests/mailing.png" />
            <a class="nav-link mx-2" href="#"><small>Email Now! </small><br /><b>info@example.com</b></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light header-second my-0 py-0">
    <img src="./assests/logo.png" alt="logo" />
    <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="border: 1px solid black;">
      <span class="navbar-toggler-icon" style="color: black;"></span>
    </button>
   
    <div class="offcanvas offcanvas-top " id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle me-3" href="index.php" id="navbarDropdownMenuLinkHome" role="button"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Home
            <span class="caret"></span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkHome">
            <a class="dropdown-item" href="#">University</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Kindergaten</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">High School</a>
          </div>
        </li>
        <hr>
        <li class="nav-item active">
          <a class="nav-link me-3" href="about.php">About Us <span class="sr-only">(current)</span></a>
        </li>
        <hr>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle me-3" href="courses.php" id="navbarDropdownMenuLinkCourses" role="button"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Courses
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkCourses">
            <a class="dropdown-item" href="#">Courses</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Courses 01</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Courses details</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Courses 02</a>
          </div>
        </li>
        <hr>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle me-3" href="#" id="navbarDropdownMenuLinkPages" role="button"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pages
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkPages">
            <a class="dropdown-item" href="#">Event</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Event Details</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Gallery</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Pricing</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Faq</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Teacher</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Teacher Details</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">404 error</a>
          </div>
        </li>
        <hr>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle me-3" href="#" id="navbarDropdownMenuLinkBlog" role="button"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Blog
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkBlog">
            <a class="dropdown-item" href="#">Action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Another action</a>
          </div>
        </li>
        <hr>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact</a>
        </li>

        <span class="fas fa-search hide"></span>
      <button class="btns ms-3 hide">ADMISSION OPEN</button>
      </ul>
    
    </div>
  </nav>












  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9.1.1/swiper-bundle.min.js"></script>
  <script src="index.js"></script>
</body>

</html>