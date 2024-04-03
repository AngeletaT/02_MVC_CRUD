<?php

    function validate_cat($id_ref){
        $sql = "SELECT * FROM inmuebles WHERE id_ref='$id_ref'";

        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        $res = $res->num_rows;
        connect::close($conexion);
        return $res;
    }
    
    function validate() {
        // $data = 'hola validate php';
        // die('<script>console.log('.json_encode( $data ) .');</script>');

        $check = true;

        $id_ref = $_POST['id_ref'];
        $validate_cat = validate_cat($id_ref);

        if($validate_cat !== 0){
            echo '<script language="javascript">setTimeout(() => {
                toastr.error("El DNI no puede estar repetido");
            }, 1000);</script>';
            $check = false;
        }

        return $check;
    }
