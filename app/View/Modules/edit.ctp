<div class="modules form">
<?php echo $this->Form->create('Module'); ?>
	<fieldset>
		<legend><?php echo __('Edit Module'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('news_id');
		echo $this->Form->input('title');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Module.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Module.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Modules'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
