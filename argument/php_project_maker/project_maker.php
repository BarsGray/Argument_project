<?php
$pages = glob(__DIR__ . '/pages/*.php');
$dist  = __DIR__ . '/dist';

if(!is_array($pages) || count($pages) < 1) die('Файлы не найдены!');

if(!is_dir($dist)) mkdir($dist,0777,true);

foreach($pages as $page) {
  require $page;
  ob_start();
  $html = ob_get_contents();
  ob_get_clean();

  echo $html;
}