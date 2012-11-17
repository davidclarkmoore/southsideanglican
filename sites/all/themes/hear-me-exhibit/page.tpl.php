<header>

<?php if ($page['header']): ?>    
	<?php print render($page['header']); ?>
<?php endif; ?>  
</div>

<?php if ($page['page_header']): ?>    
  <?php print render($page['page_header']); ?>
<?php endif; ?>  

<div class="drupal_messages">
<?php print render($messages); ?>
</header>


<div id="page-content-wrapper">


<?php if ($page['content']): ?>    
<section id="page-content">
<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
  <?php print render($page['content']); ?>
</section>
<?php endif; ?>  

<?php if ($page['sidebar']): ?>    
<section id="sidebar-content">
  <?php print render($page['sidebar']); ?>
</section>
<?php endif; ?>  


</div>



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
