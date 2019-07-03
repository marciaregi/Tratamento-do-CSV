<?php 
	
	$arquivo = $_FILES["file"]["tmp_name"];
	$nome = $_FILES["file"]["name"]; 

	$ext = explode(".", $nome);

	$extensao = end($ext);

	if ($extensao != "csv") {
		echo "Extensão Inválida";
	}else{
		$objeto = fopen($arquivo, 'r');
		while (($dados = fgetcsv($objeto, 1, ";")) !== FALSE){
		//Ordem 1
		if($dados[74] == "Não"){		
			if($dados[83] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Falta de vaga","Ordem"=>1);
			}
			if($dados[84] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Distância","Ordem"=>1);
			}
			if($dados[85] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Horário incompatível","Ordem"=>1);
			}
			if($dados[86] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Não possui interesse em participar","Ordem"=>1);
			}
			if($dados[87] != ""){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>$dados[87],"Ordem"=>1);
			}
		//Ordem 2
			if($dados[178] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Falta de vaga","Ordem"=>2);
			}
			if($dados[179] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Distância","Ordem"=>2);
			}
			if($dados[180] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Horário incompatível","Ordem"=>2);
			}
			if($dados[181] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Não possui interesse em participar","Ordem"=>2);
			}
			if($dados[182] != ""){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>$dados[182],"Ordem"=>2);
			}
		//Ordem 3
			if($dados[247] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Falta de vaga","Ordem"=>3);
			}
			if($dados[248] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Distância","Ordem"=>3);
			}
			if($dados[249] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Horário incompatível","Ordem"=>3);
			}
			if($dados[250] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Não possui interesse em participar","Ordem"=>3);
			}
			if($dados[251] != ""){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>$dados[251],"Ordem"=>3);
			}
		//Ordem 4
			if($dados[316] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Falta de vaga","Ordem"=>4);
			}
			if($dados[317] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Distância","Ordem"=>4);
			}
			if($dados[318] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Horário incompatível","Ordem"=>4);
			}
			if($dados[319] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Não possui interesse em participar","Ordem"=>4);
			}
			if($dados[320] != ""){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>$dados[320],"Ordem"=>5);
			}
		//Ordem 5
			if($dados[385] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Falta de vaga","Ordem"=>5);
			}
			if($dados[386] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Distância","Ordem"=>5);
			}
			if($dados[387] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Horário incompatível","Ordem"=>5);
			}
			if($dados[388] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Não possui interesse em participar","Ordem"=>5);
			}
			if($dados[389] != ""){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>$dados[389],"Ordem"=>5);
			}

		//Ordem 6
			if($dados[454] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Falta de vaga","Ordem"=>6);
			}
			if($dados[455] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Distância","Ordem"=>6);
			}
			if($dados[456] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Horário incompatível","Ordem"=>6);
			}
			if($dados[457] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Não possui interesse em participar","Ordem"=>6);
			}
			if($dados[458] != ""){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>$dados[458],"Ordem"=>6);
			}
		//Ordem 7
			if($dados[523] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Falta de vaga","Ordem"=>7);
			}
			if($dados[524] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Distância","Ordem"=>7);
			}
			if($dados[525] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Horário incompatível","Ordem"=>7);
			}
			if($dados[526] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>"Não possui interesse em participar","Ordem"=>7);
			}
			if($dados[527] != ""){
				$tb[] = array("ID"=>$dados[0], "Motivo(s) de não estar participando"=>$dados[527],"Ordem"=>7);
			}
		}

	} 
}
	$filename = 'atividades_02.csv';       
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