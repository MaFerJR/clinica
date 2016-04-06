<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cuartos Controller
 *
 * @property \App\Model\Table\CuartosTable $Cuartos */
class CuartosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cuartos = $this->paginate($this->Cuartos);

        $this->set(compact('cuartos'));
        $this->set('_serialize', ['cuartos']);
    }

    /**
     * View method
     *
     * @param string|null $id Cuarto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cuarto = $this->Cuartos->get($id, [
            'contain' => []
        ]);

        $this->set('cuarto', $cuarto);
        $this->set('_serialize', ['cuarto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cuarto = $this->Cuartos->newEntity();
        if ($this->request->is('post')) {
            $cuarto = $this->Cuartos->patchEntity($cuarto, $this->request->data);
            if ($this->Cuartos->save($cuarto)) {
                $this->Flash->success(__('The cuarto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cuarto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cuarto'));
        $this->set('_serialize', ['cuarto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cuarto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cuarto = $this->Cuartos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cuarto = $this->Cuartos->patchEntity($cuarto, $this->request->data);
            if ($this->Cuartos->save($cuarto)) {
                $this->Flash->success(__('The cuarto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cuarto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cuarto'));
        $this->set('_serialize', ['cuarto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cuarto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cuarto = $this->Cuartos->get($id);
        if ($this->Cuartos->delete($cuarto)) {
            $this->Flash->success(__('The cuarto has been deleted.'));
        } else {
            $this->Flash->error(__('The cuarto could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
