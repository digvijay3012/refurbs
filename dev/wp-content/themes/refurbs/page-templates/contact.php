<?php 
/*
Template Name: Contact us
*/
get_header(); ?>
    <section class="banner gallery_banner">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
				<?php $aboutData	= get_field('background_image', get_the_ID()); 
					$backGroundImageUrl 	=	$aboutData['sizes']['page_backgound_image'];
				?>
				<img src="<?php echo $backGroundImageUrl; ?>" alt="contact_banner">
                    <div class="banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2><?php echo $image_text		= get_field('image_text', get_the_ID()); ?></h2> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner end-->
    <section class="gallery contact_sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2><span>CONTACT US</span></h2> </div>
            </div>
            <div class="contact_tp">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="contact_bx">
                            <figure> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> </figure>
                            <div class="contact_bx_lft">
                                <h4>E-MAIL</h4>
                                <p><a href="mailto:<?php echo $email	= get_field('e-mail', get_the_ID()); ?>"><?php echo $email	= get_field('e-mail', get_the_ID()); ?></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact_bx">
                            <figure> <span><i class="fa fa-phone" aria-hidden="true"></i> </span> </figure>
                            <div class="contact_bx_lft">
                                <h4>PHONE</h4>
                                <p><a href="tel:<?php echo $phone	= get_field('phone', get_the_ID()); ?>"><?php echo $phone	= get_field('phone', get_the_ID()); ?></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact_bx">
                            <figure> <span><i class="fa fa-map-marker" aria-hidden="true"></i></span> </figure>
                            <div class="contact_bx_lft">
                                <h4>ADDRESS</h4>
                                <p><?php echo $address	= get_field('address', get_the_ID()); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--contact_tp end-->
            <div class="contact_form_sec">
             <div class="row">
              <div class="col-sm-12">
                 
                 
                 <?php echo do_shortcode('[contact-form-7 id="107" title="Contact Us Form"]'); ?>
              
              </div>     
             </div>    
            </div>
        </div>
    </section><!--gallery_contact_sec end-->

   <?php get_footer(); ?>