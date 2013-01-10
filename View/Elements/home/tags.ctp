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
<h3><?php echo __d('blazon', 'Random Tags'); ?></h3>
<?php
	$tags = $this->requestAction(array('controller' => 'articles', 'action' => 'tag_cloud'));
	echo $this->TagCloud->display($tags, array(
		'shuffle' => true,
		'before' => '<span style="font-size:%size%px">',
		'after' => '</span>',
		'minSize' => 10,
		'maxSize' => 28,
		'url' => array('controller' => 'articles', 'action' => 'index')
	));
?>