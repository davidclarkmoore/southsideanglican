<div id="header">
<div id="logo">
	<a href="/"><img src="<?php print render($logo); ?>"/></a>
</div>

<?php if ($page['header']): ?>    
	<?php print render($page['header']); ?>
<?php endif; ?>  
</div>

<?php if ($page['page_slider']): ?>    
  <?php print render($page['page_slider']); ?>
<?php endif; ?>  

<?php print render($messages); ?>



<div id="page-content-wrapper">

<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
<?php if ($title): ?><h1><?php print render($title); ?></h1><?php endif; ?>
<?php if ($page['content']): ?>    

  <?php print render($page['content']); ?>

<?php endif; ?>  

<div id="page-column-wrapper">
<?php if ($page['column_left']): ?>    

  <?php print render($page['column_left']); ?>

<?php endif; ?>  

</div></div>




<footer>
	<?php if ($page['footer_firstcolumn']): ?>    
    <?php print render($page['footer_firstcolumn']); ?>
    <?php endif; ?>  
    
    <?php if ($page['footer_secondcolumn']): ?>    
    <?php print render($page['footer_secondcolumn']); ?>
    <?php endif; ?> 
    
    <?php if ($page['footer_thirdcolumn']): ?>    
    <?php print render($page['footer_thirdcolumn']); ?>
    <?php endif; ?> 
</footer>
