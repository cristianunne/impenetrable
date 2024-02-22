<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PuntosInteres Model
 *
 * @method \App\Model\Entity\PuntosIntere get($primaryKey, $options = [])
 * @method \App\Model\Entity\PuntosIntere newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PuntosIntere[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PuntosIntere|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PuntosIntere saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PuntosIntere patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PuntosIntere[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PuntosIntere findOrCreate($search, callable $callback = null, $options = [])
 */
class PuntosInteresTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('puntos_interes');
        $this->setDisplayField('idpuntos_interes');
        $this->setPrimaryKey('idpuntos_interes');

        $this->hasOne('Categorias', [
            'foreignKey' => 'idcategorias',
            'bindingKey' => 'categorias_idcategorias', //actual
            'joinType' => 'INNER'
        ]);

        $this->hasOne('Tipo', [
            'foreignKey' => 'idtipo',
            'bindingKey' => 'tipo_idtipo', //actual
            'joinType' => 'INNER'
        ]);

        $this->hasOne('Subtipo', [
            'foreignKey' => 'idsubtipo',
            'bindingKey' => 'subtipo_idsubtipo', //actual
            'joinType' => 'INNER'
        ]);

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('idpuntos_interes')
            ->allowEmptyString('idpuntos_interes', null, 'create');

        $validator
            ->integer('localidad')
            ->requirePresence('localidad', 'create')
            ->notEmptyString('localidad');

        $validator
            ->integer('id_punto')
            ->requirePresence('id_punto', 'create')
            ->notEmptyString('id_punto');

        $validator
            ->scalar('description')
            ->maxLength('description', 16777215)
            ->allowEmptyString('description');

        $validator
            ->scalar('resumen')
            ->maxLength('resumen', 500)
            ->allowEmptyString('resumen');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('name_localidad')
            ->maxLength('name_localidad', 100)
            ->requirePresence('name_localidad', 'create')
            ->notEmptyString('name_localidad');

        $validator
            ->integer('categorias_idcategorias')
            ->allowEmptyString('categorias_idcategorias');

        $validator
            ->integer('tipo_idtipo')
            ->allowEmptyString('tipo_idtipo');

        $validator
            ->integer('subtipo_idsubtipo')
            ->allowEmptyString('subtipo_idsubtipo');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->allowEmptyString('photo');

        $validator
            ->scalar('folder')
            ->maxLength('folder', 255)
            ->allowEmptyString('folder');

        return $validator;
    }
}
