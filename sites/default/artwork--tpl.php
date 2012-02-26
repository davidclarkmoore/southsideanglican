
<?php
  $view_args = array();
  $display_id = 'block';
  $view = views_get_view('artwork_slider');
       if (!empty($view)) {
        print $view->execute_display($display_id , $view_args);
  }
?>


<?php if ($page['content']): ?>    

  <?php print render($page['content']); ?>

<?php endif; ?>  