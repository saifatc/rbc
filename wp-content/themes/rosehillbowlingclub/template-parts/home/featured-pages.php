<?php
$featuredPages = get_field('featured_pages');
//var_dump($featuredPages);
?>
<?php if ($featuredPages): ?>
  <section class="featured-pages section">

    <div class="row small-up-2 medium-up-2 large-up-4" data-equalizer>
      <?php foreach ($featuredPages as $featuredPage): ?>

        <div class="column column-block">
          <?php
          $pageTitle = $featuredPage['page_title'];
          $pageImage = $featuredPage['page_image'];
          $pageLink = $featuredPage['page_link'];
          ?>
          <?php if ($pageTitle && $pageImage && $pageLink): ?>
            <a href="<?php echo $pageLink; ?>"  class="featured-page-container">
              <div class="featured-page-image" style="background-image: url(<?php echo $pageImage; ?>);"></div>
              <?php /*<img src="<?php echo $pageImage; ?>" alt="<?php echo $pageTitle; ?>" />*/?>
              <div class="featured-page-content"  data-equalizer-watch>
                <h3><?php echo $pageTitle; ?></h3>
                <span class="medium-gray">View More</span>
              </div>
            </a><!--end featured-page-container -->
          <?php endif; ?>          
        </div>
      <?php endforeach; ?>
    </div>
  </section><!--end featured-pages -->
<?php endif; ?>