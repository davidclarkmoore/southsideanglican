<!DOCTYPE html>
<html>
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>

<style type="text/css" media="
only screen and (-webkit-min-device-pixel-ratio: 1.5),
only screen and (   min--moz-device-pixel-ratio: 1.5),
only screen and (     -o-min-device-pixel-ratio: 3/2),
only screen and (        min-device-pixel-ratio: 1.5)">

  @import url('/sites/all/themes/hear-me-exhibit/css/stylesheets/overall.css');
  @import url('/sites/all/themes/hear-me-exhibit/css/stylesheets/screen-small.css');

</style>


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