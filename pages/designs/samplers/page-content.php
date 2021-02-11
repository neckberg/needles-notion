<?php
include_theme_file('designs.php');

$design_list = [
  'mrs-santas-sampler',
  'hope-chest-sampler',
  'sampler-santa',
  'jane-and-cassandra',
  'birds-bees-and-trees',
  'fly-by-night',
  'flower-show',
  'friends-for-keeps',
  'blackberry-pie',
  'alphabetsys-house',
  'day-of-rest',
  'pin-pal-gal-sampler',
  'calico-cabin',
  'sew-a-fine-seam',
  'sewing-day',
  'amana-inspirations',
  'pollys-tea-kettle',
  'brides-boxes',
  'ironing-day',
  'lucy-locket-sampler',
  'market-day',
  'sweet-pea-sampler',
  'liberty-garden',
  'cleaning-day',
  'coverlet-collage',
  'alphabet-soup',
  'baking-day',
  'cherries-jubilee',
  'seaside-sampler',
  'brown-bird-sampler',
  'needles-notion-sampler',
  'wash-day',
  'alphabet-cottage',
  'alphabet-on-ice',
];

foreach ($design_list as $design_slug) echo_design_thumb($design_slug);
?>
