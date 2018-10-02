<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$pasta = $_GET['pasta']; 
$class = $_GET['class']; 
		
/* formatos de arquivo permitidos */ 		
$permitidos = array(".jpg",".jpeg",".JPG",".JPEG",".gif",".png",".PNG"); 

if(isset($_FILES)){ 

	$tmp = $_FILES['arquivo']['tmp_name'];
	$tamanho_arquivo = $_FILES['arquivo']['size'];
	
	for($i = 0; $i < count($tmp); $i++) //passa por todos os arquivos
	{
		$nome_arquivo = basename($_FILES['arquivo']['name'][$i]);
		$ext = strtolower(strrchr($nome_arquivo,".")); 
		$erro = 0;
	
		/* verifica se a extensão está entre as extensões permitidas */ 			
		if(in_array($ext,$permitidos)){ 
		
			/* converte o tamanho para KB */ 		
			$tamanho = round($tamanho_arquivo[$i] / 1024); 
			
			if($tamanho < 10240){ //se arquivo for até 10MB envia 	
				
				$nome_atual = date("d-m-Y-H-i-s") ."-". $i . $ext; //nome que dará a arquivo 
				
				
				if(move_uploaded_file($tmp[$i], $pasta.'/'.$nome_atual)){
					
					list($largura, $altura) = getimagesize($pasta.'/'.$nome_atual);
					
					echo '{"sucesso":true, "msg":"Arquivo salvo com sucesso"}';
					
				}else{ 
					$msg = "falha ao enviar.<br>"; 
					$erro++;
				} 
				
			}else{ 
				$msg = "a arquivo deve ser de no máximo 10MB.<br>"; 
				$erro++;
			} 
		
		}else{ 
			$msg = "o formato deste arquivo não é suportado.<br>"; 
			$erro++;
		} 
		
		if($erro > 0){
			echo '{"sucesso":false, "msg":"' . $msg . '"}';
		}
	
	}
	
}else{ 
	echo "Selecione um arquivo"; exit; 
}
		
?>