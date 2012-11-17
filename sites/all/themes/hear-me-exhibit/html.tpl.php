<!DOCTYPE html>
<html>
<head profile="<?php print $grddl_profile; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>

  <script type="text/javascript" src="/sites/all/themes/hear-me-exhibit/scripts/iealert.min.js"></script> 
<script>

  $(document).ready(function() {
    $("body").iealert();
  });
  
</script>

<style type="text/css" media="screen and (min-width: 300px)">

  @import url('/sites/all/themes/hear-me-exhibit/css/stylesheets/screen-small.css');

</style>

<style type="text/css" media="screen and (min-width: 769px)">

  @import url('/sites/all/themes/hear-me-exhibit/css/stylesheets/screen.css');

</style>

<!--[if lt IE 9]>

  <link rel="stylesheet" type="text/css" href="/sites/all/themes/hear-me-exhibit/css/stylesheets/screen-small.css" />
  <link rel="stylesheet" type="text/css" href="/sites/all/themes/hear-me-exhibit/css/stylesheets/screen.css" />
  <link rel="stylesheet" type="text/css" href="/sites/all/themes/hear-me-exhibit/css/stylesheets/screen-ie8.css" />

<![endif]-->



</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>

  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>






</body>
</html>