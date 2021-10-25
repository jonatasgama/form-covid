	<?php if(isset(($cabecalho))){ ;?>
	<h1><?=$cabecalho;?></h1>
	<?php }else{ ;?>
	<h1>Novo Cadastro</h1>
	<?php } ;?>
	<?= form_open('administracao/save','role="form" autocomplete="on"'); ?><?php if(validation_errors() != NULL && validation_errors() != 'N/A') { ?>
		<div class="alert alert-danger"><?= validation_errors(); ?></div><?php } ?>
		<input type="hidden" name="id" value="<?= isset($vivian)?$vivian->id:''?>"/>
		
<div class="card mt-3">
	<div class="card-header">
		<h4>Identificação</h4>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="form-group col-sm-2">
				<label for="matricula">Matricula:</label><br/>
				
				<input type="text" name="matricula"  class="form-control" value="<?= isset($vivian)?$vivian->matricula:'N/A'?>">
			</div>
			<div class="form-group col-sm-2">
				<label for="iniciais">Iniciais:</label><br/>
				
				<input type="text"  name="iniciais"  class="form-control" value="<?= isset($vivian)?$vivian->iniciais:'N/A'?>">
			</div>		
			
			<div class="form-group col-sm-2">
				<label for="covid">Covid:</label><br/>
				
				<select name="covid" id="covid" class="form-select form-select mb-3" onchange="dataCovid()">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
			
			<div class="form-group col-sm-3">
				<label for="data_diag_covid">Data de diagnóstico covid:</label><br/>
				
				<input type="text"  name="data_diag_covid"  id="data_diag_covid" class="form-control" value="<?= isset($vivian)?$vivian->data_diag_covid:'N/A'?>" readonly="readonly">
			</div>
			
			<div class="form-group col-sm-3">
				<label for="tempo_internacao">Tempo de internação(em dias):</label><br/>
				
				<input type="text" name="tempo_internacao"  id="tempo_internacao" class="form-control" value="<?= isset($vivian)?$vivian->tempo_internacao:'N/A'?>" readonly="readonly">
			</div>	
		</div>
	
		
		<div class="row">	

			<div class="form-group col-sm-3">
				<label for="performance_status">Performance status:</label><br/>
				
				<select name="performance_status" id="performance_status" class="form-select form-select mb-3">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>			
			</div>
		
			<div class="form-group col-sm-3">
				<label for="desfecho">Desfecho alta:</label><br/>
				
				<select name="desfecho_alta" id ="desfecho_alta" class="form-select form-select mb-3">
					<option value="0">Não</option>
					<option value="1">Sim</option>
				</select>				
			</div>
			
			<div class="form-group col-sm-3">
				<label for="desfecho_obito">Desfecho óbito:</label><br/>
				
				<select name="desfecho_obito" id ="desfecho_obito" class="form-select form-select mb-3">
					<option value="0">Não</option>
					<option value="1">Sim</option>
				</select>			
			</div>		
			
			<div class="form-group col-sm-3">
				<label for="desfecho">Desfecho acompanhamento ambulatorial:</label><br/>
				
				<select name="desfecho_acomp_amb" id ="desfecho_acomp_amb" class="form-select form-select mb-3">
					<option value="0">Não</option>
					<option value="1">Sim</option>
				</select>				
			</div>			
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
				<label for="evento_tromb">Evento tromboembólico:</label><br/>
				
				<select name="evento_tromb" id ="evento_tromb" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>			
			</div>
			<div class="form-group col-sm-6">
				<label for="data_diagnostico_evento_tromb">Data diagnóstico:</label><br/>
				
				<input type="text" name="data_diagnostico_evento_tromb"  class="form-control" value="<?= isset($vivian)?$vivian->data_diagnostico_evento_tromb:'N/A';?>">
			</div>
			
		</div>
		
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="evento_tvp">Evento TVP:</label><br/>
				
				<select name="evento_tvp" id ="evento_tvp" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>				
			</div>		

		
			<div class="form-group col-sm-6">
				<label for="evento_ep">Evento EP:</label><br/>
				
				<select name="evento_ep" id ="evento_ep" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>			
			</div>
		</div>	

		<div class="row">
			<div class="form-group col-sm-3">
				<label for="evento_avc">Evento AVC:</label><br/>
				
				<select name="evento_avc" id ="evento_avc" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>			
			</div>
			
			<div class="form-group col-sm-3">
				<label for="evento_coag_intr">Evento Coag. Intr. disseminada:</label><br/>
				
				<select name="evento_coag_intr" id ="evento_coag_intr" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>			
			</div>

			<div class="form-group col-sm-3">
				<label for="evento_avc">Evento IAM:</label><br/>
				
				<select name="evento_iam" id ="evento_iam" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>			
			</div>

			<div class="form-group col-sm-3">
				<label for="evento_avc">Outro:</label><br/>
				
				<select name="evento_outro_lista" id ="evento_outro_lista" class="form-select form-select mb-3">
					<option value="Trombose subclavia">Trombose subclávia</option>
					<option value="Trombose VJI">Trombose VJI</option>
					<option value="Tromboflebite">Tromboflebite</option>
					<option value="Trombose veia superficial">Trombose veia superficial</option>
					<option value="Trombo mural">Trombo mural</option>
					<option value="Trombose renal">Trombose renal</option>
					<option value="Trombose portal">Trombose portal</option>
				</select>			
			</div>			
		</div>
		<div class="row">
			<div class="form-group col-sm-12">
				<label for="evento_outro_escrito">Outro:</label><br/>
				<textarea 
						class="form-control mb-3"
						name="evento_outro_escrito"
						id="evento_outro_escrito"><?=isset($vivian)?$vivian->evento_outro_escrito:'N/A'?>
				</textarea>
			</div>
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
			<select name="sexo" id ="sexo" class="form-select form-select mb-3">
				<option value="F">F</option>
				<option value="M">M</option>
			</select>			
		</div>
		<div class="form-group col-sm-2">
			<label for="raca">Raça:</label><br/>
			
			<select name="raca" id="raca" class="form-select form-select mb-3">
				<option value="Branco">Branco</option>
				<option value="Pardo">Pardo</option>
				<option value="Preto">Preto</option>
				<option value="Indigena">Indígena</option>
				<option value="Amarelo">Amarelo</option>
			</select>				
		</div>
		<div class="form-group col-sm-1">
			<label for="idade">Idade:</label><br/>
			
			<input type="number" name="idade" id="idade" class="form-control" onkeyup="verificaIdade()" value="<?= isset($vivian)?$vivian->idade:'00'?>">
		</div>
		<div class="form-group col-sm-2">
			<label for="maior_que_70">Maior de 70 anos:</label><br/>
			<input type="text" name="maior_que_70" id="maior_que_70" class="form-control" value="<?= isset($vivian)?$vivian->maior_que_70:'N/A'?>">		
			<input type="hidden" name="maior_70" id="maior_70" class="form-control" value="<?= isset($vivian)?$vivian->maior_70:'N/A'?>">		
		</div>
		<div class="form-group col-sm-1">
			<label for="peso">Peso:</label><br/>
			
			<input type="text" name="peso"  id="peso" class="form-control" value="<?= isset($vivian)?$vivian->peso:'N/A'?>">
		</div>
		<div class="form-group col-sm-1">
			<label for="altura">Altura(cm):</label><br/>
			
			<input type="text" name="altura"  id="altura" class="form-control" value="<?= isset($vivian)?$vivian->altura:'N/A'?>" onblur="calculaImc()">
		</div>
		<div class="form-group col-sm-2">
			<label for="imc">Imc:</label><br/>
			
			<input type="text" name="imc"  id="imc" class="form-control" value="<?= isset($vivian)?$vivian->imc:'N/A'?>" onblur="calculaClassificacao()">
		</div>
		<div class="form-group col-sm-2">
			<label for="classificacao">Classificação:</label><br/>
			
			<input type="text" name="classificacao"  id="classificacao" class="form-control" value="<?= isset($vivian)?$vivian->classificacao:'N/A'?>">
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
				
				<select name="obesidade" id ="obesidade" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>	
				<input type="hidden" name="possui_obesidade" id="possui_obesidade">
			</div>
			<div class="form-group col-sm-3">
				<label for="has">HAS:</label><br/>
				
				<select name="has" id ="has" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
			<div class="form-group col-sm-3">
				<label for="dm">DM:</label><br/>
				
				<select name="dm" id ="dm" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
			<div class="form-group col-sm-3">
				<label for="icc_ou_ir">ICC ou IR:</label><br/>
				
				<select name="icc_ou_ir" id ="icc_ou_ir" class="form-select form-select mb-3" onblur="scorePadua()">
					<option value="0">Não</option>
					<option value="ICC">ICC</option>
					<option value="IR">IR</option>
					<option value="ICC + IR">ICC + IR</option>
				</select>
				<input type="hidden" name="possui_icc_ou_ir" id="possui_icc_ou_ir">
			</div>
		</div>	
			
		<div class="row">	
			<div class="form-group col-sm-3">
				<label for="iam">IAM:</label><br/>
				
				<select name="iam" id="iam" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
				<input type="hidden" name="possui_iam" id="possui_iam">
			</div>
			<div class="form-group col-sm-3">
				<label for="avc">AVC:</label><br/>
				
				<select name="avc" id="avc" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
				<input type="hidden" name="possui_avc" id="possui_avc">
			</div>
			<div class="form-group col-sm-3">
				<label for="infeccoes_doencas_reumaticas">Infecções ou doenças reumáticas:</label><br/>
				
				<select name="infeccoes_doencas_reumaticas" id="infeccoes_doencas_reumaticas" class="form-select form-select mb-3">
					<option value="0">Não</option>
					<option value="INF">INF</option>
					<option value="DR">DR</option>
					<option value="INF + DR">INF + DR</option>
				</select>	
				<input type="hidden" name="possui_infeccoes_doencas_reumaticas" id="possui_infeccoes_doencas_reumaticas">
			</div>
			<div class="form-group col-sm-3">
				<label for="trombofilia">Trombofilia:</label><br/>
				
				<select name="trombofilia" id="trombofilia" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
				<input type="hidden" name="possui_trombofilia" id="possui_trombofilia">
			</div>
		</div>	
		
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="outras_comorb_lista_1">Outras Comorbidades:</label><br/>
				
				<select name="outras_comorb_lista_1" id="outras_comorb_lista_1" class="form-select form-select mb-3">
					<option value="0">Não</option>
					<option value="Desnutrição">Desnutrição</option>
					<option value="Sifilis">Sífilis</option>
					<option value="DPOC">DPOC</option>
					<option value="IRA">IRA</option>
					<option value="IRC/DRC">IRC/DRC</option>
					<option value="Emagrecimento">Emagrecimento</option>
					<option value="Cardiopatias">Cardiopatias</option>
					<option value="Cegueira">Cegueira</option>
					<option value="Labirintite">Labirintite</option>
					<option value="Dislipidemia">Dislipidemia</option>
					<option value="Osteoporose">Osteoporose</option>
					<option value="Neuropatia periférica">Neuropatia periférica</option>
					<option value="Glaucoma">Glaucoma</option>
					<option value="Hepatite">Hepatite</option>
					<option value="Cirrose hepatica">Cirrose hepática</option>
					<option value="Paraplesia">Paraplesia</option>
					<option value="Escoliose">Escoliose</option>
					<option value="Aneurisma aorta">Aneurisma aorta</option>
					<option value="Aneurisma cerebral">Aneurisma cerebral</option>
					<option value="Hiperplasia Prostatica benigna">Hiperplasia Prostática benigna</option>				
				</select>
			</div>
			
			<div class="form-group col-sm-4">
				<label for="outras_comorb_lista_2">Outras Comorbidades:</label><br/>
				
				<select name="outras_comorb_lista_2" id="outras_comorb_lista_2" class="form-select form-select mb-3">
					<option value="0">Não</option>
					<option value="Desnutrição">Desnutrição</option>
					<option value="Sifilis">Sífilis</option>
					<option value="DPOC">DPOC</option>
					<option value="IRA">IRA</option>
					<option value="IRC/DRC">IRC/DRC</option>
					<option value="Emagrecimento">Emagrecimento</option>
					<option value="Cardiopatias">Cardiopatias</option>
					<option value="Cegueira">Cegueira</option>
					<option value="Labirintite">Labirintite</option>
					<option value="Dislipidemia">Dislipidemia</option>
					<option value="Osteoporose">Osteoporose</option>
					<option value="Neuropatia periferica">Neuropatia periférica</option>
					<option value="Glaucoma">Glaucoma</option>
					<option value="Hepatite">Hepatite</option>
					<option value="Cirrose hepatica">Cirrose hepática</option>
					<option value="Paraplesia">Paraplesia</option>
					<option value="Escoliose">Escoliose</option>
					<option value="Aneurisma aorta">Aneurisma aorta</option>
					<option value="Aneurisma cerebral">Aneurisma cerebral</option>
					<option value="Hiperplasia Prostática benigna">Hiperplasia Prostática benigna</option>				
				</select>
			</div>
			
			<div class="form-group col-sm-4">
				<label for="outras_comorb_lista_3">Outras Comorbidades:</label><br/>
				
				<select name="outras_comorb_lista_3" id="outras_comorb_lista_3" class="form-select form-select mb-3">
					<option value="0">Não</option>
					<option value="Desnutrição">Desnutrição</option>
					<option value="Sifilis">Sífilis</option>
					<option value="DPOC">DPOC</option>
					<option value="IRA">IRA</option>
					<option value="IRC/DRC">IRC/DRC</option>
					<option value="Emagrecimento">Emagrecimento</option>
					<option value="Cardiopatias">Cardiopatias</option>
					<option value="Cegueira">Cegueira</option>
					<option value="Labirintite">Labirintite</option>
					<option value="Dislipidemia">Dislipidemia</option>
					<option value="Osteoporose">Osteoporose</option>
					<option value="Neuropatia periferica">Neuropatia periférica</option>
					<option value="Glaucoma">Glaucoma</option>
					<option value="Hepatite">Hepatite</option>
					<option value="Cirrose hepática">Cirrose hepática</option>
					<option value="Paraplesia">Paraplesia</option>
					<option value="Escoliose">Escoliose</option>
					<option value="Aneurisma aorta">Aneurisma aorta</option>
					<option value="Aneurisma cerebral">Aneurisma cerebral</option>
					<option value="Hiperplasia Prostática benigna">Hiperplasia Prostática benigna</option>				
				</select>
			</div>
			
		</div>
		
		<div class="row">
			<div class="form-group col-sm-12">
				<label for="outras_comorb_escrito">Outro:</label><br/>
				<textarea 
						class="form-control mb-3" 
						name="outras_comorb_escrito"
						id="outras_comorb_escrito"><?=isset($vivian)?$vivian->outras_comorb_escrito:'N/A'?>
				</textarea>
			</div>
		</div>
	</div>
