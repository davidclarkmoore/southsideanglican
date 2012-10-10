<?php


?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<?php if ($title): ?><h1><?php print render($title); ?></h1><?php endif; ?>
<div class="socialwrapper">

<div class="socialbutton">
<div class="fb-like" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false" data-font="arial"></div>
</div>
<div class="socialbutton">
<a href="https://twitter.com/share" class="twitter-share-button" data-via="SSACpgh">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
</div>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
</div>