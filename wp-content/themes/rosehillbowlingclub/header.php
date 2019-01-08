<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125990667-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-125990667-1');
    </script>

    <?php wp_head(); ?>

    <?php
    $customHeaderCode = get_field('custom_header_code', 'option');
    echo ($customHeaderCode ? $customHeaderCode : '');
    ?>

  </head>
  <body <?php body_class(); ?>>
    <?php do_action('foundationpress_after_body'); ?>

    <?php if (get_theme_mod('wpt_mobile_menu_layout') === 'offcanvas') : ?>
      <div class="off-canvas-wrapper">
        <?php get_template_part('template-parts/mobile-off-canvas'); ?>
      <?php endif; ?>

      <?php do_action('foundationpress_layout_start'); ?>

      <header class="site-header" role="banner" data-sticky-container>            
        <div class="sticky" data-sticky data-options="anchor: page; marginTop: 0; stickyOn: small;" style="width:100%;max-width:100%;background:#fff;">
          <nav class="site-navigation top-bar" role="navigation">
            <div class="top-bar-left">
              <div class="site-desktop-title top-bar-title">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="<?php bloginfo('name'); ?>" /></a>
              </div>
            </div>

            <div class="top-bar-links">
              <div class="social hide-for-small-only">                 
                <?php
                $email = get_field('email', 'option');
                $facebook = get_field('facebook', 'option');
                $twitter = get_field('twitter', 'option');
                $instagram = get_field('instagram', 'option');
                $linkedin = get_field('linkedin', 'option');
                ?>
                Connect with us: 
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

              <?php
              $phoneNumber = get_field('phone_number', 'option');
              if ($phoneNumber):
                $phone = preg_replace('/\s+/', '', $phoneNumber);
                ?>
                <div class="all-enquiries">
                  <a href="tel:<?php echo $phone; ?>"><i class="hide-for-medium fa fa-phone" aria-hidden="true"></i> <?php echo $phoneNumber; ?></a>
                </div><!--end all-enquiries-->
              <?php endif; ?>

            </div><!--end top-bar-links-->

            <div class="top-bar-right">

              <?php foundationpress_top_bar_r(); ?>

              <?php if (!get_theme_mod('wpt_mobile_menu_layout') || get_theme_mod('wpt_mobile_menu_layout') === 'topbar') : ?>
                <?php get_template_part('template-parts/mobile-top-bar'); ?>
              <?php endif; ?>
            </div>
          </nav>
          <div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle() ?>>
            <div class="title-bar-left">
              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="<?php bloginfo('name'); ?>" /></a>
            </div>
            <div class="title-bar-right">
              <button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
              <span class="site-mobile-title title-bar-title"></span>
            </div>
          </div>
        </div>
      </header>

      <section class="container">
        <?php
        do_action('foundationpress_after_header');
        