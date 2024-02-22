<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subtipo Model
 *
 * @method \App\Model\Entity\Subtipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Subtipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Subtipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Subtipo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subtipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subtipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Subtipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Subtipo findOrCreate($search, callable $callback = null, $options = [])
 */
class SubtipoTable extends Table
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

        $this->setTable('subtipo');
        $this->setDisplayField('name');
        $this->setPrimaryKey('idsubtipo');
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
            ->integer('idsubtipo')
            ->allowEmptyString('idsubtipo', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('icon')
            ->maxLength('icon', 255)
            ->allowEmptyString('icon');

        $validator
            ->scalar('folder')
            ->maxLength('folder', 500)
            ->allowEmptyString('folder');

        return $validator;
    }
}
