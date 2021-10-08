	<?php if(isset(($cabecalho))){ ;?>
	<h1><?=$cabecalho;?></h1>
	<?php }else{ ;?>
	<h1>Novo Cadastro</h1>
	<?php } ;?>
	<?= form_open('vivian/save','role="form" autocomplete="on"'); ?><?php if(validation_errors() != NULL && validation_errors() != '') { ?>
		<div class="alert alert-danger"><?= validation_errors(); ?></div><?php } ?>
		<input type="hidden" name="id" value="<?= isset($vivian)?$vivian->id:''?>"/>
		
<div class="card mt-3">
  <div class="card-header">
    <h4>Identificação</h4>
  </div>
	<div class="card-body">
	<div class="row">
		<div class="form-group col-sm-4">
			<label for="ordem">Ordem:</label><br/>
			
			<textarea name="ordem"  class="form-control"><?= isset($vivian)?$vivian->ordem:''?></textarea>
		</div>
		<div class="form-group col-sm-4">
			<label for="matricula">Matricula:</label><br/>
			
			<textarea name="matricula"  class="form-control"><?= isset($vivian)?$vivian->matricula:''?></textarea>
		</div>
		<div class="form-group col-sm-4">
			<label for="iniciais">Iniciais:</label><br/>
			
			<textarea name="iniciais"  class="form-control"><?= isset($vivian)?$vivian->iniciais:''?></textarea>
		</div>		
	</div>
	
	<div class="row">
		<div class="form-group col-sm-4">
			<label for="unidade">Unidade:</label><br/>
			
			<textarea name="unidade"  class="form-control"><?= isset($vivian)?$vivian->unidade:''?></textarea>
		</div>
		<div class="form-group col-sm-4">
			<label for="covid">Covid:</label><br/>
			
			<textarea name="covid"  class="form-control"><?= isset($vivian)?$vivian->covid:''?></textarea>
		</div>
		<div class="form-group col-sm-4">
			<label for="data_diag_covid">Data de diagnótico covid:</label><br/>
			
			<textarea name="data_diag_covid"  class="form-control"><?= isset($vivian)?$vivian->data_diag_covid:''?></textarea>
		</div>
	</div>	
		
	<div class="row">	
		<div class="form-group col-sm-6">
			<label for="tempo_internacao">Tempo de internação:</label><br/>
			
			<textarea name="tempo_internacao"  class="form-control"><?= isset($vivian)?$vivian->tempo_internacao:''?></textarea>
		</div>
		<div class="form-group col-sm-6">
			<label for="performance_status">Performance status:</label><br/>
			
			<textarea name="performance_status"  class="form-control"><?= isset($vivian)?$vivian->performance_status:''?></textarea>
		</div>
	</div>	
		
		<div class="form-group col-sm-12">
			<label for="desfecho">Desfecho:</label><br/>
			
			<textarea name="desfecho"  class="form-control"><?= isset($vivian)?$vivian->desfecho:''?></textarea>
		</div>
	</div>
</div>
		

<div class="card mt-3">
  <div class="card-header">
    <h4>Eventos Tromboembólicos</h4>
  </div>
	<div class="card-body">
	
	<div class="row">
		<div class="form-group col-sm-6">
			<label for="diagnostico_ev_tromb">Diagnóstico de ev tromb:</label><br/>
			
			<!--<textarea name="diagnostico_ev_tromb"  class="form-control"><?= isset($vivian)?$vivian->diagnostico_ev_tromb:''?></textarea>-->
			<select name="diagnostico_ev_tromb" id ="diagnostico_ev_tromb" class="form-select form-select-lg mb-3">
				<option value="Sim">Sim</option>
				<option value="Não">Não</option>
			</select>			
		</div>
		<div class="form-group col-sm-6">
			<label for="data_diagnostico">Data diagnóstico:</label><br/>
			
			<textarea name="data_diagnostico"  class="form-control"><?= isset($vivian)?$vivian->data_diagnostico:''?></textarea>
		</div>
		
	</div>
	
	<div class="row">
		<div class="form-group col-sm-6">
			<label for="tvp">TVP:</label><br/>
			
			<textarea name="tvp"  class="form-control"><?= isset($vivian)?$vivian->tvp:''?></textarea>
		</div>		

	
		<div class="form-group col-sm-6">
			<label for="ep">EP:</label><br/>
			
			<textarea name="ep"  class="form-control"><?= isset($vivian)?$vivian->ep:''?></textarea>
		</div>
	</div>	
		
		<div class="form-group col-sm-12">
			<label for="outro">Outro:</label><br/>
			
			<textarea name="outro"  class="form-control"><?= isset($vivian)?$vivian->outro:''?></textarea>
		</div>
	</div>
