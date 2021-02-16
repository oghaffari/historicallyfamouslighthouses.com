<?php
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );
date_default_timezone_set('America/Detroit');
?>

<!doctype html>
<html lang="en-US">
  <!-- generated by uswds@2.7.0 -->
  <head>
    <?php
      include("assets/includes/meta.inc");
    ?>
    <title>Historically Famous Lighthouses (CG-232)</title>
    <?php
      include("assets/includes/css.inc");
    ?>
  </head>
  <body>

    <?php
      include("assets/includes/banner.inc");
      include("assets/includes/header-others.inc");
      include("assets/includes/main-lighthouses.inc");
      include("assets/includes/footer.inc");
      include("assets/includes/scripts.inc");
    ?>
  </body>
</html>
