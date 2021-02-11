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
  $img_src = get_best_image_url("designs/$design_slug", ['thumbnail', 'image']);
  $href = full_url("designs/$design_slug");
  $label = $design['name'];
  echo_thumb_link($img_src, $href, $label);
}

function echo_design_page($design_slug) {
  global $page_atts;
  $design_atts = parse_json_file("designs/$design_slug/data");
  $page_atts['title'] = $design_atts['name'];
  $page_atts['styles'] = [];
  $page_atts['page_content'] = html_design_content($design_slug, $design_atts);
  include_theme_file('page.php');  // show the page!
}
function html_design_description($design_slug, $prefer_full = false) {
  $file_order = ($prefer_full) ? ['description-full', 'description'] : ['description', 'description-full'];
  return html_content_from_file("designs/$design_slug", $file_order);
}
function html_design_content($design_slug, $design_atts) {
  $class = (isset($design_atts['class'])) ? $design_atts['class'] : 'w12';

  $description = html_design_description($design_slug, true);

  ob_start();
  ?>
    <img  class="<?php echo $class ?>" src="<?php echo get_best_image_url("designs/$design_slug", ['image', 'thumbnail']); ?>"></img>
    <?php if (!empty($description)) { ?>
    <div class="<?php echo $class ?>">
      <?php echo $description; ?>
    </div>
    <?php } ?>
  <?php
  if (isset($design_atts['snippets'])) include_snippets($design_atts['snippets']);
  $html = ob_get_contents();
  ob_end_clean();

  return $html;
}
