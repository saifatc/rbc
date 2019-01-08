<?php
$leftColumn = get_sub_field('left_column');
$rightColumn = get_sub_field('right_column');

if ($leftColumn || $rightColumn):
  ?>
  <section class="section two-columns">
    <div class="row small-up-1 medium-up-2 large-up-2">
      <?php if ($leftColumn): ?>
      
        <div class="column column-block">
          <?php echo $leftColumn; ?>    
        </div>
      <?php endif; ?>
      <?php if ($rightColumn): ?>
        <div class="column column-block">
          <?php echo $rightColumn; ?>    
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>