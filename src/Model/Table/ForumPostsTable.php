<?php
namespace Forum\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Forum\Model\Entity\ForumPost;

/**
 * ForumPosts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Forums
 * @property \Cake\ORM\Association\BelongsTo $ForumTopics
 * @property \Cake\ORM\Association\BelongsTo $Users
 */
class ForumPostsTable extends Table
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

        $this->table('forum_posts');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Forums', [
            'foreignKey' => 'forum_id',
            'joinType' => 'INNER',
            'className' => 'Forum.Forums'
        ]);
        $this->belongsTo('ForumTopics', [
            'foreignKey' => 'topic_id',
            'joinType' => 'INNER',
            'className' => 'Forum.ForumTopics'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
            'className' => 'Forum.Users'
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
            ->requirePresence('content', 'create')
            ->notEmpty('content');

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
        $rules->add($rules->existsIn(['forum_id'], 'Forums'));
        $rules->add($rules->existsIn(['topic_id'], 'ForumTopics'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
