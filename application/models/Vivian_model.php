<?php

/**
 * Vivian Model.
 */
class Vivian_model extends CI_Model {

	# save $data on 'vivian'
	function save($data) {
		
		$this->db->set('ordem', $data['ordem']);
		$this->db->set('matricula', $data['matricula']);
		$this->db->set('iniciais', $data['iniciais']);
		$this->db->set('unidade', $data['unidade']);
		$this->db->set('covid', $data['covid']);
		$this->db->set('data_diag_covid', $data['data_diag_covid']);
		$this->db->set('tempo_internacao', $data['tempo_internacao']);
		$this->db->set('performance_status', $data['performance_status']);
		$this->db->set('desfecho', $data['desfecho']);
		$this->db->set('diagnostico_ev_tromb', $data['diagnostico_ev_tromb']);
		$this->db->set('data_diagnostico', $data['data_diagnostico']);
		$this->db->set('tvp', $data['tvp']);
		$this->db->set('ep', $data['ep']);
		$this->db->set('outro', $data['outro']);
		$this->db->set('sexo', $data['sexo']);
		$this->db->set('raca', $data['raca']);
		$this->db->set('idade', $data['idade']);
		$this->db->set('maior_70', $data['maior_70']);
		$this->db->set('peso', $data['peso']);
		$this->db->set('altura', $data['altura']);
		$this->db->set('imc', $data['imc']);
		$this->db->set('obesidade', $data['obesidade']);
		$this->db->set('has', $data['has']);
		$this->db->set('dm', $data['dm']);
		$this->db->set('icc_ou_ir', $data['icc_ou_ir']);
		$this->db->set('iam', $data['iam']);
		$this->db->set('avc', $data['avc']);
		$this->db->set('infeccoes_ou_doencas_reumaticas', $data['infeccoes_ou_doencas_reumaticas']);
		$this->db->set('trombofilia', $data['trombofilia']);
		$this->db->set('outras', $data['outras']);
		$this->db->set('neoplasia_maligna', $data['neoplasia_maligna']);
		$this->db->set('cancer_ativo', $data['cancer_ativo']);
		$this->db->set('cerebro', $data['cerebro']);
		$this->db->set('pancreas', $data['pancreas']);
		$this->db->set('estomago', $data['estomago']);
		$this->db->set('pulmao', $data['pulmao']);
		$this->db->set('bexiga', $data['bexiga']);
		$this->db->set('ginecologicos', $data['ginecologicos']);
		$this->db->set('hematologicos', $data['hematologicos']);
		$this->db->set('outros', $data['outros']);
		$this->db->set('quimioterapia', $data['quimioterapia']);
		$this->db->set('radioterapia', $data['radioterapia']);
		$this->db->set('braquiterapia', $data['braquiterapia']);
		$this->db->set('hormonioterapia', $data['hormonioterapia']);
		$this->db->set('imunoterapia', $data['imunoterapia']);
		$this->db->set('cirurgia', $data['cirurgia']);
		$this->db->set('terapias_angiogenicas', $data['terapias_angiogenicas']);
		$this->db->set('outros_tratamentos', $data['outros_tratamentos']);
		$this->db->set('quimioterapia_recente', $data['quimioterapia_recente']);
		$this->db->set('plaquetas_pre_qt', $data['plaquetas_pre_qt']);
		$this->db->set('cirurgia_trauma_recente', $data['cirurgia_trauma_recente']);
		$this->db->set('tev_previo', $data['tev_previo']);
		$this->db->set('tabagismo', $data['tabagismo']);
		$this->db->set('uso_de_aco', $data['uso_de_aco']);
		$this->db->set('imobilizacao_prolongada', $data['imobilizacao_prolongada']);
		$this->db->set('cvc', $data['cvc']);
		$this->db->set('transfusoes', $data['transfusoes']);
		$this->db->set('ag_estimulante_eritropoese', $data['ag_estimulante_eritropoese']);
		$this->db->set('hemoglobina', $data['hemoglobina']);
		$this->db->set('ddimero', $data['ddimero']);
		$this->db->set('fatores_geneticos', $data['fatores_geneticos']);
		$this->db->set('qual', $data['qual']);
		$this->db->set('outros_fatores_tev', $data['outros_fatores_tev']);
		$this->db->set('score_de_padua', $data['score_de_padua']);

		if($data['id'] == NULL) {
			$this->db->set('created_at', date('Y-m-d h:i:s',time()));
			$this->db->insert('vivian');
		} else {
			$this->db->where('id', $data['id']);
			$this->db->set('updated_at', date('Y-m-d h:i:s',time()));
			$this->db->update('vivian');
		}

		return $this->db->affected_rows();
	}

	# retrives $data from 'vivian'
	function find($id = NULL) {
		if($id != NULL) {
			$this->db->where('id', $id);
			return $this->db->get('vivian')->row();
		} else {
			return $this->db->get('vivian')->result();
		}
	}

	# destroy $data from  'vivian'
	function destroy($id) {
		$this->db->where('id', $id);
		$this->db->delete('vivian');

		return $this->db->affected_rows();
	}

	function GetAllByPage($limit, $offset){
		$this->db->select('*')->from('vivian')->limit($limit,$offset);
		$result	= $this->db->get()->result();
		if($result){
			return	$result;
		}else{
			return	false;
		}
	}

}