</div>

<div class="card mt-3">
  <div class="card-header">
    <h4>Caracterização</h4>
  </div>
	<div class="card-body">
	
	<div class="row">
		<div class="form-group col-sm-1">
			<label for="sexo">Sexo:</label><br/>
			<textarea class="form-control" name="sexo" maxlength=1><?= isset($vivian)?$vivian->sexo:''?></textarea>			
		</div>
		<div class="form-group col-sm-2">
			<label for="raca">Raça:</label><br/>
			
			<textarea name="raca"  class="form-control"><?= isset($vivian)?$vivian->raca:''?></textarea>
		</div>
		<div class="form-group col-sm-2">
			<label for="idade">Idade:</label><br/>
			
			<textarea name="idade"  class="form-control"><?= isset($vivian)?$vivian->idade:''?></textarea>
		</div>
		<div class="form-group col-sm-2">
			<label for="maior_70">Maior de 70 anos:</label><br/>
			<textarea class="form-control" name="maior_70" maxlength=3><?= isset($vivian)?$vivian->maior_70:''?></textarea>
			
		</div>
		<div class="form-group col-sm-1">
			<label for="peso">Peso:</label><br/>
			
			<textarea name="peso"  class="form-control"><?= isset($vivian)?$vivian->peso:''?></textarea>
		</div>
		<div class="form-group col-sm-2">
			<label for="altura">Altura:</label><br/>
			
			<textarea name="altura"  class="form-control"><?= isset($vivian)?$vivian->altura:''?></textarea>
		</div>
		<div class="form-group col-sm-2">
			<label for="imc">Imc:</label><br/>
			
			<textarea name="imc"  class="form-control"><?= isset($vivian)?$vivian->imc:''?></textarea>
		</div>
	</div>	
		
	</div>
</div>
		

<div class="card mt-3">
  <div class="card-header">
    <h4>Comorbidades</h4>
  </div>
	<div class="card-body">		
	
	<div class="row">
		<div class="form-group col-sm-3">
			<label for="obesidade">Obesidade:</label><br/>
			
			<textarea name="obesidade"  class="form-control"><?= isset($vivian)?$vivian->obesidade:''?></textarea>
		</div>
		<div class="form-group col-sm-3">
			<label for="has">HAS:</label><br/>
			
			<textarea name="has"  class="form-control"><?= isset($vivian)?$vivian->has:''?></textarea>
		</div>
		<div class="form-group col-sm-3">
			<label for="dm">DM:</label><br/>
			
			<textarea name="dm"  class="form-control"><?= isset($vivian)?$vivian->dm:''?></textarea>
		</div>
		<div class="form-group col-sm-3">
			<label for="icc_ou_ir">ICC ou IR:</label><br/>
			
			<textarea name="icc_ou_ir"  class="form-control"><?= isset($vivian)?$vivian->icc_ou_ir:''?></textarea>
		</div>
	</div>	
		
	<div class="row">	
		<div class="form-group col-sm-3">
			<label for="iam">IAM:</label><br/>
			
			<textarea name="iam"  class="form-control"><?= isset($vivian)?$vivian->iam:''?></textarea>
		</div>
		<div class="form-group col-sm-3">
			<label for="avc">AVC:</label><br/>
			
			<textarea name="avc"  class="form-control"><?= isset($vivian)?$vivian->avc:''?></textarea>
		</div>
		<div class="form-group col-sm-3">
			<label for="infeccoes_ou_doencas_reumaticas">Infecções ou doenças reumáticas:</label><br/>
			
			<textarea name="infeccoes_ou_doencas_reumaticas"  class="form-control"><?= isset($vivian)?$vivian->infeccoes_ou_doencas_reumaticas:''?></textarea>
		</div>
		<div class="form-group col-sm-3">
			<label for="trombofilia">Trombofilia:</label><br/>
			
			<textarea name="trombofilia"  class="form-control"><?= isset($vivian)?$vivian->trombofilia:''?></textarea>
		</div>
	</div>	
		
		<div class="form-group col-sm-12">
			<label for="outras">Outras:</label><br/>
			
			<textarea name="outras"  class="form-control"><?= isset($vivian)?$vivian->outras:''?></textarea>
		</div>
	</div>
</div>
		

