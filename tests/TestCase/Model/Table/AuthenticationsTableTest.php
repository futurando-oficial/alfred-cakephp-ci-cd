<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AuthenticationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AuthenticationsTable Test Case
 */
class AuthenticationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AuthenticationsTable
     */
    public $Authentications;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Authentications',
        'app.Users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Authentications') ? [] : ['className' => AuthenticationsTable::class];
        $this->Authentications = TableRegistry::getTableLocator()->get('Authentications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Authentications);

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
