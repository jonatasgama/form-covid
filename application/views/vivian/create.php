	<h1>Create</h1>
	<?= form_open('vivian/save','role="form"'); ?><?php if(validation_errors() != NULL && validation_errors() != '') { ?>
		<div class="alert alert-danger"><?= validation_errors(); ?></div><?php } ?>
		<input type="hidden" name="id" value="<?= isset($vivian)?$vivian->id:''?>"/>
		
		<div class="form-group">
			<label for="ordem">Ordem:</label><br/>
			
			<textarea name="ordem"  class="form-control"><?= isset($vivian)?$vivian->ordem:''?></textarea>
		</div>
		<div class="form-group">
			<label for="matricula">Matricula:</label><br/>
			
			<textarea name="matricula"  class="form-control"><?= isset($vivian)?$vivian->matricula:''?></textarea>
		</div>
		<div class="form-group">
			<label for="iniciais">Iniciais:</label><br/>
			
			<textarea name="iniciais"  class="form-control"><?= isset($vivian)?$vivian->iniciais:''?></textarea>
		</div>
		<div class="form-group">
			<label for="unidade">Unidade:</label><br/>
			
			<textarea name="unidade"  class="form-control"><?= isset($vivian)?$vivian->unidade:''?></textarea>
		</div>
		<div class="form-group">
			<label for="covid">Covid:</label><br/>
			
			<textarea name="covid"  class="form-control"><?= isset($vivian)?$vivian->covid:''?></textarea>
		</div>
		<div class="form-group">
			<label for="data_diag_covid">Data_diag_covid:</label><br/>
			
			<textarea name="data_diag_covid"  class="form-control"><?= isset($vivian)?$vivian->data_diag_covid:''?></textarea>
		</div>
		<div class="form-group">
			<label for="tempo_internacao">Tempo_internacao:</label><br/>
			
			<textarea name="tempo_internacao"  class="form-control"><?= isset($vivian)?$vivian->tempo_internacao:''?></textarea>
		</div>
		<div class="form-group">
			<label for="performance_status">Performance_status:</label><br/>
			
			<textarea name="performance_status"  class="form-control"><?= isset($vivian)?$vivian->performance_status:''?></textarea>
		</div>
		<div class="form-group">
			<label for="desfecho">Desfecho:</label><br/>
			
			<textarea name="desfecho"  class="form-control"><?= isset($vivian)?$vivian->desfecho:''?></textarea>
		</div>
		<div class="form-group">
			<label for="diagnostico_ev_tromb">Diagnostico_ev_tromb:</label><br/>
			
			<textarea name="diagnostico_ev_tromb"  class="form-control"><?= isset($vivian)?$vivian->diagnostico_ev_tromb:''?></textarea>
		</div>
		<div class="form-group">
			<label for="data_diagnostico">Data_diagnostico:</label><br/>
			
			<textarea name="data_diagnostico"  class="form-control"><?= isset($vivian)?$vivian->data_diagnostico:''?></textarea>
		</div>
		<div class="form-group">
			<label for="tvp">Tvp:</label><br/>
			
			<textarea name="tvp"  class="form-control"><?= isset($vivian)?$vivian->tvp:''?></textarea>
		</div>
		<div class="form-group">
			<label for="ep">Ep:</label><br/>
			
			<textarea name="ep"  class="form-control"><?= isset($vivian)?$vivian->ep:''?></textarea>
		</div>
		<div class="form-group">
			<label for="outro">Outro:</label><br/>
			
			<textarea name="outro"  class="form-control"><?= isset($vivian)?$vivian->outro:''?></textarea>
		</div>
		<div class="form-group">
			<label for="sexo">Sexo:</label><br/>
			<input type="text" class="form-control" name="sexo" placeholder="Enter Sexo" value="<?= isset($vivian)?$vivian->sexo:''?>"/>
			
		</div>
		<div class="form-group">
			<label for="raca">Raca:</label><br/>
			
			<textarea name="raca"  class="form-control"><?= isset($vivian)?$vivian->raca:''?></textarea>
		</div>
		<div class="form-group">
			<label for="idade">Idade:</label><br/>
			
			<textarea name="idade"  class="form-control"><?= isset($vivian)?$vivian->idade:''?></textarea>
		</div>
		<div class="form-group">
			<label for="maior_70">Maior_70:</label><br/>
			<input type="text" class="form-control" name="maior_70" placeholder="Enter Maior_70" value="<?= isset($vivian)?$vivian->maior_70:''?>"/>
			
		</div>
		<div class="form-group">
			<label for="peso">Peso:</label><br/>
			
			<textarea name="peso"  class="form-control"><?= isset($vivian)?$vivian->peso:''?></textarea>
		</div>
		<div class="form-group">
			<label for="altura">Altura:</label><br/>
			
			<textarea name="altura"  class="form-control"><?= isset($vivian)?$vivian->altura:''?></textarea>
		</div>
		<div class="form-group">
			<label for="imc">Imc:</label><br/>
			
			<textarea name="imc"  class="form-control"><?= isset($vivian)?$vivian->imc:''?></textarea>
		</div>
		<div class="form-group">
			<label for="obesidade">Obesidade:</label><br/>
			
			<textarea name="obesidade"  class="form-control"><?= isset($vivian)?$vivian->obesidade:''?></textarea>
		</div>
		<div class="form-group">
			<label for="has">Has:</label><br/>
			
			<textarea name="has"  class="form-control"><?= isset($vivian)?$vivian->has:''?></textarea>
		</div>
		<div class="form-group">
			<label for="dm">Dm:</label><br/>
			
			<textarea name="dm"  class="form-control"><?= isset($vivian)?$vivian->dm:''?></textarea>
		</div>
		<div class="form-group">
			<label for="icc_ou_ir">Icc_ou_ir:</label><br/>
			
			<textarea name="icc_ou_ir"  class="form-control"><?= isset($vivian)?$vivian->icc_ou_ir:''?></textarea>
		</div>
		<div class="form-group">
			<label for="iam">Iam:</label><br/>
			
			<textarea name="iam"  class="form-control"><?= isset($vivian)?$vivian->iam:''?></textarea>
		</div>
		<div class="form-group">
			<label for="avc">Avc:</label><br/>
			
			<textarea name="avc"  class="form-control"><?= isset($vivian)?$vivian->avc:''?></textarea>
		</div>
		<div class="form-group">
			<label for="infeccoes_ou_doencas_reumaticas">Infeccoes_ou_doencas_reumaticas:</label><br/>
			
			<textarea name="infeccoes_ou_doencas_reumaticas"  class="form-control"><?= isset($vivian)?$vivian->infeccoes_ou_doencas_reumaticas:''?></textarea>
		</div>
		<div class="form-group">
			<label for="trombofilia">Trombofilia:</label><br/>
			
			<textarea name="trombofilia"  class="form-control"><?= isset($vivian)?$vivian->trombofilia:''?></textarea>
		</div>
		<div class="form-group">
			<label for="outras">Outras:</label><br/>
			
			<textarea name="outras"  class="form-control"><?= isset($vivian)?$vivian->outras:''?></textarea>
		</div>
		<div class="form-group">
			<label for="neoplasia_maligna">Neoplasia_maligna:</label><br/>
			
			<textarea name="neoplasia_maligna"  class="form-control"><?= isset($vivian)?$vivian->neoplasia_maligna:''?></textarea>
		</div>
		<div class="form-group">
			<label for="cancer_ativo">Cancer_ativo:</label><br/>
			
			<textarea name="cancer_ativo"  class="form-control"><?= isset($vivian)?$vivian->cancer_ativo:''?></textarea>
		</div>
		<div class="form-group">
			<label for="cerebro">Cerebro:</label><br/>
			
			<textarea name="cerebro"  class="form-control"><?= isset($vivian)?$vivian->cerebro:''?></textarea>
		</div>
		<div class="form-group">
			<label for="pancreas">Pancreas:</label><br/>
			
			<textarea name="pancreas"  class="form-control"><?= isset($vivian)?$vivian->pancreas:''?></textarea>
		</div>
		<div class="form-group">
			<label for="estomago">Estomago:</label><br/>
			
			<textarea name="estomago"  class="form-control"><?= isset($vivian)?$vivian->estomago:''?></textarea>
		</div>
		<div class="form-group">
			<label for="pulmao">Pulmao:</label><br/>
			
			<textarea name="pulmao"  class="form-control"><?= isset($vivian)?$vivian->pulmao:''?></textarea>
		</div>
		<div class="form-group">
			<label for="bexiga">Bexiga:</label><br/>
			
			<textarea name="bexiga"  class="form-control"><?= isset($vivian)?$vivian->bexiga:''?></textarea>
		</div>
		<div class="form-group">
			<label for="ginecologicos">Ginecologicos:</label><br/>
			
			<textarea name="ginecologicos"  class="form-control"><?= isset($vivian)?$vivian->ginecologicos:''?></textarea>
		</div>
		<div class="form-group">
			<label for="hematologicos">Hematologicos:</label><br/>
			
			<textarea name="hematologicos"  class="form-control"><?= isset($vivian)?$vivian->hematologicos:''?></textarea>
		</div>
		<div class="form-group">
			<label for="outros">Outros:</label><br/>
			
			<textarea name="outros"  class="form-control"><?= isset($vivian)?$vivian->outros:''?></textarea>
		</div>
		<div class="form-group">
			<label for="quimioterapia">Quimioterapia:</label><br/>
			
			<textarea name="quimioterapia"  class="form-control"><?= isset($vivian)?$vivian->quimioterapia:''?></textarea>
		</div>
		<div class="form-group">
			<label for="radioterapia">Radioterapia:</label><br/>
			
			<textarea name="radioterapia"  class="form-control"><?= isset($vivian)?$vivian->radioterapia:''?></textarea>
		</div>
		<div class="form-group">
			<label for="braquiterapia">Braquiterapia:</label><br/>
			
			<textarea name="braquiterapia"  class="form-control"><?= isset($vivian)?$vivian->braquiterapia:''?></textarea>
		</div>
		<div class="form-group">
			<label for="hormonioterapia">Hormonioterapia:</label><br/>
			
			<textarea name="hormonioterapia"  class="form-control"><?= isset($vivian)?$vivian->hormonioterapia:''?></textarea>
		</div>
		<div class="form-group">
			<label for="imunoterapia">Imunoterapia:</label><br/>
			
			<textarea name="imunoterapia"  class="form-control"><?= isset($vivian)?$vivian->imunoterapia:''?></textarea>
		</div>
		<div class="form-group">
			<label for="cirurgia">Cirurgia:</label><br/>
			
			<textarea name="cirurgia"  class="form-control"><?= isset($vivian)?$vivian->cirurgia:''?></textarea>
		</div>
		<div class="form-group">
			<label for="terapias_angiogenicas">Terapias_angiogenicas:</label><br/>
			
			<textarea name="terapias_angiogenicas"  class="form-control"><?= isset($vivian)?$vivian->terapias_angiogenicas:''?></textarea>
		</div>
		<div class="form-group">
			<label for="outros_tratamentos">Outros_tratamentos:</label><br/>
			
			<textarea name="outros_tratamentos"  class="form-control"><?= isset($vivian)?$vivian->outros_tratamentos:''?></textarea>
		</div>
		<div class="form-group">
			<label for="quimioterapia_recente">Quimioterapia_recente:</label><br/>
			
			<textarea name="quimioterapia_recente"  class="form-control"><?= isset($vivian)?$vivian->quimioterapia_recente:''?></textarea>
		</div>
		<div class="form-group">
			<label for="plaquetas_pre_qt">Plaquetas_pre_qt:</label><br/>
			
			<textarea name="plaquetas_pre_qt"  class="form-control"><?= isset($vivian)?$vivian->plaquetas_pre_qt:''?></textarea>
		</div>
		<div class="form-group">
			<label for="cirurgia_trauma_recente">Cirurgia_trauma_recente:</label><br/>
			
			<textarea name="cirurgia_trauma_recente"  class="form-control"><?= isset($vivian)?$vivian->cirurgia_trauma_recente:''?></textarea>
		</div>
		<div class="form-group">
			<label for="tev_previo">Tev_previo:</label><br/>
			
			<textarea name="tev_previo"  class="form-control"><?= isset($vivian)?$vivian->tev_previo:''?></textarea>
		</div>
		<div class="form-group">
			<label for="tabagismo">Tabagismo:</label><br/>
			
			<textarea name="tabagismo"  class="form-control"><?= isset($vivian)?$vivian->tabagismo:''?></textarea>
		</div>
		<div class="form-group">
			<label for="uso_de_aco">Uso_de_aco:</label><br/>
			
			<textarea name="uso_de_aco"  class="form-control"><?= isset($vivian)?$vivian->uso_de_aco:''?></textarea>
		</div>
		<div class="form-group">
			<label for="imobilizacao_prolongada">Imobilizacao_prolongada:</label><br/>
			
			<textarea name="imobilizacao_prolongada"  class="form-control"><?= isset($vivian)?$vivian->imobilizacao_prolongada:''?></textarea>
		</div>
		<div class="form-group">
			<label for="cvc">Cvc:</label><br/>
			
			<textarea name="cvc"  class="form-control"><?= isset($vivian)?$vivian->cvc:''?></textarea>
		</div>
		<div class="form-group">
			<label for="transfusoes">Transfusoes:</label><br/>
			
			<textarea name="transfusoes"  class="form-control"><?= isset($vivian)?$vivian->transfusoes:''?></textarea>
		</div>
		<div class="form-group">
			<label for="ag_estimulante_eritropoese">Ag_estimulante_eritropoese:</label><br/>
			
			<textarea name="ag_estimulante_eritropoese"  class="form-control"><?= isset($vivian)?$vivian->ag_estimulante_eritropoese:''?></textarea>
		</div>
		<div class="form-group">
			<label for="hemoglobina">Hemoglobina:</label><br/>
			
			<textarea name="hemoglobina"  class="form-control"><?= isset($vivian)?$vivian->hemoglobina:''?></textarea>
		</div>
		<div class="form-group">
			<label for="ddimero">Ddimero:</label><br/>
			
			<textarea name="ddimero"  class="form-control"><?= isset($vivian)?$vivian->ddimero:''?></textarea>
		</div>
		<div class="form-group">
			<label for="fatores_geneticos">Fatores_geneticos:</label><br/>
			
			<textarea name="fatores_geneticos"  class="form-control"><?= isset($vivian)?$vivian->fatores_geneticos:''?></textarea>
		</div>
		<div class="form-group">
			<label for="qual">Qual:</label><br/>
			
			<textarea name="qual"  class="form-control"><?= isset($vivian)?$vivian->qual:''?></textarea>
		</div>
		<div class="form-group">
			<label for="outros_fatores_tev">Outros_fatores_tev:</label><br/>
			
			<textarea name="outros_fatores_tev"  class="form-control"><?= isset($vivian)?$vivian->outros_fatores_tev:''?></textarea>
		</div>
		<div class="form-group">
			<label for="score_de_padua">Score_de_padua:</label><br/>
			
			<textarea name="score_de_padua"  class="form-control"><?= isset($vivian)?$vivian->score_de_padua:''?></textarea>
		</div>
		<input type="submit" value="Save" class="btn btn-primary"/>
		<?= anchor('vivian/index','Back','class="btn btn-link"'); ?>
	</form>

