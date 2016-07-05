<?php
namespace Forum\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Forum\Model\Table\ForumsTable;

/**
 * Forum\Model\Table\ForumsTable Test Case
 */
class ForumsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Forum\Model\Table\ForumsTable
     */
    public $Forums;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.forum.forums',
        'plugin.forum.forum_posts',
        'plugin.forum.forum_topics',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Forums') ? [] : ['className' => 'Forum\Model\Table\ForumsTable'];
        $this->Forums = TableRegistry::get('Forums', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Forums);

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
}
