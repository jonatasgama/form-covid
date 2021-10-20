<?php

defined('BASEPATH')	OR exit('No	direct	script	access	allowed');

class Migration_delete_ordem extends CI_Migration	{
	public function	up()
	{
		$this->dbforge->drop_column('form_covid','ordem');
	}
	
	public function	down()
	{
		$this->dbforge->add_column('form_covid', array(
			'ordem' => array(
				'type' => 'varchar',
				'constraint' => '255'
			)
		));
	}
}