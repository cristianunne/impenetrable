<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Subtipo Controller
 *
 * @property \App\Model\Table\SubtipoTable $Subtipo
 */
class SubtipoController extends AppController
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
        $subtipo = $this->Subtipo->find('all', []);

        $this->set(compact('subtipo'));
    }

    public function add()
    {

        $subtipo = $this->Subtipo->newEntity();

        if ($this->request->is('post')) {

            $data = $this->request->getData();

            //debug($data);

            if($data['file']['name'] != '')
            {

                if(($data['file']['size'] / 1024) > 2048)
                {
                    //Excedi los 2 MB, informo
                    $this->Flash->error(__('Seleccione una imágen con un tamaño inferior a 2MB'));
                } else {

                    $subtipo = $this->Subtipo->patchEntity($subtipo, $data);

                    //procedo a trabajar porque cumplio las funciones
                    //Llamo al controlador de archivos
                    $filesManagerController = New FilesManagerController();

                    $result_save = $filesManagerController->uploadFiles($data['file'], LOGOS);

                    if (!$result_save)
                    {
                        $this->Flash->error(__('Error al almacenar los cambios. Intenta nuevamente'));
                    } else {

                        $subtipo->icon = $result_save;
                        $subtipo->folder = '../'. LOGOS_SHORT;

                        //GUardo las actualizaciones del usuario

                        if ($this->Subtipo->save($subtipo)) {
                            $this->Flash->success(__('The tipo intere has been saved.'));

                            return $this->redirect(['action' => 'index']);
                        }

                    }

                }

            }


            /*$tipo = $this->Subtipo->patchEntity($subtipo, $data);
            if ($this->Subtipo->save($tipo)) {
                $this->Flash->success(__('The tipo intere has been saved.'));

                return $this->redirect(['action' => 'index']);
            }*/
            $this->Flash->error(__('The puntos intere could not be saved. Please, try again.'));
        }
        $this->set(compact('subtipo'));
    }


    public function edit()
    {
        $data_url = $this->request->getQuery();
        $context = $data_url['Context'];
        $categoria= $data_url['Categoria'];
        $id = $data_url['id'];


        $subtipo = $this->Subtipo->get($id, [
            'contain' => [],
        ]);


        if ($this->request->is(['patch', 'post', 'put'])) {

            $data = $this->request->getData();

            //debug($data);

            if($data['file']['name'] != '')
            {

                if(($data['file']['size'] / 1024) > 2048)
                {
                    //Excedi los 2 MB, informo
                    $this->Flash->error(__('Seleccione una imágen con un tamaño inferior a 2MB'));
                } else {

                    //procedo a trabajar porque cumplio las funciones
                    //Llamo al controlador de archivos
                    $filesManagerController = New FilesManagerController();

                    $result_save = $filesManagerController->uploadFiles($data['file'], LOGOS);
                    if (!$result_save)
                    {
                        $this->Flash->error(__('Error al almacenar los cambios. Intenta nuevamente'));
                    } else {

                        $subtipo->icon = $result_save;
                        $subtipo->folder = '../'. LOGOS_SHORT;

                        //GUardo las actualizaciones del usuario

                        if ($this->Subtipo->save($subtipo)) {
                            $this->Flash->success(__('The tipo intere has been saved.'));

                            return $this->redirect(['action' => 'index']);
                        }

                    }

                }

            }

            /*$subtipo = $this->Subtipo->patchEntity($subtipo, $this->request->getData());
            if ($this->Subtipo->save($subtipo)) {
                $this->Flash->success(__('The tipo intere has been saved.'));

                return $this->redirect(['action' => 'index']);
            }*/
            $this->Flash->error(__('The Subtipo could not be saved. Please, try again.'));
        }
        $this->set(compact('subtipo'));
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
        $puntosIntere = $this->Subtipo->get($id);
        if ($this->Subtipo->delete($puntosIntere)) {
            $this->Flash->success(__('The Tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The Tipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }




}
