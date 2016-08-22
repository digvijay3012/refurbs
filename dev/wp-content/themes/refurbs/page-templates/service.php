<?php
/*
Template Name: Services
*/
get_header();
?>
    <section class="banner gallery_banner">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/service_banner.jpg" alt="service_banner">
                    <div class="banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2>Services</h2> </div>
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
                                        <div data-cat="retail" class="portfolio retail" style="display: inline-block;" data-bound="">
                                            <div class="portfolio-wrapper"> 
                                                <figure><img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/retail.png"></figure>
                                                <div class="portfolio_ovrlay">
                                                  <div class="display-table">
                                                    <div class="display-table-cell">  
                                                   <h4>Retail</h4> 
                                                   <p>This is Photoshop's version  of Lorem Ipsum.</p>
                                                      </div>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                        <div data-cat="hospitality" class="portfolio hospitality" style="display: inline-block;" data-bound="">
                                            <div class="portfolio-wrapper"> 
                                                <figure><img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hospitality.png"></figure>
                                                <div class="portfolio_ovrlay">
                                                  <div class="display-table">
                                                    <div class="display-table-cell">  
                                                   <h4>Hospitality</h4> 
                                                   <p>This is Photoshop's version  of Lorem Ipsum.</p>
                                                      </div>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                        <div data-cat="office" class="portfolio office" style="display: inline-block;" data-bound="">
                                            <div class="portfolio-wrapper"> 
                                                <figure><img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/office.png"></figure>
                                                <div class="portfolio_ovrlay">
                                                  <div class="display-table">
                                                    <div class="display-table-cell">  
                                                   <h4>Office</h4> 
                                                   <p>This is Photoshop's version  of Lorem Ipsum.</p>
                                                      </div>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
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
 <?php get_footer(); ?>