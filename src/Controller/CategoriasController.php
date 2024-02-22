<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Categorias Controller
 *
 * @property \App\Model\Table\CategoriasTable $Categorias
 */
class CategoriasController extends AppController
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
        $categorias = $this->Categorias->find('all', []);

        $this->set(compact('categorias'));
    }

    public function add()
    {
        $data_url = $this->request->getQuery();
        //$context = $data_url['Context'];
        $categoria= $data_url['Categoria'];


        $categorias = $this->Categorias->newEntity();


        if ($this->request->is('post')) {
            $categorias = $this->Categorias->patchEntity($categorias, $this->request->getData());
            if ($this->Categorias->save($categorias)) {
                $this->Flash->success(__('The tipo intere has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The puntos intere could not be saved. Please, try again.'));
        }
        $this->set(compact('categorias'));
    }



    public function edit()
    {
        $data_url = $this->request->getQuery();
        $context = $data_url['Context'];
        $categoria= $data_url['Categoria'];
        $id = $data_url['id'];


        $categorias = $this->Categorias->get($id, [
            'contain' => [],
        ]);


        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipo = $this->Categorias->patchEntity($categorias, $this->request->getData());
            if ($this->Categorias->save($categorias)) {
                $this->Flash->success(__('The tipo intere has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The puntos intere could not be saved. Please, try again.'));
        }
        $this->set(compact('categorias'));
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
        $puntosIntere = $this->Categorias->get($id);
        if ($this->Categorias->delete($puntosIntere)) {
            $this->Flash->success(__('The Category has been deleted.'));
        } else {
            $this->Flash->error(__('The Category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



}
