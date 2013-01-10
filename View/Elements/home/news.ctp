<?php
/**
 * Copyright 2010, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<?php if (!empty($category_id)) : ?>
	<?php 
		$articles = $this->requestAction(
			array('controller' => 'articles', 'action' => 'category'),
			array(
				'named' => array('limit' => 4),
				'pass' => array($category_id, 'id'))
		);
	?>
	<h3><?php echo __d('blazon', 'Recent News'); ?></h3>
	<?php if (empty($articles)) : ?>
	<div class="notice">
		<?php echo __d('blazon', 'No articles yet!'); ?>
	</div>
	<?php else : ?>
		<?php foreach ($articles as $article) : ?>
			<div class="entry">
				<?php echo $this->element('home/featured_item', compact('article') + array('truncate' => 100)); ?>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
<?php endif; ?>