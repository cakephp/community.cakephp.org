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

/**
 * Element requesting and displaying the latest comments published on the website
 * 
 * @param string $title Title of the box
 */
?>
<?php 
	$comments = $this->requestAction(
		array('plugin' => null, 'controller' => 'blazon_comments', 'action' => 'index'),
		array('named' => array('limit' => 5)));
?>
	<h4><?php echo $title; ?></h4>
	<?php if (empty($comments)) : ?>
		<div class="notice"><?php echo __d('blazon', 'No comments yet!'); ?></div>
	<?php else : ?>
		<ul>
		<?php foreach($comments as $comment) : ?>
			<li><?php
				echo $this->Html->link(
					$comment['Comment']['title'],
					array(
						'plugin' => null, 'controller' => 'articles', 'action' => 'view',
						$comment['Comment']['foreign_key'],
						'#' => 'comment' . $comment['Comment']['id']));
			?></li>
		<?php endforeach; ?>
		</ul>
	<?php endif; ?>