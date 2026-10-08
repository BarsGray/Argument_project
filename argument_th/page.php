<?php
get_header();
// show_breadcrumbs();
title_def_box();
show_info();

if(is_page(19)) {
  show_license();
  show_docs();
}
if(is_page(30)) show_recvezits();

show_form();
get_footer();