<?php
App::uses('AppController', 'Controller');
/**
 * News Controller
 *
 * @property News $News
 */
class NewsController extends AppController {
public $names = 'News';
public $helpers =array('Html');

/**
 * index method
 *
 * @return void
 */

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index', 'view');
	}


	public function index() {
		$this->News->recursive = 0;
		$this->set('news', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->loadModel('Attachment');
		if (!$this->News->exists($id)) {
			throw new NotFoundException(__('Invalid news'));
		}

		$options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
		$this->set('news', $this->News->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->loadModel('Attachment');
		if ($this->request->is('post')) {
			$this->request->data['News']['user_id'] = $this->Auth->user('id');
			If(!empty($this->request->data)){
			   $data = array (
					'News' => array(
						'title' => $this->data['title'],
						'body' => $this->data['body'],
						'resume' => $this->data['resume'],
						'topic_id' => $this->data['topic_id'],
						'source_id' => $this->data['source_id'],
						'who' => $this->data['who'],
						'where' => $this->data['where'],
						'tags' => $this->data['tags'],
						'user_id' => $this->Session->read('Auth.User.id')
					),		
				);
			  //$this->Attachment->save($this->request->data[]);
			  //debug($rename);
			  //exit();
				if($this->News->saveAll($data)){
					$news_id = $this->News->getLastInsertId();
					$singkat=$this->request->data['Attachment']['filename'];
					$n=count($singkat);
					for($a=0;$a<$n;$a++) {
						if($singkat[$a]['tmp_name']) {
							//debug($singkat[$a]['name']);					
							$upload = $singkat[$a]['tmp_name'];
							$name = $singkat[$a]['name'];
							$ext = pathinfo($name, PATHINFO_EXTENSION);
							$type = $singkat[$a]['type'];
							$size = $singkat[$a]['size'];
							$tanggal = date('ymd-his');
							$direktori = 'img/$name';				
							If(!empty($type)) {
								$path=dirname(dirname(__FILE__));
								//debug($path);
								$rename = sha1($name.$ext.date("YmdHis")).".".$ext;
								move_uploaded_file($upload, $path.'/webroot/img/'.$rename);
								$sql="INSERT INTO attachments (`news_id`,`filename`,`type`) VALUES('".$news_id."', '".$rename."', '".$ext."')";
								$this->Attachment->query($sql);
							}
						}		
					}
					$this->Session->setFlash('Gambar Berhasil Disimpan');
					$this->redirect(array ('controller' =>'News','action' => 'index'));
				}
				else {
					$this->Session->setFlash('Gagal Disimpan');
					$this->redirect(array ('controller' =>'News','action' => 'index'));
				}
			}
		}	
		$topics = $this->News->Topic->find('list');
		$sources = $this->News->Source->find('list');
		$this->set(compact('topics', 'sources'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->loadModel('Attachment');
		if (!$this->News->exists($id)) {
			throw new NotFoundException(__('Invalid news'));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
				$data = array (
					'News' => array(
						'title' => $this->data['News']['title'],
						'body' => $this->data['News']['body'],
						'resume' => $this->data['News']['resume'],
						'topic_id' => $this->data['News']['topic_id'],
						'source_id' => $this->data['News']['source_id'],
						'who' => $this->data['News']['who'],
						'where' => $this->data['News']['where'],
						'tags' => $this->data['News']['tags'],
					),
				);
				$this->News->id= $id;

			if($this->News->save($data)){
				$sql1="Delete from `attachments` WHERE  `news_id` = '".$id."'";
				$this->Attachment->query($sql1);
				$singkat=$this->request->data['Attachment']['filename'];
				$n=count($singkat);
				for($a=0;$a<$n;$a++) {
					if($singkat[$a]['tmp_name']) {
						//debug($singkat[$a]['name']);					
						$upload = $singkat[$a]['tmp_name'];
						$name = $singkat[$a]['name'];
						$ext = pathinfo($name, PATHINFO_EXTENSION);
						$type = $singkat[$a]['type'];
						$size = $singkat[$a]['size'];
						$tanggal = date('ymd-his');
						$direktori = 'img/$name';						
						If(!empty($type)) {
							$path=dirname(dirname(__FILE__));
							//debug($path);
							$rename = sha1($name.$ext.date("YmdHis")).".".$ext;
							move_uploaded_file($upload, $path.'/webroot/img/'.$rename);
							$sql="INSERT INTO attachments (`news_id`,`filename`,`type`) VALUES('".$id."', '".$rename."', '".$ext."')";
							$this->Attachment->query($sql);
						}
					}		
				}
				$this->Session->setFlash('Gambar Berhasil Disimpan');
				$this->redirect(array ('controller' =>'News','action' => 'index'));
			}else {
				$this->Session->setFlash(__('The news could not be saved. Please, try again.'));
			}
		}else{
			$options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
			$this->request->data = $this->News->find('first', $options);
		}
		$topics = $this->News->Topic->find('list');
		$sources = $this->News->Source->find('list');
		$this->set(compact('topics', 'sources'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->loadModel('Attachment');
		$data = $this->News->Attachment->find('first', array(
			'conditions' => array('News.id' => $id),
			'fields' => array('Attachment.filename')));
		$image_name = $data['Attachment']['filename'];
		//debug($data);
		//exit();
		
		$path = 'img/'.$image_name;
		$hapus = unlink($path);
		
		$this->News->id = $id;
		if (!$this->News->exists()) {
			throw new NotFoundException(__('Invalid news'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->News->delete()) {
		    $sql1="Delete from `attachments` WHERE  `news_id` = '".$id."'";
			$this->News->query($sql1);
			$this->Session->setFlash(__('News deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('News was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	
}
