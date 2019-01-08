<?php
$content = get_sub_field('content');

if ($content):
  ?>
  <section class="section single-column">
    <div class="row">
      <div class="large-10 large-centered medium-12 small-12 columns">
        <?php echo $content; ?>    
      </div>
    </div>
  </section>
<?php endif; ?>