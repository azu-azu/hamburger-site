<div class="l-header__form u-display--center">

  <!-- 検索フォーム部分 -->
  <form class="c-searchform" id="searchform"  method="get" action="<?php echo home_url('/'); ?>">
    <i class="c-searchform__icon fas fa-search"></i>
    <input type="text" placeholder="" id="s" name="s" size="20"
      placeholder = "<?php if(!is_search()) {echo 'SEARCH'; } ?>"
      value = "<?php if(is_search()) {echo get_search_query(); } ?>"/><!-- 検索後も文字を残す -->
  </form>

  <!-- ボタン -->
  <button type="submit" class="c-btn--search">検索</button>
</div>