<?php get_header();
  global $wp_query;
  $count = (int) $wp_query->found_posts;
?>
<div class="section_search">
  <div class="search_row">
    <div class="container">
      <form class="search_form" method="get" action="/">
        <input type="search" name="s" placeholder=" ">
        <span class="search_icon"></span>
        <button type="reset"><?php echo SVG_SEARCH_RST; ?></button>
        <button type="submit">Найти</button>
      </form>
    </div>
  </div>
  <div class="search_results_box">
    <div class="container">
      <div class="results_box_inner">
        <p class="count_results">Найдено <?php echo $count . ' ' . plural_results($count); ?></p>
        <?php if (have_posts()): ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="result_item">
              <p class="result_item_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
              <div class="result_item_text"><?php the_excerpt(); ?></div>
              <p class="result_type">
                <?php
                  if(get_post_type() === 'service')
                    echo '<a href="'.get_permalink(15).'">'.get_post_type_object(get_post_type())->labels->name.'</a>';
                  else
                    echo '<a href="'.get_category_link(get_the_category()[0]->term_id).'">'.get_the_category()[0]->name.'</a>';
                ?>
                <span>/</span>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </p>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php
  show_form();
  get_footer(); ?>