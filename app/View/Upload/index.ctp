
<table>
<tr>
	<td> No </td>
	<td> Nama </td>
	<td> Gambar </td>
	<td> Aksi </td>
</tr>
<?php
$i = 1;
foreach ($uploads as $upload):
$gambar = $upload['Upload']['gambar'];
?>
<tr>
	<td> <?php echo $i; ?> </td>
	<td> <?php echo $upload['Upload']['nama']; 	?> 	</td>
	<td> <?php echo $this->Html->image("$gambar", array('width' => 260, 'height' => 350)); ?> </td>
	<td> <?php echo $this->Html->link(__('Delete', 	true), array('action' => 'delete', 	$upload['Upload']['id']), null, sprintf(__('Yakin Record Dihapus?', true))); 	?> </td>
	<td>
		<?php echo $this->Html->link('add', array('controller' => 'Upload', 'action' => 'add')); ?>
	</td>
</tr>
<?php 
$i++;
endforeach;
?>
</table>
