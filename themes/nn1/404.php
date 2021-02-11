<?php
// not sure which of these is the best...
// header("HTTP/1.0 404 Not Found");
// header('HTTP/1.0 404 Not Found', true, 404);
http_response_code(404);
?>
<!DOCTYPE html>

<?php global $page_atts; ?>

<html>
<?php
include_theme_file('head.php');
?>
<body data-page-url="<?php echo requested_path(true); ?>" class="text-center">
  <?php
  include_theme_file('page-header.php');
  ?>

  <div class="w7 wm12 ws12 pad-bottom-20px pad-sides-10px-children text-1">
    <h1>404: Content Not Found</h1>
  </div>

  <?php
  include_theme_file('page-footer.php');
  ?>
</body>
</html>
<?php
die();
?>
