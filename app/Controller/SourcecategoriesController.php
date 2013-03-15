<?php
App::uses('AppController', 'Controller');
/**
 * Sourcecategories Controller
 *
 * @property Sourcecategory $Sourcecategory
 */
class SourcecategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sourcecategory->recursive = 0;
		$this->set('sourcecategories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sourcecategory->exists($id)) {
			throw new NotFoundException(__('Invalid sourcecategory'));
		}
		$options = array('conditions' => array('Sourcecategory.' . $this->Sourcecategory->primaryKey => $id));
		$this->set('sourcecategory', $this->Sourcecategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sourcecategory->create();
			if ($this->Sourcecategory->save($this->request->data)) {
				$this->Session->setFlash(__('The sourcecategory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sourcecategory could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Sourcecategory->exists($id)) {
			throw new NotFoundException(__('Invalid sourcecategory'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Sourcecategory->save($this->request->data)) {
				$this->Session->setFlash(__('The sourcecategory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sourcecategory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sourcecategory.' . $this->Sourcecategory->primaryKey => $id));
			$this->request->data = $this->Sourcecategory->find('first', $options);
		}
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
		$this->Sourcecategory->id = $id;
		if (!$this->Sourcecategory->exists()) {
			throw new NotFoundException(__('Invalid sourcecategory'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Sourcecategory->delete()) {
			$this->Session->setFlash(__('Sourcecategory deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sourcecategory was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
