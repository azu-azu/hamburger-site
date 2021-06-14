<?php
//テーマサポート
// add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('post-thumbnails'); //アイキャッチ画像を扱う



// add_theme_support('automatic-feed-links');//フィードの利用を許可する

// if(!isset($content_width)){
//   $content_width=960;
// }


//タイトル出力（トップページか、シングルページかを判定後）
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


//スタイルシートを読み込むタグを出力
function hamburgersite_script() {
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array());
    wp_enqueue_style('google-font', '//fonts.gstatic.com',array());

    //WordPressがテーマディレクトリまでのURI情報を取得してくれる（echo して出力できる）
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), ' 4.5.0');
    wp_enqueue_style('ress', get_template_directory_uri() . '/css/ress.css', array(), '1.0.0');
    wp_enqueue_style('hamburgersite', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
}


add_action('wp_enqueue_scripts', 'hamburgersite_script');


//ウィジェット（カテゴリー、タグ、アーカイブ）を扱う機能
function hamburgersite_widgets_init() {

    // メニュー 
    register_nav_menus( array(
      'category_nav' => esc_html__('category navigation', 'rtbread'),
      'footer_nav' => esc_html__('footer navigation', 'rtbread'),
    ) );


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

        // register_sidebar(
        //   array(
        //     'name'  => 'タグウィジェット',
        //     'id'    => 'tag_widget',
        //     'description' => 'タグ用ウィジェットです',
        //     'before_widget' => '<div id="%1$s" class="widget %2$s">',
        //     'after_widget' => '</div>',
        //     'before_title' => '<h2><i class="fa fa-tags" aria-hidden="true"></i>',
        //     'after_title' => "</h2>\n",
        //   )
        // );

        // register_sidebar(
        //   array(
        //     'name'  => 'アーカイブウィジェット',
        //     'id'    => 'archive_widget',
        //     'description' => 'アーカイブ用ウィジェットです',
        //     'before_widget' => '<div id="%1$s" class="widget %2$s">',
        //     'after_widget' => '</div>',
        //     'before_title' => '<h2><i class="fa fa-archive" aria-hidden="true"></i>',
        //     'after_title' => "</h2>\n",
        //   )
        // );
}
add_action('widgets_init', 'hamburgersite_widgets_init');





// //テーマ側にeditor-style.cssを認識させる
// function hambergursite_theme_add_editor_styles() {
//   add_editor_style(get_template_directory_uri()."/css/editor-style.css");
// }
// add_action('admin_init','hambergursite_theme_add_editor_styles');



// <h>タグをすべて取得
function get_index() {
  global $post;
  preg_match_all('/<h[1-6]>.+<\/h[1-6]>/u', $post->post_content, $matches);  //マッチングで<h>タグを取得する
  $matches_count = count($matches[0]);//取得した<h>タグの個数をカウント

  if(empty($matches)){  //<h>タグがなければ
      echo '<span>no index</span>';

    }else{ //あれば出力      
      for ($i = 0; $i < $matches_count; $i++){
          echo  $matches[0][$i];
      }
  }     
}
