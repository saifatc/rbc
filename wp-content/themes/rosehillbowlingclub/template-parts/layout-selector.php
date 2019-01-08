<?php

if (have_rows('layout_selector')):

  while (have_rows('layout_selector')) : the_row();

    $layout_name = get_row_layout();

    switch ($layout_name) {

      case 'single_column':
        get_template_part('template-parts/layout-selector/single-column');
        break;

      case 'two_column':
        get_template_part('template-parts/layout-selector/two-column');
        break;

      case 'two_column_image_left':
        get_template_part('template-parts/layout-selector/two-columns-image-left');
        break;

      case 'two_columns_image_right':
        get_template_part('template-parts/layout-selector/two-columns-image-right');
        break;

      case 'three_column_carousel':
        get_template_part('template-parts/layout-selector/three-column-carousel');
        break;

      case 'thumbnail_left_content_right':
        get_template_part('template-parts/layout-selector/thumbnail-left-content-right');
        break;
      
      case 'grid':
        get_template_part('template-parts/layout-selector/grid');
        break;
      
      case 'contact_form':
        get_template_part('template-parts/layout-selector/form');
        break;

      default:
        break;
    }
  endwhile;

endif;
?>