<?php
require('config.php');

serve_url(requested_path());

// given a route / url path, serve it!
function serve_url($url_path) {
  $url_pieces = path_pieces($url_path);
  list($controllers, $args) = get_controller_heirarchy($url_pieces);
  try_controllers($controllers, $args, $url_pieces);
}
// find and execute the controllers for this route
function get_controller_heirarchy($url_pieces) {
  $urls = parse_json_file('urls');
  $arg_list = [];
  while (count($url_pieces) > 0) {
    $path = '/' . implode('/', $url_pieces);
    if (isset($urls[$path])) return [$urls[$path], array_reverse($arg_list)];
    $arg_list[] = array_pop($url_pieces);
  }
  return [$urls['/'], array_reverse($arg_list)];
}
// try the available controllers for this route until one of them returns true
function try_controllers($controllers, $url_args, $url_pieces) {
  include_theme_file('functions.php');
  $i = 0;
  foreach ($controllers as $controller) {
    $controller_func = "controller_$controller";
    if ($controller_func($url_pieces, (++$i == count($controllers)), $url_args)) return;
  }
  controller_404($url_pieces, true, $url_args);
}

// parsing the requested url and determining appropriate filepaths
function path_pieces($url_path) {
  $url_pieces = explode('/', $url_path);
  return array_values(array_filter($url_pieces, function($piece) { return !is_null($piece) && $piece !== ''; }));
}
function requested_path($remove_slashes = false) {
  $requested_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $url_path = substr($requested_path, strlen(SITE_BASE_DIR));
  if (!$remove_slashes) return $url_path;
  $url_pieces = path_pieces($url_path);
  return implode('/', $url_pieces);
}
function is_home() {
  return (empty( requested_path(true) )) ? true : false;
}
function site_url() {
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $domainName = $_SERVER['HTTP_HOST'];
  return $protocol . $domainName . SITE_BASE_DIR;
}
function include_theme_file($file) {
  $theme_path = theme_path();
  include("$theme_path/$file");
}
function theme_file_url($file) {
  return site_url() . theme_path() . "/$file";
}
function theme_path() { return 'themes/' . THEME; }
function parse_json_file($file) {
  $json = file_get_contents("$file.json");
  return json_decode($json, true);
}
function full_url($relative_url = '') {
  return site_url() . $relative_url;
}
