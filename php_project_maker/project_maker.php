<?php
$pages = glob(__DIR__ . '/src/*.php');
$dist  = __DIR__ . '/dist';

if(!is_array($pages) || count($pages) < 1) die('Файлы не найдены!');

if(!is_dir($dist)) mkdir($dist,0777,true);

foreach($pages as $page) {
  ob_start();
  require $page;
  $html = ob_get_contents();
  ob_get_clean();

  $filename = basename($page, '.php') . '.html';
  file_put_contents($dist . '/' . $filename,$html);
}

function copy_assets($source,$destination) {
  if (!is_dir($destination)) mkdir($destination,0777,true);

  foreach(scandir($source) as $item) {
    if ($item === '.' || $item === '..' || $item === 'templates') continue;

    $src = $source . '/' . $item;
    $dst = $destination . '/' . $item;

    if (is_dir($src)) {
        copy_assets($src, $dst);
    } else {
        if (pathinfo($src, PATHINFO_EXTENSION) === 'php') continue;
        copy($src, $dst);
    }
  }
}
copy_assets(__DIR__ . '/src',$dist);