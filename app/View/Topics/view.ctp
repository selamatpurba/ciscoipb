<div class="topics view">
<h2><?php  echo __('Topic'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($topic['Topic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($topic['Topic']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Topic'), array('action' => 'edit', $topic['Topic']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Topic'), array('action' => 'delete', $topic['Topic']['id']), null, __('Are you sure you want to delete # %s?', $topic['Topic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Topics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related News'); ?></h3>
	<?php if (!empty($topic['News'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Resume'); ?></th>
		<th><?php echo __('Attachment'); ?></th>
		<th><?php echo __('Topic Id'); ?></th>
		<th><?php echo __('Source Id'); ?></th>
		<th><?php echo __('Input Date'); ?></th>
		<th><?php echo __('Publish Date'); ?></th>
		<th><?php echo __('Who'); ?></th>
		<th><?php echo __('Where'); ?></th>
		<th><?php echo __('Tags'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($topic['News'] as $news): ?>
		<tr>
			<td><?php echo $news['id']; ?></td>
			<td><?php echo $news['title']; ?></td>
			<td><?php echo $news['body']; ?></td>
			<td><?php echo $news['resume']; ?></td>
			<td><?php echo $news['attachment']; ?></td>
			<td><?php echo $news['topic_id']; ?></td>
			<td><?php echo $news['source_id']; ?></td>
			<td><?php echo $news['input_date']; ?></td>
			<td><?php echo $news['publish_date']; ?></td>
			<td><?php echo $news['who']; ?></td>
			<td><?php echo $news['where']; ?></td>
			<td><?php echo $news['tags']; ?></td>
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
