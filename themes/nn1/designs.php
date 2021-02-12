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
  $img_src = url_design_image($design_slug, 'thumb');
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
  return html_content_from_file(["designs/$design_slug"], $file_order);
}
function html_design_content($design_slug, $design_atts) {
  $class = (isset($design_atts['class'])) ? $design_atts['class'] : 'w12';

  $description = html_design_description($design_slug, true);

  ob_start();
  ?>
    <img class="<?php echo $class ?>" src="<?php echo url_design_image($design_slug, 'full'); ?>"></img>
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
function url_design_image ($design_slug, $img_size = 'full') {
  $path_hierarchy = ($img_size == 'thumb') ? arr_design_thumb_paths($design_slug) : arr_design_image_paths($design_slug);
  return get_best_image_url(arr_dirs_w_design_imgs($design_slug), $path_hierarchy);
}
function arr_dirs_w_design_imgs ($design_slug) {
  // error_log('arr_dirs_w_design_imgs');
  return [
    // "designs/$design_slug",
    "images/designs",
    // "images/$design_slug",
    // "images",
  ];
}
function arr_design_image_paths ($design_slug) {
  $design = parse_json_file("designs/$design_slug/data");
  $id = $design['id'];
  $filename_root = "NN$id";
  return [
    // $filename_root . 'b',
    $filename_root . 'b2',
    $filename_root . 'a',
    $filename_root,
    $filename_root . 'tn',
    $filename_root . 'tni',
    $filename_root . 'tng3',
    $filename_root . 'ns',
    $filename_root . 'i',
    $filename_root . ' Cover',
  ];
  // return [
  //   "designs/$design_slug/image-$design_slug",
  //   "designs/$design_slug/image",
  //   "images/designs/image-$design_slug",
  //   "images/$design_slug/image-$design_slug",
  //   "images/$design_slug/image",
  //   "images/image-$design_slug",
  // ];
}
function arr_design_thumb_paths ($design_slug) {
  $design = parse_json_file("designs/$design_slug/data");
  $id = $design['id'];
  $filename_root = "NN$id";
  return [
    $filename_root . 'tn',
    $filename_root . 'tni',
    $filename_root . 'tng3',
    $filename_root . 'ns',
    $filename_root . 'i',
    $filename_root . 'b',
    $filename_root . 'b2',
    $filename_root . 'a',
    $filename_root,
    $filename_root . ' Cover',
  ];
  // return [
  //   "designs/$design_slug/thumbnail-$design_slug",
  //   "designs/$design_slug/thumbnail",
  //   "images/designs/thumbnail-$design_slug",
  //   "images/$design_slug/thumbnail-$design_slug",
  //   "images/$design_slug/thumbnail",
  //   "images/thumbnail-$design_slug",
  // ];
}
