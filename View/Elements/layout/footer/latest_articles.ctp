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
 * Element allowing to request and display the 5 latest articles of a given Category
 * 
 * @param string $category_id Id of the Category
 * @param string $title Title of the box
 */
?>
<?php if (!empty($category_id)) : ?>
	<?php 
		$articles = $this->requestAction(
			array('controller' => 'articles', 'action' => 'category'),
			array(
				'named' => array('limit' => 5),
				'pass' => array($category_id, 'id'))
		);
	?>
	<h3><?php echo $title; ?></h3>
	<?php if (empty($articles)) : ?>
		<div class="notice"><?php echo __d('blazon', 'No articles yet!'); ?></div>
	<?php else : ?>
		<ul>
		<?php foreach($articles as $article) : ?>
			<li><?php
				echo $this->Html->link(
					$article['Article']['title'],
					array('plugin' => null, 'controller' => 'articles', 'action' => 'view', $article['Article']['id']));
			?></li>
		<?php endforeach; ?>
		</ul>
	<?php endif; ?>
<?php endif; ?>