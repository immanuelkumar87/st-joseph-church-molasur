<?php
/**
 * Template Name: contect Us
 *
 */
get_header();

?>.

<section class="py-5" id="contact">
      <div class="container py-5">
        <header class="mb-4 mb-5 text-center">
          <p class="text-serif mb-0 text-primaryn">Where to find us</p>
          <h2 class="text-uppercase">Reach us</h2>
          <div class="row">
            <div class="col-lg-7 mx-auto">
             <!--  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
            </div>
          </div>
        </header>
        <div class="row align-items-stretch gx-0">
          <div class="col-lg-6">      
            <div class="contact-img bg-center bg-cover" style="background: url(<?php echo get_template_directory_uri();?>/assets/img/sermon-1.jpg)"></div>
          </div>
          <div class="col-lg-6">
            <div class="bg-light p-5 h-100">
              <h4>ST. Joseph's Church</h4>
           <!--    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
              <ul class="list-unstyled mb-0 text-muted">
               
                <li class="mb-2"><a class="reset-anchor" href="text.html"> <i class="text-primaryn me-3 fas fa-globe-americas"></i><span>The Parish Priest, &nbsp;St.Joseph's Church,&nbsp;Molasur, <br> &nbsp;S.V.Chatram(Post)&nbsp; 602106,</span></a></li><br>
                 <li class="mb-2"><a class="reset-anchor" href="tel:+0035478968"> <i class="text-primaryn me-3 fas fa-phone"></i><span>+003 5478 968</span></a></li><br>
                <li class="mb-2"><a class="reset-anchor" href="mailto:church@example.com"> <i class="text-primaryn me-3 far fa-envelope"></i><span>sjcmolasur@gmail.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <section class="pb-5">       
      <div class="container pb-5">
        <div class="row align-items-center text-center gy-2">
          <div class="col-lg-3 col-sm-6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-1.svg" alt="..." width="120"></div>
          <div class="col-lg-3 col-sm-6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-2.svg" alt="..." width="120"></div>
          <div class="col-lg-3 col-sm-6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-3.svg" alt="..." width="120"></div>
          <div class="col-lg-3 col-sm-6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-4.svg" alt="..." width="120"></div>
        </div>
      </div>
    </section> -->

    <?php
get_footer();
?>