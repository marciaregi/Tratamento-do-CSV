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
		if($dados[42] != "N/A"){
			 $tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ? "=>"Dentista","Ordem"=>1);
			}
		if($dados[43] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ? "=>"Ginecologista/Urologista","Ordem"=>1);
		}
		if($dados[44] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ? "=> "Oftalmologista","Ordem"=>1);
		}
		if($dados[45] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ? "=>"Dermatologista","Ordem"=>1);
		}
		if($dados[46] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ? "=>"Geriatra","Ordem"=>1);
		}
		if($dados[47] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ? "=>"Pediatra","Ordem"=>1);
		}
		if($dados[48] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ? "=>"Nutricionista","Ordem"=>1);
		}
		if($dados[49] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ? "=>"Cardiologista","Ordem"=>1);
		}
		if($dados[50] != ""){
			$tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ? [Outros]"=>$dados[50],"Ordem"=>1);
		}



		//Ordem 2
		if($dados[137] != "N/A"){
			 $tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ? "=>"Dentista","Ordem"=>2);
			}
		if($dados[138] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ? "=>"Ginecologista/Urologista","Ordem"=>2);
		}
		if($dados[139] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ? "=> "Oftalmologista","Ordem"=>2);
		}
		if($dados[140] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ? "=>"Dermatologista","Ordem"=>2);
		}
		if($dados[141] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ? "=>"Geriatra","Ordem"=>2);
		}
		if($dados[142] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ? "=>"Pediatra","Ordem"=>2);
		}
		if($dados[143] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ? "=>"Nutricionista","Ordem"=>2);
		}
		if($dados[144] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ? "=>"Cardiologista","Ordem"=>2);
		}
		if($dados[145] != ""){
			$tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ? "=>$dados[145],"Ordem"=>2);
		}


		//Ordem 3
		if($dados[206] != "N/A"){
			 $tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ?"=>"Dentista","Ordem"=>3);
			}
		if($dados[207] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Ginecologista/Urologista","Ordem"=>3);
		}
		if($dados[208] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"EQual destes especialistas frequentou no último ano ?"=> "Oftalmologista","Ordem"=>3);
		}
		if($dados[209] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Dermatologista","Ordem"=>3);
		}
		if($dados[210] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ?"=>"Geriatra","Ordem"=>3);
		}
		if($dados[211] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Pediatra","Ordem"=>3);
		}
		if($dados[212] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Nutricionista","Ordem"=>3);
		}
		if($dados[213] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Cardiologista","Ordem"=>3);
		}
		if($dados[214] != ""){
			$tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ?"=>$dados[214],"Ordem"=>3);
		}


		//Ordem 4
		if($dados[275] != "N/A"){
			 $tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ?"=>"Dentista","Ordem"=>4);
		}
		if($dados[276] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Ginecologista/Urologista","Ordem"=>4);
		}
		if($dados[277] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"EQual destes especialistas frequentou no último ano ?"=> "Oftalmologista","Ordem"=>4);
		}
		if($dados[278] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Dermatologista","Ordem"=>4);
		}
		if($dados[279] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ?"=>"Geriatra","Ordem"=>4);
		}
		if($dados[280] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Pediatra","Ordem"=>4);
		}
		if($dados[281] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Nutricionista","Ordem"=>4);
		}
		if($dados[282] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Cardiologista","Ordem"=>4);
		}
		if($dados[283] != ""){
			$tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ?"=>$dados[283],"Ordem"=>4);
		}


		//Ordem 5
		if($dados[344] != "N/A"){
			 $tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ?"=>"Dentista","Ordem"=>5);
		}
		if($dados[345] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Ginecologista/Urologista","Ordem"=>5);
		}
		if($dados[346] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"EQual destes especialistas frequentou no último ano ?"=> "Oftalmologista","Ordem"=>5);
		}
		if($dados[347] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Dermatologista","Ordem"=>5);
		}
		if($dados[348] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ?"=>"Geriatra","Ordem"=>5);
		}
		if($dados[349] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Pediatra","Ordem"=>5);
		}
		if($dados[350] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Nutricionista","Ordem"=>5);
		}
		if($dados[351] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Cardiologista","Ordem"=>5);
		}
		if($dados[352] != ""){
			$tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ?"=>$dados[352],"Ordem"=>5);
		}



		//Ordem 6
		if($dados[413] != "N/A"){
			 $tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ?"=>"Dentista","Ordem"=>6);
		}
		if($dados[414] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Ginecologista/Urologista","Ordem"=>6);
		}
		if($dados[415] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"EQual destes especialistas frequentou no último ano ?"=> "Oftalmologista","Ordem"=>6);
		}
		if($dados[416] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Dermatologista","Ordem"=>6);
		}
		if($dados[417] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ?"=>"Geriatra","Ordem"=>6);
		}
		if($dados[418] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Pediatra","Ordem"=>6);
		}
		if($dados[419] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Nutricionista","Ordem"=>6);
		}
		if($dados[420] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Cardiologista","Ordem"=>6);
		}
		if($dados[421] != ""){
			$tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ?"=>$dados[421],"Ordem"=>6);
		}



		//Ordem 7
		if($dados[482] != "N/A"){
			 $tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ?"=>"Dentista","Ordem"=>7);
		}
		if($dados[483] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Ginecologista/Urologista","Ordem"=>7);
		}
		if($dados[484] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"EQual destes especialistas frequentou no último ano ?"=> "Oftalmologista","Ordem"=>7);
		}
		if($dados[485] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Dermatologista","Ordem"=>7);
		}
		if($dados[486] != "N/A"){
			$tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ?"=>"Geriatra","Ordem"=>7);
		}
		if($dados[487] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Pediatra","Ordem"=>7);
		}
		if($dados[488] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Nutricionista","Ordem"=>7);
		}
		if($dados[489] != "N/A"){
			$tb[] = array("ID"=>$dados[0], "Qual destes especialistas frequentou no último ano ?"=>"Cardiologista","Ordem"=>7);
		}
		if($dados[490] != ""){
			$tb[] = array("ID"=>$dados[0],"Qual destes especialistas frequentou no último ano ?"=>$dados[490],"Ordem"=>7);
		}

		}
	} 
	}
	$filename = 'especialistas.csv';       
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