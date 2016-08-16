<?php
namespace App\Test\TestCase\Form;

use App\Form\AdsForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\AdsForm Test Case
 */
class AdsFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\AdsForm
     */
    public $Ads;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Ads = new AdsForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ads);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
