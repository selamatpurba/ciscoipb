<div class="modules view">
<h2><?php  echo __('Module'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($module['Module']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('News'); ?></dt>
		<dd>
			<?php echo $this->Html->link($module['News']['title'], array('controller' => 'news', 'action' => 'view', $module['News']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($module['Module']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($module['Module']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($module['Module']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Module'), array('action' => 'edit', $module['Module']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Module'), array('action' => 'delete', $module['Module']['id']), null, __('Are you sure you want to delete # %s?', $module['Module']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
