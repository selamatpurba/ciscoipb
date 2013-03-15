<div class="sourcecategories form">
<?php echo $this->Form->create('Sourcecategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sourcecategory'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sourcecategory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Sourcecategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sourcecategories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sources'), array('controller' => 'sources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Source'), array('controller' => 'sources', 'action' => 'add')); ?> </li>
	</ul>
</div>