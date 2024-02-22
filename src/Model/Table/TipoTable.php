<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipo Model
 *
 * @method \App\Model\Entity\Tipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipo findOrCreate($search, callable $callback = null, $options = [])
 */
class TipoTable extends Table
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

        $this->setTable('tipo');
        $this->setDisplayField('name');
        $this->setPrimaryKey('idtipo');
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
            ->integer('idtipo')
            ->allowEmptyString('idtipo', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 250)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}
