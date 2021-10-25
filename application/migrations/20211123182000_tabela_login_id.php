<?php

defined('BASEPATH')	OR exit('No	direct	script	access	allowed');

class Migration_tabela_login_id extends CI_Migration	{
	public function	up()
	{
		$fields = array(
			'id' => array(
					'name' => 'id',
					'type' => 'varchar(40)',
			),
		);
		$this->dbforge->modify_column('ci_sessions', $fields);

	}
	
	public function	down()
	{
		$fields = array(
			'id' => array(
					'name' => 'id',
					'type' => 'int',
			),
		);
		$this->dbforge->modify_column('ci_sessions', $fields);
	}
}