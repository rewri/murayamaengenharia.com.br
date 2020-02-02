<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projects Model
 *
 * @property \App\Model\Table\ProjectCategoriesTable|\Cake\ORM\Association\BelongsTo $ProjectCategories
 * @property \App\Model\Table\ProjectImagesTable|\Cake\ORM\Association\HasMany $ProjectImages
 *
 * @method \App\Model\Entity\Project get($primaryKey, $options = [])
 * @method \App\Model\Entity\Project newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Project[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Project|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Project[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Project findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjectsTable extends Table
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

        $this->setTable('projects');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ProjectCategories', [
            'foreignKey' => 'project_category_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ProjectImages', [
            'foreignKey' => 'project_id'
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
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 50)
            ->requirePresence('title', 'create')
            ->allowEmptyString('title', false);

        $validator
            ->scalar('subtitle')
            ->maxLength('subtitle', 80)
            ->requirePresence('subtitle', 'create')
            ->allowEmptyString('subtitle', false);

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->allowEmptyFile('image', false);

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->allowEmptyDate('date', false);

        $validator
            ->boolean('enabled')
            ->allowEmptyString('enabled', false);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['project_category_id'], 'ProjectCategories'));

        return $rules;
    }

    public function getAll($limit = 6)
    {
        $query = array(
            'conditions' => array(
                'Projects.enabled' => true
            ),
            'contain' => array(
                'ProjectCategories'
            ),
            'order' => array(
                'RAND()'
            ),
            'limit' => $limit,
            'recursive' => 0
        );
        return $this->find('all', $query);
    }

    public function getAllByCategory($categoryId = null, $limit = 30)
    {
        $query = array(
            'conditions' => array(
                'Projects.enabled' => true,
                'Projects.project_category_id' => $categoryId,
            ),
            'contain' => array(
                'ProjectCategories'
            ),
            'order' => array(
                'RAND()'
            ),
            'limit' => $limit,
            'recursive' => 0
        );
        return $this->find('all', $query);
    }

}
