<?php
App::uses('Uf', 'CakeBrazil.Model');

/**
 * Uf Test Case
 *
 */
class UfTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('plugin.cake_brazil.uf', 'plugin.cake_brazil.city');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Uf = ClassRegistry::init('Uf');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Uf);

		parent::tearDown();
	}

}
