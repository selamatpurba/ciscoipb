<?php
App::uses('Module', 'Model');

/**
 * Module Test Case
 *
 */
class ModuleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.module',
		'app.news',
		'app.topic',
		'app.source',
		'app.sourcecategory',
		'app.user',
		'app.group',
		'app.access',
		'app.role',
		'app.attachment',
		'app.tag',
		'app.tagged'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Module = ClassRegistry::init('Module');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Module);

		parent::tearDown();
	}

}
