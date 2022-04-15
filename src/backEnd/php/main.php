
<?php 
		

	$host 				= "localhost" ;
	$user 				= "root";
	$password 			= "";
	$database			= "apunte_php";
	$lenguage			= "utf8";
	$queryGetData 		= "SELECT * FROM longin WHERE `user`= \"dgimene2\" and `log` = \"Konecta2021\"";
	$queryInsertData	= "
							INSERT INTO longin 
							(`user`,`log`,`perfil`)
							VALUES 
								(`requien`,`88975ty`,`agente`), 
								(`canguto88`,`123456`,`agente`), 
								(`fmarin`,`654321`,`vendedor`)
							";

	$dataReturn ="";



	//1.conexion a base datos
	$link= mysqli_connect($host, $user, $password);
		
		//2.Aviso de error conexion
		if(mysqli_connect_errno()){
		echo  "Error de conexion a BBDD";
				exit();
		}

		//4. conexion a Tabla de la BBDD
		mysqli_select_db($link, $database) or die ("no esta la BBDD");
		//5. establece que el idioma es castellano
		mysqli_set_charset($link, $lenguage);


		$result = mysqli_query($link, $queryGetData);

		
		//Mientras que existan filas en el 
		//recordset imprime los datos de las celdas.

		$dataReturn	.= "<table class=\"tabla1\">
						<thead>
							<tr>
								<th>ID</th>
								<th>LOGIN</th>
								<th>USUARIO</th>
								<th>PERFIL</th>
							</tr>
						</thead>
						";
		$contador=0;
		while ($dato = mysqli_fetch_row($result)){

		

			$dataReturn.= "<tbody><tr>";
						

				for ($i=0; $i <count($dato) ; $i++) { 

					$dataReturn.= "<td>".$dato[$i] ."</td>";
				
				}
			$dataReturn.= "</tr>";
		}
		$dataReturn.= "</tbody></table>";

		//cierra la conexion
		mysqli_close($link);


		echo  $dataReturn;
?>



