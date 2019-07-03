<?php 
	
	$arquivo = $_FILES["file"]["tmp_name"];
	$nome = $_FILES["file"]["name"]; 

	$ext = explode(".", $nome);

	$extensao = end($ext);

	if ($extensao != "csv") {
		echo "Extensão Inválida";
	}else{
		$objeto = fopen($arquivo, 'r');
		while (($dados = fgetcsv($objeto, 100, ";")) !== FALSE){
			if($dados[92] != 0){
			if($dados[110] != "N/A"){
			 $tb[] = array("ID da resposta"=>$dados[0],"Data de envio" =>$dados[1],"Bairro"=>$dados[13],"Logradouro" =>$dados[14],"Número"=>$dados[15],'Nome do Entrevistado'=>$dados[22],"Problema"=>"Agua");
			}
			if($dados[111] != "N/A"){
			 $tb[] = array("ID da resposta"=>$dados[0],"Data de envio" =>$dados[1],"Bairro"=>$dados[13],"Logradouro" =>$dados[14],"Número"=>$dados[15],'Nome do Entrevistado'=>$dados[22],"Problema"=>"Asfalto");
			}
			}
	} 
	}
	  $filename = 'problema.csv';       
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