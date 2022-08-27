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
     	<?php echo do_shortcode('[smartslider3 slider="2"]') ?>
     	</div>
<!-- flash news -->

<div class="elementor-widget-container">

        <marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
       <span  class="fas fa-forward"></span>&nbsp;&nbsp;<p class="fnews">St. Joseph Church –  Flash News 28/08/2022</p>&nbsp;&nbsp;<span  class="fas fa-forward"></span>&nbsp;&nbsp;<p class="fnews"> Our Sunday worship Services are cancelled. </p>       
        </marquee>
       	
</div>
<!-- flash news end -->
    <!-- Services Section -->
    <section class="py-5" id="services">
      <div class="container py-5">
        <header class="mb-4 text-center mb-5">  
          <p class="text-serif mb-0 text-primary">St. Joseph's Church, Molasur
												புனித சூசையப்பர் ஆலயம், மொளச்சூர்</p>
          <h2 class="text-uppercase">Our services </h2>
        </header>
        <div class="row text-center gy-4">
          <div class="col-lg-4"><i class="fas text-primary mb-4 fa-3x fa-praying-hands"></i>
            <h3 class="h5">Eucharist</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
          </div>
          <div class="col-lg-4"><i class="fas text-primary mb-4 fa-3x fa-bible"></i>
            <h3 class="h5">Sacrements</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
          </div>
          <div class="col-lg-4"><i class="fas text-primary mb-4 fa-3x fa-church"></i>
            <h3 class="h5">Catechism</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Works Section-->
    <section id="works">
      <div class="container-fluid px-0">
        <div class="row align-items-stretch">
          <div class="col-lg-6 half-page-banner bg-cover" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/priest.jpg)"></div>
          <div class="col-lg-6 bg-light py-lg-5">
            <div class="h-100 d-flex flex-column p-5 justify-content-center">
              <p class="text-serif text-primary mb-0">Where to find us</p>
              <h2 class="text-uppercase">Our work</h2>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
              <ul class="list-check ps-0">
                <li>
                  <p class="mb-0 text-muted mb-2">Eu vim atqui ludus petentium, suas idque est id. </p>
                </li>
                <li>
                  <p class="mb-0 text-muted mb-2">Ne veniam oblique propriae vim, dicant. </p>
                </li>
                <li>
                  <p class="mb-0 text-muted mb-2">Sed everti utroque, vis ea oblique pertinax con. </p>
                </li>
              </ul><img class="mb-3" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/signature.png" alt="..." width="90">
              <h6 class="text-uppercase mb-0">Richard Wood</h6>
              <p class="text-serif text-primary text-small mb-0">Lead Pastor</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-5" id="services">
	  <div class="container py-5">
	  	<header class="mb-4 text-center mb-5">
          <h2 class="text-uppercase">Parish Events</h2>
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
        <!-- gallery session -->
    <section class="py-5" id="sermons">
      <div class="container py-5">
        <header class="mb-4 text-center mb-5">
          <p class="text-serif mb-0 text-primary">Gallery Session</p>
          <h2 class="text-uppercase">St Joseph Church</h2>
        </header>
  <div class="row">
    <div class="col-12">
     
     <?php $News = new WP_Query("cat=3&showposts=3&order=DESC");
                 $i=0;
          while($News->have_posts()) : $News->the_post();
              echo  get_the_post_thumbnail( get_the_ID(), array(350,201) ,array('class' => 'p-3'));
              $i++;
          endwhile;  
     ?> 
 </div>
   </div>
    </section>


    <!-- <section class="py-5" id="sermons">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-4">
				<h4 class="mb-0"> <a class="reset-anchor" href="text.html">Testing our faith</a></h4>
				<p class="text-serif text-primary text-small">Holiday</p>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
			</div>
			<div class="col-md-4">
				<h4 class="mb-0"> <a class="reset-anchor" href="text.html">Testing our faith</a></h4>
				<p class="text-serif text-primary text-small">Holiday</p>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
			</div>
			<div class="col-md-4">
				<h4 class="mb-0"> <a class="reset-anchor" href="text.html">Testing our faith</a></h4>
				<p class="text-serif text-primary text-small">Holiday</p>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
			</div>
		</div>
	</div>
</section> -->
 
    
    
<?php
get_footer();
?>