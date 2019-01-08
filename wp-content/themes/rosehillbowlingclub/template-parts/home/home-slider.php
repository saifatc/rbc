<?php
$slideRows = get_field('slides');
//var_dump($slideRows);
?>
<?php if ($slideRows): ?>
  <section id="home-slider" class="home-slider section">
    <div class="flexslider">
      <ul class="slides">
        <?php foreach ($slideRows as $slideRow): ?>
          <li>            
            <?php
            $slideMobileImage = $slideRow['slide_image'];
            $slideContent = $slideRow['slide_content'];
            ?>
            <?php if ($slideMobileImage): ?>            
              <div class="background-image" style="background-image: url(<?php echo $slideMobileImage; ?>);">                
              </div><!--end background-image -->
            <?php endif; ?>
            <?php if ($slideContent): ?>
              <div class="slide-content">
                <?php echo $slideContent; ?>
              </div><!--end slide-content-->
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>

      <div class="custom-navigation">
        <a href="#" class="flex-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        <div class="custom-controls-container"></div>
        <a href="#" class="flex-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      </div>

    </div><!--end flexslider-->    



  </section><!--end #home-slider-->
<?php endif; ?>