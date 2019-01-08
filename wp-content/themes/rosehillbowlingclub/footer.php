<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

</section>
<?php
$openingHours = get_field('opening_hours', 'option');
?>
<?php if ($openingHours): ?>
  <section class="section opening-hours">
    <div class="row">
      <div class="column">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/opening-hours.svg" />
        <ul class="no-margin-bottom">
          <?php foreach ($openingHours as $openingHour): ?>              
            <?php
            $day = $openingHour['day'];
            $hours = $openingHour['hours'];
            ?> 
            <?php if ($day && $hours): ?>
              <li>
                <h4 class="medium-gray no-margin-bottom"><?php echo $day; ?></h4>
                <p class="no-margin-bottom"><?php echo $hours; ?></p>
              </li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>
<?php endif; ?>

<div class="footer-container" data-sticky-footer>
  <footer class="footer">
    <?php do_action('foundationpress_before_footer'); ?>

    <div class="row">
      <div class="large-3 medium-12 small-12 columns">
        <a class="footer-logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo-white.svg" alt="<?php bloginfo('name'); ?>" /></a>
      </div>
      <div class="large-9 medium-12 small-12 columns">
        <div class="row small-up-1 medium-up-2 large-up-4">
          <div class="column column-block show-for-medium">
            <h4>Quick Links</h4>
            <?php quick_links(); ?>
          </div>
          <div class="column column-block show-for-medium">
            <h4>Our Facilities</h4>
            <?php our_facilities(); ?>
          </div>
          <div class="column column-block">
            <h4>Related Links</h4>
            <?php related_links(); ?>
            <div class="footer-social">
              <h4>Connect With Us</h4>
              <?php
              $email = get_field('email', 'option');
              $address = get_field('address', 'option');
              $facebook = get_field('facebook', 'option');
              $twitter = get_field('twitter', 'option');
              $instagram = get_field('instagram', 'option');
              $linkedin = get_field('linkedin', 'option');
              ?>
              <?php if ($facebook): ?>
                <a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <?php endif; ?>
              <?php if ($twitter): ?>
                <a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <?php endif; ?>
              <?php if ($instagram): ?>
                <a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <?php endif; ?>
              <?php if ($linkedin): ?>
                <a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              <?php endif; ?>
              <?php if ($email): ?>
                <a href="mailto:<?php echo $email; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
              <?php endif; ?>
            </div>
          </div>

          <div class="column column-block">
            <h4>Contact us</h4>
            <?php
            $phoneNumber = get_field('phone_number', 'option');
            if ($phoneNumber):
              $phone = preg_replace('/\s+/', '', $phoneNumber);
              ?>                
              <p><a href="tel:<?php echo $phone; ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $phoneNumber; ?></a></p>
            <?php endif; ?>

            <?php if ($email): ?>
              <p><a href="mailto:<?php echo $email; ?>"><i class="fa fa-envelope" aria-hidden="true"></i> Click here to email</a></p>
            <?php endif; ?>

            <?php if ($address): ?>
              <p><i class="fa fa-map-marker" aria-hidden="true"></i> Address: <?php echo $address; ?></p>
            <?php endif; ?>


          </div>
        </div>
      </div>
    </div>

    <?php $footerText = get_field('footer_text', 'option'); ?>
    <?php if ($footerText): ?>
      <div class="row column text-center copyright">
        <?php echo $footerText; ?>
      </div>
    <?php endif; ?>

    <?php // dynamic_sidebar('footer-widgets');  ?>
    <?php do_action('foundationpress_after_footer'); ?>
  </footer>
</div>

<?php do_action('foundationpress_layout_end'); ?>

<?php if (get_theme_mod('wpt_mobile_menu_layout') === 'offcanvas') : ?>
  </div><!-- Close off-canvas content -->
  </div><!-- Close off-canvas wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>

<?php
$customFooterCode = get_field('custom_footer_code', 'option');
echo ($customFooterCode ? $customFooterCode : '');
?>

<?php do_action('foundationpress_before_closing_body'); ?>
</body>
</html>
