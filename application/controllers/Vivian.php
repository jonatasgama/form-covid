<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Vivian Controller.
 */
class Vivian extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Vivian_model');
		$this->load->library('pagination');
		//verificaSessao($this->session->userdata('nome'));
	}

	function login() {
		$this->load->view('/vivian/login');
	}
	
	function welcome() {
		$this->load->view('/welcome_message');
	}
	
	function logar(){
		$this->form_validation->set_rules('usuario', 'usuario', 'required');
		$this->form_validation->set_rules('senha', 'senha', 'required');
		if($this->form_validation->run() == FALSE){
			$this->login();
		}else{
			$user = $this->input->post('usuario');
			$senha = MD5($this->input->post('senha'));
			$usuario = $this->Vivian_model->logar($user, $senha)->result();
			$administrador = $this->Vivian_model->logarAdmin($user, $senha)->result();
			//echo $this->db->last_query();
			//print_r($usuario);
			//exit();
			if($usuario){
				foreach($usuario as $u){
					$this->session->set_userdata('nome', $u->nome);
					$this->session->set_userdata('id_usuario', $u->id);
					$this->session->set_userdata('logado', TRUE);
					redirect(base_url('/paginacao'));
				}
			}elseif($administrador){
				foreach($administrador as $a){
					$this->session->set_userdata('nome', $a->nome);
					$this->session->set_userdata('id_usuario', $a->id);
					$this->session->set_userdata('logado', TRUE);
					redirect(base_url('/administracao'));
				}
			}else{
				$this->session->set_userdata('nome', NULL);
				$this->session->set_userdata('logado', FALSE);
				$this->session->set_tempdata('msg-danger', 'Usuário ou senha incorreto.', 5);
				redirect(base_url('/'));
			}
		}

	}
	
	public function logout(){
		$this->session->set_userdata('nome', NULL);
		$this->session->set_userdata('logado', FALSE);
		redirect('/');
	}
	
	# GET /vivian
	function index() {
		//$data['vivian'] = $this->Vivian_model->find();
		//$data['content'] = '/vivian/index';
		$config['base_url']	= base_url('paginacao');
		$config['total_rows'] = $this->db->select('*')->from('form_covid')->count_all_results();
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
		$this->Vivian_model->destroy($id);
		$this->session->set_tempdata('msg-success','Registro excluído com sucesso', 5);
		redirect(base_url('paginacao/1'), 'refresh');
	}

	# POST /vivian/save
	function save() {
		$data = $this->input->post(NULL, TRUE);
		$this->Vivian_model->save($data);
		$this->session->set_tempdata('msg-success','Dados salvos com sucesso', 5);
		redirect(base_url('paginacao/1'), 'refresh');
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
	
	function devolvidos() {
		$config['base_url']	= base_url('devolvidos');
		$config['total_rows'] = $this->db->select('*')->from('form_covid')->where('dono_registro', 'usr')->where('id_usuario', $this->session->userdata('id_usuario'))->count_all_results();
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
		$dados = $this->Vivian_model->listaDevolvidos($config['per_page'], $offset);
		$data['dados']	= $dados;
		$data['error']	= null;
		$data['short_url']	= false;
		$data['pagination']	= $this->pagination->create_links();
		
		$data['content'] = '/vivian/devolvidos';
		$this->load->view('/includes/template', $data);
	}	
		
}

?>
