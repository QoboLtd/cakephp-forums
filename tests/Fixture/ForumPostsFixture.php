<?php
namespace Forum\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ForumPostsFixture
 *
 */
class ForumPostsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'forum_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'topic_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'content' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'forum_id' => ['type' => 'index', 'columns' => ['forum_id'], 'length' => []],
            'topic_id' => ['type' => 'index', 'columns' => ['topic_id'], 'length' => []],
            'user_id' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'forum_posts_ibfk_1' => ['type' => 'foreign', 'columns' => ['forum_id'], 'references' => ['forums', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'forum_posts_ibfk_2' => ['type' => 'foreign', 'columns' => ['topic_id'], 'references' => ['forum_topics', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'forum_posts_ibfk_3' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '522bd3fe-ecf0-4e00-9f24-a5e36c3bbd5a',
            'forum_id' => 'ac226c8a-4b38-4597-b137-db72d1181035',
            'topic_id' => '5b7a6224-2422-4a07-a32c-6eb19023e736',
            'user_id' => '4feeb719-403b-4a93-9e52-c8b766cd3cb9',
            'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'created' => '2016-02-28',
            'modified' => '2016-02-28'
        ],
    ];
}
