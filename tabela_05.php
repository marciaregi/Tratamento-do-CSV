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
		if($dados[51] == "Sim"){
			if($dados[52] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Qual/Quais necessidades especiais? "=>"Perda de visão","Ordem"=>1);
			}
			if($dados[53] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Autismo","Ordem"=>1);
			}
			if($dados[54] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Perda auditiva e surdez","Ordem"=>1);
			}
			if($dados[55] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Doença mental","Ordem"=>1);
			}
			if($dados[56] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Deficiência física","Ordem"=>1);
			}
			if($dados[57] != ""){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=>$dados[57],"Ordem"=>1);
			}
		}


		//Ordem 2
		if($dados[146] == "Sim"){
			if($dados[147] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Qual/Quais necessidades especiais? "=>"Perda de visão","Ordem"=>2);
			}
			if($dados[148] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Autismo","Ordem"=>2);
			}
			if($dados[149] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Perda auditiva e surdez","Ordem"=>2);
			}
			if($dados[150] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Doença mental","Ordem"=>2);
			}
			if($dados[151] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Deficiência física","Ordem"=>2);
			}
			if($dados[152] != ""){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=>$dados[152],"Ordem"=>2);
			}
		}


		//Ordem 3
		if($dados[215] == "Sim"){
			if($dados[216] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Qual/Quais necessidades especiais? "=>"Perda de visão","Ordem"=>3);
			}
			if($dados[217] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Autismo","Ordem"=>3);
			}
			if($dados[218] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Perda auditiva e surdez","Ordem"=>3);
			}
			if($dados[219] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Doença mental","Ordem"=>3);
			}
			if($dados[220] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Deficiência física","Ordem"=>3);
			}
			if($dados[221] != ""){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=>$dados[221],"Ordem"=>3);
			}
		}


		//Ordem 4
		if($dados[284] == "Sim"){
			if($dados[285] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Qual/Quais necessidades especiais? "=>"Perda de visão","Ordem"=>4);
			}
			if($dados[286] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Autismo","Ordem"=>4);
			}
			if($dados[287] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Perda auditiva e surdez","Ordem"=>4);
			}
			if($dados[288] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Doença mental","Ordem"=>4);
			}
			if($dados[289] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Deficiência física","Ordem"=>4);
			}
			if($dados[290] != ""){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=>$dados[291],"Ordem"=>4);
			}
		}


		//Ordem 5
		if($dados[353] == "Sim"){
			if($dados[354] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Qual/Quais necessidades especiais? "=>"Perda de visão","Ordem"=>5);
			}
			if($dados[355] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Autismo","Ordem"=>5);
			}
			if($dados[356] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Perda auditiva e surdez","Ordem"=>5);
			}
			if($dados[357] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Doença mental","Ordem"=>5);
			}
			if($dados[358] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Deficiência física","Ordem"=>5);
			}
			if($dados[359] != ""){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=>$dados[359],"Ordem"=>5);
			}
		}


		//Ordem 6
		if($dados[422] == "Sim"){
			if($dados[423] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Qual/Quais necessidades especiais? "=>"Perda de visão","Ordem"=>6);
			}
			if($dados[424] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Autismo","Ordem"=>6);
			}
			if($dados[425] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Perda auditiva e surdez","Ordem"=>6);
			}
			if($dados[426] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Doença mental","Ordem"=>6);
			}
			if($dados[427] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Deficiência física","Ordem"=>6);
			}
			if($dados[428] != ""){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=>$dados[428],"Ordem"=>6);
			}
		}


		//Ordem 7
		if($dados[491] == "Sim"){
			if($dados[492] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Qual/Quais necessidades especiais? "=>"Perda de visão","Ordem"=>7);
			}
			if($dados[493] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Autismo","Ordem"=>7);
			}
			if($dados[494] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Perda auditiva e surdez","Ordem"=>7);
			}
			if($dados[495] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Doença mental","Ordem"=>7);
			}
			if($dados[496] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=> "Deficiência física","Ordem"=>7);
			}
			if($dados[497] != ""){
				$tb[] = array("ID"=>$dados[0],"Qual/Quais necessidades especiais? "=>$dados[497],"Ordem"=>7);
			}
		}
	} 
}
	$filename = 'necessidades_especiais.csv';       
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