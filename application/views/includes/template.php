<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="robots" content="ALL" />
	<title>Vivian</title>

	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link href="<?=base_url('assets/css/estilo.css');?>" rel="stylesheet">

</head>
<body>
<!--<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <a class="navbar-brand" href="<?=base_url()?>">Formulário Covid-19</a>
	<a class="navbar-brand" href="<?=base_url('create')?>">Novo</a>
  </div>
</nav>-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3 sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Formulário Covid-19</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
	    <a class="nav-link" aria-current="page" href="<?=base_url('paginacao')?>">Home</a>
        <a class="nav-link" href="<?=base_url('create')?>">Novo</a>
		<a class="nav-link" href="<?=base_url('devolvidos')?>">Devolvidos</a>
		<a class="nav-link" aria-current="page" href="#">Bem vindo(a) <?= $this->session->userdata('nome') ;?></a>
		<a class="nav-link" aria-current="page" href="<?=base_url('/sair');?>">Sair</a>
		
		
      </div>
    </div>
  </div>
</nav>	

	<div class="container">
		<div class="row">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?=base_url('assets/js/jquery.mask.min.js');?>"></script>
<script src="<?=base_url('assets/js/main.js');?>"></script>
<script>		

	function verificaVazios(){
		var x = document.getElementById("formulario").querySelectorAll("[data-form]");
		var vazios = [];
		x.forEach(function(elemento){
			if(elemento.value == ""){
				vazios.push(elemento.name+"\n");
			}			
		});
		if(vazios.length > 0){
			let resposta = confirm("Os campos abaixo estão em branco, deseja salvar?\n" +vazios);
			return resposta;
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
	document.getElementById('evento_outro_escrito').value = '<?=rtrim($vivian->evento_outro_escrito);?>';
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
	document.getElementById('outras_comorb_escrito').value = '<?=rtrim($vivian->outras_comorb_escrito);?>';
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
</body>
</html>