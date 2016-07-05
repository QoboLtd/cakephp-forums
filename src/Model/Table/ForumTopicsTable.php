<?php
namespace Forum\Model\Table;

use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Utility\Inflector;
use Cake\Validation\Validator;
use Forum\Model\Entity\ForumTopic;
use \ArrayObject;

/**
 * ForumTopics Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Forums
 * @property \Cake\ORM\Association\BelongsTo $Users
 */
class ForumTopicsTable extends Table
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

        $this->table('forum_topics');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Forums', [
            'foreignKey' => 'forum_id',
            'joinType' => 'INNER',
            'className' => 'Forum.Forums'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
            'className' => 'Forum.Users'
        ]);
        $this->hasMany('ForumPosts', [
            'foreignKey' => 'topic_id',
            'className' => 'Forum.ForumPosts'
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
            ->notEmpty('slug');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }

    /**
     * beforeRules
     *
     * @param Event $event Event
     * @param EntityInterface $entity Entity
     * @param ArrayObject $options Options
     * @return void
     */
    public function beforeRules(Event $event, EntityInterface $entity, ArrayObject $options)
    {
        $slug = Inflector::slug(strtolower($entity->name));
        $entity->slug = $slug;
    }
}
