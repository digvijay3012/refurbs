<?php
/*
Template Name: Home
*/
get_header(); ?>
<?php 
global $post;
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
<section class="banner">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
			<?php
			$flag	=	1;
				$args 		= array( 'post_type' => 'home_slider','post_status' => 'publish','posts_per_page' => -1, 'order'=> 'ASC', );
				$GetPosts 	= get_posts( $args );
				foreach ( $GetPosts as $post ) : setup_postdata( $post ); 
			?>
                <div class="item <?php if($flag==1){ echo 'active'; } ?>"> 
				<?php
				$bannrTitle	=	get_the_title();
					if ( has_post_thumbnail() ) { 
							the_post_thumbnail('home_slider_img', array( 'alt' => $bannrTitle )); 
						}
				?>  
                    <div class="banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                   <?php the_content(); ?>
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
            <!-- Controls -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="prev_arw" aria-hidden="true"></span> </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="next_arw" aria-hidden="true"></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner end-->
    <section class="home_service">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home_service_innr trans">
                        <ul>
						<?php

							$args 		= array( 'post_type' => 'service','post_status' => 'publish','posts_per_page' => 3, 'order'=> 'ASC', );
							$GetPosts 	= get_posts( $args );
							foreach ( $GetPosts as $post ) : setup_postdata( $post ); 
						?>
						 <li>
                                <a href="<?php echo site_url(); ?>/services-detail/#s_<?php echo $post->ID; ?>" title="<?php  the_title(); ?>">
                                    <div class="home_service_bx">
                                        <figure>
										<?php
										$serviceTitle	=	get_the_title();
											if ( has_post_thumbnail() ) { 
												the_post_thumbnail( 'home-service', array( 'alt' => $serviceTitle )); 
											}
										?>
										<span></span></figure>
                                        <h4><?php  the_title(); ?></h4>
										<p><?php $getContent	=	get_the_content(); 
											echo custom_echo($getContent,200);
										?></p>
                                    </div>
                                </a>
                            </li>
                          	<?php 
								endforeach; 
								wp_reset_postdata();
							?>		

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--home_service end-->
    <section class="brand">
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
    <!--brand section end-->
    <section class="home_abt">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="home_abt_lft">
                        <h2>ABOUT US</h2>
                        <div class="home_abt_cntnt">
                            <p> 
							<?php echo $aboutData		= get_field('home_page_about_us', get_the_ID()); ?>
							</p> <a href='<?php echo site_url()."/about-us/"; ?>' title="">Read More</a> </div>
                        <figure> 
						<?php $aboutData		= get_field('home_about_us_image', get_the_ID()); 
									$aboutImageUrl 	=	$aboutData['sizes']['home-about-us'];
							?>
						<img src="<?php echo $aboutImageUrl; ?>" alt="abt_img"> </figure>
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
														$testnomialTitle	=	get_the_title();
														if ( has_post_thumbnail() ) { 
															the_post_thumbnail('testinomial-img' , array( 'alt' => $testnomialTitle )); 
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
    <!--tetsimonial section end-->

<?php get_footer(); ?>