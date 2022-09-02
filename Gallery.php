<?php
/**
 * Template Name: Gallery
 *
 */
get_header();

?>
  <div class="photo-gallery">
        <div class="container">
            <div class="intro"><br>
                <h2 class="text-center">Gallery Images</h2>
                <!-- <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p> -->
            </div>
            <?php


?>

    


<div class="event-space">
<?php    

$url =  file_get_contents("http://139.162.8.46:6069/api/parish/gallery/11944");
 $response  = json_decode($url);

?>
<div class="container">
<div class="row">

        <?php
    if (!empty($response))
    {
        $data = $response->data;
        $i=0;

        foreach ($data as $album)
        {
              
           ?>
          <div class="col-md-12 col-12" id="image_gallery_row">

          <div class="row">

            <br />
           <h6>
            <?php 
            $date=date_create($album->date);
            echo date_format($date,"d-m-Y")." - " .$album->event;  ?>  
             </h6><br />
         <?php  
        foreach ($album->gallery as $key=> $data)
        {
          
         ?>
             <div class="col-md-2 col-6 thumb" style="padding-bottom: 10px"><a href="<?php echo $data->image; ?>" data-lightbox="photos"><img width="150px" height="100px"  class="img-fluid img-responsive" src="<?php echo $data->image; ?>"></a></div>
             <?php

        }
           
            $i++;
         ?>
         


           </div>
</div>
            <?php  
        }

    
        
    }

?>

</div>
</div>
          
        </div>
    </div>


    <?php
get_footer();
?>