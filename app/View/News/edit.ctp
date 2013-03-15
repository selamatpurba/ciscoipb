<div class="news form">
<?php echo $this->Form->create('News',array('enctype' => 'multipart/form-data')); ?>
	<fieldset>
		<legend><?php echo __('Edit News'); ?></legend>
	<?php
		echo $this->Form->input('title',array("required"=>"required"));
		echo $this->Form->input('body',array("required"=>"required"));
		echo $this->Form->input('resume',array("required"=>"required"));
		echo $this->form->file('Attachment.filename.', array('multiple'));
		echo $this->Form->input('topic_id',array("required"=>"required"));
		echo $this->Form->input('source_id',array("required"=>"required"));
		echo $this->Form->input('who',array("required"=>"required"));
		echo $this->Form->input('where',array("required"=>"required"));
		echo $this->Form->input('tags',array("required"=>"required", "id"=>"tags"));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('News.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('News.id'))); ?></li>
		<li><?php echo $this->Form->postLink(__('Delete Image'), array('action' => 'delete_image', $this->Form->value('News.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('News.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Topics'), array('controller' => 'topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topic'), array('controller' => 'topics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sources'), array('controller' => 'sources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Source'), array('controller' => 'sources', 'action' => 'add')); ?> </li>
	</ul>
</div>
