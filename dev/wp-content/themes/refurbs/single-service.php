<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
 <section class="banner gallery_banner">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
				<?php $aboutData			= get_field('background_image', 86); 
					$backGroundImageUrl 	=	$aboutData['sizes']['page_backgound_image'];
				?>
				<img src="<?php echo $backGroundImageUrl; ?>" alt="service_innr_banner">
				
                    <div class="banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2>
									<?php while ( have_posts() ) : the_post(); ?>
										<?php echo  get_the_title(); ?>
									</h2>
									<?php endwhile; ?>
									</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <section class="gallery service_innr_sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2><span>SERVICES</span></h2>
                    <div class="service_type">
					<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>
                       
                        <!--service_bx end-->
                        <div class="service_bx" id="s_<?php echo $post->ID; ?>">
                          
                            <div class="service_bx_rght">
							 <figure>
								<?php $aboutData	= get_field('inner_service_image', $post->ID); 
									$innr_service_img 	=	$aboutData['sizes']['innr_service_img'];
								?>
								<img alt="<?php echo  get_the_title(); ?>" src="<?php echo $innr_service_img; ?>">
								<span></span></figure>
                                <h4><?php echo  get_the_title(); ?></h4>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                        <!--service_bx end-->
					<?php endwhile; ?>
		
                    </div>
                </div>
            </div>
        </div>
    </section>
		
  <!--gallery_contact_sec end-->
     <section class="testimonial">
        <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic1" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic1" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic1" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
			<?php
				
				$flag=1;
				$args 		= array( 'post_type' => 'testinomial_slider','post_status' => 'publish','posts_per_page' => -1, 'order'=> 'ASC', );
				$GetPosts 	= get_posts( $args );
				foreach ( $GetPosts as $post ) : setup_postdata( $post ); 
		?>
                <div class="item <?php if($flag==1){ echo "active"; } ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>What our clients say</h2>
                                <div class="testi_bx">
                                    <div class="testi_bx_lft">
                                        <div class="testi_bx_img">
                                            <figure> <?php
														if ( has_post_thumbnail() ) { 
															the_post_thumbnail('testinomial-img'); 
														}
													?> 
                                                <div class="border_org"> <span class="bor_org_top"></span> <span class="bor_org_btm"></span> </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="testi_bx_rght">
                                        <p><?php the_content(); ?></p> <span class="author_name"><?php the_title(); ?></span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              <?php 
			  $flag++;
				endforeach; 
				wp_reset_postdata();
			?>		

            </div>
        </div>
    </section>
    <!--testimonial section end-->
	
 
    <section class="service_slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="owl-demo1" class="owl-carousel owl-theme">
					<?php
						$args 		= array( 'post_type' => 'service_slider','post_status' => 'publish','posts_per_page' => -1, 'order'=> 'ASC', );
						$GetPosts 	= get_posts( $args );
						foreach ( $GetPosts as $post ) : setup_postdata( $post ); 
					?>
                        <div class="item">
                            <div class="service_slider_innr"> 
							<?php
								if ( has_post_thumbnail() ) { 
									the_post_thumbnail('service_slider_image'); 
								}
							?> 
                                <div class="slider_overlay">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <h3><?php echo get_the_title(); ?></h3>
                                           <?php the_content(); ?> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <?php 	
						endforeach; 
						wp_reset_postdata();
					?>	 
                    </div>
                </div>
            </div>
        </div>
        <!--owl-carousel end-->
    </section>
<?php get_footer(); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            var owl = jQuery("#owl-demo1");
            owl.owlCarousel({
                itemsCustom: [
                [320, 1]
                 , [480, 2]
                , [992, 4]
                , [1200, 4]
                , [1500, 4]]
                , navigation: true
                , slideSpeed: 1000
                , scrollPerPage: true
                , autoPlay: true
            });
        });
    </script>
