<h4>
	<?php echo $this->Html->link($article['Article']['title'], array(
			'controller' => 'articles', 'action' => 'view', $article['Article']['id']
		));
	?>
</h4>
<p class="excerpt">
	<?php echo $this->Text->truncate($article['Article']['intro'], isset($truncate) ? $truncate : 200); ?><br />
</p>