<?php

class AjaxController extends AppController {

	public function tags() {
        $term=$_GET['term'];
		$this->autoRender=false;        
        $this->loadModel('Tag');
        $r=$this->Tag->find('all', array('conditions' => array('Tag.name LIKE' => '%'.$term.'%')));
        foreach ($r as $c) {
            $tmp[]=array('id' => $c['Tag']['id'],'value' => $c['Tag']['name'],'label' =>$c['Tag']['name'], 'cop' => $c['Tag']['id']); 
        }
        echo json_encode($tmp);
        exit();
    }
   

}
