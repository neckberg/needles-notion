<?php
include_theme_file('designs.php');

$design_list = [
  'mrs-santas-sampler',
  'woodland-yule',
  'a-fine-pair',
  'hope-chest-sampler',
  'sampler-santa',
  'happy-harvest',
  'jane-and-cassandra',
  'birds-bees-and-trees',
  'fly-by-night',
  'flower-show',
  'bandana-ranch',
  'friends-for-keeps',
];

foreach ($design_list as $design_slug) echo_design_thumb($design_slug);
?>
