<?php
global $page_atts;
?>
<!-- <img class="w3 ws12" src="<?php echo full_url('images/NN125b website.jpg'); ?>"</img> -->
<!-- <img class="w6 ws12" src="<?php echo full_url('images/NeedlesNotionPictureSmall.jpg'); ?>"</img> -->
<header class="pos-fix-top-1 bg-color-0">
  <input id="menu-checkbox" class="display-toggle display-none" type="checkbox">

  <nav class="ws10 sm-display-none ws12-children text-center pad-10px-children text-2 fill-2 vert-align-top">
    <?php
    html_menu_item(file_get_contents(theme_path() . "/svgs/home.svg"));
    // html_menu_item("What's New", 'whats-new');
    html_menu_item("Designs", 'designs');
    html_menu_item("Lettie", 'lettie');
    html_menu_item("Stitchers", 'stitchers');
    html_menu_item("Retailers", 'retailers');
    ?>
  </nav>

  <a class="sm-check-display-none w7 wm12 ws10 pad-sides-10px-children" href="<?php echo full_url(); ?>"><img class="w12" src="<?php echo full_url('images/nn-logo-stitch-fiddle.png'); ?>"</img></a>

  <label for="menu-checkbox" class='pos-abs-right-top-0 display-none sm-display-block icon-1 clickable-1 fill-1'>
    <div class="hamburger"><div></div></div>
    <?php //include_theme_file('svgs/menu-hamburger.svg'); ?>
  </label>
</header>


<?php if (!empty($page_atts['title'])) { ?>
<h1><?php echo $page_atts['title']; ?></h1>
<?php } ?>

<?php
function html_menu_item($caption, $href = '') {
  $current_page = (requested_path(true) == $href) ? $current_page = 'current_page' : '';
  $href = full_url($href);
  echo "<a class='$current_page' href='$href'>$caption</a>";
}
