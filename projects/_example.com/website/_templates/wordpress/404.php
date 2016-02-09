---
layout: wordpress
wordpress:
  feature: false
  sidebar: true
---

        <?php
        get_template_part( 'template-parts/content', 'oops' ); ?>
        <div class="404-widgets">
          <?php
          the_widget( 'WP_Widget_Recent_Posts' );
          the_widget( 'WP_Widget_Categories' );
          the_widget( 'WP_Widget_Tag_Cloud' );
          the_widget( 'WP_Widget_Archives', 'dropdown=1' );
          ?>
        </div>