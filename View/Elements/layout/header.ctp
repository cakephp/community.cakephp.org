<div class="top-bar">
	<div class="inner-container">
		<!--nocache-->
		<div class="login">
			<?php 
				if (!$this->Session->check('Auth.User.id')) {
					echo $this->Html->link(__('Login'), array('plugin' => false, 'controller' => 'users', 'action' => 'login')) . ' ';
					echo $this->Html->link(__('Register'), array('plugin' => false, 'controller' => 'users', 'action' => 'register')) . ' ';
				} else {
					echo $this->Gravatar->image($this->Session->read('Auth.User.email'), array('size' => 20));
					echo $this->Html->link(__('Profile'), array(
						'plugin' => false,
						'controller' => 'users',
						'action' => 'profile',
						$this->Session->read('Auth.User.username')
					)) . ' ';
					echo $this->Html->link(__('Logout'), array('plugin' => false, 'controller' => 'users', 'action' => 'logout')) . ' ';
				}
				//echo $this->I18n->flagSwitcher(array('id' => 'language-switcher', 'appendName' => true));
			?>
		</div>
		<!--/nocache-->
	</div>
</div>