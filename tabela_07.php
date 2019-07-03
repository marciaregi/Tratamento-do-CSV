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
		if($dados[67] == "Sim"){
			if($dados[69] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Como você adquire este medicamento?"=>"SUS","Ordem"=>1);
			}
			if($dados[70] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Farmácia Popular","Ordem"=>1);
			}
			if($dados[71] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Farmácia","Ordem"=>1);
			}
			if($dados[72] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Não estou adquirindo no momento","Ordem"=>1);
			}		
			if($dados[73] != ""){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=>$dados[73],"Ordem"=>1);
			}
		}


		//Ordem 2
		if($dados[162] == "Sim"){
			if($dados[164] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Como você adquire este medicamento?"=>"SUS","Ordem"=>2	);
			}
			if($dados[165] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Farmácia Popular","Ordem"=>2);
			}
			if($dados[166] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Farmácia","Ordem"=>2);
			}
			if($dados[167] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Não estou adquirindo no momento","Ordem"=>2);
			}		
			if($dados[168] != ""){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=>$dados[168],"Ordem"=>2);
			}
		}

		//Ordem 3
		if($dados[231] == "Sim"){
			if($dados[233] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Como você adquire este medicamento?"=>"SUS","Ordem"=>3);
			}
			if($dados[234] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Farmácia Popular","Ordem"=>3);
			}
			if($dados[235] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Farmácia","Ordem"=>3);
			}
			if($dados[236] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Não estou adquirindo no momento","Ordem"=>3);
			}		
			if($dados[237] != ""){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=>$dados[237],"Ordem"=>3);
			}
		}


		//Ordem 4
		if($dados[300] == "Sim"){
			if($dados[302] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Como você adquire este medicamento?"=>"SUS","Ordem"=>4);
			}
			if($dados[303] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Farmácia Popular","Ordem"=>4);
			}
			if($dados[304] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Farmácia","Ordem"=>4);
			}
			if($dados[305] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Não estou adquirindo no momento","Ordem"=>4);
			}		
			if($dados[306] != ""){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=>$dados[306],"Ordem"=>4);
			}
		}


		//Ordem 5
		if($dados[369] == "Sim"){
			if($dados[371] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Como você adquire este medicamento?"=>"SUS","Ordem"=>5);
			}
			if($dados[372] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Farmácia Popular","Ordem"=>5);
			}
			if($dados[373] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Farmácia","Ordem"=>5);
			}
			if($dados[374] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Não estou adquirindo no momento","Ordem"=>5);
			}		
			if($dados[375] != ""){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=>$dados[375],"Ordem"=>5);
			}
		}


		//Ordem 6
		if($dados[438] == "Sim"){
			if($dados[440] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Como você adquire este medicamento?"=>"SUS","Ordem"=>6);
			}
			if($dados[441] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Farmácia Popular","Ordem"=>6);
			}
			if($dados[442] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Farmácia","Ordem"=>6);
			}
			if($dados[443] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Não estou adquirindo no momento","Ordem"=>6);
			}		
			if($dados[444] != ""){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=>$dados[444],"Ordem"=>6);
			}
		}

		//Ordem 7
		if($dados[507] == "Sim"){
			if($dados[509] != "N/A"){
				$tb[] = array("ID"=>$dados[0], "Como você adquire este medicamento?"=>"SUS","Ordem"=>7);
			}
			if($dados[510] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Farmácia Popular","Ordem"=>7);
			}
			if($dados[511] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Farmácia","Ordem"=>7);
			}
			if($dados[512] != "N/A"){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=> "Não estou adquirindo no momento","Ordem"=>7);
			}		
			if($dados[513] != ""){
				$tb[] = array("ID"=>$dados[0],"Como você adquire este medicamento?"=>$dados[513],"Ordem"=>7);
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