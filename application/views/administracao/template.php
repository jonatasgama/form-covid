<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administração</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Administração</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('administracao');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Pacientes</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?=base_url('administracao/create');?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Novo</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('administracao/dash');?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Usuários</span>
                </a>
            </li>-->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!--<form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>-->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <!--<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Pesquisar" aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>-->
                        </li>

                        <!-- Nav Item - Alerts
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>

                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>

                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>-->

                        <!-- Nav Item - Messages
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                      
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
          
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>-->


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Olá <?=$this->session->userdata('nome')?></span>
              
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!--<a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>-->
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
				
				<div class="container-fluid">
				
					<?php if(isset($errors)) { ?>
						<div class="alert alert-danger">
						<?php foreach ($errors as $error) { ?>
							<?= $error; ?>
						<?php } ?>
						</div>
					<?php } ?>                 
					
					<?php $this->load->view($content); ?>				
				
                </div>


            </div>


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sair</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Deseja realmente sair?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="<?=base_url('administracao/sair');?>">Sim</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('assets/js/sb-admin-2.min.js');?>"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url('assets/vendor/chart.js/Chart.min.js');?>"></script>

	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?=base_url('assets/js/jquery.mask.min.js');?>"></script>
<script>
	function verificaIdade(){
		x = document.getElementById('idade').value;
		if(x > 70){
			document.getElementById('maior_70').value = '1'
			document.getElementById('maior_que_70').value = 'Sim'
		}else{
			document.getElementById('maior_70').value = '0'
			document.getElementById('maior_que_70').value = 'Não'
		}
	}
	
	function calculaImc(){
		let peso = document.getElementById('peso').value;
		let altura = document.getElementById('altura').value;
		let imc = (peso / (altura * altura)) * 10000;
		if(imc.toString().substr(0,5) == 'NaN' || altura == '0' || peso == '0'){
			document.getElementById('imc').value = 'N/A';
		}else{
			document.getElementById('imc').value = imc.toString().substr(0,5);
		}
	}
	
	function calculaClassificacao(){
		let classificacao = document.getElementById('imc').value;
		
		if(classificacao >= 40){
			document.getElementById('classificacao').value = 'Obesidade grau 3';
		}else if(classificacao >= 35){
			document.getElementById('classificacao').value = 'Obesidade grau 2';
		}else if(classificacao >= 30){
			document.getElementById('classificacao').value = 'Obesidade grau 1';
		}else if(classificacao >= 25){
			document.getElementById('classificacao').value = 'Sobrepeso';
		}else if(classificacao >= 18.5){
			document.getElementById('classificacao').value = 'Adequado';
		}else if(classificacao >= 17){
			document.getElementById('classificacao').value = 'Baixo peso leve';
		}else if(classificacao >= 16){
			document.getElementById('classificacao').value = 'Baixo peso moderado';
		}else if(classificacao >= 15){
			document.getElementById('classificacao').value = 'Baixo peso severo';
		}
	}
	
	document.getElementById('possui_obesidade').value = document.getElementById('obesidade').value;
	document.getElementById('possui_icc_ou_ir').value = document.getElementById('icc_ou_ir').value;
	document.getElementById('possui_iam').value = document.getElementById('iam').value;
	document.getElementById('possui_avc').value = document.getElementById('avc').value;
	document.getElementById('possui_infeccoes_doencas_reumaticas').value = document.getElementById('infeccoes_doencas_reumaticas').value;
	document.getElementById('possui_trombofilia').value = document.getElementById('trombofilia').value;
	document.getElementById('possui_cancer_ativo').value = document.getElementById('cancer_ativo').value;
	document.getElementById('possui_tratamento_hormonioterapia').value = document.getElementById('tratamento_hormonioterapia').value;
	document.getElementById('possui_tev_previo').value = document.getElementById('tev_previo').value;
	document.getElementById('possui_imobilizacao_prolongada').value = document.getElementById('imobilizacao_prolongada').value;
	document.getElementById('possui_cirurgia_trauma_recente').value = document.getElementById('cirurgia_trauma_recente').value;
	
	function scorePadua(){
		if(isNaN(document.getElementById('maior_70').value) || document.getElementById('maior_70').value == ''){
			alert('Favor informar a idade');
		}else{
			let score = 0;
			score += parseInt(document.getElementById('obesidade').value);
			score += parseInt(document.getElementById('icc_ou_ir').value) == 0 ? 0 : 1;
			score += parseInt(document.getElementById('iam').value);
			score += parseInt(document.getElementById('avc').value);
			score += parseInt(document.getElementById('infeccoes_doencas_reumaticas').value) == 0 ? 0 : 1;
			score += parseInt(document.getElementById('trombofilia').value);
			score += parseInt(document.getElementById('cancer_ativo').value) == 1 ? 3 : 0;
			score += parseInt(document.getElementById('tratamento_hormonioterapia').value);
			score += parseInt(document.getElementById('cirurgia_trauma_recente').value) == 1 ? 2 : 0;
			score += parseInt(document.getElementById('tev_previo').value) == 1 ? 3 : 0;
			score += parseInt(document.getElementById('imobilizacao_prolongada').value) == 1 ? 3 : 0;
			score += parseInt(document.getElementById('maior_70').value);
			document.getElementById('score_padua').value = score;
		}
	}
	
	function confirmacao(id) {
		 var resposta = confirm("Deseja remover esse registro?");
		 if (resposta == true) {
			  window.location.href = "<?=base_url('administracao/destroy/');?>"+id;
		 }
	}
	
	function pegaId(id){
		let urlExclusao = document.getElementById('confirmaExclusao');
		
		urlExclusao.setAttribute("href","<?=base_url('administracao/destroy/');?>"+id);
	}
	
	function dataCovid(){
		let teveCovid = document.getElementById('covid').value;
		console.log(teveCovid);
		if(teveCovid == '1'){
			document.getElementById('data_diag_covid').removeAttribute("readonly");
			document.getElementById('tempo_internacao').removeAttribute("readonly");
		}else{
			document.getElementById('data_diag_covid').setAttribute("readonly", "readonly");
			document.getElementById('tempo_internacao').setAttribute("readonly", "readonly");
		}
	}

	function verificaZeros() {
	  let peso = document.getElementById("peso").value
	  let altura = document.getElementById("altura").value
	  
	  if(peso == '0' || peso == '00' || altura == '0' || altura == '00'){
		  alert('Os campos peso e/ou altura não podem ser 0(zero).\n Favor preencher N/A caso não tenha a informação.');
		  return false;
	  }else{
		  document.form.submit();
	  }
	}	
	
