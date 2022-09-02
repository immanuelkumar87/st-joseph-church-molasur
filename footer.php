<footer class="pt-5 text-white" style="background: #111">
      <div class="container pt-5">
        <div class="row mb-5 pb-5">
          <div class="col-md-4 col-sm-12">
          	<h5 class="mb-4 mt-3">Contact Us</h5>
             <ul class="list-unstyled">
              <li class="mb-2">
            <p class="footercolor mb-1 ">The Parish Priest,</p>
            <p class="footercolor mb-1">St. Joseph's Church,</p>
            <p class="footercolor mb-1">Molasur, S.V.Chatram (Post)</p>
            <p class="footercolor mb-1">602106,</p>
            <p class="footercolor mb-1">sjcmolasur@gmail.com</p>
          </li></ul>
          </div>
          <div class="col-md-4 col-sm-12">
            <h5 class="mb-4 mt-3">Quick links</h5>
            <ul class="list-unstyled">
              <li class="mb-2">
                <p class="mb-1"> <a class=" footercolor" href="#!">About St Joseph</a></p>
               <p class="mb-1"> <a class=" footercolor" href="#!">Religious Institutions</a></p>
               <p class="mb-1"> <a class="footercolor" href="#!">Gallery</a></p>
               <p class="mb-1"> <a class=" footercolor" href="#!">Downloads</a></p>
                <p class="mb-1"> <a class="footercolor" href="#!">Contact Us</a></p>

              </li>
              
            </ul>
          </div>
          <div class="col-md-4 col-sm-12">
            <h5 class="mb-4 mt-3">Location</h5>
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d248895.26253721266!2d79.78530864290302!3d12.90846197862293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3a52ed01dad13c6d%3A0x112e197011ef495d!2sWVMG%2BRPG%20St%20Josephs%20Church%2C%201%2F178%2C%20St%20Therasal&#39;s%20St%2C%20Mambakkam%2C%20Molachur%2C%20Tamil%20Nadu%20602106!3m2!1d12.9333721!2d79.8763527!5e0!3m2!1sen!2sin!4v1661507777533!5m2!1sen!2sin" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
          </div>
        </div>
        <div class="py-4 border-top border-dark text-center">
          <p class="mb-0 text-muted">
			Copyright © 2022 St. Joseph's Church, Molasur, All Rights Reserved | Powered By  <a class="reset-anchor text-primaryn" href="https://www.boscosofttech.com/">Boscosofttech</a>. </p>
          <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="<?php echo get_template_directory_uri();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/countdown.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendor/progressbar.js/progressbar.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/front.js"></script>
    <!-- <script src="<?php echo get_template_directory_uri();?>/assets/js/style.js"></script> -->
     <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="style.js"></script>

    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>
    <script >
jQuery(document).ready(function($){
$('.thumbnail').click(function(){
  $('.modal-body').empty();
  $($(this).parents('div').html()).appendTo('.modal-body');
  $('#modal-new').modal('toggle');
});
$('.close').click(function(){
 
  $('#modal-new').modal('toggle');
});
$('#modal').model('show.bs.modal', function () {
   $('.col-6,.row .thumbnail').addClass('blur');
})
$('#modal').model('hide.bs.modal', function () {
   $('.col-6,.row .thumbnail').removeClass('blur');
})
});

</script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Gallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <?php wp_footer()?>
  </body>
</html>