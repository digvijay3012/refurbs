<?php
/*
Template Name: Gallery
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
				<img src="<?php echo $backGroundImageUrl; ?>" alt="gallery_banner">
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
    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2><span>GALLERY</span></h2> 
                <?php
				// Get gallery Classes
					$terms = get_terms( 'gallery_cat' );
					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
						$makeClass	=	'';
						$getCount	=	count($terms);
						$Flag= 1;
						foreach ( $terms as $term ) {
							$getClass	=	$term->slug;
								if($Flag==$getCount){
									$makeClass	.=	".".$getClass;
								}else{
									$makeClass	.=	".".$getClass.", ";
								}
						$Flag++;		
						}
				}				
				?>
                   <ul id="filters" class="clearfix">
							<?php
								$termsData = get_terms( 'gallery_cat' );
								if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
									$loopCounter	=	1;
									foreach ( $termsData as $getTerm ) {
										$getGalleryName		=	$getTerm->name;
										$getGalleryClass	=	$getTerm->slug;	
							?>
							<?php if($loopCounter==1){ ?>
								 <li><span class="filter active" data-filter="<?php echo $makeClass; ?>">All</span></li>
								 <li><span class="filter" data-filter=".<?php echo $getGalleryClass; ?>"><?php echo $getGalleryName; ?></span></li>	
							<?php }else { ?>
								<li><span class="filter" data-filter=".<?php echo $getGalleryClass; ?>"><?php echo $getGalleryName; ?></span></li>		
                            <?php } ?>           
						<?php 
							$loopCounter++;		
							}
						}				
						?>
                                    </ul>
                                    <div id="portfoliolist">
						<?php
								$termsData = get_terms( 'gallery_cat' );
								if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
									
									foreach ( $termsData as $getTerm ) {
										$getGalleryName		=	$getTerm->name;
										$getGalleryClass	=	$getTerm->slug;	
										$getGalleryId		=	$getTerm->term_id;
								$getGalleryData 			=	get_posts(array(
											'post_type' => 'refurbs_gallery',
											'posts_per_page' => -1 ,
											'tax_query' => array(
												array(
												'taxonomy' => 'gallery_cat',
												'field' => 'term_id',
												'terms' => $getGalleryId),
                                                
											))
										);
										if ( $getGalleryData ) {
										foreach ( $getGalleryData as $post ) :
											setup_postdata( $post );
							?>
							 <div class="portfolio <?php echo $getGalleryClass; ?>" data-cat="<?php echo $getGalleryClass; ?>">
                                            <div class="portfolio-wrapper"> 
                                                <figure>
												<?php
													if ( has_post_thumbnail() ) { 
														the_post_thumbnail( 'gallery_image' ); 
													}
												?>
												</figure>
                                                <div class="portfolio_ovrlay">
                                                  <div class="display-table">
                                                    <div class="display-table-cell">  
                                                   <h4><?php the_title(); ?></h4> 
                                                   <p><?php the_content(); ?></p>
                                                      </div>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
							
									<?php 
										endforeach; 
										wp_reset_postdata();
									}
								} 
							} 
							?>
							  </div>
                </div>
            </div>
        </div>
    </section>
	
  <?php get_footer(); ?>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mixitup.min.js"></script>
 <script type="text/javascript">
        $(function () {
            var filterList = {
                init: function () {
                    // MixItUp plugin
                    // http://mixitup.io
                    $('#portfoliolist').mixItUp({
                        selectors: {
                            target: '.portfolio'
                            , filter: '.filter'
                        }
                        , load: {
                            filter: '<?php echo $makeClass; ?>'
                        }
                    });
                }
            };
            // Run the show!
            filterList.init();
        });
    </script>	