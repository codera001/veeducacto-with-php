<?php

include 'config.php';


if(isset($_POST['submit'])){
   $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $phoneno = $_POST['phoneno'];
   $comment = mysqli_real_escape_string($con, $_POST['comment']);

   $select_message = mysqli_query($con, "SELECT * FROM `user_msg` WHERE firstname = '$firstname' AND email = '$email' AND phonenumber = '$phoneno' AND comment = '$comment'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($con, "INSERT INTO `user_msg`( firstname, email, phonenumber, comment) VALUES( '$firstname', '$email', '$phoneno', '$comment')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>



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
    <!-- header section -->
<?php include 'header.php'; ?>

  <!-- carousel section -->
  <div id="carouselExampleFade container-fluid" class="carousel slide carousel-fade " data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="5000">
        <img src="./assests/slider.png" class="d-block w-100 " alt="..." />
        <div class="carousel-caption  d-block  ">
          <div class="container">
            <h5 data-animation="fadeInUp" data-delay=".4s">WELCOME TO QEDUCATO <span></span></h5>
            <h2>Education is the best <br />key success in life</h2>
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas pariatur ut non placeat, eos maiores
              rerum alias delectus ealaborum consequuntur deleniti, expedita iusto! Nisi temporibus.

            </p>
            <div class="d-flex">
              <button class="btns me-2 mt-4">Discover More <i class="fa-solid fa-arrow-right"></i></button>
              <button class="btn ss-btn mt-4">Contact Us <i class="fa-solid fa-arrow-right"></i></button>
            </div>


            <div class="container sr-cotner">
              <div class="row">
                <div class="col-4  column">
                  <div class="box d-flex me-2">
                    <div class="icon"><img src="./assests/sve-icon4.png" alt=""></div>
                    <div class="text ">
                      <h6>Educational Services</h6>
                      <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea sharing
                        listically</p>
                      <span>Read More <i class="fas fa-arrow-right"></i></span>
                    </div>
                  </div>
                </div>
                <div class="col-4  column-middle">
                  <div class="box  d-flex">
                    <div class="icon"><img src="./assests/sve-icon5.png" alt=""></div>
                    <div class="text">
                      <h6>International Hubs</h6>
                      <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea sharing
                        listically</p>
                      <span>Read More <i class="fas fa-arrow-right"></i></span>
                    </div>
                  </div>
                </div>
                <div class="col-4 column">
                  <div class="box d-flex">
                    <div class="icon"><img src="./assests/sve-icon6.png" alt=""></div>
                    <div class="text">
                      <h6>Bachelor's and Masters</h6>
                      <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea sharing
                        listically</p>
                      <span>Read More <i class="fas fa-arrow-right"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="./assests/slider2.png" class="d-block w-100" alt="..." />
        <div class="carousel-caption  d-sm-block">
          <div class="container">
            <h5>WELCOME TO QEDUCATO <span></span></h5>
            <h2>Education is the best <br />key success in life</h2>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas
              pariatur ut non placeat, eos maiores rerum alias delectus ea
              laborum consequuntur deleniti, expedita iusto! Nisi temporibus.
            </p>
            <div class="d-flex">
              <button class="btns me-2 mt-4">Discover More <i class="fa-solid fa-arrow-right"></i></button>
              <button class="btn ss-btn mt-4">Contact Us <i class="fa-solid fa-arrow-right"></i></button>
            </div>


            <div class="container sr-cotner">
              <div class="row">
                <div class="col-4 column">
                  <div class="box d-flex">
                    <div class="icon"><img src="./assests/sve-icon4.png" alt=""></div>
                    <div class="text ">
                      <h6>Educational Services</h6>
                      <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea sharing
                        listically</p>
                      <span>Read More <i class="fas fa-arrow-right"></i></span>
                    </div>
                  </div>
                </div>
                <div class="col-4 column-middle">
                  <div class="box d-flex">
                    <div class="icon"><img src="./assests/sve-icon5.png" alt=""></div>
                    <div class="text">
                      <h6>International Hubs</h6>
                      <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea sharing
                        listically</p>
                      <span>Read More <i class="fas fa-arrow-right"></i></span>
                    </div>
                  </div>
                </div>
                <div class="col-4 column">
                  <div class="box d-flex">
                    <div class="icon"><img src="./assests/sve-icon6.png" alt=""></div>
                    <div class="text">
                      <h6>Bachelor's and Masters</h6>
                      <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea sharing
                        listically</p>
                      <span>Read More <i class="fas fa-arrow-right"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev d-none d-md-block  " type="button" data-bs-target="#carouselExampleFade"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
        <span class="visually-hidden ">Previous</span>
      </button>
      <button class="carousel-control-next d-none d- d-md-block mx-o " type="button"
        data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon  text-dark " aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="container sr-cotner mobile">
    <div class="row">
      <div class="col-4 column">
        <div class="box d-flex">
          <div class="icon"><img src="./assests/sve-icon4.png" alt=""></div>
          <div class="text ">
            <h6>Educational Services</h6>
            <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea sharing
              listically</p>
            <span>Read More <i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </div>
      <div class="col-4 column-middle">
        <div class="box d-flex">
          <div class="icon"><img src="./assests/sve-icon5.png" alt=""></div>
          <div class="text">
            <h6>International Hubs</h6>
            <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea sharing
              listically</p>
            <span>Read More <i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </div>
      <div class="col-4 column">
        <div class="box d-flex">
          <div class="icon"><img src="./assests/sve-icon6.png" alt=""></div>
          <div class="text">
            <h6>Bachelor's and Masters</h6>
            <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea sharing
              listically</p>
            <span>Read More <i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- about-section -->
  <section class="container-fluid about-section fadeInLeft">
    <div class="container ">
      <div class="image ">
        <img src="./assests/about_img_02.png" alt="about-image">
      </div>
      <div class="text">
        <h6><i class="fa-solid fa-graduation-cap me-2"></i>About Our University</h6>
        <h1 class="mt-1 mb-4">A Few Words About the University </h1>
        <p class="large-text">Our community is being called to reimagine the future. As the only university where a
          renowned design school comes together with premier colleges, we are making learning more relevant and
          transformational.</p>
        <p>We are proud to offer top ranige in employment services such and asser payroll and benefits administrato
          managemen and asistance with global business range ployment employer readings from religious texts or
          literature
          are also commonly inc compliance</p>
        <div class=" column ">
          <div class="column-one d-flex  me-2">
            <div class="number">
              <h5>01</h5>
            </div>
            <div>
              <h4 class="d-none d-md-block">Doctoral Degrees</h4>
              <p>consectetur adipiscing elit sed do eiusmod tem incid idunt.</p>
            </div>
          </div>
          <div class="column-one d-flex me-2">
            <div class="number">
              <h5>02</h5>
            </div>
            <div>
              <h4 class="d-none d-md-block">Global Students</h4>
              <p>consectetur adipiscing elit sed do eiusmod tem incid idunt.</p>

            </div>
          </div>
        </div>
        <button class="s-btn">Read More <i class="fas fa-arrow-right "></i></button>
      </div>


    </div>
  </section>

<!-- courses-section -->
  <section class="courses-section" data-animation="fadeInDown" data-delay=".4s">
    <div class=" container header-text">
      <h6 class="p-text"><i class="fas fa-graduation-cap me-3">Our Courses</i></h6>
      <h1>Graduate Programs</h1>
    </div>



    <div class=" slide-container swiper">
      <div class=" container slide-content">

        <div class="swiper-wrapper">
          <div class="card col-sm-3 swiper-slide">
            <div class="card-image">
              <img src="./assests/couress-img-1.jpg" alt="">
            </div>
            <div class="cat">
              <p><i class="fas fa-graduation-cap me-2"></i>Sciences</p>
            </div>
            <div class="card-text ">
              <h3>Biochemistry</h3>
              <p>Seamlessly visualize quality ellectual capital without superior collaboration and ideal tically</p>
              <div class="icon">
                <span>Read More <i class="fas fa-arrow-right"></i></span>
                <img src="./assests/cou-icon.png" alt="">
              </div>
            </div>
          </div>


          <div class="card  swiper-slide">
            <div class="card-image">
              <img src="./assests/couress-img-2.jpg" alt="">
            </div>
            <div class="cat">
              <p><i class="fas fa-graduation-cap me-2"></i>Sciences</p>
            </div>
            <div class="card-text ">
              <h3>Major in Economics</h3>
              <p>Seamlessly visualize quality ellectual capital without superior collaboration and ideal tically</p>
              <div class="icon">
                <span>Read More <i class="fas fa-arrow-right"></i></span>
                <img src="./assests/cou-icon.png" alt="">
              </div>
            </div>
          </div>



          <div class="card  swiper-slide">
            <div class="card-image">
              <img src="./assests/couress-img-3.jpg" alt="">
            </div>
            <div class="cat">
              <p><i class="fas fa-graduation-cap me-2"></i>Sciences</p>
            </div>
            <div class="card-text ">
              <h3>Business Media</h3>
              <p>Seamlessly visualize quality ellectual capital without superior collaboration and ideal tically</p>
              <div class="icon">
                <span>Read More <i class="fas fa-arrow-right"></i></span>
                <img src="./assests/cou-icon.png" alt="">
              </div>
            </div>
          </div>



          <div class="card  swiper-slide">
            <div class="card-image">
              <img src="./assests/couress-img-4.jpg" alt="">
            </div>
            <div class="cat">
              <p><i class="fas fa-graduation-cap me-2"></i>Sciences</p>
            </div>
            <div class="card-text ">
              <h3>Public Adminstration</h3>
              <p>Seamlessly visualize quality ellectual capital without superior collaboration and ideal tically</p>
              <div class="icon">
                <span>Read More <i class="fas fa-arrow-right"></i></span>
                <img src="./assests/cou-icon.png" alt="">
              </div>
            </div>
          </div>


          <div class="card swiper-slide">
            <div class="card-image">
              <img src="./assests/couress-img-5.jpg" alt="">
            </div>
            <div class="cat">
              <p><i class="fas fa-graduation-cap me-2"></i>Sciences</p>
            </div>
            <div class="card-text ">
              <h3>Biotechnology</h3>
              <p>Seamlessly visualize quality ellectual capital without superior collaboration and ideal tically</p>
              <div class="icon">
                <span>Read More <i class="fas fa-arrow-right"></i></span>
                <img src="./assests/cou-icon.png" alt="">
              </div>
            </div>
          </div>



          <div class="card swiper-slide">
            <div class="card-image">
              <img src="./assests/couress-img-6.jpg" alt="">
            </div>
            <div class="cat">
              <p><i class="fas fa-graduation-cap me-2"></i>Sciences</p>
            </div>
            <div class="card-text ">
              <h3>Corporate Finance</h3>
              <p>Seamlessly visualize quality ellectual capital without superior collaboration and ideal tically</p>
              <div class="icon">
                <span>Read More <i class="fas fa-arrow-right"></i></span>
                <img src="./assests/cou-icon.png" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>


      </div>
    </div>


    <div class="container-fluid  ">
      <div class="text">
        <h1>Our Best Features</h1>
        <p class="paragraph">Special wedding garments are often worn, and the ceremony is sometimes followed by a
          wedding reception.
          Music, poetry.</p>
        <div class="icon-text d-flex fadeInTop">
          <img src="./assests//fea-icon01.png" alt="">
          <div class="text ms-3">
            <h4 class="text-white">Skilled Teachers</h4>
            <p>Special wedding garments are often worn, and the ceremony is sttimes followed by a wedding reception.
              Music, poetry, prayers, or readings from</p>
          </div>
        </div>

        <div class="icon-text d-flex mt-2 fadeInTop">
          <img src="./assests//fea-icon02.png" alt="">
          <div class="text ms-3">
            <h4 class="text-white">Affordable Courses</h4>
            <p>Special wedding garments are often worn, and the ceremony is sttimes followed by a wedding reception.
              Music, poetry, prayers, or readings from</p>
          </div>
        </div>

        <div class="icon-text d-flex mt-2 fadeInTop">
          <img src="./assests//fea-icon03.png" alt="">
          <div class="text ms-3">
            <h4 class="text-white">Efficient & Flexible</h4>
            <p>Special wedding garments are often worn, and the ceremony is sttimes followed by a wedding reception.
              Music, poetry, prayers, or readings from</p>
          </div>
        </div>
      </div>
      <div class="image ms-4 me-0 ">
        <img src="./assests/steps-img.png" alt="" class="me-0">
      </div>
    </div>
  </section>

  <!-- events-section -->
  <section class="events-section">
    <div class="header-text fadeInTop">
      <h6><i class="fas fa-graduation-cap me-2 "></i>Our Events</h6>
      <h1>Upcoming Events</h1>
    </div>
    <div class=" card-section">
      <div class="row">
        <div class="card col-4">
          <div class="card-image">
            <img src="./assests/evn-img-1.jpg" alt="">
          </div>
          <div class="cat">
            <h4>18</h4>
            <small>March, 2023</small>
          </div>
          <div class="card-text">
            <h3>Basic UI & UX Design for new development </h3>
            <p>Seamlessly visualize quality ellectual capital without superior collaboration and ideal tically</p>
            <div class="icon">
              <p>3.30pm-4.30pm <i class="fas fa-arrow-right"></i></p>
              <span>United Kingdom </span>

            </div>
          </div>
        </div>

        <div class="card col-4">
          <div class="card-image">
            <img src="./assests/evn-img-1.jpg" alt="">
          </div>
          <div class="cat">
            <h4>18</h4>
            <small>March, 2023</small>
          </div>
          <div class="card-text">
            <h3>Basic UI & UX Design for new development </h3>
            <p>Seamlessly visualize quality ellectual capital without superior collaboration and ideal tically</p>
            <div class="icon">
              <p>3.30pm-4.30pm <i class="fas fa-arrow-right"></i></p>
              <span>United Kingdom </span>

            </div>
          </div>
        </div>

        <div class="card col-4">
          <div class="card-image">
            <img src="./assests/evn-img-1.jpg" alt="">
          </div>
          <div class="cat">
            <h4>18</h4>
            <small>March, 2023</small>
          </div>
          <div class="card-text">
            <h3>Basic UI & UX Design for new development </h3>
            <p>Seamlessly visualize quality ellectual capital without superior collaboration and ideal tically</p>
            <div class="icon">
              <p>3.30pm-4.30pm <i class="fas fa-arrow-right"></i></p>
              <span>United Kingdom </span>

            </div>
          </div>
        </div>
      </div>
    </div>


    <div class=" card-section">
      <div class="row">
        <div class="card col-4">
          <div class="card-image">
            <img src="./assests/evn-img-1.jpg" alt="">
          </div>
          <div class="cat">
            <h4>18</h4>
            <small>March, 2023</small>
          </div>
          <div class="card-text">
            <h3>Basic UI & UX Design for new development </h3>
            <p>Seamlessly visualize quality ellectual capital without superior collaboration and ideal tically</p>
            <div class="icon">
              <p>3.30pm-4.30pm <i class="fas fa-arrow-right"></i></p>
              <span>United Kingdom </span>

            </div>
          </div>
        </div>

        <div class="card col-4">
          <div class="card-image">
            <img src="./assests/evn-img-1.jpg" alt="">
          </div>
          <div class="cat">
            <h4>18</h4>
            <small>March, 2023</small>
          </div>
          <div class="card-text">
            <h3>Basic UI & UX Design for new development </h3>
            <p>Seamlessly visualize quality ellectual capital without superior collaboration and ideal tically</p>
            <div class="icon">
              <p>3.30pm-4.30pm <i class="fas fa-arrow-right"></i></p>
              <span>United Kingdom </span>

            </div>
          </div>
        </div>

        <div class="card col-4">
          <div class="card-image">
            <img src="./assests/evn-img-1.jpg" alt="">
          </div>
          <div class="cat">
            <h4>18</h4>
            <small>March, 2023</small>
          </div>
          <div class="card-text">
            <h3>Basic UI & UX Design for new development </h3>
            <p>Seamlessly visualize quality ellectual capital without superior collaboration and ideal tically</p>
            <div class="icon">
              <p>3.30pm-4.30pm <i class="fas fa-arrow-right"></i></p>
              <span>United Kingdom </span>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="container">
        <div class="bg-text">
          <h1>Schorlarship Programs</h1>
          <p>At Estuidar University, we prepare you to launch your career by providing a supportive, creative, and
            professional environment from which to learn practical skills and build a network of industry contacts</p>
        </div>
        <button class="btns ">Financial Aid<i class="fa-solid fa-arrow-right"></i></button>
      </div>
    </div>

    <div class="container inquiry fadeInLeft">
      <div class="text">
        <h1>Get every single answer here.</h1>
        <h6>A business or organization established to provide a particular service, typically one that involves a
          organizing transactions.</h6>

        <div>

          <div class="container dropdown">
            <button class=" btn-styled " id="btn-styled" data-bs-toggle="dropdown">
              <a href=""> 01 Cras turpis felis, elementum sed mi at arcu?</a>
              <i class="fas fa-arrow-left" id="arrow"></i>
            </button>

            <div class="dropdown-menu" id="styled-dropdown">
              <p class="dropdown-item text-dark">
                Create New
              </p>
            </div>
          </div>

          <div class="container dropdown">
            <button class=" btn-styled" id="btn-styled" data-bs-toggle="dropdown">
              <a href=""> 01 Cras turpis felis, elementum sed mi at arcu?</a>
              <i class="fas fa-arrow-left" id="arrow"></i>
            </button>

            <div class="dropdown-menu" id="styled-dropdown">
              <p class="dropdown-item">
                Create New
              </p>
            </div>
          </div>

          <div class="container dropdown">
            <button class=" btn-styled" id="btn-styled" data-bs-toggle="dropdown">
              <a href=""> 01 Cras turpis felis, elementum sed mi at arcu?</a>
              <i class="fas fa-arrow-left" id="arrow"></i>
            </button>

            <div class="dropdown-menu" id="styled-dropdown">
              <p class="dropdown-item">
                Create New
              </p>
            </div>
          </div>


          <div class="container dropdown">
            <button class=" btn-styled" id="btn-styled" data-bs-toggle="dropdown">
              <a href=""> 01 Cras turpis felis, elementum sed mi at arcu?</a>
              <i class="fas fa-arrow-left" id="arrow"></i>
            </button>

            <div class="dropdown-menu" id="styled-dropdown">
              <p class="dropdown-item">
                Create New
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-card">
        <div class="container">
          <h1>Make An Contact</h1>
          <form action="" method="post">
            <input type="text" name="firstname" placeholder="First Name" class="fadeInTop">
            <input type="text" name="email" placeholder="Email" class="fadeInTop">
            <input type="text" name="phoneno" placeholder="Phone No" class="fadeInTop">
            <textarea name="comment" id="" placeholder="Write comments here" class="fadeInTop"></textarea>
            <button class="btns" name="submit">Submit Now <i class="fas fa-arrow-right"></i></button>
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-play">
      <div class="container">
        <div class="bg-text">
          <h1>We're <span>Qeducato </span><br> & We're Diffirent</h1>
          <p>Our community is being called to reimagine the future. As the only university where a renowned design
            school colleges,</p>
        </div>
        <div class="image s-video-content"><a href="https://vm.tiktok.com/ZMY4r2bSX/"> <img src="./assests/play-button.png" alt=""></a>
        </div>
      </div>
  </section>

<!-- testimonial-section -->
  <section class="testimonial-section">
    <div class="container">
      <div class="header-text fadeInTop">
        <h6><i class="fa-solid fa-graduation-cap me-2"></i>Testimonial</h6>
        <h1>What Our Client Says</h1>
      </div>
      <div class=" slide-container swiper">
        <div class=" container slide-content">

          <div class="swiper-wrapper">
            <div class="card col-sm-3 swiper-slide">
              <div class="card-image">
                <img src="./assests/qt-icon.png" alt="">
              </div>

              <div class="card-text ">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit alias at voluptatum error optio
                  cumque eius inventore rerum molestias placeat?</p>
                <div class="icon">
                  <img src="./assests/testi_avatar.png" alt="">
                  <h5>Margie Dose</h5>
                  <p>Web Developer</p>
                </div>
              </div>
            </div>


            <div class="card  swiper-slide">
              <div class="card-image">
                <img src="./assests/qt-icon.png" alt="">
              </div>

              <div class="card-text ">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit alias at voluptatum error optio
                  cumque eius inventore rerum molestias placeat?</p>
                <div class="icon">
                  <img src="./assests/testi_avatar_02.png" alt="">
                  <h5>Rock Dloder</h5>
                  <p>Web Developer</p>
                </div>
              </div>
            </div>



            <div class="card  swiper-slide">
              <div class="card-image">
                <img src="./assests/qt-icon.png" alt="">
              </div>

              <div class="card-text ">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit alias at voluptatum error optio
                  cumque eius inventore rerum molestias placeat?</p>
                <div class="icon">
                  <img src="./assests/testi_avatar_03.png" alt="">
                  <h5>Vic Zenith</h5>
                  <p>Web Developer</p>
                </div>
              </div>
            </div>



            <div class="card  swiper-slide">
              <div class="card-image">
                <img src="./assests/qt-icon.png" alt="">
              </div>

              <div class="card-text ">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit alias at voluptatum error optio
                  cumque eius inventore rerum molestias placeat?</p>
                <div class="icon">
                  <img src="./assests/testi_avatar.png" alt="">
                  <h5>Vee Tech</h5>
                  <p>Web Developer</p>
                </div>
              </div>
            </div>


            <div class="card swiper-slide">
              <div class="card-image">
                <img src="./assests/qt-icon.png" alt="">
              </div>

              <div class="card-text ">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit alias at voluptatum error optio
                  cumque eius inventore rerum molestias placeat?</p>
                <div class="icon">
                  <img src="./assests/testi_avatar_02.png" alt="">
                  <h5>Zeal Dev</h5>
                  <p>Web Developer</p>
                </div>
              </div>
            </div>



            <div class="card swiper-slide">
              <div class="card-image">
                <img src="./assests/qt-icon.png" alt="">
              </div>

              <div class="card-text ">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit alias at voluptatum error optio
                  cumque eius inventore rerum molestias placeat?</p>
                <div class="icon">
                  <img src="./assests/testi_avatar_03.png" alt="">
                  <h5>Som Tee</h5>
                  <p>Web Developer</p>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-pagination"></div>
        </div>
      </div>

    </div>


    <div class="container-fluid">
      <div class="container search-courses">
        <div class="text ">
          <h1>Search For Courses</h1>
          <p>Our community is being called to reimagine the future. As the only university where a renowned design
            school comes together with premier colleges, we are making learning more relevant and transformational</p>
        </div>
        <form class="row g-3">
          <div class="col-md-6">
            <input type="email" class="form-control pt-3 pb-3" id="inputEmail4" placeholder="First Name">
          </div>
          <div class="col-md-6">
            <input type="password" class="form-control pt-3 pb-3" id="inputPassword4" placeholder="Email">
          </div>
          <div class="col-md-6 fadeInTop">
            <select id="inputState" class="form-select pt-3 pb-3">
              <option selected>Instructor </option>
              <option>Hot Stone Message</option>
              <option>Facil & Therophy</option>
            </select>
          </div>
          <div class="col-md-6 fadeInTop">
            <select id="inputState" class="form-select pt-3 pb-3">
              <option selected>Department</option>
              <option>Hot Stone Message</option>
              <option>Facil & Therophy</option>
            </select>
          </div>
          <div class="col-md-6 fadeInTop">
            <select id="inputState" class="form-select pt-3 pb-3">
              <option selected>Campus</option>
              <option>Hot Stone Message</option>
              <option>Facil & Therophy</option>
            </select>
          </div>
          <div class="col-md-6 fadeInTop">
            <select id="inputState" class="form-select pt-3 pb-3">
              <option selected>Level</option>
              <option>Hot Stone Message</option>
              <option>Facil & Therophy</option>
            </select>
          </div>

          <div class="col-12">
            <button type="submit" class="btns  mt-3">Search Courses <i class="fas fa-arrow-right"></i></button>
          </div>
        </form>
      </div>
    </div>


    <div class="container admission-aid fadeInLeft">
      <div class="image">
        <img src="./assests/about_img.png" alt="">
      </div>
      <div class="text">
        <h1>Admission & Aid </h1>
        <p>
          Our community is being called to reimagine the future. As the only university where a renowned design school
          comes together with premier colleges, we are making learning more relevant and transformational.<br>
          <br>
          At Estuidar University, we prepare you to launch your career by pro supportive, creative, and professional
          environment from which to learn practical skills, build a network of industry contacts.
        </p>

        <button class="s-btn">Read More <i class="fas fa-arrow-right"></i></button>
      </div>

    </div>

    <div class="b-logo swiper mySwiper">
      <div class=" swiper-wrapper ">
        <div class=" col-sm-3 swiper-slide">
          <img src="./assests/b-logo1.png" alt="">
        </div>
        <div class="  swiper-slide">
          <img src="./assests/b-logo2.png" alt="">
        </div>
        <div class=" swiper-slide">
          <img src="./assests/b-logo3.png" alt="">
        </div>
        <div class="  swiper-slide">
          <img src="./assests/b-logo4.png" alt="">
        </div>
        <div class=" swiper-slide">
          <img src="./assests/b-logo5.png" alt="">
        </div>

      </div>
    </div>
    </div>
  </section>

  <!-- blog-section -->
  <section class="blog-section">
    <div class="header-text fadeInTop">
      <h6><i class="fas fa-graduation-cap me-2"></i>Our Blog</h6>
      <h1>Latest Blog & News</h1>
    </div>
    <div class=" card-section">
      <div class="row">
        <div class="card col-4">
          <div class="card-image">
            <img src="./assests/inner_b1.jpg" alt="">
          </div>
          <div class="cat">
            <small><i class="fas fa-calendar"></i>24th March, 2023</small>
          </div>          
          <div class="card-text">
            <div class="icon d-flex">
              <p> <i class="fas fa-user"></i> By Admin</p>
              <p> <i class="fas fa-comment"></i> 3 Comments</p>
            </div>
            <h3>Cras accumsan nulla nec lacus ulticies placerat. </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, quidem impedit? Fugiat saepe mollitia qui.</p>
            <div class="icon">
              <span>Read More <i class="fas fa-arrow-right"></i></span>

            </div>
          </div>
        </div>

        <div class="card col-4">
          <div class="card-image">
            <img src="./assests/inner_b2.jpg" alt="">
          </div>
          <div class="cat">
            <small><i class="fas fa-calendar"></i>24th March, 2023</small>
          </div>          
          <div class="card-text">
            <div class="icon d-flex">
              <p> <i class="fas fa-user"></i> By Admin</p>
              <p> <i class="fas fa-comment"></i> 3 Comments</p>
            </div>
            <h3>Cras accumsan nulla nec lacus ulticies placerat. </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, quidem impedit? Fugiat saepe mollitia qui.</p>
            <div class="icon">
              <span>Read More <i class="fas fa-arrow-right"></i></span>

            </div>
          </div>
        </div>

        <div class="card col-4">
          <div class="card-image">
            <img src="./assests/inner_b3.jpg" alt="">
          </div>
          <div class="cat">
            <small><i class="fas fa-calendar"></i>24th March, 2023</small>
          </div>          
          <div class="card-text">
            <div class="icon d-flex">
              <p> <i class="fas fa-user"></i> By Admin</p>
              <p> <i class="fas fa-comment"></i> 3 Comments</p>
            </div>
            <h3>Cras accumsan nulla nec lacus ulticies placerat. </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, quidem impedit? Fugiat saepe mollitia qui.</p>
            <div class="icon">
              <span>Read More <i class="fas fa-arrow-right"></i></span>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="container">
        <div class="icon-text">
          <div class="icon">
            <img src="./assests/send-mail.png" alt="">
          </div>
          <div class="text">
            <h1 class="text-white">Subscribe For Newsletter</h1>
            <p>Mange Your Business With Our Software</p>
          </div>
        </div>
        <div class=" full-btn">
          <p class="placeholder">Email Address....</p>
          <button class="s-btn">Subscribe Now</button>
        </div>
      </div>
    </div>
  </section>

<!-- footer.php -->
  <?php include 'footer.php'; ?>





  
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9.1.1/swiper-bundle.min.js"></script>
  <script src="index.js"></script>
</body>

</html>