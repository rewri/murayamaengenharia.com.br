<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContributorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContributorsTable Test Case
 */
class ContributorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContributorsTable
     */
    public $Contributors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Contributors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Contributors') ? [] : ['className' => ContributorsTable::class];
        $this->Contributors = TableRegistry::getTableLocator()->get('Contributors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contributors);

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
