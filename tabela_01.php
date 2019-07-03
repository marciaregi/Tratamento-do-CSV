<?php error_reporting(0);?>
<?php 
	
	$arquivo = $_FILES["file"]["tmp_name"];
	$nome = $_FILES["file"]["name"]; 
	$ext = explode(".", $nome);
	$extensao = end($ext);
	if ($extensao != "csv") {
		echo "Extensão Inválida";
	}else{
		$objeto = fopen($arquivo, 'r');
		$num = 0;
		while (($dados = fgetcsv($objeto, 100, ";")) !== FALSE){
			if($dados[92] != 0){
			 $tb[] = array("ID da resposta"=>$dados[0],"Data de envio" =>$dados[1],"Última página"=>$dados[2],"Idioma inicial"=>$dados[3],"Semente"=>$dados[4],"Data de início"=>$dados[5],"Data da última ação"=>$dados[6],"Endereço IP"=>$dados[7],"URL de referência"=>$dados[8],"Entrevistador"=>$dados[9],"Entrevistador_b"=>$dados[10],"Nome de referência"=>$dados[11],"Projeto de referência"=>$dados[12],"Bairro"=>$dados[13],"Logradouro" =>$dados[14],"Número"=>$dados[15],"Complemento"=>$dados[16], "Quadra"=>$dados[17],"Lote"=>$dados[18],"CEP"=>$dados[19],"Clique na imagem de localização para obter a sua localização    Nenhuma localização detectada"=>$dados[20], "Em qual distrito a residência está localizada?"=>$dados[21],"Qual a renda familiar ?"=>$dados[91],"Quantas pessoas moram nessa residência ? (Incluindo o entrevistado)"=>$dados[92],"Seu imóvel é:"=>$dados[93],"Seu imóvel é: [Outros]"=>$dados[94],"Há quantos anos reside em Maricá?"=>$dados[95],"Observações do agente A"=>$dados[96],"Algum membro da residência se encontra em situação carcerária ou é egresso do sistema penal ?"=>$dados[97],"Existe gestante na residência ?"=>$dados[98],"Está fazendo pré natal ?"=>$dados[99],"Algum residente possui cadastro em algum destes programas do Governo ? [Sim, Cartão Mumbuca]"=>$dados[100],"Algum residente possui cadastro em algum destes programas do Governo ? [Sim, Bolsa Família]"=>$dados[101],"Algum residente possui cadastro em algum destes programas do Governo ? [Sim, Bilhete Único Universitário]"=>$dados[102],"Algum residente possui cadastro em algum destes programas do Governo ? [Sim, Mumbuca Jovem]"=>$dados[103],"Algum residente possui cadastro em algum destes programas do Governo ? [Sim, Mumbuca Gestante]"=>$dados[104],"Algum residente possui cadastro em algum destes programas do Governo ? [Não]"=>$dados[105],"Algum residente possui cadastro em algum destes programas do Governo ? [Outros]"=>$dados[106],"Você é membro de alguma entidade no seu bairro, como por exemplo associação de moradores, movimentos sociais ou outros ?"=>$dados[107],"Algum morador da residência se reconhece como LGBTI ?"=>$dados[108],"Observações do agente B"=>$dados[109],"Qual o problema mais urgente na sua rua ? [Água]"=>$dados[110],"Qual o problema mais urgente na sua rua ? [Asfalto]"=>$dados[111],"Qual o problema mais urgente na sua rua ? [Coleta de resíduos]"=>$dados[112],"Qual o problema mais urgente na sua rua ? [Esgoto]"=>$dados[114],"Qual o problema mais urgente na sua rua ? [Iluminação Pública]"=>$dados[115],"Qual o problema mais urgente na sua rua ? [Segurança]"=>$dados[115],"Qual o problema mais urgente na sua rua ? [Outros]"=>$dados[116]);
		}
	} 
	}
	  $filename = 'tb_dados_entrevista.csv';       
      header("Content-type: text/csv");       
      header("Content-Disposition: attachment; filename=$filename");       
      $output = fopen("php://output", "w");   
      $header = array_keys($tb[0]);       
      fputcsv($output, $header, ';');       
      foreach($tb as $row)       
      {  
           fputcsv($output, $row, ';');  
      }       
      fclose($output); 
      
?>