<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contributors Model
 *
 * @method \App\Model\Entity\Contributor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contributor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contributor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contributor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contributor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contributor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contributor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contributor findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContributorsTable extends Table
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

        $this->setTable('contributors');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

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
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 80)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        $validator
            ->scalar('nickname')
            ->maxLength('nickname', 80)
            ->allowEmptyString('nickname');

        $validator
            ->scalar('role')
            ->maxLength('role', 80)
            ->requirePresence('role', 'create')
            ->allowEmptyString('role', false);

        $validator
            ->boolean('enabled')
            ->allowEmptyString('enabled', false);

        return $validator;
    }


    public function getAll()
    {
        $query = array(
            'conditions' => array(
                'enabled' => true
            ),
            'order' => array(
                'order' => 'asc',
                'name' => 'asc'
            ),
            'recursive' => 0
        );
        return $this->find('all', $query);
    }
}
