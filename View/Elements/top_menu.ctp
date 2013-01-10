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
<div class="menu">
	<ul class="top-menu">
		<li>
			<?php echo $this->Html->link(
				__d('blazon', 'All articles'),
				array('plugin' => null, 'controller' => 'articles', 'action' => 'index', 'admin' => false)); ?>
		</li>
		<li>
			<?php echo $this->Html->link(
				__d('blazon', 'Categories'),
				array('plugin' => null, 'controller' => 'blazon_categories', 'action' => 'index', 'admin' => false)); ?>
		</li>
		<li>
			<?php echo $this->Html->link(
				__d('blazon', 'Users'),
				array('plugin' => null, 'controller' => 'blazon_users', 'action' => 'index', 'admin' => false)); ?>
		</li>
		<?php if (!empty($userData['id'])): ?>
		<li>
			<?php echo $this->Html->link(
				__d('blazon', 'My articles'),
				array('plugin' => null, 'controller' => 'articles', 'action' => 'mine', 'admin' => false)); ?>
		</li> 
		<li>
			<?php echo $this->Html->link(
				__d('blazon', 'Bookmarked articles'),
				array('plugin' => null, 'controller' => 'articles', 'action' => 'favorites', 'admin' => false)); ?>
		</li> 
		<li>
			<?php echo $this->Html->link(
				__d('blazon', 'My profile'),
				array('plugin' => null, 'controller' => 'users', 'action' => 'profile', 'admin' => false)); ?>
		</li> 
		<?php endif;?>
	</ul> 
</div>