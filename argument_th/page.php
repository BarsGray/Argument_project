<?php
get_header();
show_breadcrumbs();
title_def_box();
show_info();

if(is_page(19)) {show_license(); show_docs();}
if(is_page(27)) show_recvezits();
if(is_page(22)) {show_rewiews();}
if(is_page(25)) show_vacancies();
if(is_page(30)) {show_contacts(); show_map();}
if(is_page(15)) {show_services_tubs();}
if(is_page(17)) {show_performance();show_founder();show_advantages();}
if(is_page(331)) {show_table_price();}

if(get_field('text_after')): ?>
  <div class="content_container hide">
    <div class="hide_text"><?php the_field("text_after");?></div>
    <a class="more">Подробнее</a>
  </div>
<?php endif;
if(is_page(22)) show_qr_box();
if(is_page(17)) show_qr_box();
show_form();
get_footer();