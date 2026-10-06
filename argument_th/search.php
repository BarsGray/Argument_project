<?php get_header(); ?>
<div class="section_search">
  <div class="container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <h2>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
        <?php the_excerpt(); ?>
      <?php endwhile; ?>
      <?php //the_posts_pagination(); ?>
    <?php else : ?>
        <p>По вашему запросу ничего не найдено.</p>
    <?php endif; ?>
  </div>
</div>
<?php
show_form();
get_footer(); ?>