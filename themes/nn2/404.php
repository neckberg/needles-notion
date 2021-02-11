<?php
// not sure which of these is the best...
// header("HTTP/1.0 404 Not Found");
// header('HTTP/1.0 404 Not Found', true, 404);
http_response_code(404);
?>
<!DOCTYPE html>
<html>
<body>
<?php
include_theme_file('head.php');
include_theme_file('page-header.php');
?>

<h1>404: content not found</h1>

</body>
</html>
<?php
die();
?>
