<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tipo Controller
 *
 * @property \App\Model\Table\TipoTable $Tipo
 */
class TipoController extends AppController
{

    public function isAuthorized($user)
    {

        if(isset($user['role']) and $user['role'] === 'user')
        {
            if(in_array($this->request->getParam('action'), ['index', 'add', 'edit']))
            {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }

    public function index()
    {

        $tipo = $this->Tipo->find('all', []);

        $this->set(compact('tipo'));
    }


    public function add()
    {

        $tipo = $this->Tipo->newEntity();

        if ($this->request->is('post')) {
            $tipo = $this->Tipo->patchEntity($tipo, $this->request->getData());
            if ($this->Tipo->save($tipo)) {
                $this->Flash->success(__('The tipo intere has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The puntos intere could not be saved. Please, try again.'));
        }
        $this->set(compact('tipo'));
    }

    public function edit()
    {
        $data_url = $this->request->getQuery();
        $context = $data_url['Context'];
        $categoria= $data_url['Categoria'];
        $id = $data_url['id'];


        $tipo = $this->Tipo->get($id, [
            'contain' => [],
        ]);


        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipo = $this->Tipo->patchEntity($tipo, $this->request->getData());
            if ($this->Tipo->save($tipo)) {
                $this->Flash->success(__('The tipo intere has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The puntos intere could not be saved. Please, try again.'));
        }
        $this->set(compact('tipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Puntos Intere id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $puntosIntere = $this->Tipo->get($id);
        if ($this->Tipo->delete($puntosIntere)) {
            $this->Flash->success(__('The Tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The Tipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


}
