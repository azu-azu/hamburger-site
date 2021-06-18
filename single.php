<?php get_header(); ?>

      <!-- メインビジュアル -->
      <figure class="l-mainvisual p-mainvisual">

        <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail(); ?>

        <?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
          <img src="<?php echo do_shortcode('[uri]'); ?>/images/single_mainvisual_sp.jpg"
                srcset="<?php echo do_shortcode('[uri]'); ?>/images/single_mainvisual_sp.jpg 375w,
                <?php echo do_shortcode('[uri]'); ?>/images/single_mainvisual_tb.png 834w,
                <?php echo do_shortcode('[uri]'); ?>/images/single_mainvisual_pc.png 1553w"
                sizes="(max-width:641px) 375px, 100vw,
                (max-width:900px) 834px, 100vw"
                alt="">
        <?php endif; ?>

        <div class="c-ttl">
          <h1 id="js-ttl" class="c-ttl__font"><?php echo wp_get_document_title();?></h1>
        </div>
      </figure>
      <!-- ◇----------------------------------------------------------------------------------------------◇ -->
      <main class="l-main">
        <article class="p-post">
          <?php if (have_posts()): ?>
          <?php while (have_posts()): the_post(); ?>

            <?php the_content('続きを読む'); ?>


            <!-- ページリンクがないとエラーになるため記述 -->
            <div class="p-post__pagelink">
              <?php wp_link_pages( 'before=<p>&after=</p>&next_or_number=number&pagelink= %' ); ?>
            </div>

          <?php endwhile; ?>
          <?php endif; ?>

        </article>
      </main>

      <?php get_footer(); ?>
      <!-- ◇----------------------------------------------------------------------------------------------◇ -->
      <!-- サイドメニューが表示されたときの背景画面 -->
      <div class="c-overlay"></div>

      <?php get_sidebar(); ?>
      
    </div><!-- c-grid -->

    <!-- テキストを親要素にフィットさせるためのjs -->
    <script src="fitty.min.js"></script>
    <script>fitty('#js-ttl');</script>
  </body>

</html>