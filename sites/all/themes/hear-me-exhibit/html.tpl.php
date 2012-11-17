<!DOCTYPE html>
<html>
<head profile="<?php print $grddl_profile; ?>">
  <meta name="viewport" content="width=device-width" />
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>

<style type="text/css" media="screen and (min-width: 300px)">

  @import url('/sites/all/themes/hear-me-exhibit/css/stylesheets/screen-small.css');

</style>

/*<style type="text/css" media="screen and (min-width: 700px)">

  @import url('/sites/all/themes/hear-me-exhibit/css/stylesheets/screen.css');

</style>*/


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