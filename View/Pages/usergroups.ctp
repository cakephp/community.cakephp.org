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
<div class="row">
	<h1>
		<?php echo __('Local user groups'); ?>
	</h1>
	<p>
		<?php echo __('We currently have enthusiastic groups of <strong>CakePHP</strong> developers in the following regions worldwide:'); ?>
	</p>
	<table class="usergroups-table">
		<thead>
			<tr>
				<th>
					<?php echo __('User Group'); ?>
				</th>
				<th>
					<?php echo __('Region'); ?>
				</th>
				<th>
					<?php echo __('Language'); ?>
				</th>
				<th>
					<?php echo __('Owner'); ?>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<?php echo $this->Html->link(__('CakePHP FR'), 'http://usergroups.cakephp.org/fr'); ?>
				</td>
				<td>
					<?php echo $this->Html->link(__('France'), 'http://maps.google.com/maps?q=france'); ?>
				</td>
				<td>
					French
				</td>
				<td>
					<?php echo $this->Html->link(__('Pierre Martin (real34)'), 'https://github.com/real34'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $this->Html->link(__('CakePHP NL'), 'http://usergroups.cakephp.org/nl'); ?>
				</td>
				<td>
					<?php echo $this->Html->link(__('Netherlands'), 'http://maps.google.com/maps?q=netherlands'); ?>
				</td>
				<td>
					English
				</td>
				<td>
					<?php echo $this->Html->link(__('Marc Ypes (Ceeram)'), 'https://github.com/ceeram'); ?>
				</td>
			</tr>
		</tbody>
	</table>
	<h2>
		<?php echo __('Your country not listed?'); ?>
	</h2>
	<p>
		<?php echo __('If you\'d like to meet with other <strong>CakePHP</strong> developers in your region, and there\'s no existing community, consider starting one yourself. If you represent a local community, apply now for your User Group\'s space on cakephp.org.'); ?>
	</p>
	<p>
		<?php echo __('<strong>CakePHP</strong> provides a complete package to get you up and running:'); ?>
	</p>
	<ul>
		<li>
			<?php echo __('Dedicated location on the cakephp.org domain'); ?>
		</li>
		<li>
			<?php echo __('Blog application (Croogo)'); ?>
		</li>
		<li>
			<?php echo __('Discussion forum (Discourse)'); ?>
		</li>
		<li>
			<?php echo __('Raffle application'); ?>
		</li>
		<li>
			<?php echo __('Meetup.com costs covered'); ?>
		</li>
		<li>
			<?php echo __('Help and support from the <strong>CakePHP</strong> core'); ?>
		</li>
	</ul>
	<p>
		<?php echo __('Apply for your User Group package by sending an email to <strong>usergroups [at] cakephp.org</strong>.'); ?>
	</p>
	<br/>
</div>
