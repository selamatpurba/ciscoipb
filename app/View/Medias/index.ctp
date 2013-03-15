<?php
     echo $this->Form->create('Media', array('type' => 'file'));
        echo $this->Form->input('name');
        echo $this->Form->input('image', array('type' => 'file'));
        echo $this->Form->input('swf', array('type' => 'file'));
        echo $this->Form->input('zip', array('type' => 'file'));
        echo $this->Form->input('status');
        echo $this->Form->end(__('Submit'));
	
	var_dump($this->Media->AttachmentImage);
        var_dump($this->Media->AttachmentSwf);
        var_dump($this->Media->AttachmentZip);
	
	?>