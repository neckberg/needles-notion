<?php

// controllers
function controller_pages($page_folder, $is_last_controller) {
  array_unshift($page_folder, 'pages');
  $dir = implode('/', $page_folder);
  $found = (is_dir($dir)) ? true : false;
  if (!$found && !$is_last_controller) return false;
  echo_folder_as_page($dir, $found);
  return true;
}
function controller_designs($url_pieces, $is_last_controller, $design_url_pieces) {
  if (count($design_url_pieces) > 2) return false;  // allow for 1 level of subpages
  $design_slug = $design_url_pieces[0];
  if (!is_dir("designs/$design_slug")) return false;  // no such design
  include_theme_file('designs.php');
  if (count($design_url_pieces) == 1) {  // not asking for a sub-page: show the design!
    echo_design_page($design_slug);
    return true;
  }
  $subpage_slug = $design_url_pieces[1];
  $subpage_dir = "designs/$design_slug/$subpage_slug";
  if (!is_dir($subpage_dir)) {  // sub-page doesn't exist: just return the design page
    echo_design_page($design_slug);
    return true;
  }
  echo_folder_as_page($subpage_dir);
  return true;
}
function controller_404() {
  echo_page('', [], 404);
}

// echo a page with speified content, attributes, and template
function echo_page($content, $atts = [], $template = 'page') {
  global $page_atts;
  $page_atts = $atts;
  $page_atts['page_content'] = $content;
  include_theme_file("$template.php");  // show the page!
}

function echo_folder_as_page ($dir, $found = true) {
  $content = html_content_from_file([$dir], ['page-content']);
  $page_atts = ($found) ? parse_json_file("$dir/page-atts") : [];
  $template = ($found) ? 'page' : 404;
  echo_page($content, $page_atts, $template);
}

// generate content from whatever type of file we can find (md, php, or html)
function html_content_from_file($dirs = [], $filenames = [], $exts = ['md', 'php', 'html']) {
  list($dir, $name, $ext) = get_best_file($dirs, $filenames, $exts);
  if (!$name) return false;
  $mk_content_func = "mk_content_from_$ext";
  return $mk_content_func("$dir/$name");
}
function mk_content_from_md($filepath) {
  $filename = "$filepath.md";
  $file_contents = file_get_contents($filename);
  if (empty($file_contents)) return '';
  require_once('_libraries/parsedown-master/Parsedown.php');
  $parsedown = new Parsedown();
  return $parsedown->text($file_contents);
}
function mk_content_from_php($filepath) {
  return sandbox_include("$filepath.php");
}
function mk_content_from_html($filepath) {
  return file_get_contents("$filepath.html");
}

// search through hierarchy of filenames and extensions to find the best file available
function get_best_image_url($dirs = [], $img_names = [], $exts = ['JPG', 'jpg', 'jpeg', 'png', 'gif', 'svg', 'ico']) {
  return get_best_file_url($dirs, $img_names, $exts);
}
function get_best_file_url($dirs = [], $filenames = [], $exts = []) {
  $filepath = get_best_file_path($dirs, $filenames, $exts);
  if (!$filepath) return false;
  return full_url($filepath);
}
function get_best_file_path($dirs = [], $filenames = [], $exts = []) {
  list($dir, $name, $ext) = get_best_file($dirs, $filenames, $exts);
  if (!$name) return false;
  return "$dir/$name.$ext";
}
function get_best_file($dirs = [], $filenames = [], $exts = []) {
  if (count($dirs) < 1) $dirs = [''];
  foreach ($dirs as $dir) {
    if (!empty($dir) && !is_dir($dir)) continue;
    foreach ($filenames as $name) {
      foreach ($exts as $ext) {
        $path = $dir . (($dir == '') ? '' : '/') . "$name.$ext";
        if (file_exists($path)) return [$dir, $name, $ext];
      }
    }
  }
  return [false, false, false];
}
function sandbox_include($file) {
  ob_start();
  include($file);
  $output = ob_get_contents();
  ob_end_clean();
  return $output;
}
function include_snippet($filename) { include("snippets/$filename"); }
function include_snippets($filenames = []) {
  foreach ($filenames as $snippet) {
    include_snippet($snippet);
  }
}
