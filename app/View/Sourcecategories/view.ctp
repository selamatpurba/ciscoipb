<div class="sourcecategories view">
<h2><?php  echo __('Sourcecategory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sourcecategory['Sourcecategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($sourcecategory['Sourcecategory']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sourcecategory'), array('action' => 'edit', $sourcecategory['Sourcecategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sourcecategory'), array('action' => 'delete', $sourcecategory['Sourcecategory']['id']), null, __('Are you sure you want to delete # %s?', $sourcecategory['Sourcecategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sourcecategories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sourcecategory'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sources'), array('controller' => 'sources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Source'), array('controller' => 'sources', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sources'); ?></h3>
	<?php if (!empty($sourcecategory['Source'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Sourcecategory Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sourcecategory['Source'] as $source): ?>
		<tr>
			<td><?php echo $source['id']; ?></td>
			<td><?php echo $source['title']; ?></td>
			<td><?php echo $source['sourcecategory_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sources', 'action' => 'view', $source['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sources', 'action' => 'edit', $source['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sources', 'action' => 'delete', $source['id']), null, __('Are you sure you want to delete # %s?', $source['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Source'), array('controller' => 'sources', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
