<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Utility\PuntosdeInteres;
use Cake\Core\App;

/**
 * PuntosInteres Controller
 *
 * @property \App\Model\Table\PuntosInteresTable $PuntosInteres
 *
 * @method \App\Model\Entity\PuntosIntere[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PuntosInteresController extends AppController
{

    protected $_categorias = [
        'Sitios Naturales' => 'Sitios Naturales',
        'Sitios Culturales' => 'Sitios Culturales',
        'Manifestaciones Culturales' => 'Manifestaciones Culturales',
        'Acontecimientos Programados' => 'Acontecimientos Programados',
        'Servicios' => 'Servicios',
        'Realizaciones Técnicas Científicas' => 'Realizaciones Técnicas Científicas'
    ];

    protected $_tipo = [
        'Cuerpos de Agua' => 'Cuerpos de Agua',
        'Lugares Pintorescos' => 'Lugares Pintorescos',
        'Arquitectura y espacios urbanos' => 'Arquitectura y espacios urbanos',
        'Artesanias y Artes' => 'Artesanias y Artes',
        'Parajes' => 'Parajes',
        'Centros Científicos y Técnicos' => 'Centros Científicos y Técnicos',
        'Explotaciones Agropecuarias y Pesqueras' => 'Explotaciones Agropecuarias y Pesqueras',
        'Alojamientos' => 'Alojamientos',
        'Estaciones de Servicio' => 'Estaciones de Servicio',
        'Restaurantes y Rotiserías' => 'Restaurantes y Rotiserías',
        'Eventos' => 'Eventos',
        'Gastronomía' => 'Gastronomía',
        'Areas protegidas' => 'Areas protegidas',
        'Lugares Históricos' => 'Lugares Históricos',
        'Costas' => 'Costas',
        'Fiestas' => 'Fiestas',
        'Sitios Arqueológicos' => 'Sitios Arqueológicos'

    ];

    protected $_subtipo = [
        'Flora' => 'Flora',
        'Lagunas' => 'Lagunas',
        'Edificaciones' => 'Edificaciones',
        'Cestería' => 'Cestería',
        'Plazoletas' => 'Plazoletas',
        'Monumentos' => 'Monumentos',
        'Paseos' => 'Paseos',
        'Parques Nacionales' => 'Parques Nacionales',
        'Centros Deportivos' => 'Centros Deportivos',
        'Agricultura' => 'Agricultura',
        'Fábricas' => 'Fábricas',
        'Alfarería' => 'Alfarería',
        'Ganadería' => 'Ganadería',
        'Dulces Típicos' => 'Dulces Típicos',
        'Madera Carpintería Escultura' => 'Madera Carpintería Escultura',
        'Miradores' => 'Miradores',
        'Parques Provinciales' => 'Parques Provinciales',
        'Complejo Histórico' => 'Complejo Histórico',
        'Campings' => 'Campings',
        'Playas' => 'Playas',
        'Capillas' => 'Capillas'
    ];

    protected $_localidades = [
        'Miraflores' => 'Miraflores',
        'Mision Nueva Pompeya' =>  'Mision Nueva Pompeya',
        'Fuerte Esperanza' => 'Fuerte Esperanza',
        'El Sauzalito' =>  'El Sauzalito',
        'Villa Rio Bermejito' => 'Villa Rio Bermejito',
        'Comandancia Frias' => 'Comandancia Frias',
        'Fortin Lavalle' => 'Fortin Lavalle',
    ];

    protected $_localidades_number = [
        1 => 'Miraflores',
        2 =>  'Mision Nueva Pompeya',
        3 => 'Comandancia Frias',
        4 =>  'El Sauzalito',
        5 => 'Villa Rio Bermejito',
        6 => 'Fortin Lavalle',

    ];


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


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $puntosInteres = $this->PuntosInteres->find('all', []);

        $this->set(compact('puntosInteres'));
    }

    /**
     * View method
     *
     * @param string|null $id Puntos Intere id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $puntosIntere = $this->PuntosInteres->get($id, [
            'contain' => [],
        ]);

        $this->set('puntosIntere', $puntosIntere);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        //consulto a la tabla y traigo los que no estan cargados
        $puntos_interes = $this->PuntosInteres->find('all', [
            'fields' => ['id_punto']
        ])->where(['localidad' => 1]);


        $puntosIntere = $this->PuntosInteres->newEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();


            if($data['file']['name'] != '')
            {

                if(($data['file']['size'] / 1024) > 5120)
                {
                    //Excedi los 2 MB, informo
                    $this->Flash->error(__('Seleccione una imágen con un tamaño inferior a 5MB'));
                } else {

                    //procedo a trabajar porque cumplio las funciones
                    //Llamo al controlador de archivos
                    $filesManagerController = New FilesManagerController();

                    $result_save = $filesManagerController->uploadFiles($data['file'], FOTOS);

                    if (!$result_save)
                    {
                        $this->Flash->error(__('Error al almacenar los cambios. Intenta nuevamente'));
                    } else {

                        $puntosIntere->photo = $result_save;
                        $puntosIntere->folder = '../'. FOTOS_SHORT;

                        $puntosIntere = $this->PuntosInteres->patchEntity($puntosIntere, $data);
                        if ($this->PuntosInteres->save($puntosIntere)) {
                            $this->Flash->success(__('The puntos intere has been saved.'));

                            return $this->redirect(['action' => 'index']);
                        }
                        $this->Flash->error(__('The puntos intere could not be saved. Please, try again.'));

                    }

                }
            } else {

                $puntosIntere = $this->PuntosInteres->patchEntity($puntosIntere, $data);
                if ($this->PuntosInteres->save($puntosIntere)) {
                    $this->Flash->success(__('The puntos intere has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The puntos intere could not be saved. Please, try again.'));

            }


        }


        //construyo los datos a mostrar
        $localidades = $this->_localidades;
        $this->set(compact('localidades'));


        //categorias

        $categorias_model = $this->loadModel('Categorias');
        $tipo_model = $this->loadModel('Tipo');
        $subtipo_model = $this->loadModel('Subtipo');


        $categorias = $categorias_model->find('list', [

            'keyField' => 'idcategorias',
            'valueField' => 'name'
        ]);

        $this->set(compact('categorias'));

        $tipo = $tipo_model->find('list', [

            'keyField' => 'idtipo',
            'valueField' => 'name'
        ]);

        $this->set(compact('tipo'));

        $subtipo = $subtipo_model->find('list', [

            'keyField' => 'idsubtipo',
            'valueField' => 'name'
        ]);

        $this->set(compact('subtipo'));


        //construyo los datos a mostrar
        $localidades_number = $this->_localidades_number;

        $this->set(compact('localidades_number'));



        $this->set(compact('puntosIntere'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Puntos Intere id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit()
    {
        $data_url = $this->request->getQuery();
        $context = $data_url['Context'];
        $categoria= $data_url['Categoria'];
        $id = $data_url['id'];

        $puntosIntere = $this->PuntosInteres->get($id, [
            'contain' => [],
        ]);

        //consulto que localidad esta cargada y en virtud de ello traigo los POI
        $puntos_interes_class = new PuntosdeInteres();
        $array_POI = $puntos_interes_class->getPOIbyId($puntosIntere->localidad);

        //debug($puntosIntere->localidad);

        //traigo todos los registros de la tabla segun localidad

        $array_POI_all_in_table = $this->PuntosInteres->find('all', [
            'fields' => ['id_punto']
        ])->where(['localidad' => $puntosIntere->localidad]);


        //debug($array_POI);



        $array_POI_filter = $this->getFilterPOI($array_POI, $array_POI_all_in_table);

        //debug($puntosIntere);

        //Agrego el actual
        $array_POI_filter[$puntosIntere->id_punto] = $array_POI[$puntosIntere->id_punto];



        $this->set(compact('array_POI_filter'));



        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            //debug($data);

            if($data['file']['name'] != '')
            {

                if(($data['file']['size'] / 1024) > 10240)
                {
                    //Excedi los 2 MB, informo
                    $this->Flash->error(__('Seleccione una imágen con un tamaño inferior a 5MB'));
                } else {

                    //procedo a trabajar porque cumplio las funciones
                    //Llamo al controlador de archivos
                    $filesManagerController = New FilesManagerController();

                    $result_save = $filesManagerController->uploadFiles($data['file'], FOTOS);

                    debug($result_save);

                    if (!$result_save)
                    {
                        $this->Flash->error(__('Error al almacenar los cambios. Intenta nuevamente'));
                    } else {

                        $puntosIntere->photo = $result_save;
                        $puntosIntere->folder = '../'. FOTOS_SHORT;

                        $puntosIntere = $this->PuntosInteres->patchEntity($puntosIntere, $data);
                        if ($this->PuntosInteres->save($puntosIntere)) {
                            $this->Flash->success(__('The puntos intere has been saved.'));

                            return $this->redirect(['action' => 'index']);
                        }
                        $this->Flash->error(__('The puntos intere could not be saved. Please, try again.'));

                    }

                }
            } else {


                $puntosIntere = $this->PuntosInteres->patchEntity($puntosIntere, $data);
                if ($this->PuntosInteres->save($puntosIntere)) {
                    $this->Flash->success(__('The puntos intere has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The puntos intere could not be saved. Please, try again.'));

            }

        }


        //construyo los datos a mostrar
        $localidades = $this->_localidades;

        $this->set(compact('localidades'));


        $categorias_model = $this->loadModel('Categorias');
        $tipo_model = $this->loadModel('Tipo');
        $subtipo_model = $this->loadModel('Subtipo');


        $categorias = $categorias_model->find('list', [

            'keyField' => 'idcategorias',
            'valueField' => 'name'
        ]);

        $this->set(compact('categorias'));

        $tipo = $tipo_model->find('list', [

            'keyField' => 'idtipo',
            'valueField' => 'name'
        ]);

        $this->set(compact('tipo'));

        $subtipo = $subtipo_model->find('list', [

            'keyField' => 'idsubtipo',
            'valueField' => 'name'
        ]);

        $this->set(compact('subtipo'));

        //construyo los datos a mostrar
        $localidades_number = $this->_localidades_number;

        $this->set(compact('localidades_number'));

        $this->set(compact('puntosIntere'));
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
        $puntosIntere = $this->PuntosInteres->get($id);
        if ($this->PuntosInteres->delete($puntosIntere)) {
            $this->Flash->success(__('The puntos intere has been deleted.'));
        } else {
            $this->Flash->error(__('The puntos intere could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function getPuntosOfInteres()
    {
        $this->autoRender = false;

        $poi_data_class = new PuntosdeInteres();


        $localidad = null;

        //comprobacion de definicion de variable
        if(isset($_POST['localidad']))
        {
            $localidad = $_POST['localidad'];
        }

        if($this->request->is('ajax')) {

            if($localidad == 'Miraflores')
            {

                //consulto a la tabla y traigo los que no estan cargados
                $puntos_interes = $this->PuntosInteres->find('all', [
                    'fields' => ['id_punto']
                ])->where(['localidad' => 1]);


                $array_new = [];
                $array_miraflores = $poi_data_class->getMiraflores();


                $resultado = $this->getFilterPOI($array_miraflores, $puntos_interes);



                return $this->json($resultado);

            } elseif ($localidad == 'Mision Nueva Pompeya') {


                $puntos_interes = $this->PuntosInteres->find('all', [
                    'fields' => ['id_punto']
                ])->where(['localidad' => 2]);

                $resultado = $this->getFilterPOI($poi_data_class->getNuevaPompeya(), $puntos_interes);

                return $this->json($resultado);


            } elseif ($localidad == 'Comandancia Frias') {

                //consulto a la tabla y traigo los que no estan cargados
                $puntos_interes = $this->PuntosInteres->find('all', [
                    'fields' => ['id_punto']
                ])->where(['localidad' => 3]);

                $resultado = $this->getFilterPOI($poi_data_class->getComandanciaFrias(), $puntos_interes);

                return $this->json($resultado);

            } elseif ($localidad == 'El Sauzalito') {

                //consulto a la tabla y traigo los que no estan cargados
                $puntos_interes = $this->PuntosInteres->find('all', [
                    'fields' => ['id_punto']
                ])->where(['localidad' => 4]);

                $resultado = $this->getFilterPOI($poi_data_class->getElSauzalito(), $puntos_interes);

                return $this->json($resultado);

            } elseif ($localidad == 'Villa Rio Bermejito') {

                //consulto a la tabla y traigo los que no estan cargados
                $puntos_interes = $this->PuntosInteres->find('all', [
                    'fields' => ['id_punto']
                ])->where(['localidad' => 5]);

                $resultado = $this->getFilterPOI($poi_data_class->getVillaRioBermejito(), $puntos_interes);

                return $this->json($resultado);

            } elseif ($localidad == 'Fortin Lavalle') {

                //consulto a la tabla y traigo los que no estan cargados
                $puntos_interes = $this->PuntosInteres->find('all', [
                    'fields' => ['id_punto']
                ])->where(['localidad' => 6]);

                $resultado = $this->getFilterPOI($poi_data_class->getFortinLavalle(), $puntos_interes);

                return $this->json($resultado);

            }

        }

        return null;

    }


    private function getFilterPOI($array_POI = null, $puntos_interes_saved = null)
    {
        $resultado = [];

        foreach ($array_POI as $clave => $valor)
        {

            $resul = false;
            foreach ($puntos_interes_saved as $p)
            {
                if($p->id_punto == $clave)
                {
                    $resul = true;
                }
            }

            if($resul == false)
            {
                $resultado[$clave] = $valor;
            }

        }
        return $resultado;

    }

    private function addPOICurrent($array_point, $id_current)
    {


    }

}
