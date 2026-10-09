<?php
get_header();
// show_breadcrumbs();
title_def_box();
show_info();

if(is_page(19)) {
  show_license();
  show_docs();
}
if(is_page(27)) show_recvezits();
if(is_page(22)) show_rewiews();

show_form();
get_footer();