<div class="card mt-3">
  <div class="card-header">
    <h4>Sítio Tumoral</h4>
  </div>
	<div class="card-body">	
	
	<div class="row">
		<div class="form-group col-sm-4">
			<label for="neoplasia_maligna">Neoplasia maligna:</label><br/>
			
			<textarea name="neoplasia_maligna"  class="form-control"><?= isset($vivian)?$vivian->neoplasia_maligna:''?></textarea>
		</div>
		<div class="form-group col-sm-4">
			<label for="cancer_ativo">Câncer ativo:</label><br/>
			
			<textarea name="cancer_ativo"  class="form-control"><?= isset($vivian)?$vivian->cancer_ativo:''?></textarea>
		</div>
		<div class="form-group col-sm-4">
			<label for="cerebro">Cérebro:</label><br/>
			
			<textarea name="cerebro"  class="form-control"><?= isset($vivian)?$vivian->cerebro:''?></textarea>
		</div>
	</div>	
		
	<div class="row">	
		<div class="form-group col-sm-4">
			<label for="pancreas">Pâncreas:</label><br/>
			
			<textarea name="pancreas"  class="form-control"><?= isset($vivian)?$vivian->pancreas:''?></textarea>
		</div>
		<div class="form-group col-sm-4">
			<label for="estomago">Estômago:</label><br/>
			
			<textarea name="estomago"  class="form-control"><?= isset($vivian)?$vivian->estomago:''?></textarea>
		</div>
		<div class="form-group col-sm-4">
			<label for="pulmao">Pulmão:</label><br/>
			
			<textarea name="pulmao"  class="form-control"><?= isset($vivian)?$vivian->pulmao:''?></textarea>
		</div>
	</div>	
		
	<div class="row">		
		<div class="form-group col-sm-4">
			<label for="bexiga">Bexiga:</label><br/>
			
			<textarea name="bexiga"  class="form-control"><?= isset($vivian)?$vivian->bexiga:''?></textarea>
		</div>
		<div class="form-group col-sm-4">
			<label for="ginecologicos">Ginecológicos:</label><br/>
			
			<textarea name="ginecologicos"  class="form-control"><?= isset($vivian)?$vivian->ginecologicos:''?></textarea>
		</div>
		<div class="form-group col-sm-4">
			<label for="hematologicos">Hematológicos:</label><br/>
			
			<textarea name="hematologicos"  class="form-control"><?= isset($vivian)?$vivian->hematologicos:''?></textarea>
		</div>
	</div>	
		
		<div class="form-group col-sm-12">
			<label for="outros">Outros:</label><br/>
			
			<textarea name="outros"  class="form-control"><?= isset($vivian)?$vivian->outros:''?></textarea>
		</div>
	</div>
</div>

		
<div class="card mt-3">
  <div class="card-header">
    <h4>Tratamento Realizado </h4>
  </div>
	<div class="card-body">			
	
	<div class="row">
		<div class="form-group col-sm-3">
			<label for="quimioterapia">Quimioterapia:</label><br/>
			
			<textarea name="quimioterapia"  class="form-control"><?= isset($vivian)?$vivian->quimioterapia:''?></textarea>
		</div>
		<div class="form-group col-sm-3">
			<label for="radioterapia">Radioterapia:</label><br/>
			
			<textarea name="radioterapia"  class="form-control"><?= isset($vivian)?$vivian->radioterapia:''?></textarea>
		</div>
		<div class="form-group col-sm-3">
			<label for="braquiterapia">Braquiterapia:</label><br/>
			
			<textarea name="braquiterapia"  class="form-control"><?= isset($vivian)?$vivian->braquiterapia:''?></textarea>
		</div>
		<div class="form-group col-sm-3">
			<label for="hormonioterapia">Hormonioterapia:</label><br/>
			
			<textarea name="hormonioterapia"  class="form-control"><?= isset($vivian)?$vivian->hormonioterapia:''?></textarea>
		</div>
	</div>	
	
	<div class="row">	
		<div class="form-group col-sm-4">
			<label for="imunoterapia">Imunoterapia:</label><br/>
			
			<textarea name="imunoterapia"  class="form-control"><?= isset($vivian)?$vivian->imunoterapia:''?></textarea>
		</div>
		<div class="form-group col-sm-4">
			<label for="cirurgia">Cirurgia:</label><br/>
			
			<textarea name="cirurgia"  class="form-control"><?= isset($vivian)?$vivian->cirurgia:''?></textarea>
		</div>
		<div class="form-group col-sm-4">
			<label for="terapias_angiogenicas">Terapias angiogênicas:</label><br/>
			
			<textarea name="terapias_angiogenicas"  class="form-control"><?= isset($vivian)?$vivian->terapias_angiogenicas:''?></textarea>
		</div>
	</div>
	
		<div class="form-group col-sm-12">
			<label for="outros_tratamentos">Outros tratamentos:</label><br/>
			
			<textarea name="outros_tratamentos"  class="form-control"><?= isset($vivian)?$vivian->outros_tratamentos:''?></textarea>
		</div>
	</div>
