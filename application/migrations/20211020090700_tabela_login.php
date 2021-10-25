<?php

defined('BASEPATH')	OR exit('No	direct	script	access	allowed');

class Migration_tabela_login extends CI_Migration	{
	public function	up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'auto_increment' => 'TRUE',
				'unsigned' => 'TRUE'
			),
			'ip_address'	=>	array(
				'type'	=>	'VARCHAR',
				'null' => 'FALSE',
				'constraint' => 45
			),
			'timestamp'	=>	array(
				'type'	=>	'INT',
				'constraint' => 10,
				'unsigned' => 'TRUE',
				'null' => 'FALSE',
				'default' => 0
			),
			'data'	=>	array(
				'type'	=>	'BLOB',
				'null' => 'FALSE'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('timestamp');
		$this->dbforge->create_table('ci_sessions');

	}
	
	public function	down()
	{
		$this->dbforge->drop_table('ci_sessions');
	}
}