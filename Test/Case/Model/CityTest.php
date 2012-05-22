<?php
App::uses('City', 'CakeBrazil.Model');

/**
 * City Test Case
 *
 */
class CityTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('plugin.cake_brazil.city', 'plugin.cake_brazil.uf');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->City = ClassRegistry::init('City');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->City);

		parent::tearDown();
	}

	public function testFindByUf() {
	}
}
