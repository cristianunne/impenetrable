<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Novedades Model
 *
 * @method \App\Model\Entity\Novedade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Novedade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Novedade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Novedade|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Novedade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Novedade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Novedade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Novedade findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NovedadesTable extends Table
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

        $this->setTable('novedades');
        $this->setDisplayField('idnovedades');
        $this->setPrimaryKey('idnovedades');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        /*$validator
            ->integer('idnovedades')
            ->allowEmptyString('idnovedades', null, 'create');

        $validator
            ->scalar('tittle')
            ->maxLength('tittle', 250)
            ->requirePresence('tittle', 'create')
            ->notEmptyString('tittle');

        $validator
            ->scalar('content')
            ->allowEmptyString('content');

        $validator
            ->scalar('category')
            ->maxLength('category', 45)
            ->allowEmptyString('category');

        $validator
            ->scalar('folder')
            ->maxLength('folder', 255)
            ->allowEmptyString('folder');

        return $validator;*/
        $validator
            ->integer('idnovedades')
            ->allowEmptyString('idnovedades', null, 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 150)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('producto')
            ->maxLength('producto', 255)
            ->requirePresence('producto', 'create')
            ->notEmptyString('producto');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 255)
            ->allowEmptyString('direccion');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 15)
            ->allowEmptyString('telefono');

        $validator
            ->scalar('email')
            ->maxLength('email', 255)
            ->allowEmptyString('email');

        $validator
            ->scalar('instagram')
            ->maxLength('instagram', 255)
            ->allowEmptyString('instagram');

        $validator
            ->scalar('facebook')
            ->maxLength('facebook', 255)
            ->allowEmptyString('facebook');
        
        $validator
            ->scalar('web')
            ->maxLength('web', 255)
            ->allowEmptyString('web');

        $validator
            ->scalar('foto_dir')
            ->maxLength('foto_dir', 255)
            ->allowEmptyString('foto_dir');

        $validator
            ->scalar('localidad')
            ->maxLength('localidad', 100)
            ->allowEmptyString('localidad');

        $validator
            ->scalar('color')
            ->maxLength('color', 6)
            ->allowEmptyString('color');


        return $validator;
    }
}
