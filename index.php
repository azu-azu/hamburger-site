<?php get_header();?>

  <!-- メインビジュアル -->
  <!-- 画像：画面幅によって取り込みサイズを変える -->
  <figure class="l-mainvisual p-mainvisual">
    <img src="<?php echo do_shortcode('[uri]'); ?>/images/mainvisual-sp.jpg" 
          srcset="<?php echo do_shortcode('[uri]'); ?>/images/mainvisual-sp.jpg 375w,
                  <?php echo do_shortcode('[uri]'); ?>/images/mainvisual-pc.jpg 1430w"
          sizes="(max-width:641px) 375px, 100vw" alt="">
    <h1 class="c-ttl">ダミーサイト</h1>
  </figure>
  <!-- ◇----------------------------------------------------------------------------------------------◇ -->
  <main class="l-main">

    <article class="l-contents">
      <ul class="l-contents--wrap">

        <!-- 【注意】WP側でスラッグの変更は厳禁 -->
        <?php 
          $cat = get_category_by_slug('takeout');//スラッグから取得
          $cat_link = get_category_link($cat);
          $cat_name = $cat -> name;
        ?>

        <li <?php post_class('p-contents takeout'); ?>>
          <a href="<?php echo $cat_link ?>" class="l-contents--wrap__item">

            <h2 class="p-contents__ttl"><?php echo $cat_name ?></h2>
            <ul class="l-contents--wrap__item--card">
              <li class="c-card">
                <dl>
                  <dt class="c-font--card-ttl"><?php echo $cat_name ?></dt>
                  <dd class="c-font--card-txt">当店のテイクアウトで利用できる商品を掲載しています</dd>
                </dl>
              </li>
              <li class="c-card">
                <dl>
                  <dt class="c-font--card-ttl"><?php echo $cat_name ?></dt>
                  <dd class="c-font--card-txt">当店のテイクアウトで利用できる商品を掲載しています</dd>
                </dl>
              </li>
            </ul>
          </a>
        </li>


        <?php 
          $cat = get_category_by_slug('eat-in');
          $cat_link = get_category_link($cat);
          $cat_name = $cat -> name;
        ?>
        <li <?php post_class('p-contents eat-in'); ?>>
          <a href="<?php echo $cat_link ?>" class="l-contents--wrap__item">
            <h2 class="p-contents__ttl"><?php echo $cat_name ?></h2>
            <ul class="l-contents--wrap__item--card">
              <li class="c-card">
                <dl>
                  <dt class="c-font--card-ttl"><?php echo $cat_name ?></dt>
                  <dd class="c-font--card-txt">当店の店内で利用できる商品を掲載しています</dd>
                </dl>
              </li>
              <li class="c-card">
                <dl>
                  <dt class="c-font--card-ttl"><?php echo $cat_name ?></dt>
                  <dd class="c-font--card-txt">当店の店内で利用できる商品を掲載しています</dd>
                </dl>
              </li>
            </ul>
          </a>
        </li>
      </ul>
    </article>
  </main>

  <article class="l-access">
    <div class="l-access__map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.827853398498!2d139.76493611475453!3d35.68124053757986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1622724420481!5m2!1sja!2sjp"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <!-- ↑サイズは100%指定 -->
    </div>

    <div class="l-access__txtbox">
      <div class="l-access__txtbox--inner">
        <h2 class="c-font--access-ttl">見出しが入ります</h2>
        <p class="c-font--access-txt">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
      </div>
    </div>
  </article>

  <?php get_footer();?>
  <!-- ◇----------------------------------------------------------------------------------------------◇ -->
  <!-- サイドメニューが表示されたときの背景画面 -->
  <div class="c-overlay"></div>

  <?php get_sidebar();?>


</div>

  </body>

</html>