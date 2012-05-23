<?php
class CitiesController extends AppController
{
	public function listByUf($ufId)
	{
		$this->viewClass = 'Json';

		if(!$this->request->is('get') || !$this->request->is('ajax'))
			throw new MethodNotAllowedException('Essa ação só aceita requisições GET');

		$cities = $this->City->find('list', array(
			'conditions' => array('City.uf_id' => $ufId),
			'order' => array('City.name' => 'asc'),
			'recursive' => -1
			)
		);

		$this->set('cities', $cities);
		$this->set('_serialize', 'cities');
	}

	public function listAll($withGroup = false)
	{
		$this->viewClass = 'Json';

		if(!$this->request->is('get') || !$this->request->is('ajax'))
			throw new MethodNotAllowedException('Essa ação só aceita requisições GET');

		$cities = $this->City->find('list', array(
			'order' => array('City.name' => 'asc'),
			'group' => array('City.uf_id', 'City.id'),
			'fields' => array('id', 'name', 'uf_id'),
			'recursive' => -1
			)
		);

		if(!$withGroup)
		{
			$onlyCities = array();

			foreach ($cities as $uf)
				$onlyCities += $uf;

			$cities = $onlyCities;
		}
		else
		{
			foreach ($cities as $ufId => $ufCities)
			{
				$this->City->Uf->recursive = -1;
				$uf = $this->City->Uf->find('first', array('conditions' => array('Uf.id' => $ufId), 'recursive' => -1));
				$cities[$uf['Uf']['name']] = $ufCities;
				unset($cities[$ufId]);
			}
		}

		$this->set('cities', $cities);
		$this->set('_serialize', 'cities');
	}
}