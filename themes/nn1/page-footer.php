
<div class="w12 text-center text-3 pad-10px border-top-1">
  <p>Lettie Eckberg</p>
  <p>2920 Cassidy Dr NE</p>
  <p>Rochester, MN 55906</p>
  <p><a href=mailto:Lettie.Eckberg@icloud.com>Lettie.Eckberg@icloud.com</a></p>
</div>

<footer class="pos-fix-bottom-1 bg-color-0 border-top-1">
  <input id="menu-checkbox" class="display-toggle display-none" type="checkbox">

  <nav class="sm-display-none text-center pad-10px-children pad-bottom-sm-30px text-2 fill-2 vert-align-top">
    <?php
    html_menu_item(file_get_contents(theme_path() . "/svgs/home.svg"));
    // html_menu_item("What's New", 'whats-new');
    html_menu_item("Designs", 'designs');
    html_menu_item("Lettie", 'lettie');
    html_menu_item("Stitchers", 'stitchers');
    html_menu_item("Retailers", 'retailers');
    ?>
  </nav>

  <label for="menu-checkbox" class='pos-abs-right-bottom-0 display-none sm-display-block icon-1 clickable-1 fill-1'>
    <div class="hamburger"><div></div></div>
    <?php //include_theme_file('svgs/menu-hamburger.svg'); ?>
  </label>
<footer>
