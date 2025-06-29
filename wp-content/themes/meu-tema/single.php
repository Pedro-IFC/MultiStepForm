<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/content.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/menu.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/rodape.css">
    <title><?= get_the_title() ?></title>
</head>
<body>
    <header class="menu">
        <div class="titulo">
            <h1><?= get_bloginfo( 'name' ) ?></h1>
        </div>
        <?php wp_nav_menu([
            'menu' => 'principal',
            'container' => 'nav',
        ]) ?>
    </header>
    