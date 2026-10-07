<?php
get_header();
title_def_box(); ?>

<?php
$query = new WP_Query(['post_type' => 'service', 'post_per_page' => -1]);
if($query->have_posts()): ?>
  <div class="section_services_tubs">
    <div class="container">
      <ul class="services_tubs_row">
        <?php while($query->have_posts()): $query->the_post(); ?>
          <li class="services_tub_item"><a href="<?php the_permalink(); ?>"><?php the_title(); the_ID(); ?></a></li>
        <?php endwhile; ?>
      </ul>
    </div>
  </div>
<?php wp_reset_postdata(); endif; ?>
<div class="container">
  <p><?php the_title(); ?></p>
  <?php the_content(); ?>
</div>

<?php get_footer(); ?>