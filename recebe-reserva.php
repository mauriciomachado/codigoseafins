<?php

header("Access-Control-Allow-Origin: *");

//var_dump($_POST);


//echo "<script>alert(\"CHEGOU!\"); window.close()</script>";
		

include('conexao.php');

		$nome = $_POST["nome"];
		$nome = addslashes($nome);
		$email = $_POST["email"];
		$email = addslashes($email);
		$tel = $_POST["tel"];
		$tel = addslashes($tel);
		$cep = $_POST["cep"];
		$cep = addslashes($cep);
		$endereco = $_POST["endereco"];
		$endereco = addslashes($endereco);
		$servico = $_POST["servico"];
		$servico = addslashes($servico);
		$descricao = $_POST["descricao"];
		$descricao = addslashes($descricao);
		
		
		
		
		/*
	
		
		echo 'nome ='.$nome;
		echo '<br>';
		echo 'email ='.$email;
		echo '<br>';
		echo 'tel ='.$tel;
		echo '<br>';
		echo 'descricao ='.$descricao;
		exit();
	*/
		
		
		if ($servico == 1 ){
			$servico = 'Regularização de Drones';
		}else if ($servico == 2 ){
			$servico = 'Inclusão de Aeronaves e Homologação de Aeroportos';
		}else if ($servico == 3 ){
			$servico = 'Homologação de Helipontos, Aeródromos e Helidecks';
		}else if ($servico == 4 ){
			$servico = 'Homologação Aeronáutica na ANAC';
		}else if ($servico == 5 ){
			$servico = 'Defesas de Multas e Autos de Infração junto a ANAC e DECEA';
		}else if ($servico == 6 ){
			$servico = 'Renovação de Habilitação Técnica Aeronáutica';
		}else if ($servico == 7 ){
			$servico = 'Transferência de Propriedade de Aeronaves junto ao RAB – ANAC e ANATEL';
		}else if ($servico == 8 ){
			$servico = 'Gestão de Qualidade';
		}else if ($servico == 9 ){
			$servico = 'Gestão em Segurança Operacional';
		}else if ($servico == 10 ){
			$servico = 'Outros';
		}
			
				
		
		$email_tutoweb = 'mauricio@tutoweb.com.br';
		
		/*$email_tutoweb = 'domingos@gruponatan.com.br';*/
		


		$headers = "MIME-Version: 1.1\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		$headers .= "From: Natan Air Club <mauricio@tutoweb.com.br>\r\n"; // remetente
		$headers .= "Return-Path: mauricio@tutoweb.com.br\r\n"; // return-path
		
		

		$assunto  = "Solicitação de reserva - Natan Air Club";
		
		//$imagem_logo = "<img src=http://www.tutoweb.com.br/sisturweb/imagens/logo.gif>";
		/*$endereco = " Shatranj Turismo e Viagens Ltda.<br>
					  Tels: (21) 2608-1043 / (21) 2609-0129<br>
					  Francisco da Cruz Nunes, 7446 sala 201<br>
					  Itaipu - Niterói – RJ<br><br>
					  shatranj@shatranj.com.br";*/
		
		$mensagem1 = "<br><br>Reserva solicitada pelo site Natan Air Club:<br><br>
					Nome: $nome <br><br>
					E-mail: $email <br><br>
					Telefone: $tel <br><br>
					Endereço: $endereco <br><br>
					CEP: $cep <br><br>
					Serviço : $servico <br><br>
					Mensagem : $descricao <br><br>";
		
		

		$envio = mail("$email_tutoweb", "$assunto", "$mensagem1", "$headers");
		
			
		
		
		/*AQUI INSERE NO BANCO OS DADOS DO FORM*/		
		
		
		$insert = ("insert into tab_reserva 
									(
									nome,
									email,
									tel,
									cep,
									endereco,
									servico,
									descricao,
									usuario,
									status,
									data_cadastro
                                    )
                                    values
                                    (
                                    '$nome',
									'$email',
									'$tel',
									'$cep',
									'$endereco',
									'$servico',
									'$descricao',
									'$usuario',
									'$status',
									'$data_cadastro'
                                     )");	
					
					mysqli_query($mysqli , $insert) or die (mysqli_error());	
					
	
					
					
					
					
					
					
					
		echo "<script>alert(\"Mensagem enviada com sucesso! Aguarde o nosso retorno em breve.\"); window.close()</script>";
		
		echo "<script>location.href='index.html'</script>";
		
		
		
		
?>