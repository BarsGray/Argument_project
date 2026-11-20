<?php
  get_header();
  show_breadcrumbs();
	title_def_box();

if(get_the_content()): ?>
  <div class="content_container">
    <?php the_content(); ?>
  </div>
<?php endif; ?>

<?php if(get_field('text_after')): ?>
  <div class="content_container hide">
    <div class="hide_text"><?php the_field("text_after");?></div>
    <a class="more">Подробнее</a>
  </div>
<?php endif;
  show_get_quote();
  show_qr_box();
  get_footer();