</div>
		

<div class="card mt-3">
  <div class="card-header">
    <h4>Sítio Tumoral</h4>
  </div>
	<div class="card-body">	
	
		<div class="row">
			<div class="form-group col-sm-3">
				<label for="neoplasia_maligna">Neoplasia maligna:</label><br/>
				
				<select name="neoplasia_maligna" id="neoplasia_maligna" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
			<div class="form-group col-sm-3">
				<label for="cancer_ativo">Câncer ativo:</label><br/>
				
				<select name="cancer_ativo" id="cancer_ativo" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
				<input type="hidden" name="possui_cancer_ativo" id="possui_cancer_ativo">
			</div>
			
			<div class="form-group col-sm-3">
				<label for="sitio_tumoral_cerebro">Sítio Tumoral Cérebro:</label><br/>
				
				<select name="sitio_tumoral_cerebro" id="sitio_tumoral_cerebro" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>			
			</div>
			
			<div class="form-group col-sm-3">
				<label for="sitio_tumoral_pancreas">Sítio Tumoral Pâncreas:</label><br/>
				
				<select name="sitio_tumoral_pancreas" id="sitio_tumoral_pancreas" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>			
			</div>		
		</div>	
			
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="sitio_tumoral_estomago">Sítio Tumoral Estômago:</label><br/>
				
				<select name="sitio_tumoral_estomago" id="sitio_tumoral_estomago" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>			
			</div>
			<div class="form-group col-sm-4">
				<label for="sitio_tumoral_pulmao">Sítio Tumoral Pulmão:</label><br/>
				
				<select name="sitio_tumoral_pulmao" id="sitio_tumoral_pulmao" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>			
			</div>
			
			<div class="form-group col-sm-4">
				<label for="sitio_tumoral_bexiga">Sítio Tumoral Bexiga:</label><br/>
				
				<select name="sitio_tumoral_bexiga" id="sitio_tumoral_bexiga" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>			
			</div>		
		</div>	
			
		<div class="row">		

			<div class="form-group col-sm-3">
				<label for="sitio_tumoral_ginecologicos">Sítio Tumoral Ginecológicos:</label><br/>
				
				<select name="sitio_tumoral_ginecologicos" id="sitio_tumoral_ginecologicos" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>			
			</div>
			<div class="form-group col-sm-3">
				<label for="sitio_tumoral_hematologicos">Sítio Tumoral Hematológicos:</label><br/>
				
				<select name="sitio_tumoral_hematologicos" id="sitio_tumoral_hematologicos" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>				
			</div>
			
			<div class="form-group col-sm-2">
				<label for="sitio_tumoral_mama">Sítio Tumoral Mama:</label><br/>
				
				<select name="sitio_tumoral_mama" id="sitio_tumoral_mama" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>				
			</div>		
			
			<div class="form-group col-sm-2">
				<label for="sitio_tumoral_outros_lista">Outros:</label><br/>
				
				<select name="sitio_tumoral_outros_lista" id="sitio_tumoral_outros_lista" class="form-select form-select mb-3">
					<option value="0">Não</option>
					<option value="Prostata">Próstata</option>
					<option value="Cabeça e pescoço">Cabeça e pescoço</option>
					<option value="Gastrointestinal">Gastrointestinal</option>
					<option value="Ossos">Ossos</option>
					<option value="Melanoma">Melanoma</option>
					<option value="Nao melanoma">Não melanoma</option>
					<option value="Renal">Renal</option>
					<option value="Linfomas">Linfomas</option>
				</select>				
			</div>	
			
			<div class="form-group col-sm-2">
				<label for="metastase">Metástase:</label><br/>
				
				<select name="metastase" id="metastase" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>				
			</div>				
		</div>	
		
		<div class="row">
			<div class="form-group col-sm-12">
				<label for="sitio_tumoral_outros_escrito">Outros:</label><br/>
				
				<textarea 
						name="sitio_tumoral_outros_escrito" 
						id="sitio_tumoral_outros_escrito" 
						class="form-control"><?= isset($vivian)?$vivian->sitio_tumoral_outros_escrito:'N/A'?>
				</textarea>
			</div>
		</div>
	</div>
