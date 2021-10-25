<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Vivian Controller.
 */
class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Vivian_model');
		$this->load->library('pagination');
		//verificaSessao($this->session->userdata('nome'));
	}
	
	
	# GET /vivian
	function index() {
		//$data['vivian'] = $this->Vivian_model->find();
		//$data['content'] = '/vivian/index';
		$config['base_url']	= base_url('paginacao');
		$config['total_rows'] = $this->db->select('*')->from('vivian')->count_all_results();
		$config['per_page']	= 5;
		$config['uri_segment'] = 3;
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
		if($this->uri->segment(3))
				$offset	= ($this->uri->segment(3) -	1) * $config['per_page'];
		else
				$offset	= 0;
		$dados = $this->Vivian_model->GetAllByPage($config['per_page'], $offset);
		$data['dados']	= $dados;
		$data['error']	= null;
		$data['short_url']	= false;
		$data['pagination']	= $this->pagination->create_links();
		
		$data['content'] = '/administracao/paginacao';
		$this->load->view('/administracao/template', $data);
	}
	
	public function logout(){
		$this->session->set_userdata('nome', NULL);
		$this->session->set_userdata('logado', FALSE);
		redirect('/');
	}	

	# GET /vivian/create
	function create() {
		$data['cabecalho'] = 'Novo Cadastro';
		$data['content'] = '/administracao/create';
		$this->load->view('/administracao/template', $data);
	}

	# GET /vivian/edit/1
	function edit() {
		$data['cabecalho'] = 'Editar';
		$id = $this->uri->segment(2);
		$data['vivian'] = $this->Vivian_model->find($id);
		$data['content'] = '/administracao/create';
		$this->load->view('/administracao/template', $data);
	}

	function dash() {
		$data['cabecalho'] = 'Editar';
		$data['covid'] = $this->Vivian_model->pacientesComCovid()->result();
		$data['alta'] = $this->Vivian_model->desfechoAlta()->result();
		$data['obito'] = $this->Vivian_model->desfechoObito()->result();
		$data['content'] = '/administracao/dash';
		$this->load->view('/administracao/template', $data);
	}
	
	# GET /vivian/destroy/1
	function destroy() {
		$id = $this->uri->segment(3);
		$data['vivian'] = $this->Vivian_model->destroy($id);
		redirect('/administracao', 'refresh');
	}

	# POST /vivian/save
	function save() {
		$this->form_validation->set_rules('matricula', 'Matricula', 'required');
		$this->form_validation->set_rules('iniciais', 'Iniciais', 'required');
		$this->form_validation->set_rules('covid', 'Covid', 'required');
		$this->form_validation->set_rules('data_diag_covid', 'Data_diag_covid', 'required');
		$this->form_validation->set_rules('tempo_internacao', 'Tempo_internacao', 'required');
		$this->form_validation->set_rules('performance_status', 'Performance_status', 'required');
		$this->form_validation->set_rules('desfecho_alta', 'Desfecho alta', 'required');
		$this->form_validation->set_rules('desfecho_obito', 'Desecho obito', 'required');
		$this->form_validation->set_rules('desfecho_acomp_amb', 'Desecho acompanhamento amb.', 'required');
		$this->form_validation->set_rules('evento_tromb', 'Evento tromboembolico', 'required');
		$this->form_validation->set_rules('data_diagnostico_evento_tromb', 'Data diagnostico evento tromboembolico', 'required');
		$this->form_validation->set_rules('evento_tvp', 'Evento tvp', 'required');
		$this->form_validation->set_rules('evento_ep', 'Evento ep', 'required');
		$this->form_validation->set_rules('evento_avc', 'Evento avc', 'required');
		$this->form_validation->set_rules('evento_coag_intr', 'Evento cong. intr.', 'required');
		$this->form_validation->set_rules('evento_iam', 'Evento iam', 'required');
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
		$this->form_validation->set_rules('infeccoes_doencas_reumaticas', 'Infeccoes ou doencas reumaticas', 'required');
		$this->form_validation->set_rules('possui_infeccoes_doencas_reumaticas', 'Possui Infeccoes ou doencas reumaticas', 'required');
		$this->form_validation->set_rules('trombofilia', 'Trombofilia', 'required');
		$this->form_validation->set_rules('possui_trombofilia', 'Possui trombofilia', 'required');
		$this->form_validation->set_rules('outras_comorb_lista_1', 'Outras comorbidade', 'required');
		$this->form_validation->set_rules('outras_comorb_lista_2', 'Outras comorbidade', 'required');
		$this->form_validation->set_rules('outras_comorb_lista_3', 'Outras comorbidade', 'required');
		$this->form_validation->set_rules('outras_comorb_escrito', 'Outras comorbidade', 'required');
		$this->form_validation->set_rules('neoplasia_maligna', 'Neoplasia maligna', 'required');
		$this->form_validation->set_rules('cancer_ativo', 'Cancer ativo', 'required');
		$this->form_validation->set_rules('possui_cancer_ativo', 'Possui Cancer ativo', 'required');
		$this->form_validation->set_rules('sitio_tumoral_cerebro', 'Sitio tumoral Cerebro', 'required');
		$this->form_validation->set_rules('sitio_tumoral_pancreas', 'Sitio tumoral Pancreas', 'required');
		$this->form_validation->set_rules('sitio_tumoral_estomago', 'sitio_tumoral_Estomago', 'required');
		$this->form_validation->set_rules('sitio_tumoral_pulmao', 'Sitio tumoral Pulmao', 'required');
		$this->form_validation->set_rules('sitio_tumoral_bexiga', 'Sitio tumoral Bexiga', 'required');
		$this->form_validation->set_rules('sitio_tumoral_ginecologicos', 'sitio tumoral Ginecologicos', 'required');
		$this->form_validation->set_rules('sitio_tumoral_hematologicos', 'sitio tumoral Hematologicos', 'required');
		$this->form_validation->set_rules('sitio_tumoral_mama', 'sitio tumoral mama', 'required');
		$this->form_validation->set_rules('sitio_tumoral_outros_lista', 'sitio tumoral outros', 'required');
		$this->form_validation->set_rules('sitio_tumoral_outros_escrito', 'sitio tumoral outros', 'required');
		$this->form_validation->set_rules('metastase', 'Metastase', 'required');
		$this->form_validation->set_rules('tratamento_quimioterapia', 'Tratamento Quimioterapia', 'required');
		$this->form_validation->set_rules('tratamento_radioterapia', 'Tratamento Radioterapia', 'required');
		$this->form_validation->set_rules('tratamento_braquiterapia', 'Tratamento Braquiterapia', 'required');
		$this->form_validation->set_rules('tratamento_hormonioterapia', 'Tratamento Hormonioterapia', 'required');
		$this->form_validation->set_rules('possui_tratamento_hormonioterapia', 'Tratamento Hormonioterapia', 'required');
		$this->form_validation->set_rules('tratamento_imunoterapia', 'Tratamento Imunoterapia', 'required');
		$this->form_validation->set_rules('tratamento_cirurgia', 'Tratamento Cirurgia', 'required');
		$this->form_validation->set_rules('tratamento_terapias_angiogenicas', 'Tratamento Terapias angiogenicas', 'required');
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
		$this->form_validation->set_rules('outros_fatores_de_risco_tev', 'Outros fatores de risco tev', 'required');
		$this->form_validation->set_rules('score_padua', 'Score_de_padua', 'required');

		if ($this->form_validation->run()) {

			$data = $this->input->post(NULL, TRUE);
			$this->Vivian_model->save($data);
			$this->session->set_flashdata('msg-success','Dados salvos com sucesso', 15);
			redirect(base_url('administracao/paginacao/1'), 'refresh');	
					
		}
		$data['vivian'] =	$this->rebuild();
		$data['content'] = '/administracao/create';
		$this->load->view('/administracao/template', $data);
	}

	function rebuild() {
		$object = new Vivian_model();
		$object->id = $this->input->post('id', TRUE);
		$object->matricula = $this->input->post('matricula', TRUE);
		$object->iniciais = $this->input->post('iniciais', TRUE);
		$object->unidade = $this->input->post('unidade', TRUE);
		$object->covid = $this->input->post('covid', TRUE);
		$object->data_diag_covid = $this->input->post('data_diag_covid', TRUE);
		$object->tempo_internacao = $this->input->post('tempo_internacao', TRUE);
		$object->performance_status = $this->input->post('performance_status', TRUE);
		$object->desfecho = $this->input->post('desfecho', TRUE);
		$object->data_diagnostico_evento_tromb = $this->input->post('data_diagnostico_evento_tromb', TRUE);
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
		$object->evento_outro_escrito = $this->input->post('evento_outro_escrito', TRUE);
		$object->maior_que_70 = $this->input->post('maior_que_70', TRUE);
		$object->classificacao = $this->input->post('classificacao', TRUE);
		$object->outras_comorb_escrito = $this->input->post('outras_comorb_escrito', TRUE);
		$object->sitio_tumoral_outros_escrito = $this->input->post('sitio_tumoral_outros_escrito', TRUE);
		$object->outros_fatores_de_risco_tev = $this->input->post('outros_fatores_de_risco_tev', TRUE);
		$object->possui_obesidade = $this->input->post('possui_obesidade', TRUE);
		$object->possui_avc = $this->input->post('possui_avc', TRUE);
		$object->possui_infeccoes_doencas_reumaticas = $this->input->post('possui_infeccoes_doencas_reumaticas', TRUE);
		$object->possui_trombofilia = $this->input->post('possui_trombofilia', TRUE);
		$object->possui_cancer_ativo = $this->input->post('possui_cancer_ativo', TRUE);
		$object->desfecho_alta = $this->input->post('desfecho_alta', TRUE);
		$object->desfecho_obito = $this->input->post('desfecho_obito', TRUE);
		$object->desfecho_acomp_amb = $this->input->post('desfecho_acomp_amb', TRUE);
		$object->evento_tromb = $this->input->post('evento_tromb', TRUE);
		$object->evento_tvp = $this->input->post('evento_tvp', TRUE);
		$object->evento_ep = $this->input->post('evento_ep', TRUE);
		$object->evento_avc = $this->input->post('evento_avc', TRUE);
		$object->evento_coag_intr = $this->input->post('evento_coag_intr', TRUE);
		$object->evento_iam = $this->input->post('evento_iam', TRUE);
		$object->evento_outro_lista = $this->input->post('evento_outro_lista', TRUE);
		$object->possui_icc_ou_ir = $this->input->post('possui_icc_ou_ir', TRUE);
		$object->possui_iam = $this->input->post('possui_iam', TRUE);
		$object->infeccoes_doencas_reumaticas = $this->input->post('infeccoes_doencas_reumaticas', TRUE);
		$object->outras_comorb_lista_1 = $this->input->post('outras_comorb_lista_1', TRUE);
		$object->outras_comorb_lista_2 = $this->input->post('outras_comorb_lista_2', TRUE);
		$object->outras_comorb_lista_3 = $this->input->post('outras_comorb_lista_3', TRUE);
		$object->sitio_tumoral_cerebro = $this->input->post('sitio_tumoral_cerebro', TRUE);
		$object->sitio_tumoral_pancreas = $this->input->post('sitio_tumoral_pancreas', TRUE);
		$object->sitio_tumoral_estomago = $this->input->post('sitio_tumoral_estomago', TRUE);
		$object->sitio_tumoral_pulmao = $this->input->post('sitio_tumoral_pulmao', TRUE);
		$object->sitio_tumoral_bexiga = $this->input->post('sitio_tumoral_bexiga', TRUE);
		$object->sitio_tumoral_ginecologicos = $this->input->post('sitio_tumoral_ginecologicos', TRUE);
		$object->sitio_tumoral_hematologicos = $this->input->post('sitio_tumoral_hematologicos', TRUE);
		$object->sitio_tumoral_mama = $this->input->post('sitio_tumoral_mama', TRUE);
		$object->sitio_tumoral_outros_lista = $this->input->post('sitio_tumoral_outros_lista', TRUE);
		$object->metastase = $this->input->post('metastase', TRUE);
		$object->tratamento_quimioterapia = $this->input->post('tratamento_quimioterapia', TRUE);
		$object->tratamento_radioterapia = $this->input->post('tratamento_radioterapia', TRUE);
		$object->tratamento_braquiterapia = $this->input->post('tratamento_braquiterapia', TRUE);
		$object->tratamento_hormonioterapia = $this->input->post('tratamento_hormonioterapia', TRUE);
		$object->possui_tratamento_hormonioterapia = $this->input->post('possui_tratamento_hormonioterapia', TRUE);
		$object->tratamento_imunoterapia = $this->input->post('tratamento_imunoterapia', TRUE);
		$object->tratamento_cirurgia = $this->input->post('tratamento_cirurgia', TRUE);
		$object->tratamento_terapias_angiogenicas = $this->input->post('tratamento_terapias_angiogenicas', TRUE);
		$object->tratamento_outros = $this->input->post('tratamento_outros', TRUE);
		$object->possui_cirurgia_trauma_recente = $this->input->post('possui_cirurgia_trauma_recente', TRUE);
		$object->possui_tev_previo = $this->input->post('possui_tev_previo', TRUE);
		$object->possui_imobilizacao_prolongada = $this->input->post('possui_imobilizacao_prolongada', TRUE);
		$object->ag_estimulantes_eritropoese = $this->input->post('ag_estimulantes_eritropoese', TRUE);
		$object->score_padua = $this->input->post('score_padua', TRUE);
		return $object;
	}

	public function extrairDados(){
			$productResult = $this->Vivian_model->findToExtract()->result_array();
			if (isset($_POST["export"])) {
				$filename = "extracao.xls";
				header("Content-Type: application/vnd.ms-excel");
				header("Content-Disposition: attachment; filename=\"$filename\"");
				$isPrintHeader = false;
				if (! empty($productResult)) {
					foreach ($productResult as $row) {
						if (! $isPrintHeader) {
							echo implode("\t", array_keys($row)) . "\n";
							$isPrintHeader = true;
						}
						echo implode("\t", array_values($row)) . "\n";
					}
				}
				exit();
		}
	}
}

?>
