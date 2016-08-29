<?php
/*
Template Name: Services
*/
get_header();
global $post;
?>
<?php 
function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '';
    echo $y;
  }
}
?>
    <section class="banner gallery_banner">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active"> 
				<?php $aboutData	= get_field('background_image', get_the_ID()); 
					$backGroundImageUrl 	=	$aboutData['sizes']['page_backgound_image'];
				?>
				<img src="<?php echo $backGroundImageUrl; ?>" alt="service_banner">
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
    <section class="gallery service_main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2><span>SERVICES</span></h2>
                    <div id="portfoliolist">
					<?php
							$args 		= array( 'post_type' => 'service','post_status' => 'publish','posts_per_page' => 3, 'order'=> 'ASC', );
							$GetPosts 	= get_posts( $args );
							foreach ( $GetPosts as $post ) : setup_postdata( $post ); 
						?>
                                        <div data-cat="retail" class="portfolio retail" style="display: inline-block;" data-bound="">
                                            <div class="portfolio-wrapper"> 
											
                                                <figure>
													<?php
														if ( has_post_thumbnail() ) { 
															the_post_thumbnail( 'home-service' ); 
														}
													?>
												</figure>
                                                <a href="<?php the_permalink($post->ID); ?>">
                                                <div class="portfolio_ovrlay">
                                                  <div class="display-table">
                                                    <div class="display-table-cell">  
                                                   
                                                   <h4><?php  the_title(); ?></h4> 
                                                   <p><?php $getContent	=	get_the_content(); 
															echo custom_echo($getContent,35);
														?></p>
                                                         
                                                      </div>
                                                    </div>  
                                                </div>
                                                </a>     
												
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
    </section>
    <section class="brand bg_white">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                      <?php
							
							$args 		= array( 'post_type' => 'client_slider','post_status' => 'publish','posts_per_page' => -1, 'order'=> 'ASC', );
							$GetPosts 	= get_posts( $args );
							foreach ( $GetPosts as $post ) : setup_postdata( $post ); 
						?>
                        <div class="item">
                            <a href="#" title="clients">
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
 <?php get_footer(); ?>		