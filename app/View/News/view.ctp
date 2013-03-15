<div class="news view">
<h2><?php  echo __('News'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($news['News']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($news['News']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($news['News']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resume'); ?></dt>
		<dd>
			<?php echo h($news['News']['resume']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Attachment'); ?></dt>
		<dd>
			<?php foreach ($news['Attachment'] as $attachment): ?>
			
			

			<?php
				switch ($attachment['type']) {
					case "jpg":
					case "gif":
					case "png":
					case "bmp":
						echo $this->Html->image($attachment['filename'], array('alt' => 'CakePHP'));
						break;
					case "txt":
						$path_txt = $this->webroot."img/".$attachment['filename'];
						echo "<iframe src=".$path_txt." width=400 height=400 frameborder=0 ></iframe>";
						break;
					case "mp4" or "MP4":
					case "FLV" or "flv":
					case "3gp" or "3GP":
					case "mkv" or "MKV":
						$path_txt = $this->webroot."img/".$attachment['filename'];
						echo "<video width=320 height=240 controls><source src=".$path_txt."></video>";
						break;
					
					default:
						echo $attachment['filename'];
						break;
				}

			?>

			<br>
			<?php endforeach; ?>
		</dd>
		<dt><?php echo __('Topic'); ?></dt>
		<dd>
			<?php echo $this->Html->link($news['Topic']['name'], array('controller' => 'topics', 'action' => 'view', $news['Topic']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Source'); ?></dt>
		<dd>
			<?php echo $this->Html->link($news['Source']['title'], array('controller' => 'sources', 'action' => 'view', $news['Source']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($news['News']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Who'); ?></dt>
		<dd>
			<?php echo h($news['News']['who']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Where'); ?></dt>
		<dd>
			<?php echo h($news['News']['where']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tags'); ?></dt>
		<dd>
			<?php echo h($news['News']['tags']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($news['User']['id'], array('controller' => 'users', 'action' => 'view', $news['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit News'), array('action' => 'edit', $news['News']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete News'), array('action' => 'delete', $news['News']['id']), null, __('Are you sure you want to delete # %s?', $news['News']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Topics'), array('controller' => 'topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topic'), array('controller' => 'topics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sources'), array('controller' => 'sources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Source'), array('controller' => 'sources', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attachments'), array('controller' => 'attachments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attachment'), array('controller' => 'attachments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Attachments'); ?></h3>
	<?php if (!empty($news['Attachment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('News Id'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($news['Attachment'] as $attachment): ?>
		<tr>
			<td><?php echo $attachment['id']; ?></td>
			<td><?php echo $attachment['news_id']; ?></td>
			<td><?php echo $attachment['filename']; ?></td>
			<td><?php echo $attachment['type']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attachments', 'action' => 'view', $attachment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attachments', 'action' => 'edit', $attachment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attachments', 'action' => 'delete', $attachment['id']), null, __('Are you sure you want to delete # %s?', $attachment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Attachment'), array('controller' => 'attachments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
