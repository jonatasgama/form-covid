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
		//convertendo o peso para number, pois no form ele é String
		let peso = Number(document.getElementById('peso').value);
		let alt = document.getElementById('altura').value
		//aqui estou trocando a vírgula por ponto e convertendo a ltura para float, pois no form ela é String
		let altura = parseFloat(alt.replace(/,/g, "."));
		let imc = (peso / (altura * altura));
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
		 let resposta = confirm("Deseja remover esse registro?");
		 if (resposta == true) {
			  window.location.href = "<?=base_url('destroy/');?>"+id;
		 }
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
			document.getElementById('data_diag_covid').value = "";
			document.getElementById('tempo_internacao').value = "";
		}
	}
	
	function verificaZeros() {
	  let peso = document.getElementById("peso").value
	  let altura = document.getElementById("altura").value
	  
	  if(peso == '0' || peso == '00' || altura == '0' || altura == '00'){
		  alert('Os campos peso e/ou altura não podem ser 0(zero).\n Favor preencher N/A caso não tenha a informação.');
		  return false;
	  }else if(verificaVazios() == false){
		  return false;
	  }else{
		  document.form.submit();
	  }
	}