<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quadro</title>
    <?php wp_head(); ?>
</head>
<body>
<?php get_header(); ?>
<main>
    <?php include('hero.php') ?>
    <?php include('portfolio.php'); ?>
    <?php include('contact.php'); ?>
</main>
<?php get_footer(); ?>
</body>
</html>