<?php
/**
 * Copyright 2012-2013, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2012-2013, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<footer class="mastend clearfix">
	<div class="row">
		<nav class="six columns">
			<ul class="footer-nav">
				<li>
					<?php echo $this->Html->link(
						__d('community', 'Community'),
						array('plugin' => null, 'controller' => 'articles', 'action' => 'index', 'admin' => false)); ?>
				</li>
				<!--
				<li>
					<?php echo $this->Html->link(
						__d('community', 'Events'),
						array('plugin' => null, 'controller' => 'articles', 'action' => 'index', 'admin' => false)); ?>
				</li>
				-->
				<li>
					<?php echo $this->Html->link(
						__d('community', 'Get Involved'),
						array('plugin' => null, 'controller' => 'articles', 'action' => 'index', 'admin' => false)); ?>
				</li>
				<li>
					<?php echo $this->Html->link(
						__d('community', 'Guidelines'),
						array('plugin' => null, 'controller' => 'blazon_categories', 'action' => 'index', 'admin' => false)); ?>
				</li>
			</ul>
		</nav>
	</div>
	<div class="row overlined">
		<div class="columns six mini">
			&copy; 2005-<?php echo date('Y'); ?> <?php echo $this->Html->link('Cake Software Foundation, Inc.', 'http://cakefoundation.org'); ?>
		</div>
		<div class="columns six mini right-align">
				<?php
				echo $this->Html->link(
					__('Privacy Policy'),
					array('admin' => false, 'prefix' => null, 'plugin' => null, 'controller' => 'pages', 'action' => 'tos')); 
				?>
				&nbsp;
		</div>
	</div>
</footer>
