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
		if($dados[58] == "Sim"){
			if($dados[59] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Qual doença crônica ?"=>"Hipertensão","Ordem"=>1);
			}
			if($dados[60] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Diabetes","Ordem"=>1);
			}
			if($dados[61] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Câncer","Ordem"=>1);
			}
			if($dados[62] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Obesidade","Ordem"=>1);
			}
			if($dados[63] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "AIDS","Ordem"=>1);
			}
			if($dados[64] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Hepatite C","Ordem"=>1);
			}
			if($dados[65] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Asma","Ordem"=>1);
			}
			if($dados[66] != ""){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=>$dados[66],"Ordem"=>1);
			}
		}

		//Ordem 2
		if($dados[153] == "Sim"){
			if($dados[154] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Qual doença crônica ?"=>"Hipertensão","Ordem"=>2);
			}
			if($dados[155] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Diabetes","Ordem"=>2);
			}
			if($dados[156] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Câncer","Ordem"=>2);
			}
			if($dados[157] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Obesidade","Ordem"=>2);
			}
			if($dados[158] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "AIDS","Ordem"=>2);
			}
			if($dados[159] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Hepatite C","Ordem"=>2);
			}
			if($dados[160] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Asma","Ordem"=>2);
			}
			if($dados[161] != ""){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=>$dados[161],"Ordem"=>2);
			}
		}


		//Ordem 3 
		if($dados[222] == "Sim"){
			if($dados[223] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Qual doença crônica ?"=>"Hipertensão","Ordem"=>3);
			}
			if($dados[224] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Diabetes","Ordem"=>3);
			}
			if($dados[225] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Câncer","Ordem"=>3);
			}
			if($dados[226] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Obesidade","Ordem"=>3);
			}
			if($dados[227] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "AIDS","Ordem"=>3);
			}
			if($dados[228] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Hepatite C","Ordem"=>3);
			}
			if($dados[229] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Asma","Ordem"=>3);
			}
			if($dados[230] != ""){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=>$dados[230],"Ordem"=>3);
			}
		}


		//Ordem 4
		if($dados[291] == "Sim"){
			if($dados[292] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Qual doença crônica ?"=>"Hipertensão","Ordem"=>4);
			}
			if($dados[293] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Diabetes","Ordem"=>4);
			}
			if($dados[294] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Câncer","Ordem"=>4);
			}
			if($dados[295] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Obesidade","Ordem"=>4);
			}
			if($dados[296] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "AIDS","Ordem"=>4);
			}
			if($dados[297] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Hepatite C","Ordem"=>4);
			}
			if($dados[298] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Asma","Ordem"=>4);
			}
			if($dados[299] != ""){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=>$dados[299],"Ordem"=>4);
			}
		}

		//Ordem 5
		if($dados[360] == "Sim"){
			if($dados[361] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Qual doença crônica ?"=>"Hipertensão","Ordem"=>5);
			}
			if($dados[362] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Diabetes","Ordem"=>5);
			}
			if($dados[363] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Câncer","Ordem"=>5);
			}
			if($dados[364] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Obesidade","Ordem"=>5);
			}
			if($dados[365] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "AIDS","Ordem"=>5);
			}
			if($dados[366] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Hepatite C","Ordem"=>5);
			}
			if($dados[367] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Asma","Ordem"=>5);
			}
			if($dados[368] != ""){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=>$dados[368],"Ordem"=>5);
			}
		}


		//Ordem 6  
		if($dados[429] == "Sim"){
			if($dados[430] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Qual doença crônica ?"=>"Hipertensão","Ordem"=>6);
			}
			if($dados[431] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Diabetes","Ordem"=>6);
			}
			if($dados[432] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Câncer","Ordem"=>6);
			}
			if($dados[433] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Obesidade","Ordem"=>6);
			}
			if($dados[434] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "AIDS","Ordem"=>6);
			}
			if($dados[435] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Hepatite C","Ordem"=>6);
			}
			if($dados[436] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Asma","Ordem"=>6);
			}
			if($dados[437] != ""){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=>$dados[437],"Ordem"=>6);
			}
		}

		//Ordem 7
		if($dados[498] == "Sim"){
			if($dados[499] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Qual doença crônica ?"=>"Hipertensão","Ordem"=>7);
			}
			if($dados[500] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica?"=> "Diabetes","Ordem"=>7);
			}
			if($dados[501] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Câncer","Ordem"=>7);
			}
			if($dados[502] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Obesidade","Ordem"=>7);
			}
			if($dados[503] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "AIDS","Ordem"=>7);
			}
			if($dados[504] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Hepatite C","Ordem"=>7);
			}
			if($dados[505] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=> "Asma","Ordem"=>7);
			}
			if($dados[506] != "" ){
				$tb[] = array("ID"=>$dados[0],"Qual doença crônica ?"=>$dados[506],"Ordem"=>7);
			}
		}

	} 
}
	$filename = 'doenca_cronica.csv';       
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