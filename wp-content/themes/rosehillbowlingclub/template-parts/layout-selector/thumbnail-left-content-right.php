<?php
$thumbnailRows = get_sub_field('content_row');

if ($thumbnailRows):
  ?>
  <section class="section thumbnail-left-content-right">
    <div class="row small-up-1 medium-up-1 large-up-1">

      <?php foreach ($thumbnailRows as $thumbnailRow): ?>
        <div class="column column-block">

          <?php
          $thumbnailImage = $thumbnailRow['image'];
          $thumbnailContent = $thumbnailRow['content'];
          ?>
          <?php if ($thumbnailImage): ?>

            <img class="thumbnail-left" src="<?php echo $thumbnailImage; ?>" />

          <?php endif; ?>
          <?php if ($thumbnailContent): ?>

            <?php echo $thumbnailContent; ?>

          <?php endif; ?>
        </div>

      <?php endforeach; ?>
    </div>
  </section>
<?php endif; ?>

