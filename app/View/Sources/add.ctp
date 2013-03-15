<div class="sources form">
<?php echo $this->Form->create('Source'); ?>
	<fieldset>
		<legend><?php echo __('Add Source'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('sourcecategory_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sources'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sourcecategories'), array('controller' => 'sourcecategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sourcecategory'), array('controller' => 'sourcecategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
