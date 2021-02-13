<?php
include_theme_file('designs.php');

$design_list = [
  'flossys-garden',
  'mrs-santas-sampler',
  'woodland-yule',
  'a-fine-pair',
  'sampler-santa',
  'bandana-ranch',
  'alphabetsys-house',
  'snowflake-angels',
  'pin-pal-gal-sampler',
  'bewitching-trio',
  'joys-of-spring',
  'alphabet-dolls',
  'fiona-fairy',
  'poodle-skirt-patty',
  'halloween-harvest',
  'spook-hill',
  'christmas-chalet',
  'pyramid-pines',
  'bargello-trees',
];

foreach ($design_list as $design_slug) echo_design_thumb($design_slug);
?>
