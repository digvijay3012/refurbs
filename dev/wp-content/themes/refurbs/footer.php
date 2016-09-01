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
							'menu'            => 'footer_menu',
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
                                    <p><a href="tel:<?php if ( function_exists( 'ot_get_option' ) ) : ?>
										<?php echo $footer_telephone = ot_get_option( 'footer_telephone' ); ?>
								
										<?php endif; ?>" title=""><?php if ( function_exists( 'ot_get_option' ) ) : ?>
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
										<?php  $google_plus = ot_get_option( 'google_plus' ); 
											if($google_plus !=''){
												echo '<li> <a href="'.$google_plus.'" target="_blank" title=""><i class="fa fa-google-plus" aria-hidden="true"></i><span>Google Plus</span></a> </li>';
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
 <script>
	 jQuery(document).ready(function(){
		jQuery(".home-name").attr('maxlength','35');
		jQuery(".home-phone").attr('maxlength','15');
		
			jQuery("input[name='Name']").keypress(function(event){
				   var inputValue = event.which;
				   // allow letters and whitespaces only.
				   if((inputValue > 33 && inputValue < 64) || (inputValue > 90 && inputValue < 97 ) || (inputValue > 123 && inputValue < 126)&& (inputValue != 32)){
					   event.preventDefault();
				   }
			});
			
			 $(".home-phone").keydown(function (e) {	
				// Allow: backspace, delete, tab, escape, enter and .
				if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
					 // Allow: Ctrl+A, Command+A
					(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
					 // Allow: home, end, left, right, down, up
					(e.keyCode >= 35 && e.keyCode <= 40)) {
						 // let it happen, don't do anything
						 return;
				}
				// Ensure that it is a number and stop the keypress
				if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
					e.preventDefault();
				}
			});
	});
 </script>
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
                
                , [992, 3]
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

<script>

        jQuery(function () {
            jQuery('.banner-caption a[href*=#]:not([href=#])').click(function () {
				var width = jQuery(window).width(), height = jQuery(window).height();
				
					if (width > 1200) {
						 if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
							var target = jQuery(this.hash);
							target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
							if (target.length) {
								jQuery('html,body').animate({
									scrollTop: target.offset().top
								}, 1000);
								return false;
							}
						}
					} 
				if((width >992) && (width <= 1199)){
					 if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = jQuery(this.hash);
                    target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        jQuery('html,body').animate({
                            scrollTop: target.offset().top -84
                        }, 1000);
                        return false;
                    }
				}
				}
				if((width >480) && (width <= 991)){
					 if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = jQuery(this.hash);
                    target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        jQuery('html,body').animate({
                            scrollTop: target.offset().top -69
                        }, 1000);
                        return false;
                    }
                }
				}
              if(width <= 479){
					 if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = jQuery(this.hash);
                    target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        jQuery('html,body').animate({
                            scrollTop: target.offset().top -122
                        }, 1000);
                        return false;
                    }
                }
				}
              
            });
        });
    </script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
<script>
   $(document).ready(function () {
		 $("#menu-item-167 a").prepend('<i class="fa fa-caret-right" aria-hidden="true"></i>');
		$("#menu-item-168 a").prepend('<i class="fa fa-caret-right" aria-hidden="true"></i>');
		$("#menu-item-169 a").prepend('<i class="fa fa-caret-right" aria-hidden="true"></i>');
		$("#menu-item-170 a").prepend('<i class="fa fa-caret-right" aria-hidden="true"></i>');
		$("#menu-item-171 a").prepend('<i class="fa fa-caret-right" aria-hidden="true"></i>');
   });
</script>	
</body>

</html>