<?php
$cForm = get_sub_field('content');

if ($cForm) :
  ?>
  <section class="contact-form section">
    <div class="row">
      <div class="large-8 large-centered medium-8 medium-centered small-12 columns">
        <?php echo $cForm; ?>
      </div>
    </div>
  </section>

<?php endif; ?>
