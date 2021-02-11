<p class="text-left">Several Needle's Notion samplers are also available as painted canvases for needlepoint, offered by Ewe and Eye and Friends .</p>

<?php
include_theme_file('designs.php');

$design_list = [
  'willkommen-pin-cushion',
  'berry-basket',
  'carrot-cake',
  'glad-tidings-angel',
  'gingerbread-cottage',
  'gingerbread-rogers',
  'freddie-allspice',
  'ladybird-needlebook',
  'whiskers',
  'bargello-trees',
];

foreach ($design_list as $design_slug) echo_design_thumb($design_slug);
?>
