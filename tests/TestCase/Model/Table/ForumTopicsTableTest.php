<?php
namespace Forum\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Forum\Model\Table\ForumTopicsTable;

/**
 * Forum\Model\Table\ForumTopicsTable Test Case
 */
class ForumTopicsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Forum\Model\Table\ForumTopicsTable
     */
    public $ForumTopics;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.forum.forum_topics',
        'plugin.forum.forums',
        'plugin.forum.forum_posts',
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
        $config = TableRegistry::exists('ForumTopics') ? [] : ['className' => 'Forum\Model\Table\ForumTopicsTable'];
        $this->ForumTopics = TableRegistry::get('ForumTopics', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ForumTopics);

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
