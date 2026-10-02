<?php
function show_breadcrumbs() { ?>
  <div class="bread_crumb">
    <div class="container">
      <?php breadcrumbs(); ?>
    </div>
  </div>
<?php }
function show_title() {
  // $teg = is_singular('product') ? 'h1' : 'p';
  $title = '';
  if (is_tax())
    $title = ($alt_zag = get_field('alt_zag')) ? $alt_zag : single_term_title('', false);
  elseif(is_category())
    $title = single_cat_title('', false);
  elseif(is_404())
    $title = 'Ошибка 404!';
  else
    $title = ($alt_zag = get_field('alt_zag')) ? $alt_zag : get_the_title();
  echo $title;
}
function title_def_box() { ?>
  <div class="section_title_box">
    <div class="container">
      <div class="title_box_inner">
        <p class="title"><?php show_title(); ?></p>
      </div>
    </div>
  </div>
<?php }