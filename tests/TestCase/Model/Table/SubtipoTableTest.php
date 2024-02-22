<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubtipoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubtipoTable Test Case
 */
class SubtipoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubtipoTable
     */
    public $Subtipo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Subtipo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Subtipo') ? [] : ['className' => SubtipoTable::class];
        $this->Subtipo = TableRegistry::getTableLocator()->get('Subtipo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Subtipo);

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