</div>

		
<div class="card mt-3 mb-5">
  <div class="card-header">
    <h4>Tratamento Realizado </h4>
  </div>
	<div class="card-body">			
	
		<div class="row">
			<div class="form-group col-sm-3">
				<label for="tratamento_quimioterapia">Tratamento Quimioterapia:</label><br/>
				
					<select name="tratamento_quimioterapia" id="tratamento_quimioterapia" class="form-select form-select mb-3">
						<option value="1">Sim</option>
						<option value="0" selected>Não</option>
					</select>
			</div>
			<div class="form-group col-sm-3">
				<label for="tratamento_radioterapia">Tratamento Radioterapia:</label><br/>
				
				<select name="tratamento_radioterapia" id="tratamento_radioterapia" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
			<div class="form-group col-sm-3">
				<label for="tratamento_braquiterapia">Tratamento Braquiterapia:</label><br/>
				
				<select name="tratamento_braquiterapia" id="tratamento_braquiterapia" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
			<div class="form-group col-sm-3">
				<label for="tratamento_hormonioterapia">Tratamento Hormonioterapia:</label><br/>
				
				<select name="tratamento_hormonioterapia" id="tratamento_hormonioterapia" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
				<input type="hidden" name="possui_tratamento_hormonioterapia" id="possui_tratamento_hormonioterapia">
			</div>
		</div>	
		
		<div class="row">	
			<div class="form-group col-sm-3">
				<label for="tratamento_imunoterapia">Tratamento Imunoterapia:</label><br/>
				
				<select name="tratamento_imunoterapia" id="tratamento_imunoterapia" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
			<div class="form-group col-sm-3">
				<label for="tratamento_cirurgia">Tratamento Cirurgia:</label><br/>
				
				<select name="tratamento_cirurgia" id="tratamento_cirurgia" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
			<div class="form-group col-sm-3">
				<label for="tratamento_terapias_angiogenicas">Tratamento Terapias angiogênicas:</label><br/>
				
				<select name="tratamento_terapias_angiogenicas" id="tratamento_terapias_angiogenicas" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
			
			<div class="form-group col-sm-3">
				<label for="tratamento_outros">Outros tratamentos:</label><br/>
				
				<select name="tratamento_outros" id="tratamento_outros" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
		</div>
		
		<div class="row">
		
			<div class="form-group col-sm-3">
				<label for="quimioterapia_recente">Quimioterapia recente:</label><br/>
				
				<select name="quimioterapia_recente" id="quimioterapia_recente" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
			
			<div class="form-group col-sm-3">
				<label for="plaquetas_pre_qt">Plaquetas pré-qt:</label><br/>
				
				<input type="text" name="plaquetas_pre_qt"  id="plaquetas_pre_qt" class="form-control" value="<?= isset($vivian)?$vivian->plaquetas_pre_qt:'N/A'?>">
			</div>
			
			<div class="form-group col-sm-3">
				<label for="cirurgia_trauma_recente">Cirurgia ou trauma recente:</label><br/>
				
				<select name="cirurgia_trauma_recente" id="cirurgia_trauma_recente" class="form-select form-select mb-3">
					<option value="0">Não</option>
					<option value="CR">CR</option>
					<option value="TR">TR</option>
					<option value="CR + TR">CR + TR</option>
				</select>	
				<input type="hidden" name="possui_cirurgia_trauma_recente" id="possui_cirurgia_trauma_recente">
			</div>
			
			<div class="form-group col-sm-3">
				<label for="tev_previo">Tev prévio:</label><br/>
				
				<select name="tev_previo" id="tev_previo" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
				<input type="hidden" name="possui_tev_previo" id="possui_tev_previo">
			</div>
		</div>
		
		<div class="row">
		
			<div class="form-group col-sm-3">
				<label for="tabagismo">Tabagismo:</label><br/>
				
				<select name="tabagismo" id="tabagismo" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
			<div class="form-group col-sm-3">
				<label for="uso_de_aco">Uso de ACO(Anticoncepcional Oral):</label><br/>
				
				<select name="uso_de_aco" id="uso_de_aco" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
			<div class="form-group col-sm-3">
				<label for="imobilizacao_prolongada">Imobilização prolongada:</label><br/>
				
				<select name="imobilizacao_prolongada" id="imobilizacao_prolongada" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
				<input type="hidden" name="possui_imobilizacao_prolongada" id="possui_imobilizacao_prolongada">

			</div>
			<div class="form-group col-sm-3">
				<label for="cvc">CVC:</label><br/>
				
				<select name="cvc" id="cvc" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
		
		</div>
		
		<div class="row">
			<div class="form-group col-sm-3">
				<label for="transfusoes">Transfusões:</label><br/>
				
				<select name="transfusoes" id="transfusoes" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
			
			<div class="form-group col-sm-3">
				<label for="ag_estimulantes_eritropoese">Ag. estimulantes da eritropoese:</label><br/>
				
				<select name="ag_estimulantes_eritropoese" id="ag_estimulantes_eritropoese" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
			
			<div class="form-group col-sm-3">
				<label for="hemoglobina">Hemoglobina:</label><br/>
				
				<input type="text" name="hemoglobina" id="hemoglobina" class="form-control" value="<?= isset($vivian)?$vivian->hemoglobina:'N/A'?>">
			</div>
			
			<div class="form-group col-sm-3">
				<label for="ddimero">D-dímero(em ng/ml):</label><br/>
				
				<input type="text" name="ddimero"  id="ddimero" class="form-control" value="<?= isset($vivian)?$vivian->ddimero:'N/A'?>">
			</div>
		
		</div>
		
		<div class="row">
		
			<div class="form-group col-sm-3">
				<label for="fatores_geneticos">Fatores genéticos:</label><br/>
				
				<select name="fatores_geneticos" id="fatores_geneticos" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
			
			<div class="form-group col-sm-3">
				<label for="qual">Qual:</label><br/>
				
				<select name="qual" id="qual" class="form-select form-select mb-3">
					<option value="0">Não</option>
					<option value="Mut. Leiden">Mut. Leiden</option>
					<option value="Mut. gene da Protrombina">Mut gene da Protrombina</option>
					<option value="Def. Ptn S">Def. Ptn S</option>
					<option value="Def. Ptn C">Def. Ptn C</option>
					<option value="Def. AntitrombinaIII">Def. AntitrombinaIII</option>
				</select>
			</div>
			
			<div class="form-group col-sm-3">
				<label for="outros_fatores_de_risco_tev">Outros fatores de risco para tev:</label><br/>
				
				<select name="outros_fatores_de_risco_tev" id="outros_fatores_de_risco_tev" class="form-select form-select mb-3">
					<option value="1">Sim</option>
					<option value="0" selected>Não</option>
				</select>
			</div>
			
			<div class="form-group  col-sm-3 pb-3">
				<label for="score_padua">Score de pádua:</label><br/>
				
				<div class="input-group">
					<input type="text" name="score_padua"  id="score_padua" class="form-control" value="<?= isset($vivian)?$vivian->score_padua:'N/A'?>" readonly>
					<button class="btn btn-outline-secondary" type="button" onclick="scorePadua()" id="calclulaScore">Calcular</button>
				</div>
			</div>
		
		</div>
		<input type="submit" value="Salvar" class="btn btn-primary"/>
		<?= anchor(base_url('administracao/paginacao/1'),'Voltar','class="btn btn-success"'); ?>
	
	</div>
</div>

