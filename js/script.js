// Menuボタンを押したら
jQuery(function($) {
  $(".js-menu-btn").on("click", function(){
    // $(this).toggleClass("is-open");
    $(".l-sidebar").toggleClass("is-open");
    $("body").toggleClass("is-open");
    $(".p-has-menu").toggleClass("is-open");
  });

  $('.js-sidex-btn').on('click', function(){
    // $(this).toggleClass("is-open");
    $(".l-sidebar").toggleClass("is-open");
    $("body").toggleClass("is-open");
    $(".p-has-menu").toggleClass("is-open");
  });
});
