<div class="news form">
<?php echo $this->Form->create('News',array('enctype' => 'multipart/form-data')); ?>
	<fieldset>
		<legend><?php echo __('Add News'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('title');
		echo $this->Form->input('body');
		echo $this->Form->input('resume');
		echo "<label for='AttachmentFilename'>&nbsp;Image</label>";
		echo $this->form->file('Attachment.filename.', array('multiple'));
		echo $this->Form->input('topic_id',array('empty' => '(choose one)'));
		echo $this->Form->input('source_id',array('empty' => '(choose one)'));
		echo $this->Form->input('who');
		echo $this->Form->input('where');
		echo $this->Form->input('tags');
        echo $this->Form->input('fieldName');
		$this->Editor->render('fieldName');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Topics'), array('controller' => 'topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topic'), array('controller' => 'topics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sources'), array('controller' => 'sources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Source'), array('controller' => 'sources', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attachments'), array('controller' => 'attachments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attachment'), array('controller' => 'attachments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
	</ul>
</div>
