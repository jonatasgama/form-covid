	<?php if(isset(($cabecalho))){ ;?>
	<h1><?=$cabecalho;?></h1>
	<?php }else{ ;?>
	<h1>Novo Cadastro</h1>
	<?php } ;?>
	<?= form_open('administracao/save','role="form" autocomplete="on" onSubmit="verificaZeros(); return false;"'); ?><?php if(validation_errors() != NULL && validation_errors() != 'N/A') { ?>
		<div class="alert alert-danger"><?= validation_errors(); ?></div><?php } ?>
		<input type="hidden" name="id" value="<?= isset($vivian)?$vivian->id:''?>"/>
		
		<?php $this->load->view('/create_main');?>
		
		<input type="submit" value="Salvar" class="btn btn-primary"/>
		<?= anchor(base_url('administracao/paginacao/1'),'Voltar','class="btn btn-success"'); ?>
	
	</div>
</div>

