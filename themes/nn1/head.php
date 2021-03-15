<?php
global $page_atts;
?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- *noe added Month D YYYY -->
  <!-- <meta name="google-site-verification" content="" /> -->

  <title><?php echo nn1_page_title($page_atts); ?></title>
  <meta name="Keywords" content="<?php echo nn1_page_keywords($page_atts); ?>">
  <?php echo nn1_og_tags($page_atts); ?>
  <!-- <meta name="Description" content=""> -->

  <link rel="icon" type="image/png" href="<?php echo full_url('images/favicon/favicon-16x16.png'); ?>" sizes="16x16" />
  <link rel="icon" type="image/png" href="<?php echo full_url('images/favicon/favicon-32x32.png'); ?>" sizes="32x32" />

  <link rel="stylesheet" type="text/css" href="<?php echo theme_file_url('style.css') . '?' . time(); ?>">
  <?php echo nn1_add_styles($page_atts); ?>
</head>

<?php
function nn1_page_title ($page_atts = []) {
  if (!isset($page_atts['title'])) return SITE_TITLE;
  return $page_atts['title'] . ' | ' . SITE_TITLE;
}
function nn1_page_keywords ($page_atts = []) {
  if (!isset($page_atts['keywords'])) return SITE_KEYWORDS;
  return $page_atts['keywords'];
}
function nn1_page_image ($page_atts = []) {
  if (isset($page_atts['image-full-url'])) return $page_atts['image-full-url'];
  if (isset($page_atts['image'])) return full_url('images/' . $page_atts['image']);
  if (defined(SITE_IMAGE)) return full_url(SITE_IMAGE);
  return '';
}
function nn1_add_styles ($page_atts = []) {
  // add style tags that may have been enqueued by other modules
}

function nn1_og_tags ($page_atts = []) {
  $title = nn1_page_title($page_atts);
  $image = nn1_page_image($page_atts);
  ob_start();
  ?>
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:image" content="<?php echo $image; ?>">
  <?php
  // <meta property="og:description" content="">
  // <meta property="og:url" content="">
  return ob_get_clean();
}