</div>
		
		<div class="form-group">
			<label for="quimioterapia_recente">Quimioterapia recente:</label><br/>
			
			<textarea name="quimioterapia_recente"  class="form-control"><?= isset($vivian)?$vivian->quimioterapia_recente:''?></textarea>
		</div>
		<div class="form-group">
			<label for="plaquetas_pre_qt">Plaquetas pré-qt:</label><br/>
			
			<textarea name="plaquetas_pre_qt"  class="form-control"><?= isset($vivian)?$vivian->plaquetas_pre_qt:''?></textarea>
		</div>
		<div class="form-group">
			<label for="cirurgia_trauma_recente">Cirurgia ou trauma recente:</label><br/>
			
			<textarea name="cirurgia_trauma_recente"  class="form-control"><?= isset($vivian)?$vivian->cirurgia_trauma_recente:''?></textarea>
		</div>
		<div class="form-group">
			<label for="tev_previo">Tev prévio:</label><br/>
			
			<textarea name="tev_previo"  class="form-control"><?= isset($vivian)?$vivian->tev_previo:''?></textarea>
		</div>
		<div class="form-group">
			<label for="tabagismo">Tabagismo:</label><br/>
			
			<textarea name="tabagismo"  class="form-control"><?= isset($vivian)?$vivian->tabagismo:''?></textarea>
		</div>
		<div class="form-group">
			<label for="uso_de_aco">Uso de aço:</label><br/>
			
			<textarea name="uso_de_aco"  class="form-control"><?= isset($vivian)?$vivian->uso_de_aco:''?></textarea>
		</div>
		<div class="form-group">
			<label for="imobilizacao_prolongada">Imobilização prolongada:</label><br/>
			
			<textarea name="imobilizacao_prolongada"  class="form-control"><?= isset($vivian)?$vivian->imobilizacao_prolongada:''?></textarea>
		</div>
		<div class="form-group">
			<label for="cvc">CVC:</label><br/>
			
			<textarea name="cvc"  class="form-control"><?= isset($vivian)?$vivian->cvc:''?></textarea>
		</div>
		<div class="form-group">
			<label for="transfusoes">Transfusões:</label><br/>
			
			<textarea name="transfusoes"  class="form-control"><?= isset($vivian)?$vivian->transfusoes:''?></textarea>
		</div>
		<div class="form-group">
			<label for="ag_estimulante_eritropoese">Ag. estimulantes da eritropoese:</label><br/>
			
			<textarea name="ag_estimulante_eritropoese"  class="form-control"><?= isset($vivian)?$vivian->ag_estimulante_eritropoese:''?></textarea>
		</div>
		<div class="form-group">
			<label for="hemoglobina">Hemoglobina:</label><br/>
			
			<textarea name="hemoglobina"  class="form-control"><?= isset($vivian)?$vivian->hemoglobina:''?></textarea>
		</div>
		<div class="form-group">
			<label for="ddimero">D-dímero:</label><br/>
			
			<textarea name="ddimero"  class="form-control"><?= isset($vivian)?$vivian->ddimero:''?></textarea>
		</div>
		<div class="form-group">
			<label for="fatores_geneticos">Fatores genéticos:</label><br/>
			
			<textarea name="fatores_geneticos"  class="form-control"><?= isset($vivian)?$vivian->fatores_geneticos:''?></textarea>
		</div>
		<div class="form-group">
			<label for="qual">Qual:</label><br/>
			
			<textarea name="qual"  class="form-control"><?= isset($vivian)?$vivian->qual:''?></textarea>
		</div>
		<div class="form-group">
			<label for="outros_fatores_tev">Outros fatores de risco para tev:</label><br/>
			
			<textarea name="outros_fatores_tev"  class="form-control"><?= isset($vivian)?$vivian->outros_fatores_tev:''?></textarea>
		</div>
		<div class="form-group pb-3">
			<label for="score_de_padua">Score_de_padua:</label><br/>
			
			<textarea name="score_de_padua"  class="form-control"><?= isset($vivian)?$vivian->score_de_padua:''?></textarea>
		</div>
		<input type="submit" value="Salvar" class="btn btn-primary"/>
		<?= anchor(base_url('paginacao/1'),'Voltar','class="btn btn-success"'); ?>
	</form>

