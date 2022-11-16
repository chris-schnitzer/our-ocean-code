<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Our_Ocean
 */

get_header();
?>  
    <div id="container">

    	<div class="slide">
            <h1 class="text-wrap">Ocean water covers more than 70 percent of the Earth, and only in recent decades have we begun to understand how humans impact this watery habitat. </h1>  
        </div>

        <img id="slide-1-img"class="skewElem" src="<?php echo get_template_directory_uri(); ?>/img/underwater.jpg" alt="underwater">


        <div class="slide">
            <h1 class="text-wrap">Until fairly recently it was assumed that no matter how much trash and chemicals humans dumped into the oceans, the effects would be negligible. </h1>  
        </div>

        <img id="slide-2-img" class="skewElem" src="<?php echo get_template_directory_uri(); ?>/img/polluted.jpg" alt="underwater sea pollution">
        
     
        <div class="slide slide-3">
            <h1 class="text-wrap">The many types of marine pollution affect entire ecosystems which in turn affects us. </h1>  
        </div>
        
        <img id="slide-3-img" class="skewElem" src="<?php echo get_template_directory_uri(); ?>/img/land_sea.jpg" alt="housing on seafront">

         <div class="slide slide-final">
            <h1 class="text-wrap">If no action is taken, the plastic will increasingly impact our ecosystems, health, and economies.
    If we don’t take action collectively, we’ll all pay the price individually. </h1>  
        </div>

    	

        <p class="scroll">Scroll</p>
        <div id="take-action-landing">
            <a href="take-action">Take Action</a>
        </div>
    </div>
<?php get_footer(); ?>