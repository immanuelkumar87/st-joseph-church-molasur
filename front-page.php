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
    <!-- Services Section -->
 <!--    <section class="py-5" id="services">
      <div class="container py-5">
        <header class="mb-4 text-center mb-5">  
          <p class="text-serif mb-0 text-primaryn"> Welcome to St. Joseph's Church, Molasur</p>
          <h2 class="text-uppercase">Our services </h2>
        </header>
        <div class="row text-center gy-4">
          <div class="col-lg-4"><i class="fas text-primaryn mb-4 fa-3x fa-praying-hands"></i>
            <h3 class="h5">Eucharist</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
          </div>
          <div class="col-lg-4"><i class="fas text-primaryn mb-4 fa-3x fa-bible"></i>
            <h3 class="h5">Sacrements</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
          </div>
          <div class="col-lg-4"><i class="fas text-primaryn mb-4 fa-3x fa-church"></i>
            <h3 class="h5">Catechism</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Works Section-->
   
    <section class="py-5" id="services">
	  <div class="container py-5">
	  	<header class="mb-4 text-center mb-5">
       <!--    <h2 class="text-uppercase">Parish Events</h2> -->
        <p class="text-serif mb-0 text-primaryn"> Parish Events</p><br>
        </header>
	    <div class="row text-center gy-4">
	      <div class="col-lg-4">
	        <h3 class="h5">News&Events</h3>
	        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
	      </div>
	      <div class="col-lg-4">
	        <h3 class="h5">Mass Schedule</h3>
	        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
	      </div>
	      <div class="col-lg-4">
	        <h3 	class="h5">Live Mass</h3>
	        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
	      </div>
	    </div>
	  </div>
	</section>

</div>
        <!-- gallery section -->
    <section class="py-5" id="sermons">
      <div class="container">
<header class="mb-4 text-center mb-5">
          <p class="text-serif mb-0 text-primaryn">Gallery</p><br>
         <!--  <h2 class="text-uppercase">St Joseph Church</h2> -->
        </header>
<hr>
   <div class="row">
      <div class="col-lg-4 col-sm-6">
         <div class="thumbnail img-responsive">
            <a  title="Image 1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/joseph/mass-01.jpg"> </a>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6">
         <div class="thumbnail img-responsive">
            <a title="Image 1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/joseph/substation-04.jpg"></a>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6 ">
         <div class="thumbnail">
            <a title="Image 1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/joseph/substation-05.jpg"></a>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6">
         <div class="thumbnail img-responsive">
            <a href="#" title="Image 1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/joseph/tmpKygX_4.jpeg"></a>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6">
         <div class="thumbnail img-responsive">
            <a href="#" title="Image 1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/joseph/tmpUe3m9N.jpeg"></a>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6">
         <div class="thumbnail img-responsive">
            <a href="#" title="Image 1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/joseph/tmpT4WzND.jpeg"></a>
         </div>
      </div>
      
   </div><hr>
</div>

<div id="modal-new" class="modal fade" tabindex="-1" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
         </div>
         <div class="modal-body">
         </div>
      </div>
   </div>
</div>
    </section>
    <!-- <section class="py-5" id="sermons">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-4">
				<h4 class="mb-0"> <a class="reset-anchor" href="text.html">Testing our faith</a></h4>
				<p class="text-serif text-primaryn text-small">Holiday</p>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
			</div>
			<div class="col-md-4">
				<h4 class="mb-0"> <a class="reset-anchor" href="text.html">Testing our faith</a></h4>
				<p class="text-serif text-primaryn text-small">Holiday</p>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
			</div>
			<div class="col-md-4">
				<h4 class="mb-0"> <a class="reset-anchor" href="text.html">Testing our faith</a></h4>
				<p class="text-serif text-primaryn text-small">Holiday</p>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
			</div>
		</div>
	</div>
</section> -->
 
    
    
<?php
get_footer();
?>