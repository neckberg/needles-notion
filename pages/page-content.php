<?php
include_once(theme_path() . '/designs.php');
?>


<p>Welcome to The Needle's Notion, designer of original charted needlework patterns. Ask for my designs at your favorite needlework shop.</p>

<ul class="w12 text-5">
<li class="w12 marg-bottom-10px">
  <h2>Just Released</h2>
  <a href="<?php echo full_url('designs/flossys-garden'); ?>" class="w6 float-left pad-right-10px">
    <img class="w12" alt="Flossy's Garden" src="<?php echo url_design_image('flossys-garden'); ?>">
  </a>
  <div class="w6">
    <a href="<?php echo full_url('designs/flossys-garden'); ?>" class="w12">
      <h3>Flossy's Garden</h3>
    </a>
  </div>
  <?php echo html_design_description('flossys-garden'); ?>
</li>

<li class="w12 marg-bottom-10px">
  <h2>A Needle's Notion Favorite</h2>
  <a href="<?php echo full_url('designs/needles-notion-sampler'); ?>" class="w6 float-left pad-right-10px">
    <img class="w12" alt="Needle's Notion Sampler" src="<?php echo url_design_image('needles-notion-sampler'); ?>">
  </a>
  <div class="w6">
    <a href="<?php echo full_url('designs/needles-notion-sampler'); ?>" class="w12">
      <h3>Needle's Notion Sampler</h3>
    </a>
  </div>
  <?php echo html_design_description('needles-notion-sampler'); ?>
</li>

<li class="w12 marg-bottom-10px">
  <h2>Coming Soon: Birdhouse Box</h2>
</li>

</ul>
