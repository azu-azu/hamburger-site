<?php
//--------------------------------------------
//テーマサポート
//--------------------------------------------
// add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('post-thumbnails'); //アイキャッチ画像を扱う


//--------------------------------------------
//画像サイズ
//--------------------------------------------
add_image_size( 'auto', 'auto', 'auto', true );



//--------------------------------------------
//Gutenberg用CSSを削除する
//--------------------------------------------
add_action( 'wp_enqueue_scripts', 'remove_block_library_style' );
function remove_block_library_style() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
}



//--------------------------------------------
//スタイルシートを読み込むタグを出力
//--------------------------------------------
function hamburgersite_script() {
  wp_enqueue_script('jquery');//jqueryの二重読み込みを防ぐ
  wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array());
  wp_enqueue_style('google-font', '//fonts.gstatic.com',array());

  //WordPressがテーマディレクトリまでのURI情報を取得してくれる（echo して出力できる）
  wp_enqueue_style('ress', get_template_directory_uri() . '/css/ress.css', array(), '1.0.0');
  wp_enqueue_style('hamburgersite', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
}

add_action('wp_enqueue_scripts', 'hamburgersite_script');




//--------------------------------------------
//editor-style.cssを認識させる:
// エディターでフロントの見た目にするため
//--------------------------------------------
add_action( 'after_setup_theme', function(){
	add_theme_support( 'editor-styles' );// ブロックエディタ用スタイル機能をテーマに追加
	add_editor_style(get_template_directory_uri()."/css/editor-style.css");// ブロックエディタ用CSSの読み込み
});


// if ( ! function_exists( 'hambergursite_setup' ) ) :
//   function hambergursite_setup() {

//       add_theme_support( 'editor-styles' );
//       add_editor_style(get_template_directory_uri()."/css/editor-style.css");

//   }
// endif;
// add_action( 'after_setup_theme', 'hambergursite_setup' );



// function hambergursite_theme_add_editor_styles() {
// 	add_theme_support( 'editor-styles' );	// ブロックエディタ用スタイル機能をテーマに追加
// 	add_editor_style(get_template_directory_uri()."/css/editor-style.css");	// ブロックエディタ用CSSの読み込み
// }
// add_action('admin_init','hambergursite_theme_add_editor_styles');



//--------------------------------------------
// メニューバー作成
//--------------------------------------------
register_nav_menus( array(
  'category_nav' => esc_html__('category navigation', 'rtbread'),
  // 'footer_nav' => esc_html__('footer navigation', 'rtbread'),
) );


// add_theme_support('automatic-feed-links');//フィードの利用を許可する

// if(!isset($content_width)){
//   $content_width=960;
// }



//--------------------------------------------
//タイトル出力（トップページか、シングルページかを判定後）
//--------------------------------------------
function hamburgersite_title($title) {
    if (is_front_page() && is_home()) { //フロントページがトップページなら
        $title = get_bloginfo('name', 'display');
    } elseif (is_singular()) { //個別ページなら
        $title = single_post_title('', false);
    }
    return $title;
}
//ページ出力
add_filter('pre_get_document_title', 'hamburgersite_title');



//--------------------------------------------
// uri指定のショートコード
//--------------------------------------------
function shortcode_tp() {
	return get_template_directory_uri();
}
add_shortcode( 'uri', 'shortcode_tp' );





//--------------------------------------------
// <h>タグをすべて取得：カードの見出しに使用
//--------------------------------------------
function get_myIndex() {
  global $post;
  preg_match_all('/<h[1-6]>.+<\/h[1-6]>/u', $post->post_content, $matches);  //マッチングで<h>タグを取得する
  $matches_count = count($matches[0]);//取得した<h>タグの個数をカウント

  if(empty($matches)){  //<h>タグがなければ
      echo '<span>詳しい説明はこちらから</span>';
    }

  else{ //あれば出力      
    for ($i = 0; $i < $matches_count; $i++){
        echo $matches[0][$i];
    }
  }
}




//--------------------------------------------
// 抜粋：excerptだと見出し判別ができないため自作
//--------------------------------------------
function get_myExcerpt($content, $length) {
  $length = 100;
  $content = get_the_content();
  $content = preg_replace('/<h2>.+<\/h2>/u', "", $content);// 抜粋時にhタグを除去
  $content = mb_substr($content, 0, $length, "UTF-8") . '...';
  $content =  strip_shortcodes($content);//ショートコード削除
  $content =  strip_tags($content);//タグの除去
  return $content;
}



