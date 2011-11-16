<?php
App::uses('CakeBrazilAppModel', 'CakeBrazil.Model');

/**
 * City Model
 *
 * @property Uf $Uf
 */
class City extends CakeBrazilAppModel {

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'Uf' => array(
			'className' => 'CakeBrazil.Uf'
		)
	);
}
