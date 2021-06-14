      <!-- サイドメニュー -->
      <aside class="l-sidebar">

        <!-- 閉じるボタン -->
        <button class="l-sidebar__xbtn c-btn--sidex js-sidex-btn">
          <span class="c-btn--sidex__line"></span>
        </button>

        <!-- ナビゲーション -->
        <nav class="l-sidebar__nav c-gmenu">
          <?php
            wp_nav_menu (array (
            'menu_class' => 'c-gmenu__sub',
            'container_class' => 'c-gmenu__has',
            'theme_location' => 'category_nav',
          ));
          ?>
        </nav>
      </aside>


          <!-- メニュー -->
          <!-- <ul class="c-gmenu__ul u-wrap--align">

            <li class="c-gmenu__has">
              <a class="" href=""></a>

              <ul class="c-gmenu__sub">
                <li><a href=""></a></li>
              </ul>

            </li>
          </ul> -->

            <!-- <li class="c-gmenu__has">
              <a class="" href="#">バーガー</a>
              <ul class="c-gmenu__sub">
                <li><a href="#">ハンバーガー</a></li>
                <li><a href="#">チーズバーガー</a></li>
                <li><a href="#">テリヤキバーガー</a></li>
                <li><a href="#">アボカドバーガー</a></li>
                <li><a href="#">フィッシュバーガー</a></li>
                <li><a href="#">ベーコンバーガー</a></li>
                <li><a href="#">チキンバーガー</a></li>
              </ul>
            </li>

            <li class="c-gmenu__has">
              <a class="" href="#">サイド</a>
              <ul class="c-gmenu__sub">
                <li><a href="#">ポテト</a></li>
                <li><a href="#">サラダ</a></li>
                <li><a href="#">ナゲット</a></li>
                <li><a href="#">コーン</a></li>
              </ul>
            </li>

            <li class="c-gmenu__has">
              <a class="" href="#">ドリンク</a>
              <ul class="c-gmenu__sub">
                <li><a href="#">コーラ</a></li>
                <li><a href="#">ファンタ</a></li>
                <li><a href="#">オレンジ</a></li>
                <li><a href="#">アップル</a></li>
                <li><a href="#">紅茶（Ice/Hot）</a></li>
                <li><a href="#">コーヒー（Ice/Hot）</a></li>
              </ul>
            </li> -->



