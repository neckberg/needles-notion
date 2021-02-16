<?php
include_theme_file('designs.php');

$design_list = [
  'mrs-santas-sampler',
  'woodland-yule',
  'a-fine-pair',
  'sampler-santa',
  'christmas-chalet',
  'holiday-joy',
  'christmas-concert',
  'pyramid-pines',
  'snowball-garland',
  'christmas-wishes',
  'glad-tidings-angel',
  'the-christmas-stitcher',
  'christmas-buffet',
  'redwork-winter',
  'santas-greenhouse',
  'christmas-garden',
  'santas-rudolph-racer',
  // 'st-nick-of-time',  // retired
  'gingerbread-cottage',
  'gingerbread-rogers',
  'freddie-allspice',
  'alphabet-on-ice',
  'whiskers',
  'bargello-trees',
  'snowflake-angels',
];

foreach ($design_list as $design_slug) echo_design_thumb($design_slug);
?>
