<div class="news form">
<?php echo $this->form->create('News', array('nctype' => 'multipart/form-data','type' => 'file', 'id' => 'inputform', 'inputDefaults' => array('label' => false, 'div' => false, 'enctype' => 'multipart/form-data'))); ?>
	<fieldset>
		<legend><?php echo __('Add News'); ?></legend>
	<?php
		echo $this->Form->input('title',array("required"=>"required"));
		echo "<label for='body'>Body</label>";
		echo $this->Form->textarea('body',array("required"=>"required", "cols"=>"30", "rows"=>"6"));
		echo "<br><br>";
		echo "<label for='resume'>Resume</label>";
		echo $this->Form->textarea('resume',array("required"=>"required", "cols"=>"30", "rows"=>"6"));
		echo $this->form->file('Attachment.filename.', array('multiple'));
		echo $this->Form->input('topic_id',array("required"=>"required"));
		echo $this->Form->input('source_id',array("required"=>"required"));
		echo $this->Form->input('who',array("required"=>"required"));
		echo $this->Form->input('where',array("required"=>"required"));
		echo $this->Form->input('tags',array("required"=>"required", "id"=>"tags" ));
	?>
		<div id="loading"><?php echo $this->Html->image('loading.gif', array('width' => '50px')); ?></div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Topics'), array('controller' => 'topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topic'), array('controller' => 'topics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sources'), array('controller' => 'sources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Source'), array('controller' => 'sources', 'action' => 'add')); ?> </li>
	</ul>
</div>
