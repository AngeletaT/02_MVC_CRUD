<?php
    include("model/connect.php");
    
	class DAOinmo{
		function insert_inmo($datos){
			// die('<script>console.log('.json_encode( $datos ) .');</script>');

			$inmo=$datos['usuario'];
        	$passwd=$datos['pass'];
        	$name=$datos['nombre'];
        	$dni=$datos['DNI'];
        	$sex=$datos['sexo'];
        	$birthdate=$datos['fecha_nacimiento'];
        	$age=$datos['edad'];
        	$country=$datos['pais'];
        	foreach ($datos['idioma'] as $indice) {
        	    $language=$language."$indice:";
        	}
        	$comment=$datos['observaciones'];
        	foreach ($datos['aficion'] as $indice) {
        	    $hobby=$hobby."$indice:";
        	}
        	$sql = "INSERT INTO usuario (inmo, pass, name, dni, sex, birthdate, age, country, language, comment, hobby)"
        		. "VALUES ('$inmo', '$passwd', '$name', '$dni', '$sex', '$birthdate', '$age', '$country', '$language', '$comment', '$hobby')";
            
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_inmo(){
			// $data = 'hola DAO select_all_inmo';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM inmuebles ORDER BY id ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
			connect::close($conexion);
            return $res;
		}
		
		function select_inmo($inmo){
			// $data = 'hola DAO select_inmo';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM usuario WHERE inmo='$inmo'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_inmo($datos){
			//die('<script>console.log('.json_encode( $datos ) .');</script>');
			$inmo=$datos['usuario'];
        	$passwd=$datos['pass'];
        	$name=$datos['nombre'];
        	$dni=$datos['DNI'];
        	$sex=$datos['sexo'];
        	$birthdate=$datos['fecha_nacimiento'];
        	$age=$datos['edad'];
        	$country=$datos['pais'];
        	foreach ($datos['idioma'] as $indice) {
        	    $language=$language."$indice:";
        	}
        	$comment=$datos['observaciones'];
        	foreach ($datos['aficion'] as $indice) {
        	    $hobby=$hobby."$indice:";
        	}
        	
        	$sql = " UPDATE usuario SET pass='$passwd', name='$name', dni='$dni', sex='$sex', birthdate='$birthdate', age='$age',"
        		. " country='$country', language='$language', comment='$comment', hobby='$hobby' WHERE inmo='$inmo'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_inmo($inmo){
			$sql = "DELETE FROM usuario WHERE inmo='$inmo'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}
?>