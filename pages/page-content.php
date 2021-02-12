<?php
include_once(theme_path() . '/designs.php');
?>


<p>Welcome to The Needle's Notion, designer of original charted needlework patterns. Ask for my designs at your favorite needlework shop.</p>

<ul class="w12 text-5">
<li class="w12 marg-bottom-10px">
  <h2>Just Released</h2>
  <a href="<?php echo full_url('designs/mrs-santas-sampler'); ?>" class="w6 float-left pad-right-10px">
    <img class="w12" alt="Mrs. Santa's Sampler" src="<?php echo url_design_image('mrs-santas-sampler'); ?>">
  </a>
  <div class="w6">
    <a href="<?php echo full_url('designs/mrs-santas-sampler'); ?>" class="w12">
      <h3>Mrs. Santa's Sampler</h3>
    </a>
  </div>
  <?php echo html_design_description('mrs-santas-sampler'); ?>
</li>

<li class="w12 marg-bottom-10px">
  <h2>A Needle's Notion Favorite</h2>
  <a href="<?php echo full_url('designs/sampler-santa'); ?>" class="w6 float-left pad-right-10px">
    <img class="w12" alt="Sampler Santa" src="<?php echo url_design_image('sampler-santa'); ?>">
  </a>
  <div class="w6">
    <a href="<?php echo full_url('designs/sampler-santa'); ?>" class="w12">
      <h3>Sampler Santa</h3>
    </a>
  </div>
  <?php echo html_design_description('sampler-santa'); ?>
</li>

<li class="w12 marg-bottom-10px">
  <h2>A Needle's Notion Best Seller</h2>
  <a href="<?php echo full_url('designs/bewitching-trio'); ?>" class="w6 float-left pad-right-10px">
    <img class="w12" alt="Bewitching Trio" src="<?php echo url_design_image('bewitching-trio'); ?>">
  </a>
  <div class="w6">
    <a href="<?php echo full_url('designs/bewitching-trio'); ?>" class="w12">
      <h3>Bewitching Trio</h3>
    </a>
  </div>
  <?php echo html_design_description('bewitching-trio'); ?>
</li>

<li class="w12 marg-bottom-10px">
  <h2>Coming Soon: Flossy’s Garden</h2>
</li>

<li class="w12 marg-bottom-10px">
  <img class="w2" alt="Baking Day" src="<?php echo full_url('designs/baking-day/NN154pc_EWE-332.jpg'); ?>">
  <div class="w10 pad-left-10px">
    <h3>Oldies but Goodies</h3>
    <p>Several Needle's Notion samplers are also available as painted canvases for needlepoint, offered by Ewe and Eye and Friends.</p>
  </div>
</li>

</ul>
