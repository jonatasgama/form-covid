<h2>Pacientes</h2>


<div class="table-responsive">


<?php
	if($this->session->tempdata('msg-danger')){ ?>
		<div class="alert alert-danger alert-dismissible fade show text-center col-md-6 offset-3">
			<?=$this->session->tempdata('msg-danger');?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
<?php } ;?>

<?php
	if($this->session->tempdata('msg-success')){ ?>
		<div class="alert alert-success alert-dismissible fade show text-center col-md-6 offset-3">
			<?=$this->session->tempdata('msg-success');?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
<?php } ; ?>

<?php
	if($this->session->tempdata('msg-warning')){ ?>
		<div class="alert alert-warning alert-dismissible fade show text-center col-md-6 offset-3">
			<?=$this->session->tempdata('msg-warning');?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
<?php } ; ?>   

	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Matrícula</th>
				<th>Iniciais</th>
				<th>Covid</th>
				<th>Data diagnóstico covid</th>
				<th>Tempo de internação(dias)</th>
				<th>Performance status</th>
				<th>Desfecho alta</th>
				<th>Desfecho óbito</th>
				<th>Desfecho - acompanhamento ambulatorial</th>
				<th>Evento tromboembólico</th>
				<th>Data Do Diagnóstico</th>
				<th>Evento - Tvp Em Mmii</th>
				<th>Evento - Ep</th>
				<th>Evento - Avc</th>
				<th>Evento - Coag. Intr. Disseminada</th>
				<th>Evento - Iam</th>
				<th>Evento - Outro</th>
				<th>Evento - Outro (Descrever)</th>
				<th>Sexo</th>
				<th>Raça</th>
				<th>Idade</th>
				<th>Maior que 70</th>
				<th>Peso</th>
				<th>Altura</th>
				<th>Imc</th>
				<th>Classificação</th>
				<th>Obesidade</th>
				<th>Has</th>
				<th>Dm</th>
				<th>Icc (Insuf. Cardíaca)  Ou Ir (Insuf. Respiratória)</th>
				<th>Iam</th>
				<th>Avc</th>
				<th>Infecções (Inf) Ou Doenças Reumáticas (Dr)</th>
				<th>Trombofilia</th>
				<th>Outras Comorbidades</th>
				<th>Outras Comorbidades</th>
				<th>Outras Comorbidades</th>
				<th>Outras Comorbidades(descrever)</th>
				<th>Neoplasia Maligna</th>
				<th>Câncer Ativo</th>
				<th>Sítio Tumoral: Cérebro</th>
				<th>Sítio Tumoral: Pâncreas</th>
				<th>Sítio Tumoral: Estômago</th>
				<th>Sítio Tumoral: Pulmão</th>
				<th>Sítio Tumoral: Bexiga</th>
				<th>Sítio Tumoral: Ginecológicos</th>
				<th>Sítio Tumoral: Hematológicos</th>
				<th>Sítio Tumoral: Mama</th>
				<th>Sítio Tumoral: Outros</th>
				<th>Sítio Tumoral: Outros(descrever)</th>
				<th>Metástase</th>
				<th>Tratamento: Quimioterapia</th>
				<th>Tratamento:Radioterapia</th>
				<th>Tratamento:Braquiterapia</th>
				<th>Tratamento:Hormonioterapia</th>
				<th>Tratamento:Imunoterapia</th>
				<th>Tratamento: Cirurgia</th>
				<th>Tratamento:Terapias Angiogênicas</th>
				<th>Tratamento: Outros</th>
				<th>Quimioterapia Recente</th>
				<th>Plaquetas Pré-Qt (Por µl)</th>
				<th>Cirurgia (Cr) Ou Trauma Recente (Tr)</th>
				<th>Tev Prévio</th>
				<th>Tabagismo</th>
				<th>Uso De Aco (Anticoncepcional Oral)</th>
				<th>Imobilização Prolongada</th>
				<th>CVC</th>
				<th>Transfusões</th>
				<th>Ag. Estimulantes Da Eritropoese</th>
				<th>Hemoglobina (Em G/Dl)</th>
				<th>D-Dímero (Em Ng/Ml)</th>
				<th>Fatores Genéticos</th>
				<th>Qual</th>
				<th>Outros Fatores De Risco Para Tev</th>
				<th>Score De Pádua</th>
				<th colspan="3">Opções</th>
			</tr>
		<thead>
		<tbody>	
		<?php if($dados){ ;?>
			<?php foreach($dados as $object) { ;?>
			<tr>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->id ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->matricula ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->iniciais ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->covid == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->data_diag_covid ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->tempo_internacao ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->performance_status ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->desfecho_alta == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->desfecho_obito == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->desfecho_acomp_amb == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->evento_tromb == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->data_diagnostico_evento_tromb ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->evento_tvp == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->evento_ep == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->evento_avc == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->evento_coag_intr == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->evento_iam == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->evento_outro_lista == '0' ? 'Não' : $object->evento_outro_lista ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->evento_outro_escrito ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->sexo ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->raca ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->idade ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->maior_que_70 ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->peso ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->altura ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->imc == 'NaN' ? 'N/A' : $object->imc ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->classificacao ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->obesidade == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->has == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->dm == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->icc_ou_ir == '0' ? 'Não': $object->icc_ou_ir ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->iam == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->avc == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->infeccoes_doencas_reumaticas == '0' ? 'Não': $object->infeccoes_doencas_reumaticas ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->trombofilia == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->outras_comorb_lista_1 == '0' ? 'Não': $object->outras_comorb_lista_1 ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->outras_comorb_lista_2 == '0' ? 'Não': $object->outras_comorb_lista_2 ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->outras_comorb_lista_3 == '0' ? 'Não':$object->outras_comorb_lista_3 ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->outras_comorb_escrito ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->neoplasia_maligna == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->cancer_ativo == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->sitio_tumoral_cerebro == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->sitio_tumoral_pancreas == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->sitio_tumoral_estomago == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->sitio_tumoral_pulmao == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->sitio_tumoral_bexiga == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->sitio_tumoral_ginecologicos == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->sitio_tumoral_hematologicos == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->sitio_tumoral_mama == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->sitio_tumoral_outros_lista == '0' ? 'Não': $object->sitio_tumoral_outros_lista ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->sitio_tumoral_outros_escrito ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->metastase == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->tratamento_quimioterapia == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->tratamento_radioterapia == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->tratamento_braquiterapia == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->tratamento_hormonioterapia == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->tratamento_imunoterapia == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->tratamento_cirurgia == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->tratamento_terapias_angiogenicas == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->tratamento_outros == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->quimioterapia_recente == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->plaquetas_pre_qt ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->cirurgia_trauma_recente == '0' ? 'Não': $object->cirurgia_trauma_recente ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->tev_previo == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->tabagismo == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->uso_de_aco == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->imobilizacao_prolongada == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->cvc == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->transfusoes == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->ag_estimulantes_eritropoese == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->hemoglobina ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->ddimero ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->fatores_geneticos == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->qual == '0' ? 'Não' : $object->qual ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->outros_fatores_de_risco_tev == '0' ? 'Não':'Sim' ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= $object->score_padua ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><?= anchor(base_url('administracao/edit/').$object->id, 'Editar','class="btn btn-primary"'); ?></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><a href="#" class="btn btn-danger" onclick="pegaId(<?=$object->id;?>)" data-toggle="modal" data-target="#excluirModal">Deletar</a></td>
				<?=$object->dono_registro == 'usr' ? '<td class="table-active">' : '<td>' ?><a href="#" class="<?=$object->dono_registro == 'usr' ? 'disable ' : '' ?> btn btn-secondary" onclick="devolveId(<?=$object->id;?>)" data-toggle="modal" data-target="#devolveModal">Devolver</a></td>
			</tr><?php } ;?>
		<?php } ;?>
		</tbody>	
	</table>
</div>
<?=$pagination?>

<form method="post">
	<button type="submit" class="btn btn-success" name="export" formaction="<?=base_url('extrair');?>">Download</button>	
</form>	

<!-- Delete Modal-->
<div class="modal fade" id="excluirModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel2">Excluir</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Deseja realmente excluir o registro?</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
				<a class="btn btn-primary" id="confirmaExclusao">Sim</a>
			</div>
		</div>
	</div>
</div>

<!--Devolve Modal-->
<div class="modal fade" id="devolveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel2">Devolver</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				Deseja realmente devolver o registro nº <span id="devolucao"></span>?
				<br>O mesmo ficará disponível para edição dos dados.
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
				<a class="btn btn-primary" id="confirmaDevolucao">Sim</a>
			</div>
		</div>
	</div>
</div>