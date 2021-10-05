	<h2>Vivian</h2>
	<table class="table">
		<tr>
			<th>#</th>
			<th>Ordem</th>
			<th>Matricula</th>
			<th>Iniciais</th>
			<th>Unidade</th>
			<th>Covid</th>
			<th>Data_diag_covid</th>
			<th>Tempo_internacao</th>
			<th>Performance_status</th>
			<th>Desfecho</th>
			<th>Diagnostico_ev_tromb</th>
			<th>Data_diagnostico</th>
			<th>Tvp</th>
			<th>Ep</th>
			<th>Outro</th>
			<th>Sexo</th>
			<th>Raca</th>
			<th>Idade</th>
			<th>Maior_70</th>
			<th>Peso</th>
			<th>Altura</th>
			<th>Imc</th>
			<th>Obesidade</th>
			<th>Has</th>
			<th>Dm</th>
			<th>Icc_ou_ir</th>
			<th>Iam</th>
			<th>Avc</th>
			<th>Infeccoes_ou_doencas_reumaticas</th>
			<th>Trombofilia</th>
			<th>Outras</th>
			<th>Neoplasia_maligna</th>
			<th>Cancer_ativo</th>
			<th>Cerebro</th>
			<th>Pancreas</th>
			<th>Estomago</th>
			<th>Pulmao</th>
			<th>Bexiga</th>
			<th>Ginecologicos</th>
			<th>Hematologicos</th>
			<th>Outros</th>
			<th>Quimioterapia</th>
			<th>Radioterapia</th>
			<th>Braquiterapia</th>
			<th>Hormonioterapia</th>
			<th>Imunoterapia</th>
			<th>Cirurgia</th>
			<th>Terapias_angiogenicas</th>
			<th>Outros_tratamentos</th>
			<th>Quimioterapia_recente</th>
			<th>Plaquetas_pre_qt</th>
			<th>Cirurgia_trauma_recente</th>
			<th>Tev_previo</th>
			<th>Tabagismo</th>
			<th>Uso_de_aco</th>
			<th>Imobilizacao_prolongada</th>
			<th>Cvc</th>
			<th>Transfusoes</th>
			<th>Ag_estimulante_eritropoese</th>
			<th>Hemoglobina</th>
			<th>Ddimero</th>
			<th>Fatores_geneticos</th>
			<th>Qual</th>
			<th>Outros_fatores_tev</th>
			<th>Score_de_padua</th>
			<th colspan="2"></th>
		</tr>
		<?php foreach ($vivian as $object) { ?>
		<tr>
			<td><?=$object->id ?></td>
			<td><?= $object->ordem ?></td>
			<td><?= $object->matricula ?></td>
			<td><?= $object->iniciais ?></td>
			<td><?= $object->unidade ?></td>
			<td><?= $object->covid ?></td>
			<td><?= $object->data_diag_covid ?></td>
			<td><?= $object->tempo_internacao ?></td>
			<td><?= $object->performance_status ?></td>
			<td><?= $object->desfecho ?></td>
			<td><?= $object->diagnostico_ev_tromb ?></td>
			<td><?= $object->data_diagnostico ?></td>
			<td><?= $object->tvp ?></td>
			<td><?= $object->ep ?></td>
			<td><?= $object->outro ?></td>
			<td><?= $object->sexo ?></td>
			<td><?= $object->raca ?></td>
			<td><?= $object->idade ?></td>
			<td><?= $object->maior_70 ?></td>
			<td><?= $object->peso ?></td>
			<td><?= $object->altura ?></td>
			<td><?= $object->imc ?></td>
			<td><?= $object->obesidade ?></td>
			<td><?= $object->has ?></td>
			<td><?= $object->dm ?></td>
			<td><?= $object->icc_ou_ir ?></td>
			<td><?= $object->iam ?></td>
			<td><?= $object->avc ?></td>
			<td><?= $object->infeccoes_ou_doencas_reumaticas ?></td>
			<td><?= $object->trombofilia ?></td>
			<td><?= $object->outras ?></td>
			<td><?= $object->neoplasia_maligna ?></td>
			<td><?= $object->cancer_ativo ?></td>
			<td><?= $object->cerebro ?></td>
			<td><?= $object->pancreas ?></td>
			<td><?= $object->estomago ?></td>
			<td><?= $object->pulmao ?></td>
			<td><?= $object->bexiga ?></td>
			<td><?= $object->ginecologicos ?></td>
			<td><?= $object->hematologicos ?></td>
			<td><?= $object->outros ?></td>
			<td><?= $object->quimioterapia ?></td>
			<td><?= $object->radioterapia ?></td>
			<td><?= $object->braquiterapia ?></td>
			<td><?= $object->hormonioterapia ?></td>
			<td><?= $object->imunoterapia ?></td>
			<td><?= $object->cirurgia ?></td>
			<td><?= $object->terapias_angiogenicas ?></td>
			<td><?= $object->outros_tratamentos ?></td>
			<td><?= $object->quimioterapia_recente ?></td>
			<td><?= $object->plaquetas_pre_qt ?></td>
			<td><?= $object->cirurgia_trauma_recente ?></td>
			<td><?= $object->tev_previo ?></td>
			<td><?= $object->tabagismo ?></td>
			<td><?= $object->uso_de_aco ?></td>
			<td><?= $object->imobilizacao_prolongada ?></td>
			<td><?= $object->cvc ?></td>
			<td><?= $object->transfusoes ?></td>
			<td><?= $object->ag_estimulante_eritropoese ?></td>
			<td><?= $object->hemoglobina ?></td>
			<td><?= $object->ddimero ?></td>
			<td><?= $object->fatores_geneticos ?></td>
			<td><?= $object->qual ?></td>
			<td><?= $object->outros_fatores_tev ?></td>
			<td><?= $object->score_de_padua ?></td>
			<td width="80"><?= anchor('/vivian/edit/'.$object->id, 'Edit','class="btn btn-warning"'); ?></td>
			<td width="80"><?= anchor('/vivian/destroy/'.$object->id, 'Destroy','class="btn btn-danger"'); ?></td>
		</tr><?php } ?>
	</table>
	
	<?= anchor('/vivian/create','Create','class="btn btn-primary"'); ?>
