<?php
/**
 * CityFixture
 *
 */
class CityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'uf_id' => array('type' => 'integer', 'null' => false),
		'name' => array('type' => 'string', 'null' => false),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'uf_id' => array('unique' => false, 'column' => 'uf_id')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'uf_id' => 1,
			'name' => 'City 1',
			'created' => '2012-05-22 13:51:45',
			'modified' => '2012-05-22 13:51:45'
		),
		array(
			'id' => 2,
			'uf_id' => 1,
			'name' => 'City 2',
			'created' => '2012-05-22 13:51:45',
			'modified' => '2012-05-22 13:51:45'
		),
		array(
			'id' => 3,
			'uf_id' => 2,
			'name' => 'City 3',
			'created' => '2012-05-22 13:51:45',
			'modified' => '2012-05-22 13:51:45'
		),
		array(
			'id' => 4,
			'uf_id' => 3,
			'name' => 'City 4',
			'created' => '2012-05-22 13:51:45',
			'modified' => '2012-05-22 13:51:45'
		),
		array(
			'id' => 5,
			'uf_id' => 3,
			'name' => 'City 5',
			'created' => '2012-05-22 13:51:45',
			'modified' => '2012-05-22 13:51:45'
		),
	);
}
