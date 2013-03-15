<?php
/**
 * NewsFixture
 *
 */
class NewsFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'body' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'resume' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'attachment' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'topic_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'source_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'input_date' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'publish_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'who' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'where' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tags' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'body' => 'Lorem ipsum dolor sit amet',
			'resume' => 'Lorem ipsum dolor sit amet',
			'attachment' => 'Lorem ipsum dolor sit amet',
			'topic_id' => 1,
			'source_id' => 1,
			'input_date' => 1360912715,
			'publish_date' => '2013-02-15 08:18:35',
			'who' => 'Lorem ipsum dolor sit amet',
			'where' => 'Lorem ipsum dolor sit amet',
			'tags' => 'Lorem ipsum dolor sit amet'
		),
	);

}
