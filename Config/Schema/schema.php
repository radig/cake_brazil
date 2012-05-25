<?php
class cakeBrazilSchema extends CakeSchema
{
	public $name = 'cake_brazil';

	public function before($event = array())
	{
		return true;
	}

	public function after($event = array())
	{
		if(isset($event['drop']) && $event['drop'] === 'cities')
			return;

		if(isset($event['errors']) && !empty($event['errors']))
			throw new Exception($event['errors']);

		$db = ConnectionManager::getDataSource($this->connection);
		$fileName = CakePlugin::path($this->plugin) . 'Config' . DS . 'Schema' . DS . 'cities.sql';
		$statements = file_get_contents($fileName);

		$statements = preg_replace('/\/\*[^\*]*\*\//','',$statements);
		$statements = preg_replace('/.*\-\-.*\n/','',$statements);

		$statements = explode(';', $statements);

		foreach ($statements as $statement)
		{
			$statement = trim($statement);
			if (!empty($statement))
			{
				$db->execute($statement);
			}
		}
	}

	public $cities = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null),
		'uf_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => true), 'uf_id' => array('column' => 'uf_id', 'unique' => false))
	);
}