<div class="sources view">
<h2><?php  echo __('Source'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($source['Source']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($source['Source']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sourcecategory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($source['Sourcecategory']['title'], array('controller' => 'sourcecategories', 'action' => 'view', $source['Sourcecategory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Source'), array('action' => 'edit', $source['Source']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Source'), array('action' => 'delete', $source['Source']['id']), null, __('Are you sure you want to delete # %s?', $source['Source']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sources'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Source'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sourcecategories'), array('controller' => 'sourcecategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sourcecategory'), array('controller' => 'sourcecategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related News'); ?></h3>
	<?php if (!empty($source['News'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Resume'); ?></th>
		<th><?php echo __('Topic Id'); ?></th>
		<th><?php echo __('Source Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Who'); ?></th>
		<th><?php echo __('Where'); ?></th>
		<th><?php echo __('Tags'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($source['News'] as $news): ?>
		<tr>
			<td><?php echo $news['id']; ?></td>
			<td><?php echo $news['title']; ?></td>
			<td><?php echo $news['body']; ?></td>
			<td><?php echo $news['resume']; ?></td>
			<td><?php echo $news['topic_id']; ?></td>
			<td><?php echo $news['source_id']; ?></td>
			<td><?php echo $news['created']; ?></td>
			<td><?php echo $news['who']; ?></td>
			<td><?php echo $news['where']; ?></td>
			<td><?php echo $news['tags']; ?></td>
			<td><?php echo $news['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'news', 'action' => 'view', $news['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'news', 'action' => 'edit', $news['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'news', 'action' => 'delete', $news['id']), null, __('Are you sure you want to delete # %s?', $news['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
