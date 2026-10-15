<?php
  get_header();
  show_breadcrumbs();?>



<?php if(get_field('text_after')): ?>
  <div class="content_container hide">
    <div class="container">
      <div class="hide_text"><?php the_field("text_after");?></div>
      <a class="more">Подробнее</a>
    </div>
  </div>
<?php endif;
  show_get_quote();
  show_qr_box();
  get_footer();