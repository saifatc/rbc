<?php
$leftColumnImage = get_sub_field('left_column_image');
$rightColumn = get_sub_field('right_column');

if ($leftColumnImage && $rightColumn):
  ?>
  <section class="section two-columns-image-left">
    <div class="row">
      <div class="large-6 medium-6 small-12 columns image-column">
        <img src="<?php echo $leftColumnImage; ?>" />
      </div>
      <div class="large-6 medium-6 small-12 columns no-float padding-left">
        <?php echo $rightColumn; ?>    
      </div>
    </div>
  </section>
<?php endif; ?>