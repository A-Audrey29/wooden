<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>
</head>

<body>
    <header class="">

        <?php wp_nav_menu([
                        'theme_lacation' => 'main',
                        // 'container' => false,
                        'menu_class' => 'navbar'
                    ]); ?>

    </header>
