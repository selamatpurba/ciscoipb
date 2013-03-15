<?php
App::uses('Sourcecategory', 'Model');

/**
 * Sourcecategory Test Case
 *
 */
class SourcecategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sourcecategory',
		'app.source',
		'app.news',
		'app.topic',
		'app.user',
		'app.group',
		'app.access',
		'app.role',
		'app.attachment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sourcecategory = ClassRegistry::init('Sourcecategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sourcecategory);

		parent::tearDown();
	}

}
