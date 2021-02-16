<?php
include_once(theme_path() . '/designs.php');
?>

<p>Welcome to The Needle's Notion, designer of original charted needlework patterns. Ask for my designs at your favorite needlework shop.</p>

<main class="w12 text-5">
  <?php
  echo_home_featured_design_article('flossys-garden', 'Just Released');
  // echo_home_featured_design_article('needles-notion-sampler', "A Needle's Notion Favorite");
  echo_home_featured_design_article('alphabetsys-house', "A Needle's Notion Best Seller");
  echo_home_featured_design_article('berry-basket', "A Needle's Notion Favorite");

  ?>
  <article class="w12 marg-bottom-10px">
    <h2>Coming Soon: Birdhouse Box</h2>
  </article>
</main>
