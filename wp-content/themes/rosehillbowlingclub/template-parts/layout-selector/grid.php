<?php
$gridRows = get_sub_field('columns');
$numberColumns = get_sub_field('number_of_columns');
$numberColumns = ($numberColumns ? $numberColumns : '2');
?>
<?php if ($gridRows): ?>
  <section class="grid section">
    <div class="row small-up-1 medium-up-1 large-up-<?php echo $numberColumns; ?>">
      <?php foreach ($gridRows as $gridRow): ?>
        <?php
        $gridContent = $gridRow['content'];
        ?>
        <?php if ($gridContent): ?>
          <div class="column column-block">
              <?php echo $gridContent; ?>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </section><!--end grid-->
<?php endif; ?>