<?php
if(isset($vivian)){ ;?>
	
	document.getElementById('covid').value = '<?=$vivian->covid;?>';	
	document.getElementById('performance_status').value = '<?=$vivian->performance_status;?>';
	document.getElementById('possui_obesidade').value = '<?=$vivian->possui_obesidade;?>';
	document.getElementById('possui_avc').value = '<?=$vivian->possui_avc;?>';
	document.getElementById('possui_infeccoes_doencas_reumaticas').value = '<?=$vivian->possui_infeccoes_doencas_reumaticas;?>';
	document.getElementById('possui_trombofilia').value = '<?=$vivian->possui_trombofilia;?>';
	document.getElementById('possui_cancer_ativo').value = '<?=$vivian->possui_cancer_ativo;?>';
	document.getElementById('desfecho_alta').value = '<?=$vivian->desfecho_alta;?>';
	document.getElementById('desfecho_obito').value = '<?=$vivian->desfecho_obito;?>';
	document.getElementById('desfecho_acomp_amb').value = '<?=$vivian->desfecho_acomp_amb;?>';
	document.getElementById('evento_tromb').value = '<?=$vivian->evento_tromb;?>';
	document.getElementById('evento_tvp').value = '<?=$vivian->evento_tvp;?>';
	document.getElementById('evento_ep').value = '<?=$vivian->evento_ep;?>';
	document.getElementById('evento_avc').value = '<?=$vivian->evento_avc;?>';
	document.getElementById('evento_coag_intr').value = '<?=$vivian->evento_coag_intr;?>';
	document.getElementById('evento_iam').value = '<?=$vivian->evento_iam;?>';
	document.getElementById('evento_outro_lista').value = '<?=$vivian->evento_outro_lista;?>';
	document.getElementById('evento_outro_escrito').value = '<?=$vivian->evento_outro_escrito;?>';
	document.getElementById('sexo').value = '<?=$vivian->sexo;?>';
	document.getElementById('raca').value = '<?=$vivian->raca;?>';
	document.getElementById('obesidade').value = '<?=$vivian->obesidade;?>';
	document.getElementById('has').value = '<?=$vivian->has;?>';
	document.getElementById('dm').value = '<?=$vivian->dm;?>';
	document.getElementById('icc_ou_ir').value = '<?=$vivian->icc_ou_ir;?>';
	document.getElementById('possui_icc_ou_ir').value = '<?=$vivian->possui_icc_ou_ir;?>';
	document.getElementById('iam').value = '<?=$vivian->iam;?>';
	document.getElementById('possui_iam').value = '<?=$vivian->possui_iam;?>';
	document.getElementById('avc').value = '<?=$vivian->avc;?>';
	document.getElementById('infeccoes_doencas_reumaticas').value = '<?=$vivian->infeccoes_doencas_reumaticas;?>';
	document.getElementById('trombofilia').value = '<?=$vivian->trombofilia;?>';
	document.getElementById('outras_comorb_lista_1').value = '<?=$vivian->outras_comorb_lista_1;?>';
	document.getElementById('outras_comorb_lista_2').value = '<?=$vivian->outras_comorb_lista_2;?>';
	document.getElementById('outras_comorb_lista_3').value = '<?=$vivian->outras_comorb_lista_3;?>';
	document.getElementById('outras_comorb_escrito').value = '<?=$vivian->outras_comorb_escrito;?>';
	document.getElementById('neoplasia_maligna').value = '<?=$vivian->neoplasia_maligna;?>';
	document.getElementById('cancer_ativo').value = '<?=$vivian->cancer_ativo;?>';
	document.getElementById('sitio_tumoral_cerebro').value = '<?=$vivian->sitio_tumoral_cerebro;?>';
	document.getElementById('sitio_tumoral_pancreas').value = '<?=$vivian->sitio_tumoral_pancreas;?>';
	document.getElementById('sitio_tumoral_estomago').value = '<?=$vivian->sitio_tumoral_estomago;?>';
	document.getElementById('sitio_tumoral_pulmao').value = '<?=$vivian->sitio_tumoral_pulmao;?>';
	document.getElementById('sitio_tumoral_bexiga').value = '<?=$vivian->sitio_tumoral_bexiga;?>';
	document.getElementById('sitio_tumoral_ginecologicos').value = '<?=$vivian->sitio_tumoral_ginecologicos;?>';
	document.getElementById('sitio_tumoral_hematologicos').value = '<?=$vivian->sitio_tumoral_hematologicos;?>';
	document.getElementById('sitio_tumoral_mama').value = '<?=$vivian->sitio_tumoral_mama;?>';
	document.getElementById('sitio_tumoral_outros_lista').value = '<?=$vivian->sitio_tumoral_outros_lista;?>';
	document.getElementById('metastase').value = '<?=$vivian->metastase;?>';
	document.getElementById('tratamento_quimioterapia').value = '<?=$vivian->tratamento_quimioterapia;?>';
	document.getElementById('tratamento_radioterapia').value = '<?=$vivian->tratamento_radioterapia;?>';
	document.getElementById('tratamento_braquiterapia').value = '<?=$vivian->tratamento_braquiterapia;?>';
	document.getElementById('tratamento_hormonioterapia').value = '<?=$vivian->tratamento_hormonioterapia;?>';
	document.getElementById('possui_tratamento_hormonioterapia').value = '<?=$vivian->possui_tratamento_hormonioterapia;?>';
	document.getElementById('tratamento_imunoterapia').value = '<?=$vivian->tratamento_imunoterapia;?>';
	document.getElementById('tratamento_cirurgia').value = '<?=$vivian->tratamento_cirurgia;?>';
	document.getElementById('tratamento_terapias_angiogenicas').value = '<?=$vivian->tratamento_terapias_angiogenicas;?>';
	document.getElementById('tratamento_outros').value = '<?=$vivian->tratamento_outros;?>';
	document.getElementById('quimioterapia_recente').value = '<?=$vivian->quimioterapia_recente;?>';
	document.getElementById('plaquetas_pre_qt').value = '<?=$vivian->plaquetas_pre_qt;?>';
	document.getElementById('cirurgia_trauma_recente').value = '<?=$vivian->cirurgia_trauma_recente;?>';
	document.getElementById('possui_cirurgia_trauma_recente').value = '<?=$vivian->possui_cirurgia_trauma_recente;?>';
	document.getElementById('tev_previo').value = '<?=$vivian->tev_previo;?>';
	document.getElementById('possui_tev_previo').value = '<?=$vivian->possui_tev_previo;?>';
	document.getElementById('tabagismo').value = '<?=$vivian->tabagismo;?>';
	document.getElementById('uso_de_aco').value = '<?=$vivian->uso_de_aco;?>';
	document.getElementById('imobilizacao_prolongada').value = '<?=$vivian->imobilizacao_prolongada;?>';
	document.getElementById('possui_imobilizacao_prolongada').value = '<?=$vivian->possui_imobilizacao_prolongada;?>';
	document.getElementById('cvc').value = '<?=$vivian->cvc;?>';
	document.getElementById('transfusoes').value = '<?=$vivian->transfusoes;?>';
	document.getElementById('ag_estimulantes_eritropoese').value = '<?=$vivian->ag_estimulantes_eritropoese;?>';
	document.getElementById('hemoglobina').value = '<?=$vivian->hemoglobina;?>';
	document.getElementById('ddimero').value = '<?=$vivian->ddimero;?>';
	document.getElementById('fatores_geneticos').value = '<?=$vivian->fatores_geneticos;?>';
	document.getElementById('qual').value = '<?=$vivian->qual;?>';
	document.getElementById('outros_fatores_de_risco_tev').value = '<?=$vivian->outros_fatores_de_risco_tev;?>';
	
	
<?php } ;?>

