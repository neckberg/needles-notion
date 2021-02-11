<?php
include_theme_file('designs.php');

$design_list = [
  'happy-harvest',
  'fly-by-night',
  'bewitching-trio',
  'cauldron-cottage',
  'owl-be-watching',
  'bats-in-the-belfry',
  'jack-patch',
  'knit-witch',
  'witch-hazels-brew',
  'autumn-leaves',
  'pumpkin-hollow',
  'halloween-harvest',
  'spook-hill',
];

foreach ($design_list as $design_slug) echo_design_thumb($design_slug);
?>
