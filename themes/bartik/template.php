<?php

function southsideanglican_preprocess_html() {
global $base_path;
list(,$path) = explode($base_path, $_SERVER['REQUEST_URI'], 2);
list($path,) = explode('?', $path, 2);
$path = rtrim($path, '/');
// Construct the id name from the path, replacing slashes with dashes.
$body_id = str_replace('/', '-', $path);
// Construct the class name from the first part of the path only.
list($body_class,) = explode('/', $path, 2);
// $body_class = $body_class . ' not-front';
$body_id = 'page-'. $body_id;
$body_class = 'section-'. $body_class;
$vars['classes_array'][] = ' ' . $body_id . ' ' . $body_class;

}
?>