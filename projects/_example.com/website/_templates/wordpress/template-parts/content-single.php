<article>
  <header class="post-header">
    <?php
    the_title( '<h1>', '</h1>' ); ?>
    <div class="post-meta">
      <time class="post-date" datetime="<?php the_time( 'Y-j-m' ); ?>"><?php the_time( 'F j, Y' ); ?></time>
    </div>
  </header>
  <?php
  the_content(); ?>
  <footer class="post-footer">
    <?php
    wp_link_pages( 'before=<p class="multi-page-post-navigation">Page &pagelink=<span> % </span>' ); ?>
    <h3><?php echo esc_html( 'Post categorization'); ?></h3>
    <?php
    the_category();
    the_tags( '<ul class="post-tags"><li>', '</li><li>', '</li></ul>' ); ?>
    <p class="post-modified-date"><small><?php echo esc_html( 'Post last updated on ' ), the_modified_date(); ?></small></p>
  </footer>
</article>