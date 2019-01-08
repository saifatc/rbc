<?php
$leftColumn = get_sub_field('left_column');
$rightColumnImage = get_sub_field('right_column_image');

if ($leftColumn && $rightColumnImage):
  ?>
  <section class="section two-columns-image-right">
    <div class="row">      
      <div class="large-6 large-push-6 medium-6 small-12 columns float-column-right image-column">
        <img src="<?php echo $rightColumnImage; ?>" />
      </div>
      <div class="large-6 large-pull-6 medium-6 small-12 columns no-float padding-right">
        <?php echo $leftColumn; ?>    
      </div>
    </div>
  </section>
<?php endif; ?>