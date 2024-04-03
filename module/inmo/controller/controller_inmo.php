<?php
    // $data = 'hola inmo controller';
    // die('<script>console.log('.json_encode( $data ) .');</script>');

    include ("module/inmo/model/DAOinmo.php");
    // session_start();
    
    switch($_GET['op']){
        case 'list';
            // $data = 'hola inmo OP';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
              
            try{
                $daoinmo = new DAOinmo();
            	$rdo = $daoinmo->select_all_inmo();
                //die('<script>console.log('.json_encode( $rdo->num_rows ) .');</script>');
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/inmo/view/list_inmo.php");
    		}
            break;
            
        case 'create';
            // $data = 'hola crtl inmo create';
            // die('<script>console.log('.json_encode( $data ) .');</script>');

            include("module/inmo/model/validate.php");
            
            $check = true;
            
            if (isset($_POST['create'])){
                // $data = 'hola create post inmo';
                // die('<script>console.log('.json_encode( $data ) .');</script>');
                // die('<script>console.log('.json_encode( $_POST ) .');</script>');

                $check=validate();
                // die('<script>console.log('.json_encode( $check ) .');</script>');

                if ($check){
                    die('<script>console.log('.json_encode( $_POST ) .');</script>');
                    // try{
                    //     $daoinmo = new DAOinmo();
    		        //     $rdo = $daoinmo->insert_inmo($_POST);
                    //     // die('<script>console.log('.json_encode( $rdo ) .');</script>');
                    // }catch (Exception $e){
                    //     $callback = 'index.php?page=503';
        			//     die('<script>window.location.href="'.$callback .'";</script>');
                    // }
                    
		            // if($rdo){
                    //     echo '<script language="javascript">setTimeout(() => {
                    //         toastr.success("Creado en la base de datos correctamente");
                    //     }, 1000);</script>';
                    //     echo '<script language="javascript">setTimeout(() => {
                    //         window.location.href="index.php?page=controller_inmo&op=list";
                    //     }, 2000);</script>';
            		// }else{
            		// 	$callback = 'index.php?page=503';
    			    //     die('<script>window.location.href="'.$callback .'";</script>');
            		// }
                }
            }
            include("module/inmo/view/create_inmo.php");
            break;
            
        // case 'update';
        //     include("module/inmo/model/validate.php");
        //     $check = true;
            
        //     if (isset($_POST['update'])){
        //         // $data = 'hola update post inmo';
        //         // die('<script>console.log('.json_encode( $data ) .');</script>');
        //         $check=validate();
        //         //die('<script>console.log('.json_encode( $check ) .');</script>');
                
        //         if ($check){
        //             //die('<script>console.log('.json_encode( $_POST ) .');</script>');
        //             try{
        //                 $daoinmo = new DAOinmo();
    	// 	            $rdo = $daoinmo->update_inmo($_POST);
        //                 //die('<script>console.log('.json_encode( $rdo ) .');</script>');
        //             }catch (Exception $e){
        //                 $callback = 'index.php?page=503';
        // 			    die('<script>window.location.href="'.$callback .'";</script>');
        //             }
                    
		//             if($rdo){
        //     			echo '<script language="javascript">setTimeout(() => {
        //                     toastr.success("Modificado en la base de datos correctamente");
        //                 }, 1000);</script>';
        //                 echo '<script language="javascript">setTimeout(() => {
        //                     window.location.href="index.php?page=controller_inmo&op=list";
        //                 }, 2000);</script>';
        //     		}else{
        //     			$callback = 'index.php?page=503';
    	// 		        die('<script>window.location.href="'.$callback .'";</script>');
        //     		}
        //         }else{
        //             echo '<script language="javascript">setTimeout(() => {
        //                 window.location.href="index.php?page=controller_inmo&op=list";
        //             }, 2000);</script>';
        //         }
        //     }
            
        //     try{
        //         $daoinmo = new DAOinmo();
        //     	$rdo = $daoinmo->select_inmo($_GET['id']);
        //     	$inmo=get_object_vars($rdo);
        //     }catch (Exception $e){
        //         $callback = 'index.php?page=503';
		// 	    die('<script>window.location.href="'.$callback .'";</script>');
        //     }
            
        //     if(!$rdo){
    	// 		$callback = 'index.php?page=503';
    	// 		die('<script>window.location.href="'.$callback .'";</script>');
    	// 	}else{
        // 	    include("module/inmo/view/update_inmo.php");
    	// 	}
        //     break;
            
        // case 'read';
        //     // $data = 'hola crtl inmo read';
        //     // die('<script>console.log('.json_encode( $data ) .');</script>');
        //     // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');

        //     try{
        //         $daoinmo = new DAOinmo();
        //     	$rdo = $daoinmo->select_inmo($_GET['id']);
        //     	$inmo=get_object_vars($rdo);
        //         //die('<script>console.log('.json_encode( $inmo ) .');</script>');
        //     }catch (Exception $e){
        //         $callback = 'index.php?page=503';
		// 	    die('<script>window.location.href="'.$callback .'";</script>');
        //     }
        //     if(!$rdo){
    	// 		$callback = 'index.php?page=503';
    	// 		die('<script>window.location.href="'.$callback .'";</script>');
    	// 	}else{
        //         include("module/inmo/view/read_inmo.php");
    	// 	}
        //     break;
            
        // case 'delete';
            // $data = 'hola crtl inmo delete';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');

            if (isset($_POST['delete'])){
                //die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');
                try{
                    $daoinmo = new DAOinmo();
                	$rdo = $daoinmo->delete_inmo($_GET['id']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
            	if($rdo){
                    echo '<script language="javascript">setTimeout(() => {
                        toastr.success("Borrado en la base de datos correctamente");
                    }, 1000);</script>';
                    echo '<script language="javascript">setTimeout(() => {
                        window.location.href="index.php?page=controller_inmo&op=list";
                    }, 2000);</script>';
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }
            
            include("module/inmo/view/delete_inmo.php");
            break;
        default;
            include("view/inc/error404.php");
            break;
    }
?>