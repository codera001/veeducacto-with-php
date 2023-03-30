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
    <link rel="stylesheet" href="customstyles.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Document</title>
</head>

<body>
<?php include 'header.php'; ?>
    <div class="about-bg contact">
        <h1>Contact Us</h1>
        <div class="link">
            <a href="index.php" class="me-2">Home</a>
            <span>|</span>
            <a href="contact.php" class="ms-2">Contact us</a>
        </div>
    </div>


    <div class=" contact-info">
        <div class="container">
            <h6><i class="fas fa-graduation-cap"></i>Contact Info</h6>
            <h1>Get In Touch</h1>
            <div class="row">
                <div class="card col-4">
                    <i class="fa-solid fa-phone-volume"></i>
                    <h5>+444 333 345</h5>
                    <p>Phone Support</p>
                </div>
                <div class="card col-4 middle">
                    <i class="fa-solid fa-envelope-open-text"></i>
                    <h5>veetech@gmail.com</h5>
                    <p>Email Address</p>
                </div>
                <div class="card col-4">
                    <i class="fa-solid fa-location-dot"></i>
                    <h5>12/A, New Jone, NYC</h5>
                    <p>Office Address</p>
                </div>
            </div>
        </div>
    </div>


    <div class="map">
        
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31529.15608419651!2d7.357506831934313!3d8.958828980745231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e724ce523c71b%3A0xd9e4fb48232178e7!2s900107%2C%20Lugbe%2C%20Federal%20Capital%20Territory!5e0!3m2!1sen!2sng!4v1679993571241!5m2!1sen!2sng"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    </div>

    <div class="contact-form">
        <div class=" container">
            <h1 class="pt-5 pb-3">Custom Inquire Form</h1>
            <form action="" class="row" method="post">
                <div class="col-4 input-icons">
                    <i class="fas fa-user icon mt-2"></i>
                    <input type="text" placeholder="First Name  " class="form-control  input-field" name="firstname">

                </div>
                <div class="col-4 input-icons ">
                    <i class="fas fa-message icon mt-2"></i>
                    <input type="text" placeholder="Email" class="form-control input-field" name="email">

                </div>
                <div class="col-4 input-icons ">
                    <i class="fas fa-phone icon pe-4 mt-2 ms-3"></i>
                    <input type="text" placeholder="Phone No." class="form-control  input-field" name="phoneno">

                </div>
                <div class="col-12 input-icons">
                    <i class="fas fa-edit icon mt-5"></i>
                    <textarea name="comment" id="" cols="30" rows="10" placeholder="Write comments"
                        class=" input-field pt-3" ></textarea>

                </div>

                <button class="btns" name="submit">Make An Request <i class="fas fa-arrow-right" ></i></button>
            </form>

            
        </div>
    </div>











    <div class="testimonial-section">
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
    <?php include 'footer.php'; ?>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9.1.1/swiper-bundle.min.js"></script>
    <script src="index.js"></script>
</body>

</html>