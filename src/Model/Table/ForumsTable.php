<?php
namespace Forum\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Forum\Model\Entity\Forum;

/**
 * Forums Model
 *
 * @property \Cake\ORM\Association\HasMany $ForumPosts
 * @property \Cake\ORM\Association\HasMany $ForumTopics
 */
class ForumsTable extends Table
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

        $this->table('forums');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('ForumPosts', [
            'foreignKey' => 'forum_id',
            'className' => 'Forum.ForumPosts'
        ]);
        $this->hasMany('ForumTopics', [
            'foreignKey' => 'forum_id',
            'className' => 'Forum.ForumTopics'
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
