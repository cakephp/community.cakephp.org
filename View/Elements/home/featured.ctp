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
<?php
$articles = $this->requestAction(
	array('controller' => 'articles', 'action' => 'category', 'news'),
	array('named' => array('limit' => 3, 'sort' => 'created', 'direction' => 'desc'), 'lang' => Configure::read('Config.language'))
);

foreach ($articles as $article) {
	echo $this->element('home/featured_item', compact('article'));
}