</script>

<script>
  $(function(){
      //get the pie chart canvas
      var cData = JSON.parse(`<?php echo $chart_data; ?>`);
      var ctx = $("#myPieChart");
 
      //pie chart data
      var data = {
        labels: cData.label,
        datasets: [
          {
            label: "Users Count",
            data: cData.qtd,
            backgroundColor: [
              "#FFC0CB",
              "#0000FF",
            ],
            borderColor: [
              "#CDA776",
              "#989898",
            ],
            borderWidth: [1, 1]
          }
        ]
      };
 
      //options
      var options = {
        responsive: true,
        title: {
          display: false,
          position: "top",
          text: "Last Week Registered Users -  Day Wise Count",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
 
      //create Pie Chart class object
      var chart1 = new Chart(ctx, {
        type: "doughnut",
        data: data,
        options: options
      });
 
  });

</script>	                    


<script>
  $(function(){
      //get the bar chart canvas
      var cData = JSON.parse(`<?php echo $chart_line; ?>`);
      var ctx = $("#myAreaChart");
 
      //bar chart data
      var data = {
        labels: cData.label,
        datasets: [
          {
            label: cData.label,
            data: cData.qtd,
            backgroundColor: [
              "#DC143C",
              "#F4A460",
              "#2E8B57",
              "#1D7A46",
              "#CDA776",
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
            ],
            borderColor: [
              "#CB252B",
              "#E39371",
              "#1D7A46",
              "#F4A460",
              "#CDA776",
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
            ],
            borderWidth: [1, 1, 1, 1, 1,1,1,1, 1, 1, 1,1,1]
          }
        ]
      };
 
      //options
      var options = {
        scales:{
            y:{
                beginAtZero: true,
            }
        },
        responsive: true,
        title: {
          display: false,
          position: "top",
          text: "",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: false,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
 
      //create bar Chart class object
      var chart1 = new Chart(ctx, {
        type: "bar",
        data: data,
        options: options
      });
 
  });
</script>

</body>

</html>				