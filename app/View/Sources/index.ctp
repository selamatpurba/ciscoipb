<div class="sources index">
	<h2><?php echo __('Sources'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('sourcecategory_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sources as $source): ?>
	<tr>
		<td><?php echo h($source['Source']['id']); ?>&nbsp;</td>
		<td><?php echo h($source['Source']['title']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($source['Sourcecategory']['title'], array('controller' => 'sourcecategories', 'action' => 'view', $source['Sourcecategory']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $source['Source']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $source['Source']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $source['Source']['id']), null, __('Are you sure you want to delete # %s?', $source['Source']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Source'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sourcecategories'), array('controller' => 'sourcecategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sourcecategory'), array('controller' => 'sourcecategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
