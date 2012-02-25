<?php
function phptemplate_menu_item($mid, $children = '', $leaf = TRUE) {
  return _phptemplate_callback('menu_item', array(
        'leaf' => $leaf,
        'mid' => $mid,
        'children' => $children
    ));
}
  