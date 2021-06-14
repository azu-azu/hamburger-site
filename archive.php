<?php get_header();?>
      <?php
      $cat_id = get_query_var('cat'); //カテゴリーIDをcat_idへ
      $cat = get_category($cat_id); //カテゴリーIDをcatへ
      $category_name = $cat->cat_name;//category_nameを上書き
      ?>

      <!-- メインビジュアル -->
      <figure class="l-mainvisual p-mainvisual">
          <img src="<?php echo get_template_directory_uri(); ?>/images/archive_mainvisual.jpg" alt="">
          <h1>Ｍenu:<br><span><?php echo $category_name; ?></span></h1>
      </figure>
      <!-- ◇----------------------------------------------------------------------------------------------◇ -->
      <main class="l-main">
        <article class="p-post">

          <h2><?php wp_title('');?></h2>
          <p>
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </article>

        <article class="l-contents">
          <?php if (have_posts()): ?>
          <?php while (have_posts()): the_post(); ?>

          <ul class="l-contents--wrap">
            <li class="p-contents cheeze-burger">
              <a href="#" class="l-contents--wrap__item">

                <!-- カードのキャッチ画像 -->
                <figure class="l-contents--wrap__item--bg">
                  <!-- 画像：画面幅によって取り込みサイズを変える -->
                  <img src="<?php echo get_template_directory_uri(); ?>/images/card.png" srcset="<?php echo get_template_directory_uri(); ?>/images/card.png 379w,
                  <?php echo get_template_directory_uri(); ?>/images/card_pc.png 677w" sizes="(max-width:640px) 379px, 100vw" alt="">
                </figure>

                <div class="l-contents--wrap__item--cat">
                  <h2><?php the_title(); ?></h2>
                  <ul class="">
                    <li class="">
                      <dl>
                        <dt class="c-font--card-ttl"><?php get_index(); ?></dt><!-- functionで定義した関数 -->
                        <dd class="c-font--card-txt">
                          <?php the_excerpt(); ?><!-- 抜粋の取得 -->
                        </dd>
                      </dl>
                    </li>
                  </ul>
                  <button class="c-btn--miru-btn">詳しく見る</button>
                </div>
              </a>
            </li>
        <?php endwhile; ?>
        <?php endif; ?>
        </article>

        <article class="c-pagination u-display--center">
          <span class="c-pagination__page">page 1/10</span>

          <a class="c-pagination__pre" href="#">
            <i class="fas fa-angle-double-left"></i>
            <span>前へ</span></a>

          <ul class="c-pagination__numbers">
            <li><a href="#" class="active"><span>1</span></a></li>
            <li><a href="#"><span>2</span></a></li>
            <li><a href="#"><span>3</span></a></li>
            <li><a href="#"><span>4</span></a></li>
            <li><a href="#"><span>5</span></a></li>
            <li><a href="#"><span>6</span></a></li>
            <li><a href="#"><span>7</span></a></li>
            <li><a href="#"><span>8</span></a></li>
            <li><a href="#"><span>9</span></a></li>
          </ul>

          <a class="c-pagination__next" href="#">
            <span>次へ</span>
            <i class="fas fa-angle-double-right"></i></a>

        </article>

      </main>

      <?php get_footer();?>
      <!-- ◇----------------------------------------------------------------------------------------------◇ -->
      <!-- サイドメニューが表示されたときの背景画面 -->
      <div class="c-overlay"></div>

      <?php get_sidebar();?>

    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
  </body>

</html>