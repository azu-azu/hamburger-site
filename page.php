<?php get_header(); ?>

      <!-- メインビジュアル -->
      <!-- 画面幅によって取り込みサイズを変える -->
      <figure class="l-mainvisual p-mainvisual">
        <img src="<?php echo do_shortcode('[uri]'); ?>/images/page_mainvisual_sp.jpg"
              srcset="<?php echo do_shortcode('[uri]'); ?>/images/page_mainvisual_sp.jpg 375w,
                      <?php echo do_shortcode('[uri]'); ?>/images/page_mainvisual_tb.png 834w,
                      <?php echo do_shortcode('[uri]'); ?>/images/page_mainvisual_pc.png 1553w"
              sizes="(max-width:641px) 375px, 100vw,
              (max-width:900px) 834px, 100vw"
              alt="">

        <div class="c-ttl">
          <h1 id="js-ttl" class="c-ttl__font"><?php echo wp_get_document_title();?></h1>
        </div>

      </figure>
      <!-- ◇----------------------------------------------------------------------------------------------◇ -->
      <main class="l-main">
        <article class="p-post">
          <?php if (have_posts()): ?>
          <?php while (have_posts()): the_post(); ?>

            <?php the_content(); ?>

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
    <!-- <script src="fitty.min.js"></script>
    <script>fitty('#js-ttl');</script> -->
  </body>

</html>