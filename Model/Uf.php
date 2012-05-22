<?php
App::uses('ArraySource', 'Datasources.Model/Datasource');
ConnectionManager::create('UfArraySource', array('datasource' => 'Datasources.ArraySource'));
App::uses('CakeBrazilAppModel', 'CakeBrazil.Model');

/**
* UF Model
*
* @property City $City
*/
class Uf extends CakeBrazilAppModel
{
	public $useDbConfig = 'UfArraySource';

	public $displayField = 'acronym';

	/**
	 * hasMany associations
	 *
	 * @var array
	 */
	public $hasMany = array(
		'City' => array(
			'className' => 'CakeBrazil.City'
		)
	);

	/**
	 * Uniões federativas do Brasil
	 *
	 * @var array
	 */
	public $records = array(
		array(
			'id' => 1,
			'acronym' => 'AC',
			'name' => 'Acre'
		),
		array(
			'id' => 2,
			'acronym' => 'AL',
			'name' => 'Alagoas'
		),
		array(
			'id' => 3,
			'acronym' => 'AM',
			'name' => 'Amazonas'
		),
		array(
			'id' => 4,
			'acronym' => 'AP',
			'name' => 'Amapá'
		),
		array(
			'id' => 5,
			'acronym' => 'BA',
			'name' => 'Bahia'
		),
		array(
			'id' => 6,
			'acronym' => 'CE',
			'name' => 'Ceará'
		),
		array(
			'id' => 7,
			'acronym' => 'DF',
			'name' => 'Distrito Federal'
		),
		array(
			'id' => 8,
			'acronym' => 'ES',
			'name' => 'Espírito Santo'
		),
		array(
			'id' => 9,
			'acronym' => 'GO',
			'name' => 'Goias'
		),
		array(
			'id' => 10,
			'acronym' => 'MA',
			'name' => 'Maranhão'
		),
		array(
			'id' => 11,
			'acronym' => 'MG',
			'name' => 'Minas Gerais'
		),
		array(
			'id' => 12,
			'acronym' => 'MS',
			'name' => 'Mato Grosso do Sul'
		),
		array(
			'id' => 13,
			'acronym' => 'MT',
			'name' => 'Mato Grosso'
		),
		array(
			'id' => 14,
			'acronym' => 'PA',
			'name' => 'Pará'
		),
		array(
			'id' => 15,
			'acronym' => 'PB',
			'name' => 'Paraíba'
		),
		array(
			'id' => 16,
			'acronym' => 'PE',
			'name' => 'Pernambuco'
		),
		array(
			'id' => 17,
			'acronym' => 'PI',
			'name' => 'Piauí'
		),
		array(
			'id' => 18,
			'acronym' => 'PR',
			'name' => 'Paraná'
		),
		array(
			'id' => 19,
			'acronym' => 'RJ',
			'name' => 'Rio de Janeiro'
		),
		array(
			'id' => 20,
			'acronym' => 'RN',
			'name' => 'Rio Grande do Norte'
		),
		array(
			'id' => 21,
			'acronym' => 'RO',
			'name' => 'Rondônia'
		),
		array(
			'id' => 22,
			'acronym' => 'RR',
			'name' => 'Roraima'
		),
		array(
			'id' => 23,
			'acronym' => 'RS',
			'name' => 'Rio Grande do Sul'
		),
		array(
			'id' => 24,
			'acronym' => 'SC',
			'name' => 'Santa Catarina'
		),
		array(
			'id' => 25,
			'acronym' => 'SE',
			'name' => 'Sergipe'
		),
		array(
			'id' => 26,
			'acronym' => 'SP',
			'name' => 'São Paulo'
		),
		array(
			'id' => 27,
			'acronym' => 'TO',
			'name' => 'Tocantins'
		)
	);
}