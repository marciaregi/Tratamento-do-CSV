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
			if($dados[92] != 0){
				//Ordem 1
		if($dados[32] != "N/A"){
			 $tb[] = array("ID"=>$dados[0],"Motivo"=>"Trabalho","Ordem"=>1);
			}
		if($dados[33] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Vagas insuficientes","Ordem"=>1);
		}
		if($dados[34] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Motivo"=> "Dificuldade de acesso","Ordem"=>1);
		}
		if($dados[35] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Problemas de saúde","Ordem"=>1);
		}
		if($dados[36] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Motivo"=>"Dificuldade Financeira","Ordem"=>1);
		}
		if($dados[37] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Não densevolveu interesse","Ordem"=>1);
		}
		if($dados[38] != ""){
			$tb[] = array("ID"=>$dados[0],"Qual o motivo de não ter finalizado? OUTROS"=>$dados[38],"Ordem"=>1);
		}
		//Ordem 2
		if($dados[127] != "N/A"){
			 $tb[] = array("ID"=>$dados[0],"Motivo"=>"Trabalho","Ordem"=>2);
			}
		if($dados[128] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Vagas insuficientes","Ordem"=>2);
		}
		if($dados[129] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Motivo"=> "Dificuldade de acesso","Ordem"=>2);
		}
		if($dados[130] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Problemas de saúde","Ordem"=>2);
		}
		if($dados[131] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Motivo"=>"Dificuldade Financeira","Ordem"=>2);
		}
		if($dados[132] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Não densevolveu interesse","Ordem"=>2);
		}
		if($dados[133] != ""){
			$tb[] = array("ID"=>$dados[0],"Qual o motivo de não ter finalizado? OUTROS"=>$dados[133],"Ordem"=>2);
		}

		//Ordem 3
		if($dados[196] != "N/A"){
			 $tb[] = array("ID"=>$dados[0],"Motivo"=>"Trabalho","Ordem"=>3);
			}
		if($dados[197] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Vagas insuficientes","Ordem"=>3);
		}
		if($dados[198] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Motivo"=> "Dificuldade de acesso","Ordem"=>3);
		}
		if($dados[199] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Problemas de saúde","Ordem"=>3);
		}
		if($dados[200] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Motivo"=>"Dificuldade Financeira","Ordem"=>3);
		}
		if($dados[201] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Não densevolveu interesse","Ordem"=>3);
		}
		if($dados[202] != ""){
			$tb[] = array("ID"=>$dados[0],"Qual o motivo de não ter finalizado? OUTROS"=>$dados[202],"Ordem"=>3);
		}

		//Ordem 4
		if($dados[265] != "N/A"){
			 $tb[] = array("ID"=>$dados[0],"Motivo"=>"Trabalho asa","Ordem"=>4);
		}
		if($dados[266] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Vagas insuficientes","Ordem"=>4);
		}
		if($dados[267] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Motivo"=> "Dificuldade de acesso","Ordem"=>4);
		}
		if($dados[268] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Problemas de saúde","Ordem"=>4);
		}
		if($dados[269] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Motivo"=>"Dificuldade Financeira","Ordem"=>4);
		}
		if($dados[270] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Não densevolveu interesse","Ordem"=>4);
		}
		if($dados[271] != ""){
			$tb[] = array("ID"=>$dados[0],"Qual o motivo de não ter finalizado? OUTROS"=>$dados[271],"Ordem"=>4);
		}

		//Ordem 5
		if($dados[334] != "N/A"){
			 $tb[] = array("ID"=>$dados[0],"Motivo"=>"Trabalho","Ordem"=>5);
			}
		if($dados[335] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Vagas insuficientes","Ordem"=>5);
		}
		if($dados[336] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Motivo"=> "Dificuldade de acesso","Ordem"=>5);
		}
		if($dados[337] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Problemas de saúde","Ordem"=>5);
		}
		if($dados[338] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Motivo"=>"Dificuldade Financeira","Ordem"=>5);
		}
		if($dados[339] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Não densevolveu interesse","Ordem"=>5);
		}
		if($dados[340] != ""){
			$tb[] = array("ID"=>$dados[0],"Qual o motivo de não ter finalizado? OUTROS"=>$dados[340],"Ordem"=>5);
		}
		
		//Ordem 6
		if($dados[403] != "N/A"){
			 $tb[] = array("ID"=>$dados[0],"Motivo"=>"Trabalho","Ordem"=>6);
			}
		if($dados[404] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Vagas insuficientes","Ordem"=>6);
		}
		if($dados[405] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Motivo"=> "Dificuldade de acesso","Ordem"=>6);
		}
		if($dados[406] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Problemas de saúde","Ordem"=>6);
		}
		if($dados[407] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Motivo"=>"Dificuldade Financeira","Ordem"=>6);
		}
		if($dados[408] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Não densevolveu interesse","Ordem"=>6);
		}
		if($dados[409] != ""){
			$tb[] = array("ID"=>$dados[0],"Qual o motivo de não ter finalizado? OUTROS"=>$dados[409],"Ordem"=>6);
		}
		//Ordem 7
		if($dados[472] != "N/A"){
			 $tb[] = array("ID"=>$dados[0],"Motivo"=>"Trabalho","Ordem"=>7);
			}
		if($dados[473] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Vagas insuficientes","Ordem"=>7);
		}
		if($dados[474] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Motivo"=> "Dificuldade de acesso","Ordem"=>7);
		}
		if($dados[475] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Problemas de saúde","Ordem"=>7);
		}
		if($dados[476] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Motivo"=>"Dificuldade Financeira","Ordem"=>7);
		}
		if($dados[477] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Motivo"=>"Não densevolveu interesse","Ordem"=>7);
		}
		if($dados[478] != ""){
			$tb[] = array("ID"=>$dados[0],"Qual o motivo de não ter finalizado? OUTROS"=>$dados[478],"Ordem"=>7);
		}

		}
	} 
	}
	$filename = 'Escolaridade.csv';       
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