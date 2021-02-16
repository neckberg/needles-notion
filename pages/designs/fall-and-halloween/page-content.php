<?php
include_theme_file('designs.php');

$design_list = [
  'happy-harvest',
  'fly-by-night',
  'bewitching-trio',
  'cauldron-cottage',
  'bats-in-the-belfry',
  'spook-hill',
  'knit-witch',
  'witch-hazels-brew',
  'autumn-leaves',
  'pumpkin-hollow',
  'halloween-harvest',
  'jack-patch',
  // 'owl-be-watching',  // retired
];

foreach ($design_list as $design_slug) echo_design_thumb($design_slug);
?>
