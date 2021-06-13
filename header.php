<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

  <head>
    <meta charset="UTF-8">

    <!-- レスポンシブ対応：デバイスの幅を使うことを指定 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="説明文を記述">
    <meta name="keywords" content="検索ワード">

    <?php wp_head();?>
  </head>
  <!-- ◇----------------------------------------------------------------------------------------------◇ -->
  <body class="home" <?php body_class();?>>
    <?php wp_body_open();?>

    <div class="c-grid">
      <header class="l-header">
        <button class="l-header__btn c-btn--menu js-menu-btn">Menu</button>
        <span><a href="<?php echo esc_url(home_url('/')); ?>" class="p-page-ttl"><?php bloginfo('name');?></a></span>

        <div class="l-header__form u-display--center">
          <?php get_search_form();?>
          <button class="c-btn--search">検索</button>
        </div>
      </header>