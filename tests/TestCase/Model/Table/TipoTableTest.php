<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoTable Test Case
 */
class TipoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoTable
     */
    public $Tipo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tipo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tipo') ? [] : ['className' => TipoTable::class];
        $this->Tipo = TableRegistry::getTableLocator()->get('Tipo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tipo);

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
