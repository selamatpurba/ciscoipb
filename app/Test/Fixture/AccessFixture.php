<?php
/**
 * AccessFixture
 *
 */
class AccessFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'role_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'add' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'edit' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'delete' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'view' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'group_id' => 1,
			'role_name' => 'Lorem ipsum dolor sit amet',
			'add' => 1,
			'edit' => 1,
			'delete' => 1,
			'view' => 1
		),
	);

}
