<?php

/**
 * Vivian Model.
 */
class Vivian_model extends CI_Model {

	# save $data on 'vivian'
	function save($data) {
		
		$this->db->set('matricula', $data['matricula']);
		$this->db->set('iniciais', $data['iniciais']);
		$this->db->set('covid', $data['covid']);
		$this->db->set('data_diag_covid', $data['data_diag_covid']);
		$this->db->set('tempo_internacao', $data['tempo_internacao']);
		$this->db->set('performance_status', $data['performance_status']);
		$this->db->set('desfecho_alta', $data['desfecho_alta']);
		$this->db->set('desfecho_obito', $data['desfecho_obito']);
		$this->db->set('desfecho_acomp_amb', $data['desfecho_acomp_amb']);
		$this->db->set('evento_tromb', $data['evento_tromb']);
		$this->db->set('data_diagnostico_evento_tromb', $data['data_diagnostico_evento_tromb']);
		$this->db->set('evento_tvp', $data['evento_tvp']);
		$this->db->set('evento_ep', $data['evento_ep']);
		$this->db->set('evento_avc', $data['evento_avc']);
		$this->db->set('evento_coag_intr', $data['evento_coag_intr']);
		$this->db->set('evento_iam', $data['evento_iam']);
		$this->db->set('evento_outro_lista', $data['evento_outro_lista']);
		$this->db->set('evento_outro_escrito', $data['evento_outro_escrito']);
		$this->db->set('sexo', $data['sexo']);
		$this->db->set('raca', $data['raca']);
		$this->db->set('idade', $data['idade']);
		$this->db->set('maior_que_70', $data['maior_que_70']);
		$this->db->set('maior_70', $data['maior_70']);
		$this->db->set('peso', $data['peso']);
		$this->db->set('altura', $data['altura']);
		//$this->db->set('imc', $data['imc']);
		$this->db->set('classificacao', $data['classificacao']);
		$this->db->set('obesidade', $data['obesidade']);
		$this->db->set('possui_obesidade', $data['possui_obesidade']);
		$this->db->set('has', $data['has']);
		$this->db->set('dm', $data['dm']);
		$this->db->set('icc_ou_ir', $data['icc_ou_ir']);
		$this->db->set('possui_icc_ou_ir', $data['possui_icc_ou_ir']);
		$this->db->set('iam', $data['iam']);
		$this->db->set('possui_iam', $data['possui_iam']);
		$this->db->set('avc', $data['avc']);
		$this->db->set('possui_avc', $data['possui_avc']);
		$this->db->set('infeccoes_doencas_reumaticas', $data['infeccoes_doencas_reumaticas']);
		$this->db->set('possui_infeccoes_doencas_reumaticas', $data['possui_infeccoes_doencas_reumaticas']);
		$this->db->set('trombofilia', $data['trombofilia']);
		$this->db->set('possui_trombofilia', $data['possui_trombofilia']);
		$this->db->set('outras_comorb_lista_1', $data['outras_comorb_lista_1']);
		$this->db->set('outras_comorb_lista_2', $data['outras_comorb_lista_2']);
		$this->db->set('outras_comorb_lista_3', $data['outras_comorb_lista_3']);
		$this->db->set('outras_comorb_escrito', $data['outras_comorb_escrito']);
		$this->db->set('neoplasia_maligna', $data['neoplasia_maligna']);
		$this->db->set('cancer_ativo', $data['cancer_ativo']);
		$this->db->set('possui_cancer_ativo', $data['possui_cancer_ativo']);
		$this->db->set('sitio_tumoral_cerebro', $data['sitio_tumoral_cerebro']);
		$this->db->set('sitio_tumoral_pancreas', $data['sitio_tumoral_pancreas']);
		$this->db->set('sitio_tumoral_estomago', $data['sitio_tumoral_estomago']);
		$this->db->set('sitio_tumoral_pulmao', $data['sitio_tumoral_pulmao']);
		$this->db->set('sitio_tumoral_bexiga', $data['sitio_tumoral_bexiga']);
		$this->db->set('sitio_tumoral_ginecologicos', $data['sitio_tumoral_ginecologicos']);
		$this->db->set('sitio_tumoral_hematologicos', $data['sitio_tumoral_hematologicos']);
		$this->db->set('sitio_tumoral_mama', $data['sitio_tumoral_mama']);
		$this->db->set('sitio_tumoral_outros_lista', $data['sitio_tumoral_outros_lista']);
		$this->db->set('sitio_tumoral_outros_escrito', $data['sitio_tumoral_outros_escrito']);
		$this->db->set('metastase', $data['metastase']);
		$this->db->set('tratamento_quimioterapia', $data['tratamento_quimioterapia']);
		$this->db->set('tratamento_radioterapia', $data['tratamento_radioterapia']);
		$this->db->set('tratamento_braquiterapia', $data['tratamento_braquiterapia']);
		$this->db->set('tratamento_hormonioterapia', $data['tratamento_hormonioterapia']);
		$this->db->set('possui_tratamento_hormonioterapia', $data['possui_tratamento_hormonioterapia']);
		$this->db->set('tratamento_imunoterapia', $data['tratamento_imunoterapia']);
		$this->db->set('tratamento_cirurgia', $data['tratamento_cirurgia']);
		$this->db->set('tratamento_terapias_angiogenicas', $data['tratamento_terapias_angiogenicas']);
		$this->db->set('tratamento_outros', $data['tratamento_outros']);
		$this->db->set('quimioterapia_recente', $data['quimioterapia_recente']);
		$this->db->set('plaquetas_pre_qt', $data['plaquetas_pre_qt']);
		$this->db->set('cirurgia_trauma_recente', $data['cirurgia_trauma_recente']);
		$this->db->set('possui_cirurgia_trauma_recente', $data['possui_cirurgia_trauma_recente']);
		$this->db->set('tev_previo', $data['tev_previo']);
		$this->db->set('possui_tev_previo', $data['possui_tev_previo']);
		$this->db->set('tabagismo', $data['tabagismo']);
		$this->db->set('uso_de_aco', $data['uso_de_aco']);
		$this->db->set('imobilizacao_prolongada', $data['imobilizacao_prolongada']);
		$this->db->set('possui_imobilizacao_prolongada', $data['possui_imobilizacao_prolongada']);
		$this->db->set('cvc', $data['cvc']);
		$this->db->set('transfusoes', $data['transfusoes']);
		$this->db->set('ag_estimulantes_eritropoese', $data['ag_estimulantes_eritropoese']);
		$this->db->set('hemoglobina', $data['hemoglobina']);
		$this->db->set('ddimero', $data['ddimero']);
		$this->db->set('fatores_geneticos', $data['fatores_geneticos']);
		$this->db->set('qual', $data['qual']);
		$this->db->set('outros_fatores_de_risco_tev', $data['outros_fatores_de_risco_tev']);
		$this->db->set('score_padua', $data['score_padua']);
		if($data['id'] == NULL){
			$this->db->set('id_usuario', $this->session->userdata('id_usuario'));
		}else{
			$this->db->set('id_usuario', $data['id_usuario']);
		}
		$this->db->set('dono_registro', 'adm');

		if($data['id'] == NULL) {
			$this->db->set('created_at', date('Y-m-d h:i:s',time()));
			$this->db->insert('form_covid');
		} else {
			$this->db->where('id', $data['id']);
			$this->db->set('updated_at', date('Y-m-d h:i:s',time()));
			$this->db->update('form_covid');
		}

		return $this->db->affected_rows();
	}