//--------------------------------------------
// 検索結果タイトルのカスタマイズ
//--------------------------------------------
function wp_search_title ($search_ttl) {
  if (is_search()) {
    $search_ttl = '「' . get_search_query() . '」を検索しました';
  }
  return $search_ttl;
}
add_filter ('wp_title', 'wp_search_title');


//--------------------------------------------
// 検索ワードをハイライトする
//--------------------------------------------
function highlight_search_word($text) {
  if(is_search()){ // 検索ページが表示されていれば
    $keys = implode('|', explode(' ', get_search_query())); // 検索ワードを分割して配列にする
    $text = preg_replace('/('. $keys .')/iu', '<mark>\0</mark>', $text);// 該当ワードを mark で囲む
    }
    return $text;
    }
    add_filter('the_title', 'highlight_search_word'); // タイトルに適用
    add_filter('the_content', 'highlight_search_word'); // 本文に適用
    add_filter('the_excerpt', 'highlight_search_word'); // 抜粋に適用





//--------------------------------------------
// ページネーション
//--------------------------------------------
// $pages:総ページ数
// $range:表示する数
// $showitems:表示する数
// $paged：現在のページ番号
function pagination($pages = '', $range = 2){
    $showitems = ($range * 1)+1;
    global $paged;
    if(empty($paged)) $paged = 1; //現在のページ番号が空なら、１
    if($pages == ''){ //総ページ数が空なら
        global $wp_query; //グローバル変数$wp_queryの
        $pages = $wp_query->max_num_pages; //max_num_pagesを取得
        if(!$pages){ //falseや0なら
            $pages = 1;
        }
    }

    // 総ページ数が１じゃない場合
    if(1 != $pages){ //等しくなければ
        echo "<article class=\"c-pagination u-display--center\">";

        // 「1/2」表示 現在のページ数 / 総ページ数
        echo "<span class=\"c-pagination__page\">page ". $paged."/". $pages."</span>";

        // 「前へ」を表示：現在のページ番号が１以上なら
        if($paged > 1)
        echo "<a class=\"c-pagination__pre\" href='".get_pagenum_link($paged - 1)."'><i class=\"fas fa-angle-double-left\"></i><span>前へ</span></a>";

        // ページ番号を出力
        echo "<ul class=\"c-pagination__numbers\">\n";
        for ($i=1; $i <= $pages; $i++){
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                echo ($paged == $i)? "<li class=\"-current\"><span>".$i."</span></li>": // 現在のページはリンク無しにする
                    "<li><a href='".get_pagenum_link($i)."'><span>".$i."</span></a></li>";
            }
        }
        echo "</ul>\n";

        // 「次へ」を表示：現在のページ番号が、総ページ数より小さければ
        if($paged < $pages) 
        echo "<a class=\"c-pagination__next\" href='".get_pagenum_link($paged + 1)."'><span>次へ</span><i class=\"fas fa-angle-double-right\"></i></a>";
        echo "</article>\n";
    }
    
    else {
        echo "<div class=\"c-pagination--non\">";
    }
}

// ↓↓元コード
// <article class="c-pagination u-display--center">
//   <span class="c-pagination__page">page 1/10</span>

//   <a class="c-pagination__pre" href="#">
//     <i class="fas fa-angle-double-left"></i>
//     <span>前へ</span></a>

//   <ul class="c-pagination__numbers">
//     <li><a href="#" class="active"><span>1</span></a></li>
//     <li><a href="#"><span>2</span></a></li>
//   </ul>

//   <a class="c-pagination__next" href="#">
//     <span>次へ</span>
//     <i class="fas fa-angle-double-right"></i></a>
// </article>







//--------------------------------------------
// ↓↓↓ 今回は使ってない
//--------------------------------------------
//ウィジェット（カテゴリー、タグ、アーカイブ）を扱う機能
function hamburgersite_widgets_init() {

  register_sidebar(
    array(
      'name' => 'カテゴリーウィジェット',
      'id' => 'category_widget',
      'description' => 'カテゴリー用ウィジェットです',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
      'after_title' => "</h2>\n",
    )
  );

  register_sidebar(
    array(
      'name'  => 'タグウィジェット',
      'id'    => 'tag_widget',
      'description' => 'タグ用ウィジェットです',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2><i class="fa fa-tags" aria-hidden="true"></i>',
      'after_title' => "</h2>\n",
    )
  );

  register_sidebar(
    array(
      'name'  => 'アーカイブウィジェット',
      'id'    => 'archive_widget',
      'description' => 'アーカイブ用ウィジェットです',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2><i class="fa fa-archive" aria-hidden="true"></i>',
      'after_title' => "</h2>\n",
    )
  );
}
add_action('widgets_init', 'hamburgersite_widgets_init');