<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CuartosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CuartosTable Test Case
 */
class CuartosTableTest extends TestCase
{

    /**
     * Test subject     *
     * @var \App\Model\Table\CuartosTable     */
    public $Cuartos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cuartos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cuartos') ? [] : ['className' => 'App\Model\Table\CuartosTable'];        $this->Cuartos = TableRegistry::get('Cuartos', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cuartos);

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
