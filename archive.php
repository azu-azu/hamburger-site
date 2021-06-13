<?php get_header(); ?>

      <!-- メインビジュアル -->
      <figure class="l-mainvisual p-mainvisual">
          <img src="<?php echo get_template_directory_uri();?>/images/archive_mainvisual.jpg" alt="">
          <h1>Ｍenu:<br><span>チーズバーガー</span></h1>
      </figure>
      <!-- ◇----------------------------------------------------------------------------------------------◇ -->
      <main class="l-main">
        <article class="p-post">
          <h2>archive.html</h2>
          <p>
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </article>

        <article class="l-contents">
          <ul class="l-contents--wrap">
            <li class="p-contents cheeze-burger">
              <a href="#" class="l-contents--wrap__item">

                <!-- 画像：画面幅によって取り込みサイズを変える -->
                <figure class="l-contents--wrap__item--bg">
                  <img src="<?php echo get_template_directory_uri();?>/images/card.png" srcset="<?php echo get_template_directory_uri();?>/images/card.png 379w,
                  <?php echo get_template_directory_uri();?>/images/card_pc.png 677w" sizes="(max-width:640px) 379px, 100vw" alt="">
                </figure>

                <div class="l-contents--wrap__item--cat">
                  <h2>チーズバーガー</h2>
                  <ul class="">
                    <li class="">
                      <dl>
                        <dt class="c-font--card-ttl">小見出しが入ります</dt>
                        <dd class="c-font--card-txt">
                          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </dd>
                      </dl>
                    </li>
                  </ul>
                  <button class="c-btn--miru-btn">詳しく見る</button>
                </div>
              </a>
            </li>

            <li class="p-contents Wcheeze-burger">
              <a href="#" class="l-contents--wrap__item">

                <!-- 画像：画面幅によって取り込みサイズを変える -->
                <section class="l-contents--wrap__item--bg">
                  <img src="<?php echo get_template_directory_uri();?>/images/card.png" srcset="<?php echo get_template_directory_uri();?>/images/card.png 379w,
                  <?php echo get_template_directory_uri();?>/images/card_pc.png 677w" sizes="(max-width:640px) 379px, 100vw" alt="">
                </section>

                <div class="l-contents--wrap__item--cat">
                  <h2>ダブルチーズバーガー</h2>
                  <ul class="l-contents--wrap__item--card">
                    <li class="">
                      <dl>
                        <dt class="c-font--card-ttl">小見出しが入ります</dt>
                        <dd class="c-font--card-txt">
                          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </dd>
                      </dl>
                    </li>
                  </ul>
                  <button class="c-btn--miru-btn">詳しく見る</button>
                </div>
              </a>
            </li>

            <li class="p-contents special-cheez-burger">
              <a href="#" class="l-contents--wrap__item">

                <!-- 画像：画面幅によって取り込みサイズを変える -->
                <section class="l-contents--wrap__item--bg">
                  <img src="<?php echo get_template_directory_uri();?>/images/card.png" srcset="<?php echo get_template_directory_uri();?>/images/card.png 379w,
                  <?php echo get_template_directory_uri();?>/images/card_pc.png 677w" sizes="(max-width:640px) 379px, 100vw" alt="">
                </section>

                <div class="l-contents--wrap__item--cat">
                  <h2>スペシャルチーズバーガー</h2>
                  <ul class="l-contents--wrap__item--card">
                    <li class="">
                      <dl>
                        <dt class="c-font--card-ttl">小見出しが入ります</dt>
                        <dd class="c-font--card-txt">
                          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </dd>
                      </dl>
                    </li>
                  </ul>
                  <button class="c-btn--miru-btn">詳しく見る</button>
                </div>
              </a>
            </li>
          </ul>
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

      <?php get_footer(); ?>
      <!-- ◇----------------------------------------------------------------------------------------------◇ -->
      <!-- サイドメニューが表示されたときの背景画面 -->
      <div class="c-overlay"></div>

      <?php get_sidebar(); ?>
      
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
  </body>

</html>