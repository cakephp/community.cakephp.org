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
<?php if (empty($articles)) : ?>
<div class="notice">
	<?php echo __d('blazon', 'No articles yet!'); ?>
</div>
<?php else : ?>
<ul>
	<?php foreach ($articles as $article) : ?>
		<li>
			<?php 
				echo $this->Html->link(
					$article['Article']['title'],
					array('plugin' => null, 'controller' => 'articles', 'action' => 'view', $article['Article']['id']));
			?>
		</li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>