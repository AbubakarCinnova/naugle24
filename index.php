<?php include('header.php'); ?>
<title>Naugle Heating and Cooling</title>
<?php include('menu.php'); ?>

</head>

<body>

    <main>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="7500">
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <a href="<?php echo $base_url ?>/heat-pumps.php"> <img
                            src="<?php echo $base_url; ?>/img/Hybrid Heat (3).png" alt="first slide" width="100%">
                    </a>
                </div>
                <div class="item">
                    <a href="<?php echo $base_url ?>/contact-us.php"> <img
                            src="<?php echo $base_url; ?>/img/in duct 1.png" alt="second slide" width="100%">
                    </a>
                </div>
                <div class="item">
                    <a href="<?php echo $base_url ?>/contact-us.php"> <img
                            src="<?php echo $base_url; ?>/img/SPRING_REBATE_LENNOX (3) (1) (1).png" alt="third slide"
                            width="100%">
                    </a>
                </div>
                <div class="item">
                    <a href="<?php echo $base_url ?>/contact-us.php"> <img
                            src="<?php echo $base_url; ?>/img/Spring_AC_TuneUp_1000_350_V2 (1).jpg" alt="fourth slide"
                            width="100%">
                    </a>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Controls -->




        <script>
        $(document).ready(function() {
            $('.carousel-inner').carousel({
                interval: 16000
            })
            $("#myCarousel").carousel({
                interval: 16000,
                autoPlay: 16000,
                hover: null,
                pause: null
            });

            $(".item").click(function() {
                $("#myCarousel").carousel(1);
            });
            $(".item2").click(function() {
                $("#myCarousel").carousel(2);
            });
            $(".item3").click(function() {
                $("#myCarousel").carousel(3);
            });

            $(".item4").click(function() {
                $("#myCarousel").carousel(4);
            });

        });
        </script>


        <div class="container mb-lg mt-lg">
            <div class="row bubble-section">

                <div class="col-lg-2 col-sm-4">
                    <div class="text-center blue-boxes">
                        <a href="<?php echo $base_url; ?>/cooling.php">
                            <div class="icon">
                                <img src="<?php echo $base_url; ?>/img/Asset 4.png" alt="" class="img-responsive">
                            </div>
                            <h4>Air Conditioning<span class="material-symbols-outlined arrow-icon-blue-box">
                                    arrow_right
                                </span></h4>
                            <p> </p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4">
                    <div class="text-center blue-boxes">
                        <a href="<?php echo $base_url; ?>/heating.php">
                            <div class="icon">
                                <img src="<?php echo $base_url; ?>/img/heating.png" alt="" class="img-responsive">
                            </div>
                            <h4>Heating<span class="material-symbols-outlined arrow-icon-blue-box">
                                    arrow_right
                                </span></h4>
                            <p> </p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="text-center blue-boxes">
                        <a href="<?php echo $base_url ?>/repair.php">
                            <div class="icon">
                                <img src="<?php echo $base_url; ?>/img/repair (1).jpeg" alt="" class="img-responsive">
                            </div>
                            <h4>Repair<span class="material-symbols-outlined arrow-icon-blue-box">
                                    arrow_right
                                </span></h4>
                            <p> </p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="text-center blue-boxes">
                        <a href="<?php echo $base_url; ?>/mini-splits.php">
                            <div class="icon">
                                <img src="<?php echo $base_url; ?>/img/mini-splits-unit-image-transparent (2).png"
                                    alt="" class="img-responsive">
                            </div>
                            <h4>Mini Splits<span class="material-symbols-outlined arrow-icon-blue-box">
                                    arrow_right
                                </span></h4>
                            <p> </p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="text-center blue-boxes">
                        <a href="<?php echo $base_url; ?>/financing.php">
                            <div class="icon" style="cursor: pointer;">
                                <img src="<?php echo $base_url; ?>/img/finance.png" alt="" class="img-responsive">
                            </div>
                            <h4>Financing<span class="material-symbols-outlined arrow-icon-blue-box">
                                    arrow_right
                                </span></h4>
                            <p> </p>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <section class="full-row make-it-possible">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- <div class="col-sm-3">
              <script src="//www.toyoursuccess.com/reviews/js:6187:4"></script>
            </div>
            <div class="col-sm-9"> -->
                        <h1 class="review-heading">Why Wait? Get Total Comfort Today!</h1>
                        <p>Honest Estimates. Affordable Prices. Experienced Technicians.</p> <br />
                        <p style="width:100%"><a class="btn btn-warning"
                                href="<?php echo $base_url ?>/contact-us.php">Contact Our
                                Experts</a></p>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </section>


        <section class="full-row homepage-video-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Naugle Heating and Cooling: Where Comfort Meets Quality in Lenawee County! </h2>

                        <p>Naugle Heating and Cooling is celebrating our 45th year in business! As a family-owned and
                            operated company in Tecumseh, Michigan, we take immense pride in delivering exceptional
                            heating and air conditioning solutions. Our team of HVAC-certified technicians has over four
                            decades of experience and continually enhances their expertise through ongoing training.
                            Whether you need urgent furnace repair, routine HVAC maintenance, or installation of a new
                            high-efficiency home comfort system, you can trust us to provide top-notch service. </p>

                        <p>Call us for all your heating and cooling needs and experience the difference 45 years of
                            commitment to quality and customer satisfaction can make. We look forward to serving you and
                            exceeding your expectations for many more years to co </p>




                    </div>
                    <div class="col-md-6 iframe-wrap">
                        <img src="<?php echo $base_url ?>/img/Naugle heating and cooling (2).jpeg"
                            alt="Naugle Heating and Cooling" class="full-width-img">

                    </div>
                </div>
            </div>
        </section>





        <section class="full-row testmonial">

            <div class="container">

                <div class="col-sm-12 text-center">

                    <h1>What Our Customers Are Saying</h1>

                </div>

                <div id="testmonial" class="owl-carousel">
                    <!--slider list-->

                    <div class="col-sm-12 item  owl-item">
                        <p class="light text-center ">
                        <p class="light text-center ">These folks are very friendly and professional. They responded
                            quickly to my request for a quote. The installation was completed the very next day!
                        </p>
                        <h3 class="text-center">T. J. Ypsilanti </h3>
                    </div>

                    <div class="col-sm-12 item  owl-item">
                        <p class="light text-center ">
                        <p class="light text-center ">I just had a floor unit mini-split installed and I'm very
                            impressed with the Naugle team's quality of work and their dedication to getting it right
                            for the customer.
                        </p>
                        <h3 class="text-center">F.H. Saline </h3>
                    </div>

                    <div class="col-sm-12 item  owl-item">
                        <p class="light text-center ">
                        <p class="light text-center ">A very professional company did a complete install for me, and we
                            are happy with the price and their work, thanks again.
                        </p>
                        <h3 class="text-center">C.G. Brooklyn </h3>
                    </div>

                    <div class="col-sm-12 item  owl-item">
                        <p class="light text-center ">
                        <p class="light text-center ">What an AMAZING company! I know we will be using them as needed
                            for years to come. We had our central air replaced today. I can't say enough about this
                            company!
                        </p>
                        <h3 class="text-center">S. K. Tecumseh </h3>
                    </div>
                    <div class="col-sm-12 item  owl-item">
                        <p class="light text-center ">
                        <p class="light text-center ">Was referred to Naugle by a friend and they are fantastic!
                        </p>
                        <h3 class="text-center">B. P. Adrian </h3>
                    </div>


                </div>

                <div class="col-sm-12 text-center">
                    <div class="read-more-wrap">
                        <a href="<?php echo $base_url ?>/testimonials.php" class="stretched-link ">Read More <svg
                                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" viewBox="0 0 128 128">
                                <path
                                    d="M 84 11 C 82.3 11 81 12.3 81 14 C 81 15.7 82.3 17 84 17 L 106.80078 17 L 60.400391 63.400391 C 59.200391 64.600391 59.200391 66.499609 60.400391 67.599609 C 61.000391 68.199609 61.8 68.5 62.5 68.5 C 63.2 68.5 63.999609 68.199609 64.599609 67.599609 L 111 21.199219 L 111 44 C 111 45.7 112.3 47 114 47 C 115.7 47 117 45.7 117 44 L 117 14 C 117 12.3 115.7 11 114 11 L 84 11 z M 24 31 C 16.8 31 11 36.8 11 44 L 11 104 C 11 111.2 16.8 117 24 117 L 84 117 C 91.2 117 97 111.2 97 104 L 97 59 C 97 57.3 95.7 56 94 56 C 92.3 56 91 57.3 91 59 L 91 104 C 91 107.9 87.9 111 84 111 L 24 111 C 20.1 111 17 107.9 17 104 L 17 44 C 17 40.1 20.1 37 24 37 L 69 37 C 70.7 37 72 35.7 72 34 C 72 32.3 70.7 31 69 31 L 24 31 z">
                                </path>
                            </svg></a>
                    </div>
                </div>

            </div>
        </section>

        <div class="clearfix"></div>

        <section class="full-row call text-center text-white">

            <div class="container">

                <h2 style="color: white;">Please call us at <a href="tel:+15174233121"
                        style="color: #3f3f3f;">1-517-423-3121</a>
                    To Make an Appointment.</h2>

            </div>

        </section>


    </main>

    <?php include('footer.php'); ?>