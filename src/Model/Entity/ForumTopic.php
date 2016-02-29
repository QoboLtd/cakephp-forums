<?php
namespace Forum\Model\Entity;

use Cake\ORM\Entity;

/**
 * ForumTopic Entity.
 *
 * @property string $id
 * @property string $forum_id
 * @property \Forum\Model\Entity\Forum $forum
 * @property string $user_id
 * @property \Forum\Model\Entity\User $user
 * @property string $name
 * @property string $content
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class ForumTopic extends Entity
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
