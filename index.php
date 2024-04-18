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
                            src="<?php echo $base_url; ?>/img/Hybrid Heat (3).png" alt="second slide" width="100%">
                    </a>
                </div>
                <div class="item">
                    <a href="<?php echo $base_url ?>/contact-us.php"> <img
                            src="<?php echo $base_url; ?>/img/Jacks_2000REBATE1 (2) (1) (1).png" alt="fifth slide"
                            width="100%">
                    </a>
                </div>
                <div class="item">
                    <a href="<?php echo $base_url ?>/contact-us.php"> <img
                            src="<?php echo $base_url; ?>/img/Fall_Furnace_TuneUp_1000_350_V2 (1).jpg" alt="sixth slide"
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
                        <a href="<?php echo $base_url ?>/geothermal.php">
                            <div class="icon">
                                <img src="<?php echo $base_url; ?>/img/geothermal bubble-min.jpeg" alt=""
                                    class="img-responsive">
                            </div>
                            <h4>Geothermal<span class="material-symbols-outlined arrow-icon-blue-box">
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
                        <h2>Jack's Heating and Cooling: 76 Years of Trusted HVAC Service</h2>
                        <p>Jack's Heating and Cooling - your trusted family-owned heating and cooling contractor in
                            Michigan's Thumb area for over 76 years. Our long-standing presence and dedication have made
                            us the gold standard in our industry. </p>

                        <p>We take pride in building lasting relationships with our clients, some of whom have been
                            with us for decades. Our mission is to build the same strong bond with you, providing
                            exceptional customer service that goes above and beyond. </p>

                        <p> At Jack's Heating and Cooling, your satisfaction is paramount. Whether you need furnace
                            repair, quality installation of Lennox systems, heat pumps, air conditioners, or regular
                            maintenance, we are committed to exceeding your expectations. Join our community of
                            satisfied customers and experience top-notch service that stands the test of time. </p>



                    </div>
                    <div class="col-md-6 iframe-wrap">
                        <iframe width="520" height="330" src="https://www.youtube.com/embed/j0nOyk_GXIY"
                            title="Jacks Capabilities" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>

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
                        <p class="light text-center ">Wonderful company, great installation and very friendly! Highly
                            recommend them for anyone heat or ac needs.
                        </p>

                        <h3 class="text-center">C.B </h3>

                    </div>

                    <!--slider list-->
                    <!--slider list-->

                    <div class="col-sm-12 item  owl-item">

                        <p class="light text-center ">
                        <p class="light text-center ">Professional and friendly and answered all my questions!!! Can't
                            thank them enough!!</p>

                        <h3 class="text-center">J.S</h3>

                    </div>

                    <!--slider list-->
                    <!--slider list-->

                    <div class="col-sm-12 item  owl-item">

                        <p class="light text-center ">
                        <p class="light text-center ">We are very happy to have recently had a new Lennox furnace and
                            a/c installed by Jacks Heating and Cooling.
                        </p>

                        <h3 class="text-center">S.K</h3>

                    </div>

                    <!--slider list-->
                    <!--slider list-->

                    <div class="col-sm-12 item  owl-item">

                        <p class="light text-center ">
                        <p class="light text-center ">These folks are very personable and professional. They responded
                            quickly to my request for a quote. That quote was completed the very next day!
                        </p>

                        <h3 class="text-center">C.T</h3>

                    </div>

                    <div class="col-sm-12 item  owl-item">

                        <p class="light text-center ">
                        <p class="light text-center ">Very professional company, did a complete install for me .very
                            happy with the price and their work, thanks again.
                        </p>

                        <h3 class="text-center">S.C</h3>

                    </div>

                    <div class="col-sm-12 item  owl-item">

                        <p class="light text-center ">
                        <p class="light text-center ">Can't say enough good about this company. LOVE that they are on
                            time, and professional.

                        </p>

                        <h3 class="text-center">S.C</h3>

                    </div>

                </div>

                <div class="col-sm-12 text-center">
                    <div class="read-more-wrap">
                        <a href="<?php echo $base_url ?>/testimonials.php" class="stretched-link ">Read More</a>
                    </div>

                </div>
            </div>
        </section>

        <div class="clearfix"></div>

        <section class="full-row call text-center text-white">

            <div class="container">

                <h2 style="color: white;">Please call us at <a href="tel:+18887975225"
                        style="color: #3f3f3f;">1-000-0000-0000</a>
                    To Make an Appointment.</h2>

            </div>

        </section>


    </main>

    <?php include('footer.php'); ?>