<div id="header">
<div id="logo">
	<a href="/"><img src="<?php print render($logo); ?>"/></a>
</div>

<?php if ($page['header']): ?>    
	<?php print render($page['header']); ?>
<?php endif; ?>  
</div>

<?php if ($page['page_header']): ?>    
  <?php print render($page['page_header']); ?>
<?php endif; ?>  

<div class="drupal_messages">
<?php print render($messages); ?>
</div>


<div id="page-content-wrapper">


<?php if ($page['content']): ?>    
<div id="page-content">
<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
  <?php print render($page['content']); ?>
</div>
<?php endif; ?>  

<div id="page-column-wrapper">
<?php if ($page['column_one']): ?>    

  <?php print render($page['column_one']); ?>

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
