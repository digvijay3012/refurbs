<?php 
/*
Template Name: About us
*/
get_header();
?>

    <section class="banner gallery_banner">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active"> 
				<?php $aboutData	= get_field('background_image', get_the_ID()); 
					$backGroundImageUrl 	=	$aboutData['sizes']['page_backgound_image'];
				?>
				<img src="<?php echo $backGroundImageUrl; ?>" alt="about_banner">
                    <div class="banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2><?php echo $image_text		= get_field('image_text', get_the_ID()); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!--banner end-->
    <section class="home_abt home_abt_main">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="about_lft">
                     <h4>ABOUT US</h4>  
                   <?php
						$pageId				=	get_the_ID();
						$pageData 			= 	get_post($pageId); 
						echo $pageContent 	= 	$pageData->post_content; 
				?>
                        
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="home_abt_rght">
                        <h4>CONTACT US</h4>
                       <?php echo do_shortcode('[contact-form-7 id="51" title="Home Page Contact Form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--home_about_end-->
    <section class="brand">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="owl-demo" class="owl-carousel owl-theme">
					<?php
							global $post;
							$args 		= array( 'post_type' => 'client_slider','post_status' => 'publish','posts_per_page' => -1, 'order'=> 'ASC', );
							$GetPosts 	= get_posts( $args );
							foreach ( $GetPosts as $post ) : setup_postdata( $post ); 
						?>
                        <div class="item">
                            <a href="#" title="">
								<?php
									if ( has_post_thumbnail() ) { 
											the_post_thumbnail(); 
										}
								?>  
							</a>
                        </div>
                       <?php 
								endforeach; 
								wp_reset_postdata();
							?>		

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--brand section end-->
    <section class="more_abt_us">
	<?php $moreaboutData			= get_field('more_about_us_image', get_the_ID()); 
		$more_about_us_imageUrl 	=	$moreaboutData['sizes']['more_about_us_image'];
	?>
    <div class="img_lft" style="background:url(<?php echo $more_about_us_imageUrl; ?>) no-repeat left bottom;"></div>  
     <div class="container">
      <div class="row">
       <div class="col-sm-12">
         <div class="more_abt_innr">
         <h4>MORE ABOUT US</h4>   
         <p><?php echo $more_about_us_text		= get_field('more_about_us_text', get_the_ID()); ?></p>  
           </div>     
       </div>      
      </div>     
     </div>    
    </section>
<?php get_footer(); ?>