	# retrives $data from 'vivian'
	function find($id = NULL) {
		if($id != NULL) {
			$this->db->where('id', $id);
			return $this->db->get('form_covid')->row();
		} else {
			return $this->db->get('form_covid')->result();
		}
	}

	function findToExtract() {
		$sql = "SELECT `form_covid`.`id`,
			`form_covid`.`matricula`,
			`form_covid`.`iniciais`,
			`form_covid`.`covid`,
			`form_covid`.`data_diag_covid`,
			`form_covid`.`tempo_internacao`,
			`form_covid`.`performance_status`,
			`form_covid`.`desfecho_alta`,
			`form_covid`.`desfecho_obito`,
			`form_covid`.`desfecho_acomp_amb`,
			`form_covid`.`evento_tromb`,
			`form_covid`.`data_diagnostico_evento_tromb`,
			`form_covid`.`evento_tvp`,
			`form_covid`.`evento_ep`,
			`form_covid`.`evento_avc`,
			`form_covid`.`evento_coag_intr`,
			`form_covid`.`evento_iam`,
			`form_covid`.`evento_outro_lista`,
			`form_covid`.`evento_outro_escrito`,
			`form_covid`.`sexo`,
			`form_covid`.`raca`,
			`form_covid`.`idade`,
			`form_covid`.`peso`,
			`form_covid`.`altura`,
			`form_covid`.`classificacao`,
			`form_covid`.`obesidade`,
			`form_covid`.`possui_obesidade`,
			`form_covid`.`has`,
			`form_covid`.`dm`,
			`form_covid`.`icc_ou_ir`,
			`form_covid`.`possui_icc_ou_ir`,
			`form_covid`.`iam`,
			`form_covid`.`possui_iam`,
			`form_covid`.`avc`,
			`form_covid`.`possui_avc`,
			`form_covid`.`infeccoes_doencas_reumaticas`,
			`form_covid`.`possui_infeccoes_doencas_reumaticas`,
			`form_covid`.`trombofilia`,
			`form_covid`.`possui_trombofilia`,
			`form_covid`.`outras_comorb_lista_1`,
			`form_covid`.`outras_comorb_lista_2`,
			`form_covid`.`outras_comorb_lista_3`,
			`form_covid`.`outras_comorb_escrito`,
			`form_covid`.`neoplasia_maligna`,
			`form_covid`.`cancer_ativo`,
			`form_covid`.`possui_cancer_ativo`,
			`form_covid`.`sitio_tumoral_cerebro`,
			`form_covid`.`sitio_tumoral_pancreas`,
			`form_covid`.`sitio_tumoral_estomago`,
			`form_covid`.`sitio_tumoral_pulmao`,
			`form_covid`.`sitio_tumoral_bexiga`,
			`form_covid`.`sitio_tumoral_ginecologicos`,
			`form_covid`.`sitio_tumoral_hematologicos`,
			`form_covid`.`sitio_tumoral_mama`,
			`form_covid`.`sitio_tumoral_outros_lista`,
			`form_covid`.`sitio_tumoral_outros_escrito`,
			`form_covid`.`metastase`,
			`form_covid`.`tratamento_quimioterapia`,
			`form_covid`.`tratamento_radioterapia`,
			`form_covid`.`tratamento_braquiterapia`,
			`form_covid`.`tratamento_hormonioterapia`,
			`form_covid`.`possui_tratamento_hormonioterapia`,
			`form_covid`.`tratamento_imunoterapia`,
			`form_covid`.`tratamento_cirurgia`,
			`form_covid`.`tratamento_terapias_angiogenicas`,
			`form_covid`.`tratamento_outros`,
			`form_covid`.`quimioterapia_recente`,
			`form_covid`.`plaquetas_pre_qt`,
			`form_covid`.`cirurgia_trauma_recente`,
			`form_covid`.`possui_cirurgia_trauma_recente`,
			`form_covid`.`tev_previo`,
			`form_covid`.`possui_tev_previo`,
			`form_covid`.`tabagismo`,
			`form_covid`.`uso_de_aco`,
			`form_covid`.`imobilizacao_prolongada`,
			`form_covid`.`possui_imobilizacao_prolongada`,
			`form_covid`.`cvc`,
			`form_covid`.`transfusoes`,
			`form_covid`.`ag_estimulantes_eritropoese`,
			`form_covid`.`hemoglobina`,
			`form_covid`.`ddimero`,
			`form_covid`.`fatores_geneticos`,
			`form_covid`.`qual`,
			`form_covid`.`outros_fatores_de_risco_tev`,
			`form_covid`.`score_padua`,
			`form_covid`.`maior_70` as 'maior_que_70'
			FROM `covid`.`form_covid`";
		$result = $this->db->query($sql);
		return $result;
	}

