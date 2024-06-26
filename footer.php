<footer class="full-row">

    <footer class="full-row main-footer text-white">
        <div class="container">
            <div class="col-md-4 col-sm-12 col-xs-12 footer-item" style="text-align:center;">

                <!--   <h3>About Us</h3> -->
                <p><img src="<?php echo $base_url ?>/img/lennox_reverse (1).png" style="width:50%"></p>

                <p><img src="<?php echo $base_url ?>/img/carrier_experts_logo_rgb_wht.png" style="width:50%"></p>

                <p><a href="https://www.bbb.org/us/mi/tecumseh/profile/heating-and-air-conditioning/naugle-heating-cooling-llc-0422-29000013/#sealclick"
                        target="_blank" rel="nofollow"><img
                            src="https://seal-toledo.bbb.org/seals/blue-seal-200-42-bbb-29000013.png"
                            style="border: 0; width:60%; margin-top:10px;"
                            alt="Naugle Heating & Cooling LLC BBB Business Review" /></a></p>


            </div>
            <div class="col-md-5 col-sm-12 col-xs-12 footer-item">
                <h3>Service Areas</h3>
                <ul class="footer-list" style="display: flex; flex-wrap: wrap;justify-content:space-between; ">
                    <div class="item-list-inner">
                        <li><a href="<?php echo $base_url ?>/service-area/ypsilanti.php">Ypsilanti, MI</a></li>
                        <li><a href="<?php echo $base_url ?>/service-area/tecumseh.php">Tecumseh, MI</a></li>
                        <li><a href="<?php echo $base_url ?>/service-area/bridgewater.php">Bridgewater, MI</a></li>
                        <li><a href="<?php echo $base_url ?>/service-area/manchester.php">Manchester, MI</a></li>
                        <li><a href="<?php echo $base_url ?>/service-area/adrian.php">Adrian, MI</a></li>
                        <li><a href="<?php echo $base_url ?>/service-area/dundee.php">Dundee, MI</a></li>
                        <li><a href="<?php echo $base_url ?>/service-area/saline.php">Saline, MI</a></li>
                    </div>
                    <div class="item-list-inner">
                        <li><a href="<?php echo $base_url ?>/service-area/milan.php">Milan, MI</a></li>
                        <li><a href="<?php echo $base_url ?>/service-area/addison.php">Addison, MI</a></li>
                        <li><a href="<?php echo $base_url ?>/service-area/napoleon.php">Napoleon, MI</a></li>
                        <li><a href="<?php echo $base_url ?>/service-area/clinton.php">Clinton, MI</a></li>
                        <li><a href="<?php echo $base_url ?>/service-area/brooklyn.php">Brooklyn, MI</a></li>
                        <li><a href="<?php echo $base_url ?>/service-area/jasper.php">Jasper, MI</a></li>
                        <li><a href="<?php echo $base_url ?>/service-area/jackson.php">Jackson, MI</a></li>
                    </div>

                    <div class="item-list-inner">
                        <li><a href="<?php echo $base_url ?>/service-area/hudson.php">Hudson, MI</a></li>
                        <li><a href="<?php echo $base_url ?>/service-area/blissfield.php">Blissfield, MI</a></li>
                        <li><a href="<?php echo $base_url ?>/service-area/onsted.php">Onsted, MI</a></li>
                        <li><a href="<?php echo $base_url ?>/service-area/grass-lake.php">Grass Lake, MI</a></li>
                        <li><a href="<?php echo $base_url ?>/service-area/ogden-township.php">Ogden Township</a>
                        </li>

                    </div>


                </ul>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 footer-item">
                <h3 class="contact-footer">Contact Us</h3>
                <p>810 S Adrian St <br>
                    Tecumseh, MI 49286 <br>
                    Phone: 517-423-3121</p>

                <p><a href="<?php echo $base_url ?>/privacy.php">Terms of Service and Privacy Policy</a></p>
                <p><a href="https://www.facebook.com/p/Naugle-Heating-Cooling-LLC-100063516813070/?locale=fy_NL"
                        class="facebook-icon current">facebook </a></p>

            </div>


            </ul>
        </div>
        </div>
    </footer>

    <footer class="full-row mini-footer">
        <div class="container">

            <div class="text-center col-xs-12 footer-item copyrights text-muted">
                <p>All Rights Reserved. Copyright Naugle's Heating and Cooling</p>
            </div>

        </div>
    </footer>
</footer>


<script>
window.jQuery || document.write('<script src="<?php echo $base_url ?>/js/jquery-1.11.3.min.js"><\/script>')
</script>

<!-- Bootstrap JS -->
<script src="<?php echo $base_url ?>/js/bootstrap/bootstrap.min.js"></script>

<!-- Lightbox JS -->
<!-- <script src="<?php echo $base_url ?>/js/bootstrap-lightbox3/ekko-lightbox.min.js"></script> -->

<!-- Datetimepicker JS -->
<!-- <script src="<?php echo $base_url ?>/js/moment.js"></script>
<script src="<?php echo $base_url ?>/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script> -->

<!-- Owl Carousel JS -->
<script src="<?php echo $base_url ?>/js/owlcarousel/owl.carousel.min.js"></script>


<!-- Custom JS -->
<script src="<?php echo $base_url ?>/js/plugins.js"></script>
<script src="<?php echo $base_url ?>/js/main.js"></script>

<script>
jQuery(document).ready(function($) {
    /*    var owl = $("#owl-demo");

       owl.owlCarousel({
           items: 3, //10 items above 1000px browser width
           itemsDesktop: [1000, 3], //5 items between 1000px and 901px
           itemsDesktopSmall: [900, 2], // betweem 900px and 601px
           itemsTablet: [600, 1], //2 items between 600 and 0
           itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
           autoPlay: 3000, //Set AutoPlay to 3 seconds
       }); */


    var test = $("#testmonial");

    test.owlCarousel({
        items: 1, //10 items above 1000px browser width
        itemsDesktop: [1000, 1], //5 items between 1000px and 901px
        itemsDesktopSmall: [900, 1], // betweem 900px and 601px
        itemsTablet: [600, 1], //2 items between 600 and 0
        itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
        autoPlay: 3000, //Set AutoPlay to 3 seconds
    });


});
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<!--  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133676341-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-133676341-1');
  </script> -->
<script type="text/javascript">
jQuery('ul.nav li.dropdown').hover(function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {

    jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);

});
</script>

<script type="text/javascript">
$('.dropdown').hover(function() {

    $('.dropdown-toggle', this).trigger('click');
});
</script>

<script type="text/javascript">
jQuery('navbar-nav li').hover(function() {

    jQuery(this).find('.dropdown-menu').stop(true, true).show();

    jQuery(this).addClass('open');

}, function() {

    jQuery(this).find('.dropdown-menu').stop(true, true).hide();

    jQuery(this).removeClass('open');

});
</script>



</body>

</html>