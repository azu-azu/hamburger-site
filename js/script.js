// Menuボタンを押したら
jQuery(function($) {
  $(".js-menu-btn").on("click", function(){
    $(".l-sidebar").toggleClass("is-open");
    $(".has-menu").toggleClass("is-open");
    $(".c-overlay").toggleClass("is-open");
    $("body").toggleClass("is-open");
  });

  $('.js-sidex-btn').on('click', function(){
    $(".l-sidebar").toggleClass("is-open");
    $(".has-menu").toggleClass("is-open");
    $(".c-overlay").toggleClass("is-open");
    $("body").toggleClass("is-open");
  });
});


// 全画面でハンバーガーメニューの設定をリセットする
jQuery(function($){
  $(window).resize(function(){
    //windowの幅をxに代入
    let x = $(window).width();
    //windowの分岐幅をyに代入
    let y = 1201;
    if (x >= y) {
        $(".l-sidebar").removeClass("is-open");
        $("body").removeClass("is-open");
    }
    else
    {
    }
});
})


// alignleftの親要素にスタイリングする
jQuery(function($) {
  $('p:has(.alignleft)').css({display:'flex',margin:'10px 0 10px 0'});
  });


// alignrightの親要素にスタイリングする
jQuery(function($) {
  $('p:has(.alignright)').css({display:'flex','justify-content':'flex-end',margin:'10px 0 10px 0'});
  });

// iframeの親要素にスタイリングする
jQuery(function($) {
  $('p:has(iframe)').css({position:'relative',width:'100%','padding-top':'56.25%'});
  });

// タグに直書きされたstyleを削除する
jQuery(function($) {
  $('figure').removeAttr('style');
  $('img').removeAttr('width');
  $('img').removeAttr('height');
  $('dl').removeAttr('style');
});

