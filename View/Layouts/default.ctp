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
<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		<?php echo $title_for_layout; ?> :: 
		<?php echo __('CakePHP Community Center'); ?>
	</title>
	<?php
		echo $this->Html->charset();
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->element('ie9-jumplist');
		echo $this->Html->css('/csfnavbar/css/style');
		echo $this->AssetCompress->css('app.css');
		echo '<!--[if lt IE 9]>' . $this->Html->script('html5shiv') . '<![endif]-->';
	?>
</head>
<body class="js">
	<div id="container">
		<?php echo $this->element('Csfnavbar.navbar'); ?>
		<?php echo $this->element('layout/header'); ?>
		<header class="masthead">
			<div class="header-backing"></div>
			<div class="row">
				<h1 class="logo"><?php
					echo $this->Html->image('cake-logo.png', array(
						'alt' => 'CakePHP : the rapid development php framework',
						'width' => '70',
						'url' => '/'
					));
				?></h1>
				<h2 class="tagline <?php echo (empty($headerButton)) ? 'no-button' : '' ?>">
					<?php echo __('Community Center');?>
				</h2>
				<nav class="main-nav">
					<ul class="navigation">
						<li>
							<?php echo $this->Html->link(__('Community'), '/'); ?>
						</li>
						<!--
						<li>
							<?php echo $this->Html->link(__('Events'), array('controller' => 'pages', 'action' => 'display', 'events')); ?>
						</li>
						-->
						<li>
							<?php echo $this->Html->link(__('Get Involved'), array('controller' => 'pages', 'action' => 'display', 'get_involved')); ?>
						</li>
						<li>
							<?php echo $this->Html->link(__('Guidelines'), array('controller' => 'pages', 'action' => 'display', 'guidelines')); ?>
						</li>
					</ul>
				</nav>
				<?php
				if (!empty($headerButton)):
					echo $headerButton;
				endif;
				?>
			</div>
		</header>
		<div id="content">
			<!--nocache-->
			<div class="row">
				<?php echo $this->Session->flash('auth', array('params' => array('class' => 'alert-box'))); ?>
			</div>
			<div class="row">
				<?php echo $this->Session->flash('flash', array('params' => array('class' => 'alert-box'))); ?>
			</div>
			<!--/nocache-->
			<?php echo $this->fetch('content'); ?>
		</div>
		<div class="footer-push"></div>
	</div>
	<?php
		echo $this->element('footer');
		echo $this->AssetCompress->script('app.js');
		echo $this->AssetCompress->includeJs();
		echo $this->fetch('scripts');
		echo $this->Js->writeBuffer();
	?>
</body>
</html>
