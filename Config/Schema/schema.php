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

		$db = ConnectionManager::getDataSource($this->connection);
		$fileName = CakePlugin::path($this->plugin) . 'Config' . DS . 'Schema' . DS . 'cities.sql';
		$statements = file_get_contents($fileName);

		/* Replacing the block comments */
		$statements = preg_replace('/\/\*[^\*]*\*\//','',$statements);
		/* Replacing the line comments */
		$statements = preg_replace('/.*\-\-.*\n/','',$statements);

		$statements = explode(';', $statements);

		foreach ($statements as $statement)
		{
			$statement = trim($statement);
			if ($statement != '')
			{
				$db->execute($statement);
			}
		}
	}

	public $cities = array(
		'id' => array('type' => 'primary_key', 'key' => 'primary'),
		'uf_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 255),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => true), 'uf_id' => array('column' => 'uf_id', 'unique' => false))
	);
}