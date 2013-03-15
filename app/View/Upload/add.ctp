<?php

echo $this->form->create('Upload', array('type' => 'file', 'id' => 'inputform', 'inputDefaults' => array('label' => false, 'div' => false)));
?>
<div>
<table>
	<tr>
		<td>Nama </td>	
		<td><?php echo $this->form->input('nama', array('class'=>'propinsi'));?></td>
	</tr>
	<tr>
		<td>Masukkan Gambar</td>
		<td><?php echo $this->form->file('gambar');?></td>
	</tr>
	<tr>
		<td>
		<?php echo $this->form->end('Upload');?>
		</td>
	</tr>
</table>
</div>
