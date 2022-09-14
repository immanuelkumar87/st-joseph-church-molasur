<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

    
<!-- Hero Slider -->
     <style>
  	.sm-slider {opacity: 1 !important;}
         </style>
     <div class="sm-slider">
     	<?php echo do_shortcode('[smartslider3 slider="3"]') ?>
     	</div>
<!-- flash news -->

<div class="elementor-widget-container">

        <marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
       <span  class="fas iconcolor fa-forward"></span>&nbsp;&nbsp;<p class="fnews">St. Joseph Church –  Flash News 28/08/2022</p>&nbsp;&nbsp;<span  class="fas iconcolor fa-forward"></span>&nbsp;&nbsp;<p class="fnews"> Our Sunday worship Services are cancelled. </p>       
        </marquee>
       	
</div>
<!-- flash news end -->
    
    <!-- Works Section-->
   
<section class="py-5" id="services">
     
       <div class="row text-center gy-4 " style= "padding: 1px 13px 0px 23px;">

         <div class="col-lg-4"style="text-align:left" >
           <h3 class="h5" style="text-align:center;"><i class="fas text-primaryn fa-newspaper"></i>&nbsp;News&Events</h3><br>
          <?php echo do_shortcode( '[xyz-ips snippet="News"]' ); ?>      
           </div>
         <div class="col-lg-4 live-mass" style="text-align:left ">
            <h3 class="h5" style="text-align:center;" ><i class=" fas text-primaryn fa fa-calendar" aria-hidden="true"></i>&nbsp;Mass Schedule</h3><br>
            <?php echo do_shortcode( ' [xyz-ips snippet="Mass"]' ); ?>
           </div>
         <div class="col-lg-4" style="text-align:left">
           <h3 class="h5" style="text-align:center;"><i class="fas text-primaryn mb-3 fa-1x fa-praying-hands"></i>&nbsp;Live Mass</h3><br>
           <iframe width="560" height="170" src="https://www.youtube.com/embed/_IlA7H_Yfrk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
       </div>
    
   </section> 
    
<?php
get_footer();
?>