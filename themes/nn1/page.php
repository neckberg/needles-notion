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

  <div class="w7 wm12 ws12 pad-bottom-20px text-left pad-sides-10px-children text-1">
    <?php
    echo $page_atts['page_content'];
    ?>
  </div>

  <?php
  include_theme_file('page-footer.php');
  ?>
</body>
</html>
