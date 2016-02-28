<?php
namespace Forum\Model\Entity;

use Cake\ORM\Entity;

/**
 * ForumPost Entity.
 *
 * @property string $id
 * @property string $forum_id
 * @property \Forum\Model\Entity\Forum $forum
 * @property string $topic_id
 * @property \Forum\Model\Entity\ForumTopic $forum_topic
 * @property string $user_id
 * @property \Forum\Model\Entity\User $user
 * @property string $content
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class ForumPost extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
