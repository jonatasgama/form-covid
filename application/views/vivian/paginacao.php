<h2>Pacientes</h2>
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Ordem</th>
			<th>Matrícula</th>
			<th>Iniciais</th>
			<th>Covid</th>
			<th>Data diagnóstico covid</th>
			<th>Tempo de internação</th>
			<th>Performance status</th>
			<th colspan="2">Opções</th>
		</tr>
	<thead>
	<tbody>	
	<?php if($dados){ ;?>
		<?php foreach($dados as $object) { ;?>
		<tr>
			<td><?= $object->id ?></td>
			<td><?= $object->ordem ?></td>
			<td><?= $object->matricula ?></td>
			<td><?= $object->iniciais ?></td>
			<td><?= $object->covid == 0 ? 'Não':'Sim' ?></td>
			<td><?= $object->data_diag_covid ?></td>
			<td><?= $object->tempo_internacao ?></td>
			<td><?= $object->performance_status ?></td>
			<td width="80"><?= anchor(base_url('edit/').$object->id, 'Editar','class="btn btn-warning"'); ?></td>
			<td width="80"><?= anchor(base_url('destroy/').$object->id, 'Excluir','class="btn btn-danger"'); ?></td>
		</tr><?php } ;?>
	<?php } ;?>
	</tbody>	
</table>
<?=$pagination?>
