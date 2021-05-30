// Menuボタンを押したら
jQuery(function($) {
  $(".js-menu-btn").on("click", function(){
    $(this).toggleClass("is-open");
    $(".l-sidebar").toggleClass("is-open");
    $("body").toggleClass("is-open");
    $(".p-has-menu").toggleClass("is-open");
  });
});

$(function() {
  $('js-sidex').on('click', function() {
    if ( $(this).prop('checked') == false ) {

    } else {
      $('.l-sidebar').left('100%');
    }
  });
});
