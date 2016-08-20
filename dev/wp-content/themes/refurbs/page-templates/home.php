<?php
/*
Template Name: Home
*/
get_header(); ?>
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
<section class="banner">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner1.jpg" alt="banner1">
                    <div class="banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2>Lorem ipsum dolor sit amet <br> consectetur adipiscing eli</h2> <a href="#" title="" class="btn_orng">Contact Us</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner1.jpg" alt="banner1">
                    <div class="banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2>Lorem ipsum dolor sit amet <br> consectetur adipiscing eli</h2> <a href="#" title="" class="btn_orng">Contact Us</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
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
							global $post;
							$args 		= array( 'post_type' => 'service','post_status' => 'publish','posts_per_page' => 3, 'order'=> 'ASC', );
							$GetPosts 	= get_posts( $args );
							foreach ( $GetPosts as $post ) : setup_postdata( $post ); 
						?>
						 <li>
                                <a href="<?php the_permalink(); ?>" title="<?php  the_title(); ?>">
                                    <div class="home_service_bx">
                                        <figure>
										<?php
											if ( has_post_thumbnail() ) { 
												the_post_thumbnail( 'home-service' ); 
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
							global $post;
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p> <a href="#" title="">Read More</a> </div>
                        <figure> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/abt_img.png" alt="abt_img"> </figure>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="home_abt_rght">
                        <h4>CONTACT US</h4>
                        <form>
                            <p>
                                <input type="text" placeholder="Name:"> </p>
                            <p>
                                <input type="email" placeholder="Email:"> </p>
                            <p>
                                <input type="tel" placeholder="Phone:"> </p>
                            <p>
                                <textarea placeholder="Message"></textarea>
                            </p>
                            <input type="submit" value="SUBMIT"> </form>
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
                <li data-target="#caro
                                 usel-example-generic1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic1" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic1" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic1" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
			<?php
				global $post;
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
    <!--tetsimonial section end-->
 
<?php get_footer(); ?>