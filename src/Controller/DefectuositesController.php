<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Defectuosites Controller
 *
 * @property \App\Model\Table\DefectuositesTable $Defectuosites
 *
 * @method \App\Model\Entity\Defectuosite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DefectuositesController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Vehicules']
        ];
        $defectuosites = $this->paginate($this->Defectuosites);

        $this->set(compact('defectuosites'));
    }

    /**
     * View method
     *
     * @param string|null $id Defectuosite id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $defectuosite = $this->Defectuosites->get($id, [
            'contain' => ['Vehicules']
        ]);

        $this->set('defectuosite', $defectuosite);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $defectuosite = $this->Defectuosites->newEntity();
        if ($this->request->is('post')) {
            $defectuosite = $this->Defectuosites->patchEntity($defectuosite, $this->request->getData());
            if ($this->Defectuosites->save($defectuosite)) {
                $this->Flash->success(__('The defectuosite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The defectuosite could not be saved. Please, try again.'));
        }
        $vehicules = $this->Defectuosites->Vehicules->find('list', ['limit' => 200]);
        $this->set(compact('defectuosite', 'vehicules'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Defectuosite id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $defectuosite = $this->Defectuosites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $defectuosite = $this->Defectuosites->patchEntity($defectuosite, $this->request->getData());
            if ($this->Defectuosites->save($defectuosite)) {
                $this->Flash->success(__('The defectuosite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The defectuosite could not be saved. Please, try again.'));
        }
        $vehicules = $this->Defectuosites->Vehicules->find('list', ['limit' => 200]);
        $this->set(compact('defectuosite', 'vehicules'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Defectuosite id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $defectuosite = $this->Defectuosites->get($id);
        if ($this->Defectuosites->delete($defectuosite)) {
            $this->Flash->success(__('The defectuosite has been deleted.'));
        } else {
            $this->Flash->error(__('The defectuosite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
