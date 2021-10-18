<?php

defined('BASEPATH')	OR exit('No	direct	script	access	allowed');

class Migration_nova_estrutura extends CI_Migration	{
	public function	up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'auto_increment' => 'TRUE',
				'unsigned' => 'TRUE'
			),
			'ordem'	=>	array(
				'type'	=>	'VARCHAR',
				'null' => 'TRUE',
				'constraint' => 255
			),
			'matricula'	=>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'iniciais'	=>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'covid'	=>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'data_diag_covid'	=>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'tempo_internacao'	=>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'performance_status'	=>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'desfecho_alta'	=>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'desfecho_obito'	=>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'desfecho_acomp_amb'	=>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'evento_tromb'	=>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'data_diagnostico_evento_tromb'	=>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'evento_tvp'	=>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'evento_ep'	=>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'evento_avc'	=>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'evento_coag_intr'	=>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'evento_iam'	=>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'evento_outro_lista'	=>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'evento_outro_escrito'	=>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'sexo'	=>	array(
				'type'	=>	'CHAR',
			),
			'raca'	=>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'idade'	=>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'maior_que_70'	=>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'peso'	=>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'altura'	=>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'imc'	=>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'classificacao' =>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'obesidade' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'possui_obesidade' =>	array(
				'type'	=>	'CHAR'
			),
			'has' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'dm' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'icc_ou_ir' =>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'possui_icc_ou_ir' =>	array(
				'type'	=>	'CHAR'
			),
			'iam' =>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'possui_iam' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'avc' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'possui_avc' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'infeccoes_doencas_reumaticas' =>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'possui_infeccoes_doencas_reumaticas' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'trombofilia' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'possui_trombofilia' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'outras_comorb_lista_1' =>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'outras_comorb_lista_2' =>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'outras_comorb_lista_3' =>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'outras_comorb_escrito' =>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'neoplasia_maligna' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'cancer_ativo' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'possui_cancer_ativo' =>	array(
				'type'	=>	'CHAR'
			),
			'sitio_tumoral_cerebro' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'sitio_tumoral_pancreas' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'sitio_tumoral_estomago' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'sitio_tumoral_pulmao' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'sitio_tumoral_bexiga' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'sitio_tumoral_ginecologicos' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'sitio_tumoral_hematologicos' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'sitio_tumoral_mama' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'sitio_tumoral_outros_lista' =>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'sitio_tumoral_outros_escrito' =>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'metastase' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'tratamento_quimioterapia' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'tratamento_radioterapia' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'tratamento_braquiterapia' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'tratamento_hormonioterapia' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'possui_tratamento_hormonioterapia' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'tratamento_imunoterapia' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'tratamento_cirurgia' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'tratamento_terapias_angiogenicas' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'tratamento_outros' =>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'quimioterapia_recente' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'plaquetas_pre_qt' =>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'cirurgia_trauma_recente' =>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'possui_cirurgia_trauma_recente' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'tev_previo' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'possui_tev_previo' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'tabagismo' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'uso_de_aco' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'imobilizacao_prolongada' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'possui_imobilizacao_prolongada' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'cvc' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'transfusoes' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'ag_estimulantes_eritropoese' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'hemoglobina' =>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'ddimero' =>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'fatores_geneticos' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'qual' =>	array(
				'type'	=>	'VARCHAR',
				'constraint' => 255
			),
			'outros_fatores_de_risco_tev' =>	array(
				'type'	=>	'INT',
				'constraint' => 1
			),
			'score_padua' =>	array(
				'type'	=>	'INT'
			)													
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('form_covid');

	}
	
	public function	down()
	{
		$this->dbforge->drop_table('form_covid');
	}
}