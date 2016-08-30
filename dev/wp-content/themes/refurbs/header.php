<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Custom Refrigeration and Fabrication</title>
    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png" type="image/x-icon">
	<?php wp_head(); ?>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,500italic,500,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.mCustomScrollbar.css"> 
	
	</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo">
                        <a href="<?php echo site_url(); ?>" title="logo">
						<?php if ( function_exists( 'ot_get_option' ) ) : ?>
								<?php $logo = ot_get_option( 'logo' ); ?>
								<img src="<?php echo $logo; ?>" alt="logo"></a>
						<?php endif; ?>
						
						</a>
                    </div>
                    <!--logo end-->
                    <nav>
                        <ul>
						
							<!-------   ********************** GETTING MENU *************************------>
							
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
                    </nav>
                    <div class="header_call">
                        <div class="header_call_lft"> <i class="fa fa-mobile" aria-hidden="true"></i> </div>
                        <div class="header_call_rght">
						<?php if ( function_exists( 'ot_get_option' ) ) : ?>
								<?php echo $quote_number = ot_get_option( 'quote_number' ); ?>
								
						<?php endif; ?>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header section end-->