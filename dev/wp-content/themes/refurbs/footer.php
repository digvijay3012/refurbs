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
                            <p><?php if ( function_exists( 'ot_get_option' ) ) : ?>
								<?php echo $footer_about_us = ot_get_option( 'footer_about_us' ); ?>
								
						<?php endif; ?></p>
                        </div>
                        <div class="ftr_sec1">
                            <h4>Quick links</h4>
                            <ul>
							<?php $defaults = array(
							'theme_location'  => '',
							'menu'            => 'main_menu',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'current-menu-item',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '%3$s',
							'depth'           => 0,
							'walker'          => ''
							);

							wp_nav_menu( $defaults );
							?>
                            </ul>
                        </div>	
                        <div class="ftr_sec1 ftr_adrs">
                            <h4>Contact us</h4>
                            <ul>
                                <li>		
                                    <label><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/map.svg" alt="map"><span>Address</span></label>
                                    <p><?php if ( function_exists( 'ot_get_option' ) ) : ?>
										<?php echo $footer_address = ot_get_option( 'footer_address' ); ?>
								
										<?php endif; ?>
									</p>
                                </li>
                                <li>
                                    <label><i class="fa fa-mobile" aria-hidden="true"></i><span>Tel No:</span></label>
                                    <p><a href="tel:123-456-7890" title=""><?php if ( function_exists( 'ot_get_option' ) ) : ?>
										<?php echo $footer_telephone = ot_get_option( 'footer_telephone' ); ?>
								
										<?php endif; ?></a></p>
                                </li>
                                <li>
                                    <label><i class="atrate" aria-hidden="true">@</i><span>Email:</span></label>
                                    <p><a href="mailto:<?php if ( function_exists( 'ot_get_option' ) ) : ?>
										<?php echo $footer_email = ot_get_option( 'footer_email' ); ?>
								
										<?php endif; ?>" title=""><?php if ( function_exists( 'ot_get_option' ) ) : ?>
										<?php echo $footer_email = ot_get_option( 'footer_email' ); ?>
								
										<?php endif; ?></a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="ftr_sec1 ftr_social">
                            <h4>Follow Us On:</h4>
                            <ul>
							<?php if ( function_exists( 'ot_get_option' ) ) : ?>
										<?php  $facebook = ot_get_option( 'facebook' ); 
											if($facebook !=''){
												echo ' <li> <a href="'.$facebook.'" target="_blank" title=""><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a> </li>';
											} ?>
										<?php endif; ?>
                               <?php if ( function_exists( 'ot_get_option' ) ) : ?>
										<?php  $twitter = ot_get_option( 'twitter' ); 
											if($twitter !=''){
												echo '<li> <a href="'.$twitter.'" target="_blank" title=""><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a> </li>';
											} ?>
										<?php endif; ?>
                                 <?php if ( function_exists( 'ot_get_option' ) ) : ?>
										<?php  $instagram = ot_get_option( 'instagram' ); 
											if($instagram !=''){
												echo '<li> <a href="'.$instagram.'" target="_blank" title=""><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a> </li>';
											} ?>
										<?php endif; ?>
                                <?php if ( function_exists( 'ot_get_option' ) ) : ?>
										<?php  $pinterest = ot_get_option( 'pinterest' ); 
											if($instagram !=''){
												echo '<li> <a href="'.$pinterest.'" target="_blank" title=""><i class="fa fa-pinterest-p" aria-hidden="true"></i><span>Pinterest</span></a> </li>';
											} ?>
										<?php endif; ?>
                               
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