	function pacientesComCovid() {
		$sql = "SELECT count(*) as total FROM form_covid WHERE covid = 1";
		$result = $this->db->query($sql);
		return $result;
	}

	function comEventoTromb() {
		$sql = "SELECT count(*) as total FROM form_covid WHERE evento_tromb = 1";
		//SELECT t.evento / COUNT(*) * 100 AS total from form_covid,(SELECT count(*) as alta FROM form_covid WHERE evento_tromb = 1) t
		$result = $this->db->query($sql);
		return $result;
	}

	function semEventoTromb() {
		$sql = "SELECT count(*) as total FROM form_covid WHERE evento_tromb = 0";
		$result = $this->db->query($sql);
		return $result;
	}

	function obesos() {
		$sql = "SELECT count(*) as total FROM form_covid WHERE obesidade = 1";
		$result = $this->db->query($sql);
		return $result;
	}
	
	function sexo() {
		$sql = "SELECT count(*) as total, sexo FROM form_covid group by sexo";
		$result = $this->db->query($sql);
		return $result;
	}

	function obito() {
		$sql = "SELECT count(*) as total FROM form_covid WHERE desfecho_obito = 1";
		$result = $this->db->query($sql);
		return $result;
	}

	function covidComEventoTromb() {
		$sql = "SELECT count(*) as total FROM form_covid WHERE evento_tromb = 1 AND covid = 1";
		$result = $this->db->query($sql);
		return $result;
	}	

