<?php
$carouselContent = get_sub_field('carousel_content');
$carouselRows = get_sub_field('carousel');
?>
<?php if ($carouselRows): ?>
  <section class="carousel section">
    <?php if($carouselContent): ?>
    <div class="row column">
      <?php echo $carouselContent; ?>
    </div>
    <?php endif; ?>
    <div class="carousel-container">
      <div class="flexslider">

        <ul class="slides">
          <?php foreach ($carouselRows as $carouselRow): ?>
            <li>            
              <?php
              $carouselContent = $carouselRow['content'];
              ?>
              <?php if ($carouselContent): ?>
                <div class="carousel-content">
                  <?php echo $carouselContent; ?>
                </div>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div><!--end flexslider-->    

      <div class="custom-navigation">
        <a href="#" class="flex-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        <div class="custom-controls-container"></div>
        <a href="#" class="flex-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </section><!--end carousel-->
<?php endif; ?>