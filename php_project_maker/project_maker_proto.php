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


function copyAssets(string $source, string $destination): void
{
    if (!is_dir($destination))
        mkdir($destination, 0777, true);

    foreach (scandir($source) as $item) {
        if ($item === '.' || $item === '..') continue;
        
        $src = $source . '/' . $item;
        $dst = $destination . '/' . $item;
        if (is_dir($src)) {
            copyAssets($src, $dst);
        } else {
            // PHP-файлы не копируем
            if (pathinfo($source, PATHINFO_EXTENSION) === 'php') continue;

            copy($src, $dst);
            echo "Copied: {$item}\n";
        }
    }
}
copyAssets(__DIR__ . '/src', $dist);