<?php
$pages = glob(__DIR__ . '/pages/*.php');
$dist = __DIR__ . '/dist';

if (!is_dir($dist)) {
    mkdir($dist, 0777, true);
}

foreach ($pages as $page) {
    $title = '';
    $content = '';
    // Загружаем данные страницы
    require $page;
    // Рендерим шаблон
    ob_start();
    require __DIR__ . '/templates/page.php';
    $html = ob_get_clean();
    // Имя выходного файла
    $filename = basename($page, '.php') . '.html';
    file_put_contents(
        $dist . '/' . $filename,
        $html
    );
    echo "Built: {$filename}\n";
}
