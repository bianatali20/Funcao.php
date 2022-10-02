<!DOCTYPE html>
<html>
	<head>
		<title>Exercicios</title>
		<meta charset='utf-8'>
	</head>
	<body>
		<h1>Tabuada</h1>
		
		<?php
		//Questão A--------------------------------------------------------------------------------

		   echo '<h2> Questão A) Escrever a tabuada de um número passado por parâmetro</h2>';
		   $i=0;
		   $n=2;
		   while ($i<=10) {
			echo "<p>$n x $i = ".$n*$i."</p>";
			$i = $i +1;
		   }
		   echo "<br>";
		   echo"<br><hr><br>";  

		
		//Questão B---------------------------------------------------------------------->
		   
		echo '<h2> Questão B)Inverter o conteúdo de um vetor qualquer. </h2>';

			$array = array('Ana', 'Bia', 'Cris', 'Dani');
			$valores = implode(', ', $array);
			echo($valores); //<-Imprimindo o vetor
			
			echo "<br>";
			$arrayInvertido = array_reverse($array); //<-Invertendo o vetor
				$valoresInvertidos = implode(', ', $arrayInvertido);
					echo "<br>";
					echo('Após inverter o vetor, teremos:');
						echo "<br><br>";
		
				echo($valoresInvertidos); //<-Imprimindo o vetor já invertido
					echo "<br>";
					echo"<br><hr><br>";  

		//Questão C ------------------------------------------------------------------------>
			
		echo '<h2> Questão C)Que receba um vetor com números inteiros e que devolva o maior número existente no vetor.Use apenas um laço de repetição e instrução if.</h2>';
		
			function maior(){
            $int = [1, 2, 6, 4, 5];
            $maior = 0;
            for($number = 0; $number <=4; $number++){
                if($maior < $int[$number]){
                    $maior = $int[$number];
                }
            }
            echo "O maior número é: $maior";
        }
        maior();
			
			echo"<br><hr><br>";  
		
		
		//Questão D--------------------------------------------------------------------------------------------->
		
		echo '<h2> Questão D)Formatar um número como CPF (###.###.###-##, onde # representa um dígito). Sugestão: completar com zeros a esquerda se a quantidade de dígitos for menor que 11. Use a função mb_strlen() para descobrir a quantidade de dígitos. E use a função mb_substr() para separar os dígitos para acrescentar os pontos e traço para formatar como CPF.</h2>';	
			

	    $cpf = "123456789";
        echo "String numerica preenchida: $cpf <br><br>";

        function preencherCpf($string){
            //conferir se possui menos de 11 caracteres
            if(mb_strlen($string) > 11){
                echo "Informe numeros de ate 11 digitos.";
                
            }else{
                //determinar quantos digitos precisaremos acrescentar
                $digitosAMais = 11 -  mb_strlen($string);

                //transformar string em array, pois nao conseguimos contar em string
                $novoCpf = str_split($string);

                //Acrescentar digitos novos
                for($i = 0; $i < $digitosAMais; $i++){
                    array_unshift($novoCpf, "0");
                }

                //transformar array em string
                $novoCpf = implode($novoCpf);

                //Separar as partes do CPF para acrescentarmos caracteres
                $cpfParte1 = mb_substr($novoCpf, 0,3);
                $cpfParte2 = mb_substr($novoCpf,3,3);
                $cpfParte3 = mb_substr($novoCpf,6,3);
                $cpfParte4 = mb_substr($novoCpf,9,2);

                //Acrescentar os caracteres do CPF
                $novoCpf = $cpfParte1.".".$cpfParte2.".".$cpfParte3."-".$cpfParte4;

                echo"CPF criado: $novoCpf <br>";
            }
        }


        preencherCpf($cpf);

		echo"<br><hr><br>"; 
	
	
		//Questão E------------------------------------------------------------------------------>

		echo '<h2>Questão E)Sabendo que a fórmula para a conversão de uma temperatura em  Fahrenheit para Celsius é: c = (f-32)/18, faça uma função em PHP que mostre os valores em Celsius das seguintes temperaturas em Fahrenheit: 90º, 77º, 52º e 12º (PHP na prática, Júlia Marques Carvalho da  Silva, Campus).</h2>';
	
		function convertF ($celsius){
            $conversao = ($celsius * 1.8) + 32;

            return $conversao;
        }

        $temp1 = convertF(90);
        $temp2 = convertF(77);
        $temp3 = convertF(52);
        $temp4 = convertF(12);

        echo"temperatura 1: $temp1 <br>";
        echo"temperatura 2: $temp2 <br>";
        echo"temperatura 3: $temp3 <br>";
        echo"temperatura 4: $temp4 <br>";

        echo"<br><hr><br>";

        //Questão F ------------------------------------------------------------------->

        echo '<h2> Questão F)Desenvolva, em PHP, a função buscaTexto($texto, $busca), sendo $texto uma variável string que contém um texto, e $busca, um array que contém palavras a serem buscadas no texto. Cada vez que uma palavra buscada for localizada, ela deverá ser destacada na cor vermelha.A função deverá retornar o $texto com as palavras destacadas em vermelho. (PHP na prática, Júlia Marques Carvalho da  Silva, Campus)</h2>';


        $sentenca = "um tigre, dois tigres, tres tigres.";

        $busca = array("um","dois","tres");

        function buscaTexto($texto, $busca){
        if(is_array($busca)){
            foreach($busca as $palavras){
                $troca = "<font color='red'>".$palavras."</font>";
                $texto= str_replace( $palavras,$troca,$texto);
            }
        }
        return $texto;
        }
        echo buscaTexto($sentenca,$busca);

	      echo"<br><hr><br>"; 
	
	//Questão G ------------------------------------------------------------------->

	echo '<h2>Questão G)Que receba um vetor de números inteiros e devolva a soma dos valores contidos nesse vetor. Use apenas um laço de repetição e instrução if.</h2>';
	
		$vetorNumero = [
			[2,3],
			[4,1]
		];


		function somaVetor($array){
			$soma = 0;

			foreach($array as $i){
				foreach($i as $t){
					$soma+= $t;
				}
			}

			echo "$soma";
		}

		somaVetor($vetorNumero);
		
		echo"<br><hr><br>"; 
	
	
	
	?>
	</body>
</html>