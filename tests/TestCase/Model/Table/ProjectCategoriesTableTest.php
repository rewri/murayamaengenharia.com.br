<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectCategoriesTable Test Case
 */
class ProjectCategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjectCategoriesTable
     */
    public $ProjectCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProjectCategories',
        'app.Projects'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProjectCategories') ? [] : ['className' => ProjectCategoriesTable::class];
        $this->ProjectCategories = TableRegistry::getTableLocator()->get('ProjectCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProjectCategories);

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
