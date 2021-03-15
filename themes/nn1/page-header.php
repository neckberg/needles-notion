<?php
global $page_atts;
?>
<!-- <img class="w3 ws12" src="<?php echo full_url('images/NN125b website.jpg'); ?>"</img> -->
<!-- <img class="w6 ws12" src="<?php echo full_url('images/NeedlesNotionPictureSmall.jpg'); ?>"</img> -->
<a class="w7 wm12 ws12 pad-sides-10px-children" href="<?php echo full_url(); ?>"><img class="w12" src="<?php echo full_url('images/nn-logo-stitch-fiddle.png'); ?>"</img></a>

<?php
echo html_page_title($page_atts);
?>


<?php
function html_page_title ($page_atts) {
  if (!isset($page_atts['title'])) return '';
  if (isset($page_atts['hide_title_on_page']) && $page_atts['hide_title_on_page'] == true) return '';
  return '<h1>' . $page_atts['title'] . '</h1>';
}
function html_menu_item($caption, $href = '') {
  $current_page = (requested_path(true) == $href) ? $current_page = 'current_page' : '';
  $href = full_url($href);
  echo "<a class='$current_page' href='$href'>$caption</a>";
}
