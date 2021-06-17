<?php get_header();?>

      <?php
      $cat_id = get_query_var('cat'); //カテゴリーIDをcat_idへ
      $cat = get_category($cat_id); //カテゴリーIDをcatへ
      $category_name = $cat->cat_name;//名前をcategory_nameへ
      ?>


      <!-- メインビジュアル -->
      <figure class="l-mainvisual p-mainvisual">
        <img src="<?php echo do_shortcode('[uri]'); ?>/images/archive_mainvisual.jpg" alt="">
        <h1 class="c-ttl">Ｍenu:<br><span><?php echo $category_name; ?></span></h1>
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
            <li class="p-contents">
              <!-- singleページにリンク -->
              <a href="<?php the_permalink(); ?>" class="l-contents--wrap__item">

                <!-- カードのキャッチ画像 -->
                <figure class="l-contents--wrap__item--bg">

                  <?php if(has_post_thumbnail()): ?>
                    <div class="p-contents__post-bg"><?php the_post_thumbnail(); ?></div>

                  <?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                    <img class="p-contents__default-bg" src="<?php echo do_shortcode('[uri]'); ?>/images/card.png" 
                        srcset="<?php echo do_shortcode('[uri]'); ?>/images/card.png 379w,
                        <?php echo do_shortcode('[uri]'); ?>/images/card_pc.png 677w" 
                        sizes="(max-width:640px) 379px, 100vw" alt="">

                  <?php endif; ?>
                </figure>

                <div class="l-contents--wrap__item--cat">
                  <h2><?php the_title(); ?></h2>
                  <ul class="">
                    <li class="c-font--card-ttl"><?php get_myIndex(); ?></li><!-- h2の取得 -->
                    <li class="c-font--card-txt"><?php echo get_myExcerpt($content, $length); ?></li><!-- 抜粋の取得 -->
                  </ul>
                  <button class="c-btn--miru-btn">詳しく見る</button>
                </div>
              </a>
            </li>
        <?php endwhile; ?>
        <?php endif; ?>
        </article>

        <!-- ページネーション -->
        <?php
        if( function_exists('pagination') ){ // 関数が定義されていたらtrueになる
            pagination();
        }?>

      </main>

      <?php get_footer();?>
      <!-- ◇----------------------------------------------------------------------------------------------◇ -->
      <!-- サイドメニューが表示されたときの背景画面 -->
      <div class="c-overlay"></div>

      <?php get_sidebar();?>

    </div>

  </body>

</html>