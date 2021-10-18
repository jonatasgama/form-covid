<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Vivian Controller.
 */
class Vivian extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Vivian_model');
		$this->load->library('pagination');
	}

	# GET /vivian
	function index() {
		//$data['vivian'] = $this->Vivian_model->find();
		//$data['content'] = '/vivian/index';
		$config['base_url']	= base_url('paginacao');
		$config['total_rows'] = $this->db->select('*')->from('vivian')->count_all_results();
		$config['per_page']	= 5;
		$config['uri_segment'] = 2;
		$config['num_links'] = 5;
		$config['use_page_numbers']	= TRUE;
		$config['full_tag_open'] = "<nav aria-label='Paginação da tabela de clientes'><ul class='pagination'>";
		$config['full_tag_close'] = "<ul></nav>";
		$config['first_link'] = "Primeira";
		$config['first_tag_open'] =	"<li class='page-item'>";
		$config['first_tag_close'] = "</li>";
		$config['last_link'] = "Última";
		$config['last_tag_open'] = "<li class='page-item'>";
		$config['last_tag_close'] =	"</li>";
		$config['next_link'] =	"Próxima";
		$config['next_tag_open'] =	"<li class='page-item'>";
		$config['next_tag_close'] =	"</li>";
		$config['prev_link'] =	"Anterior";
		$config['prev_tag_open'] =	"<li class='page-item'>";
		$config['prev_tag_close'] =	"</li>";
		$config['cur_tag_open']	= "<li class='page-item active'><a class='page-link' href='#'>";
		$config['cur_tag_close'] =	"</a></li>";
		$config['num_tag_open']	= "<li class='page-item'>";
		$config['num_tag_close'] =	"</li>";
		$config['attributes'] = array('class' => 'page-link');
		$this->pagination->initialize($config);
		if($this->uri->segment(2))
				$offset	= ($this->uri->segment(2) -	1) * $config['per_page'];
		else
				$offset	= 0;
		$dados = $this->Vivian_model->GetAllByPage($config['per_page'], $offset);
		$data['dados']	= $dados;
		$data['error']	= null;
		$data['short_url']	= false;
		$data['pagination']	= $this->pagination->create_links();
		
		$data['content'] = '/vivian/paginacao';
		$this->load->view('/includes/template', $data);
	}

	# GET /vivian/create
	function create() {
		$data['cabecalho'] = 'Novo Cadastro';
		$data['content'] = '/vivian/create';
		$this->load->view('/includes/template', $data);
	}

	# GET /vivian/edit/1
	function edit() {
		$data['cabecalho'] = 'Editar';
		$id = $this->uri->segment(2);
		$data['vivian'] = $this->Vivian_model->find($id);
		$data['content'] = '/vivian/create';
		$this->load->view('/includes/template', $data);
	}

	# GET /vivian/destroy/1
	function destroy() {
		$id = $this->uri->segment(2);
		$data['vivian'] = $this->Vivian_model->destroy($id);
		redirect('/paginacao', 'refresh');
	}

	# POST /vivian/save
	function save() {		
		$this->form_validation->set_rules('ordem', 'Ordem', 'required');
		$this->form_validation->set_rules('matricula', 'Matricula', 'required');
		$this->form_validation->set_rules('iniciais', 'Iniciais', 'required');
		//$this->form_validation->set_rules('unidade', 'Unidade', 'required');
		$this->form_validation->set_rules('covid', 'Covid', 'required');
		$this->form_validation->set_rules('data_diag_covid', 'Data_diag_covid', 'required');
		$this->form_validation->set_rules('tempo_internacao', 'Tempo_internacao', 'required');
		$this->form_validation->set_rules('performance_status', 'Performance_status', 'required');
		//$this->form_validation->set_rules('desfecho', 'Desfecho', 'required');
		$this->form_validation->set_rules('desfecho_alta', 'Desfecho alta', 'required');
		$this->form_validation->set_rules('desfecho_obito', 'Desecho obito', 'required');
		$this->form_validation->set_rules('desfecho_acomp_amb', 'Desecho acompanhamento amb.', 'required');
		//$this->form_validation->set_rules('diagnostico_ev_tromb', 'Diagnostico_ev_tromb', 'required');
		$this->form_validation->set_rules('evento_tromb', 'Evento tromboembolico', 'required');
		//$this->form_validation->set_rules('data_diagnostico', 'Data_diagnostico', 'required');
		$this->form_validation->set_rules('data_diagnostico_evento_tromb', 'Data diagnostico evento tromboembolico', 'required');
		//$this->form_validation->set_rules('tvp', 'Tvp', 'required');
		$this->form_validation->set_rules('evento_tvp', 'Evento tvp', 'required');
		//$this->form_validation->set_rules('ep', 'Ep', 'required');
		$this->form_validation->set_rules('evento_ep', 'Evento ep', 'required');
		$this->form_validation->set_rules('evento_avc', 'Evento avc', 'required');
		$this->form_validation->set_rules('evento_coag_intr', 'Evento cong. intr.', 'required');
		$this->form_validation->set_rules('evento_iam', 'Evento iam', 'required');
		//$this->form_validation->set_rules('outro', 'Outro', 'required');
		$this->form_validation->set_rules('evento_outro_lista', 'Outro evento', 'required');
		$this->form_validation->set_rules('evento_outro_escrito', 'Outro evento', 'required');
		$this->form_validation->set_rules('sexo', 'Sexo', 'required');
		$this->form_validation->set_rules('raca', 'Raca', 'required');
		$this->form_validation->set_rules('idade', 'Idade', 'required');
		$this->form_validation->set_rules('maior_70', 'Maior 70', 'required');
		$this->form_validation->set_rules('maior_que_70', 'Maior que 70', 'required');
		$this->form_validation->set_rules('peso', 'Peso', 'required');
		$this->form_validation->set_rules('altura', 'Altura', 'required');
		$this->form_validation->set_rules('imc', 'Imc', 'required');
		$this->form_validation->set_rules('classificacao', 'Classificação', 'required');
		$this->form_validation->set_rules('obesidade', 'Obesidade', 'required');
		$this->form_validation->set_rules('possui_obesidade', 'Possui obesidade', 'required');
		$this->form_validation->set_rules('has', 'Has', 'required');
		$this->form_validation->set_rules('dm', 'Dm', 'required');
		$this->form_validation->set_rules('icc_ou_ir', 'Icc ou ir', 'required');
		$this->form_validation->set_rules('possui_icc_ou_ir', 'Possui Icc ou ir', 'required');
		$this->form_validation->set_rules('iam', 'Iam', 'required');
		$this->form_validation->set_rules('possui_iam', 'Possui iam', 'required');
		$this->form_validation->set_rules('avc', 'Avc', 'required');
		$this->form_validation->set_rules('possui_avc', 'Possui avc', 'required');
		//$this->form_validation->set_rules('infeccoes_ou_doencas_reumaticas', 'Infeccoes_ou_doencas_reumaticas', 'required');
		$this->form_validation->set_rules('infeccoes_doencas_reumaticas', 'Infeccoes ou doencas reumaticas', 'required');
		$this->form_validation->set_rules('possui_infeccoes_doencas_reumaticas', 'Possui Infeccoes ou doencas reumaticas', 'required');
		$this->form_validation->set_rules('trombofilia', 'Trombofilia', 'required');
		$this->form_validation->set_rules('possui_trombofilia', 'Possui trombofilia', 'required');
		//$this->form_validation->set_rules('outras', 'Outras', 'required');
		$this->form_validation->set_rules('outras_comorb_lista_1', 'Outras comorbidade', 'required');
		$this->form_validation->set_rules('outras_comorb_lista_2', 'Outras comorbidade', 'required');
		$this->form_validation->set_rules('outras_comorb_lista_3', 'Outras comorbidade', 'required');
		$this->form_validation->set_rules('outras_comorb_escrito', 'Outras comorbidade', 'required');
		$this->form_validation->set_rules('neoplasia_maligna', 'Neoplasia maligna', 'required');
		$this->form_validation->set_rules('cancer_ativo', 'Cancer ativo', 'required');
		$this->form_validation->set_rules('possui_cancer_ativo', 'Possui Cancer ativo', 'required');
		//$this->form_validation->set_rules('cerebro', 'Cerebro', 'required');
		$this->form_validation->set_rules('sitio_tumoral_cerebro', 'Sitio tumoral Cerebro', 'required');
		//$this->form_validation->set_rules('pancreas', 'Pancreas', 'required');
		$this->form_validation->set_rules('sitio_tumoral_pancreas', 'Sitio tumoral Pancreas', 'required');
		//$this->form_validation->set_rules('estomago', 'Estomago', 'required');
		$this->form_validation->set_rules('sitio_tumoral_estomago', 'sitio_tumoral_Estomago', 'required');
		//$this->form_validation->set_rules('pulmao', 'Pulmao', 'required');
		$this->form_validation->set_rules('sitio_tumoral_pulmao', 'Sitio tumoral Pulmao', 'required');
		//$this->form_validation->set_rules('bexiga', 'Bexiga', 'required');
		$this->form_validation->set_rules('sitio_tumoral_bexiga', 'Sitio tumoral Bexiga', 'required');
		//$this->form_validation->set_rules('ginecologicos', 'Ginecologicos', 'required');
		$this->form_validation->set_rules('sitio_tumoral_ginecologicos', 'sitio tumoral Ginecologicos', 'required');
		//$this->form_validation->set_rules('hematologicos', 'Hematologicos', 'required');
		$this->form_validation->set_rules('sitio_tumoral_hematologicos', 'sitio tumoral Hematologicos', 'required');
		$this->form_validation->set_rules('sitio_tumoral_mama', 'sitio tumoral mama', 'required');
		$this->form_validation->set_rules('sitio_tumoral_outros_lista', 'sitio tumoral outros', 'required');
		$this->form_validation->set_rules('sitio_tumoral_outros_escrito', 'sitio tumoral outros', 'required');
		//$this->form_validation->set_rules('outros', 'Outros', 'required');
		$this->form_validation->set_rules('metastase', 'Metastase', 'required');
		//$this->form_validation->set_rules('quimioterapia', 'Quimioterapia', 'required');
		$this->form_validation->set_rules('tratamento_quimioterapia', 'Tratamento Quimioterapia', 'required');
		//$this->form_validation->set_rules('radioterapia', 'Radioterapia', 'required');
		$this->form_validation->set_rules('tratamento_radioterapia', 'Tratamento Radioterapia', 'required');
		//$this->form_validation->set_rules('braquiterapia', 'Braquiterapia', 'required');
		$this->form_validation->set_rules('tratamento_braquiterapia', 'Tratamento Braquiterapia', 'required');
		//$this->form_validation->set_rules('hormonioterapia', 'Hormonioterapia', 'required');
		$this->form_validation->set_rules('tratamento_hormonioterapia', 'Tratamento Hormonioterapia', 'required');
		$this->form_validation->set_rules('possui_tratamento_hormonioterapia', 'Tratamento Hormonioterapia', 'required');
		//$this->form_validation->set_rules('imunoterapia', 'Imunoterapia', 'required');
		$this->form_validation->set_rules('tratamento_imunoterapia', 'Tratamento Imunoterapia', 'required');
		//$this->form_validation->set_rules('cirurgia', 'Cirurgia', 'required');
		$this->form_validation->set_rules('tratamento_cirurgia', 'Tratamento Cirurgia', 'required');
		//$this->form_validation->set_rules('terapias_angiogenicas', 'Terapias_angiogenicas', 'required');
		$this->form_validation->set_rules('tratamento_terapias_angiogenicas', 'Tratamento Terapias angiogenicas', 'required');
		//$this->form_validation->set_rules('outros_tratamentos', 'Outros_tratamentos', 'required');
		$this->form_validation->set_rules('tratamento_outros', 'Outros tratamentos', 'required');
		$this->form_validation->set_rules('quimioterapia_recente', 'Quimioterapia_recente', 'required');
		$this->form_validation->set_rules('plaquetas_pre_qt', 'Plaquetas_pre_qt', 'required');
		$this->form_validation->set_rules('cirurgia_trauma_recente', 'Cirurgia_trauma_recente', 'required');
		$this->form_validation->set_rules('possui_cirurgia_trauma_recente', 'Possui Cirurgia_trauma_recente', 'required');
		$this->form_validation->set_rules('tev_previo', 'Tev_previo', 'required');
		$this->form_validation->set_rules('possui_tev_previo', 'Possui Tev previo', 'required');
		$this->form_validation->set_rules('tabagismo', 'Tabagismo', 'required');
		$this->form_validation->set_rules('uso_de_aco', 'Uso_de_aco', 'required');
		$this->form_validation->set_rules('imobilizacao_prolongada', 'Imobilizacao_prolongada', 'required');
		$this->form_validation->set_rules('possui_imobilizacao_prolongada', 'Possui Imobilizacao_prolongada', 'required');
		$this->form_validation->set_rules('cvc', 'Cvc', 'required');
		$this->form_validation->set_rules('transfusoes', 'Transfusoes', 'required');
		$this->form_validation->set_rules('ag_estimulantes_eritropoese', 'Ag_estimulante_eritropoese', 'required');
		$this->form_validation->set_rules('hemoglobina', 'Hemoglobina', 'required');
		$this->form_validation->set_rules('ddimero', 'Ddimero', 'required');
		$this->form_validation->set_rules('fatores_geneticos', 'Fatores_geneticos', 'required');
		$this->form_validation->set_rules('qual', 'Qual', 'required');
		//$this->form_validation->set_rules('outros_fatores_tev', 'Outros_fatores_tev', 'required');
		$this->form_validation->set_rules('outros_fatores_de_risco_tev', 'Outros fatores de risco tev', 'required');
		$this->form_validation->set_rules('score_padua', 'Score_de_padua', 'required');

		if ($this->form_validation->run()) {

			/*$data[] = array();
			$data['id'] = $this->input->post('id', TRUE);
			$data['ordem'] = $this->input->post('ordem', TRUE);
			$data['matricula'] = $this->input->post('matricula', TRUE);
			$data['iniciais'] = $this->input->post('iniciais', TRUE);
			$data['unidade'] = $this->input->post('unidade', TRUE);
			$data['covid'] = $this->input->post('covid', TRUE);
			$data['data_diag_covid'] = $this->input->post('data_diag_covid', TRUE);
			$data['tempo_internacao'] = $this->input->post('tempo_internacao', TRUE);
			$data['performance_status'] = $this->input->post('performance_status', TRUE);
			$data['desfecho'] = $this->input->post('desfecho', TRUE);
			$data['diagnostico_ev_tromb'] = $this->input->post('diagnostico_ev_tromb', TRUE);
			$data['data_diagnostico'] = $this->input->post('data_diagnostico', TRUE);
			$data['tvp'] = $this->input->post('tvp', TRUE);
			$data['ep'] = $this->input->post('ep', TRUE);
			$data['outro'] = $this->input->post('outro', TRUE);
			$data['sexo'] = $this->input->post('sexo', TRUE);
			$data['raca'] = $this->input->post('raca', TRUE);
			$data['idade'] = $this->input->post('idade', TRUE);
			$data['maior_70'] = $this->input->post('maior_70', TRUE);
			$data['peso'] = $this->input->post('peso', TRUE);
			$data['altura'] = $this->input->post('altura', TRUE);
			$data['imc'] = $this->input->post('imc', TRUE);
			$data['obesidade'] = $this->input->post('obesidade', TRUE);
			$data['has'] = $this->input->post('has', TRUE);
			$data['dm'] = $this->input->post('dm', TRUE);
			$data['icc_ou_ir'] = $this->input->post('icc_ou_ir', TRUE);
			$data['iam'] = $this->input->post('iam', TRUE);
			$data['avc'] = $this->input->post('avc', TRUE);
			$data['infeccoes_ou_doencas_reumaticas'] = $this->input->post('infeccoes_ou_doencas_reumaticas', TRUE);
			$data['trombofilia'] = $this->input->post('trombofilia', TRUE);
			$data['outras'] = $this->input->post('outras', TRUE);
			$data['neoplasia_maligna'] = $this->input->post('neoplasia_maligna', TRUE);
			$data['cancer_ativo'] = $this->input->post('cancer_ativo', TRUE);
			$data['cerebro'] = $this->input->post('cerebro', TRUE);
			$data['pancreas'] = $this->input->post('pancreas', TRUE);
			$data['estomago'] = $this->input->post('estomago', TRUE);
			$data['pulmao'] = $this->input->post('pulmao', TRUE);
			$data['bexiga'] = $this->input->post('bexiga', TRUE);
			$data['ginecologicos'] = $this->input->post('ginecologicos', TRUE);
			$data['hematologicos'] = $this->input->post('hematologicos', TRUE);
			$data['outros'] = $this->input->post('outros', TRUE);
			$data['quimioterapia'] = $this->input->post('quimioterapia', TRUE);
			$data['radioterapia'] = $this->input->post('radioterapia', TRUE);
			$data['braquiterapia'] = $this->input->post('braquiterapia', TRUE);
			$data['hormonioterapia'] = $this->input->post('hormonioterapia', TRUE);
			$data['imunoterapia'] = $this->input->post('imunoterapia', TRUE);
			$data['cirurgia'] = $this->input->post('cirurgia', TRUE);
			$data['terapias_angiogenicas'] = $this->input->post('terapias_angiogenicas', TRUE);
			$data['outros_tratamentos'] = $this->input->post('outros_tratamentos', TRUE);
			$data['quimioterapia_recente'] = $this->input->post('quimioterapia_recente', TRUE);
			$data['plaquetas_pre_qt'] = $this->input->post('plaquetas_pre_qt', TRUE);
			$data['cirurgia_trauma_recente'] = $this->input->post('cirurgia_trauma_recente', TRUE);
			$data['tev_previo'] = $this->input->post('tev_previo', TRUE);
			$data['tabagismo'] = $this->input->post('tabagismo', TRUE);
			$data['uso_de_aco'] = $this->input->post('uso_de_aco', TRUE);
			$data['imobilizacao_prolongada'] = $this->input->post('imobilizacao_prolongada', TRUE);
			$data['cvc'] = $this->input->post('cvc', TRUE);
			$data['transfusoes'] = $this->input->post('transfusoes', TRUE);
			$data['ag_estimulante_eritropoese'] = $this->input->post('ag_estimulante_eritropoese', TRUE);
			$data['hemoglobina'] = $this->input->post('hemoglobina', TRUE);
			$data['ddimero'] = $this->input->post('ddimero', TRUE);
			$data['fatores_geneticos'] = $this->input->post('fatores_geneticos', TRUE);
			$data['qual'] = $this->input->post('qual', TRUE);
			$data['outros_fatores_tev'] = $this->input->post('outros_fatores_tev', TRUE);
			$data['score_de_padua'] = $this->input->post('score_de_padua', TRUE);*/
			$data = $this->input->post(NULL, TRUE);
			$this->Vivian_model->save($data);
			$this->session->set_tempdata('msg','Dados salvos com sucesso', 15);	
			redirect(base_url('paginacao/1'), 'refresh');	
					
		}
		$data['vivian'] =	$this->rebuild();
		$data['content'] = '/vivian/create';
		$this->load->view('/includes/template', $data);
	}

	function rebuild() {
		$object = new Vivian_model();
		$object->id = $this->input->post('id', TRUE);
		$object->ordem = $this->input->post('ordem', TRUE);
		$object->matricula = $this->input->post('matricula', TRUE);
		$object->iniciais = $this->input->post('iniciais', TRUE);
		$object->unidade = $this->input->post('unidade', TRUE);
		$object->covid = $this->input->post('covid', TRUE);
		$object->data_diag_covid = $this->input->post('data_diag_covid', TRUE);
		$object->tempo_internacao = $this->input->post('tempo_internacao', TRUE);
		$object->performance_status = $this->input->post('performance_status', TRUE);
		$object->desfecho = $this->input->post('desfecho', TRUE);
		$object->diagnostico_ev_tromb = $this->input->post('diagnostico_ev_tromb', TRUE);
		$object->data_diagnostico = $this->input->post('data_diagnostico', TRUE);
		$object->tvp = $this->input->post('tvp', TRUE);
		$object->ep = $this->input->post('ep', TRUE);
		$object->outro = $this->input->post('outro', TRUE);
		$object->sexo = $this->input->post('sexo', TRUE);
		$object->raca = $this->input->post('raca', TRUE);
		$object->idade = $this->input->post('idade', TRUE);
		$object->maior_70 = $this->input->post('maior_70', TRUE);
		$object->peso = $this->input->post('peso', TRUE);
		$object->altura = $this->input->post('altura', TRUE);
		$object->imc = $this->input->post('imc', TRUE);
		$object->obesidade = $this->input->post('obesidade', TRUE);
		$object->has = $this->input->post('has', TRUE);
		$object->dm = $this->input->post('dm', TRUE);
		$object->icc_ou_ir = $this->input->post('icc_ou_ir', TRUE);
		$object->iam = $this->input->post('iam', TRUE);
		$object->avc = $this->input->post('avc', TRUE);
		$object->infeccoes_ou_doencas_reumaticas = $this->input->post('infeccoes_ou_doencas_reumaticas', TRUE);
		$object->trombofilia = $this->input->post('trombofilia', TRUE);
		$object->outras = $this->input->post('outras', TRUE);
		$object->neoplasia_maligna = $this->input->post('neoplasia_maligna', TRUE);
		$object->cancer_ativo = $this->input->post('cancer_ativo', TRUE);
		$object->cerebro = $this->input->post('cerebro', TRUE);
		$object->pancreas = $this->input->post('pancreas', TRUE);
		$object->estomago = $this->input->post('estomago', TRUE);
		$object->pulmao = $this->input->post('pulmao', TRUE);
		$object->bexiga = $this->input->post('bexiga', TRUE);
		$object->ginecologicos = $this->input->post('ginecologicos', TRUE);
		$object->hematologicos = $this->input->post('hematologicos', TRUE);
		$object->outros = $this->input->post('outros', TRUE);
		$object->quimioterapia = $this->input->post('quimioterapia', TRUE);
		$object->radioterapia = $this->input->post('radioterapia', TRUE);
		$object->braquiterapia = $this->input->post('braquiterapia', TRUE);
		$object->hormonioterapia = $this->input->post('hormonioterapia', TRUE);
		$object->imunoterapia = $this->input->post('imunoterapia', TRUE);
		$object->cirurgia = $this->input->post('cirurgia', TRUE);
		$object->terapias_angiogenicas = $this->input->post('terapias_angiogenicas', TRUE);
		$object->outros_tratamentos = $this->input->post('outros_tratamentos', TRUE);
		$object->quimioterapia_recente = $this->input->post('quimioterapia_recente', TRUE);
		$object->plaquetas_pre_qt = $this->input->post('plaquetas_pre_qt', TRUE);
		$object->cirurgia_trauma_recente = $this->input->post('cirurgia_trauma_recente', TRUE);
		$object->tev_previo = $this->input->post('tev_previo', TRUE);
		$object->tabagismo = $this->input->post('tabagismo', TRUE);
		$object->uso_de_aco = $this->input->post('uso_de_aco', TRUE);
		$object->imobilizacao_prolongada = $this->input->post('imobilizacao_prolongada', TRUE);
		$object->cvc = $this->input->post('cvc', TRUE);
		$object->transfusoes = $this->input->post('transfusoes', TRUE);
		$object->ag_estimulante_eritropoese = $this->input->post('ag_estimulante_eritropoese', TRUE);
		$object->hemoglobina = $this->input->post('hemoglobina', TRUE);
		$object->ddimero = $this->input->post('ddimero', TRUE);
		$object->fatores_geneticos = $this->input->post('fatores_geneticos', TRUE);
		$object->qual = $this->input->post('qual', TRUE);
		$object->outros_fatores_tev = $this->input->post('outros_fatores_tev', TRUE);
		$object->score_de_padua = $this->input->post('score_de_padua', TRUE);
		return $object;
	}
}

?>
