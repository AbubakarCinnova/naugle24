<?php include('header.php'); ?>
<title>Naugle Heating and Cooling</title>
<meta name="description"
    content="911 Mechanical Heating and Cooling, the trusted name for over two decades, offers top-quality furnace repair, HVAC, and AC services in Macomb, Michigan. " />
</head>

<body>



    <?php include('menu.php'); ?>
    <main>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="7500">

            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <a href="<?php echo $base_url ?>/contact-us.php"><img
                            src="<?php echo $base_url; ?>/img/Spring_AC_TuneUp_1000_350_V2.jpeg" alt="first slide"
                            width="100%"></a>
                </div>


                <div class="item">
                    <a href="<?php echo $base_url ?>/contact-us.php"> <img src="<?php echo $base_url; ?>/img/b2.png"
                            alt="second slide" width="100%">
                    </a>
                </div>

                <div class="item">
                    <a href="<?php echo $base_url ?>/contact-us.php"> <img
                            src="<?php echo $base_url; ?>/img/SPRING_REBATE_LENNOX v6.png" alt="third slide"
                            width="100%">
                    </a>
                </div>

                <div class="item">
                    <a href="<?php echo $base_url ?>/air-purifier.php"> <img
                            src="<?php echo $base_url; ?>/img/in duct 1.png" alt="fourth slide" width="100%">
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
                            <h4>Air<br>Conditioning</h4>
                            <p> </p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4">
                    <div class="text-center blue-boxes">
                        <a href="<?php echo $base_url; ?>/heating.php">
                            <div class="icon">
                                <img src="<?php echo $base_url; ?>/img/Asset 3.png" alt="" class="img-responsive">
                            </div>
                            <h4>Heating</h4>
                            <p> </p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="text-center blue-boxes">
                        <a href="<?php echo $base_url ?>/repair-services.php">
                            <div class="icon">
                                <img src="<?php echo $base_url; ?>/img/repair (1).jpeg" alt="" class="img-responsive">
                            </div>
                            <h4>Repair <br> Services </h4>
                            <p> </p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="text-center blue-boxes">
                        <a href="<?php echo $base_url; ?>/mini-splits.php">
                            <div class="icon">
                                <img src="<?php echo $base_url; ?>/img/mini-split.png" alt="" class="img-responsive">
                            </div>
                            <h4>Mini <br> Splits</h4>
                            <p> </p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <div class="text-center blue-boxes">
                        <a href="<?php echo $base_url; ?>/financing.php">
                            <div class="icon" style="cursor: pointer;">
                                <img src="<?php echo $base_url; ?>/img/Asset 2.png" alt="" class="img-responsive">
                            </div>
                            <h4>Financing</h4>
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
                        <h2 class="review-heading">Why Wait? Get Total Comfort Today!</h2>
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
                    <div class="col-sm-12 col-md-6">
                        <h2>Heating and Cooling Excellence in Macomb, MI</h2>
                        <p>911 Mechanical Heating and Cooling, the trusted name for over two decades, offers top-quality
                            furnace repair, HVAC, and AC services in Macomb, Michigan. As a family-owned business, our
                            strong reputation stems from top-notch quality, unmatched value, and a seamless customer
                            experience.</p>


                        <p>Our certified, factory-trained HVAC technicians lead the way in expertise, handling
                            everything from routine maintenance to urgent furnace repairs and high-efficiency HVAC
                            system installations.</p>



                        <p>At 911 Mechanical Heating and Cooling, we prioritize your satisfaction, aiming to be South
                            Eastern Michigan's top HVAC contractor with the best warranties for your peace of mind.
                            Choose us, and satisfaction is guaranteed - Experience exceptional service and comfort; call
                            us today!</p>

                    </div>
                    <div class="col-sm-12 col-md-6 ">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qnnGNKM3tFY"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </section>





        <section class="full-row testmonial">

            <div class="container">

                <div class="col-sm-12 text-center">

                    <h2>What Our Customers Are Saying</h2>

                </div>

                <div id="testmonial" class="owl-carousel">
                    <!--slider list-->

                    <div class="col-sm-12 item  owl-item">

                        <p class="light text-center ">
                        <p class="light text-center ">Very professional and impressed with the overall installation of
                            our new
                            furnace and ac unit. The job was left clean and the installers were great. Would highly
                            recommend 911
                            Mechanical. </p>

                        <h3 class="text-center">C.B </h3>

                    </div>

                    <!--slider list-->
                    <!--slider list-->

                    <div class="col-sm-12 item  owl-item">

                        <p class="light text-center ">
                        <p class="light text-center ">The technicians were on time and friendly. They replaced my
                            furnace and air
                            conditioner. They explained what they were going to do before they started and answered all
                            my questions.
                            Would definitely recommend them!</p>

                        <h3 class="text-center">J.S</h3>

                    </div>

                    <!--slider list-->
                    <!--slider list-->

                    <div class="col-sm-12 item  owl-item">

                        <p class="light text-center ">
                        <p class="light text-center ">911 Mechanical Heating-Cooling has a few finest technicians
                            working at this
                            company. They have experience and they are truly professional.</p>

                        <h3 class="text-center">S.K</h3>

                    </div>

                    <!--slider list-->
                    <!--slider list-->

                    <div class="col-sm-12 item  owl-item">

                        <p class="light text-center ">
                        <p class="light text-center ">The entire experience was excellent from the estimate to the
                            installation.
                            We're very pleased with our new HVAC system and it has made a significant difference. The
                            team was polite,
                            professional, and expert at their jobs.</p>

                        <h3 class="text-center">C.T</h3>

                    </div>

                    <div class="col-sm-12 item  owl-item">

                        <p class="light text-center ">
                        <p class="light text-center ">Honest company, responsive, we have now used them for new HVAC on
                            2 different
                            homes and will continue to use them. They do not work off commission, so what you want is
                            what you get at
                            a market value price. Recommend to anyone.</p>

                        <h3 class="text-center">S.C</h3>

                    </div>

                </div>

                <div class="col-sm-12 text-center">

                    <a href="<?php echo $base_url ?>/testimonials.php" class="btn btn-warning">Read More</a>

                </div>
            </div>
        </section>

        <div class="clearfix"></div>

        <section class="full-row call text-center text-white">

            <div class="container">

                <h2 style="color: white;">Please call us at <a href="tel:+18885084911" style="color: #bebebe;">(888)
                        508-4911</a>
                    To Make an Appointment.</h2>

            </div>

        </section>


    </main>

    <?php include('footer.php'); ?>