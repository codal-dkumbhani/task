<?php
/**
* Template Name: Dhrumil Home page
*
* @package WordPress
* @subpackage Dhrumil
* @since Dhrumil 1.0
*/

get_header();
?>

	<main id="primary" class="site-main">

	<!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1><?php echo esc_attr( get_post_meta( get_the_ID(), 'title', true ) ); ?> 
                        <em><?php echo esc_attr( get_post_meta( get_the_ID(), 'crate', true ) ); ?></em></h1>
                        <p><?php echo esc_attr( get_post_meta( get_the_ID(), 'home-text', true ) ); ?></p> 
                        <a href="<?php echo esc_attr( get_post_meta( get_the_ID(), 'home-starting-button-value', true ) ); ?>" class="main-button-slider"><?php echo esc_attr( get_post_meta( get_the_ID(), 'home-starting-button', true ) ); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->
	<!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
            <?php echo get_post_meta($post->ID, 'wp_editor_1', true); ?>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->
	<div class="left-image-decor"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    
                <div class="rounded img-fluid d-block mx-auto" >
               
                <?php/* $test =  get_post_meta( get_the_ID(), 'img',true) ; 
                    print_r($test);
                   $test1 =  get_post_meta( get_the_ID(), 'title1', true )  ; 
                    print_r($test1);
                    $test2 =  get_post_meta( get_the_ID(), 'dis', true )  ; 
                    print_r($test2);*/?>

                        <?php   
                        $post = get_post(188);
                            
                            /* grab the url for the full size featured image */
                            $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); 
                            
                            /* link thumbnail to full size image for use with lightbox*/
                            echo '<a href="'.$featured_img_url.'"  rel="lightbox">'; 
                            the_post_thumbnail('full');
                            echo '</a>';
                            ?>   
                    </div>
                    
                </div>
                
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                       <?php //foreach($test as $key=> $value){?>
                           
                            <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            
                            <div class="text">
                                <?php  
                                    $img = get_post_meta( 259, 'img',true) ;
                                    $title1 = get_post_meta( 259, 'title1',true) ;
                                    $dis = get_post_meta( 259, 'dis',true) ;
                                    $i=0;
                                    foreach ($title1 as $test ){
                                        $url_to_my_attachment = $img[$i];
                                        $attachment_id = attachment_url_to_postid($url_to_my_attachment);
                                        print wp_get_attachment_image($attachment_id);
                                        echo "<h4>".$test."</h4>";
                                        echo "<p>".$dis[$i]."</p>";
                                        $i++;
                                    }
                                ?>
                            </div>
                        </li>
                        <?php //echo "<br>"; }  ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="right-image-decor"></div>

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>What They Think <em>About Us</em></h2>
                        <p>Suspendisse vitae laoreet mauris. Fusce a nisi dapibus, euismod purus non, convallis odio.
                            Donec vitae magna ornare, pellentesque ex vitae, aliquet urna.</p>
							
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s"> 
                    <div class="owl-carousel owl-theme">
                        
                            <?php dynamic_sidebar( 'testimonial' ); ?>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->
		

<?php

get_footer();




