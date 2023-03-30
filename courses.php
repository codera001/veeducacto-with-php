<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
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
    <div class="about-bg courses">
        <h1>Courses</h1>
        <div class="link">
            <a href="index.php" class="me-2">Home</a>
            <span>|</span>
            <a href="courses.php" class="ms-2">Courses</a>
        </div>
    </div>

    <div class=" container sort">
        <p>Showing 1-9 of 10 results</p>
        <select id="inputState" class="form-select pt-3 pb-3">
            <option selected>Sort by price: low to high</option>
            <option>Default Sorting</option>
            <option>Sort by popularity</option>
            <option>Sort by average rating</option>
            <option>Sort by latest</option>
            <option>Sort by price: low to high</option>
            <option>Sort byprice: high to low</option>
        </select>
    </div>

    <div class="courses-section">

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