<?php
function echo_thumb_link($img_src, $href, $label) {
  ?>
  <a href="<?php echo $href; ?>" class="w4 ws6 text-center text-4">
    <div class="w12 pad12b">
      <div class="abs1111 o-flow-hide" style="background-position: top; background-image: url('<?php echo $img_src; ?>');">
      </div>
    </div>
    <p><?php echo $label; ?></p>
  </a>
  <?php
}
function echo_design_thumb($design_slug) {
  $design = parse_json_file("designs/$design_slug/data");
  $img_src = full_url("designs/$design_slug/thumbnail.jpg");
  $href = full_url("designs/$design_slug");
  $label = $design['name'];
  echo_thumb_link($img_src, $href, $label);
}
function echo_design_page($design_slug) {
  global $page_atts;
  $design_atts = parse_json_file("designs/$design_slug/data");
  $page_atts['title'] = $design_atts['name'];
  $page_atts['styles'] = [];
  // $page_atts['page_content'] = "<p>$design_slug</p>";
  $page_atts['page_content'] = html_design_content($design_slug, $design_atts);
  include_theme_file('page.php');  // show the page!
}
function html_design_description($design_slug, $full = false) {
  $file_contents = '';
  if ($full && file_exists("designs/$design_slug/description-full.md")) {
    $file_contents = file_get_contents("designs/$design_slug/description-full.md");
  }
  if (empty($file_contents) && file_exists("designs/$design_slug/description.md")) {
    $file_contents = file_get_contents("designs/$design_slug/description.md");
  }
  if (empty($file_contents)) return '';
  require_once('_libraries/parsedown-master/Parsedown.php');
  $parsedown = new Parsedown();
  return $parsedown->text($file_contents);
}
function html_design_content($design_slug, $design_atts) {
  $description = html_design_description($design_slug, true);
  ob_start();
  ?>
    <img  class="w12" src="<?php echo site_url() . "designs/$design_slug/image.jpg" ?>"></img>
    <?php if (!empty($description)) { ?>
    <div class="w12">
      <?php echo $description; ?>
    </div>
    <?php } ?>
  <?php
  $html = ob_get_contents();
  ob_end_clean();

  return $html;
}
