<?php
class UploadController extends AppController {
	public $names = 'Upload';
	
	
	function index() {
		$this->set('uploads', $this->paginate());
	}

	public function add() {
		If(!empty($this->request->data)){
			$upload = $this->request->data['Upload']['gambar']['tmp_name'];
			$name = $this->request->data['Upload']['gambar']['name'];
			$ext = pathinfo($name, PATHINFO_EXTENSION);
			$type = $this->request->data['Upload']['gambar']['type'];
			$size = $this->request->data['Upload']['gambar']['size'];
			$tanggal = date('ymd-his');
			$direktori = 'img/$name';

			If(!empty($type)) {
			
					Copy($upload, $direktori);
					$rename = $tanggal.".".$ext;
					Rename($direktori, "img/$rename");
				
			}
			if($this->Upload->save(array (
				'nama' => $this->data['Upload']['nama'],
				'gambar' => $rename
			))){
				$this->Session->setFlash('Gambar Berhasil Disimpan');
				$this->redirect(array ('controller' =>'Upload','action' => 'index'));
			}
			else {
				$this->Session->setFlash('Gagal Disimpan');
				$this->redirect(array ('controller' =>'Upload','action' => 'index'));
			}
		}
	}
	
	function delete($id = null) {
		$data = $this->Upload->find('first', array(
			'conditions' => array('Upload.id' => $id),
			'fields' => array('Upload.gambar')));
		$image_name = $data['Upload']['gambar'];

		$path = 'img/'.$image_name;
		$hapus = unlink($path);
	
		if($hapus){
			if ($this->Upload->delete($id)) {
				$this->Session->setFlash('Berhasil 		Dihapus');
				$this->redirect(array('action' => 'index'));
			}
		}
		else {
			$this->Session->setFlash('Gagal Dihapus');
			$this->redirect(array('action' => 'index'));
		}
	}
}
?>
