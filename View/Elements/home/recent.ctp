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
			array('pass' => array($category_id, 'id'), 'limit' => 10)
		);
	?>
	<h2 class="icon"><?php echo __d('blazon', 'Recent Articles'); ?></h2>
	<?php echo $this->element('home/list', compact('articles')); ?>
<?php endif; ?>
