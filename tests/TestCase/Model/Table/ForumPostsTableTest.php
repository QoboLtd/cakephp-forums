<?php
namespace Forum\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Forum\Model\Table\ForumPostsTable;

/**
 * Forum\Model\Table\ForumPostsTable Test Case
 */
class ForumPostsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Forum\Model\Table\ForumPostsTable
     */
    public $ForumPosts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.forum.forum_posts',
        'plugin.forum.forums',
        'plugin.forum.forum_topics',
        'plugin.forum.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ForumPosts') ? [] : ['className' => 'Forum\Model\Table\ForumPostsTable'];
        $this->ForumPosts = TableRegistry::get('ForumPosts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ForumPosts);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
