<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

	   <footer>
        <div class="top_footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ftr_sec1">
                            <h4>About Us</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                        </div>
                        <div class="ftr_sec1">
                            <h4>Quick links</h4>
                            <ul>
                                <li class="current-menu-item"><a href="index.html" title=""><i class="fa fa-caret-right" aria-hidden="true"></i> Home</a></li>
                                <li><a href="about.html" title=""><i class="fa fa-caret-right" aria-hidden="true"></i>About us</a></li>
                                <li><a href="service.html" title=""><i class="fa fa-caret-right" aria-hidden="true"></i>Our Services</a></li>
                                <li><a href="gallery.html" title=""><i class="fa fa-caret-right" aria-hidden="true"></i>Gallery</a></li>
                                <li><a href="contact.html" title=""><i class="fa fa-caret-right" aria-hidden="true"></i>Contact us</a></li>
                            </ul>
                        </div>
                        <div class="ftr_sec1 ftr_adrs">
                            <h4>Contact us</h4>
                            <ul>
                                <li>
                                    <label><img src="images/map.svg" alt="map"><span>Address</span></label>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit,</p>
                                </li>
                                <li>
                                    <label><i class="fa fa-mobile" aria-hidden="true"></i><span>Tel No:</span></label>
                                    <p><a href="tel:123-456-7890" title="">123-456-7890</a></p>
                                </li>
                                <li>
                                    <label><i class="atrate" aria-hidden="true">@</i><span>Email:</span></label>
                                    <p><a href="mailto:info@customrefrigerationfabrication.com" title="">info@customrefrigerationfabrication.com</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="ftr_sec1 ftr_social">
                            <h4>Follow Us On:</h4>
                            <ul>
                                <li> <a href="#" title=""><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a> </li>
                                <li> <a href="#" title=""><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a> </li>
                                <li> <a href="#" title=""><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a> </li>
                                <li> <a href="#" title=""><i class="fa fa-pinterest-p" aria-hidden="true"></i><span>Pinterest</span></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright_innr">
                            <p><?php if ( function_exists( 'ot_get_option' ) ) : ?>
								<?php echo $footer_text = ot_get_option( 'footer_text' ); ?>
								
						<?php endif; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
    <!-- Jquery Files Link -->
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var owl = jQuery("#owl-demo");
            owl.owlCarousel({
                itemsCustom: [
                [320, 1]
                 , [480, 2]
                , [992, 5]
                , [1200, 5]
                , [1500, 5]]
                , navigation: false
                , slideSpeed: 1000
                , scrollPerPage: true
                , autoPlay: true
            });
        });
    </script>
    <!-- custom scrollbar plugin -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
        (function ($) {
            $(window).on("load", function () {
                $(".home_abt_cntnt").mCustomScrollbar({
                    theme: "minimal-dark"
                });
            });
        })(jQuery);
    </script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
	
</body>

</html>