	function covidSemEventoTromb() {
		$sql = "SELECT count(*) as total FROM form_covid WHERE evento_tromb = 0 AND covid = 1";
		$result = $this->db->query($sql);
		return $result;
	}		

	function covidPorMes() {
		$sql = "SELECT COUNT(*) as total, CONCAT(YEAR(STR_TO_DATE(data_diag_covid, '%d/%m/%Y')),'-',MONTHNAME(STR_TO_DATE(data_diag_covid, '%d/%m/%Y'))) as mes FROM form_covid WHERE data_diag_covid != 'N/A' AND data_diag_covid != '' GROUP BY YEAR(STR_TO_DATE(data_diag_covid, '%d/%m/%Y')), MONTH(STR_TO_DATE(data_diag_covid, '%d/%m/%Y'))";
		$result = $this->db->query($sql);
		return $result;
	}		

	# destroy $data from  'vivian'
	function destroy($id) {
		$this->db->where('id', $id);
		$this->db->delete('form_covid');

		return $this->db->affected_rows();
	}

	function GetAllByPage($limit, $offset){
		$this->db->select('*')->from('form_covid')->limit($limit,$offset);
		$result	= $this->db->get()->result();
		if($result){
			return	$result;
		}else{
			return	false;
		}
	}
	
	function logar($usuario, $senha){
		$sql = "SELECT * FROM usuarios WHERE usuario = ? AND senha = ? AND status = 1 AND id_acesso = 1";
		$result = $this->db->query($sql, array($usuario, $senha));
		return $result;
	}
	
	function logarAdmin($usuario, $senha){
		$sql = "SELECT * FROM usuarios WHERE usuario = ? AND senha = ? AND status = 1 AND id_acesso = 2";
		$result = $this->db->query($sql, array($usuario, $senha));
		return $result;
	}	

	function devolveRegistro($id){
		$sql = "UPDATE form_covid SET dono_registro = 'usr' WHERE id = ? ";
		$result = $this->db->query($sql, $id);
		return $result;
	}
	
	function listaDevolvidos($limit, $offset){
		$this->db->select('*')->from('form_covid')->where('dono_registro', 'usr')->where('id_usuario', $this->session->userdata('id_usuario'))->limit($limit,$offset);
		$result	= $this->db->get()->result();
		if($result){
			return	$result;
		}else{
			return	false;
		}
	}
	
	function buscaMatricula($mat){
		$sql = "SELECT count(*) as qtd FROM form_covid WHERE matricula = ?";
		$result = $this->db->query($sql, $mat);
		return $result;		
	}
}