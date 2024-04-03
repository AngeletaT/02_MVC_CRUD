<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE INMUEBLES</h3>
    	</div>
    	<div class="row">
    		<p><a href="index.php?page=controller_inmo&op=create"><img src="view/img/anadir.png"></a></p>
    		
    		<table>
                <tr>
                    <td width=125><b>Catastro</b></td>
                    <td width=160><b>Descripcion</b></td>
                    <td width=125><b>Precio</b></td>
                    <td width=125><b>Habitaciones</b></td>
                    <td width=125><b>Banyos</b></td>
                    <th width=350><b>Accion (por configurar)</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN INMUEBLE</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td width=125>'. $row['id_ref'] . '</td>';
                    	   	echo '<td width=160>'. $row['descripcion'] . '</td>';
                    	   	echo '<td width=125>'. $row['precio'] . '</td>';
                            echo '<td width=125>'. $row['habs'] . '</td>';
                            echo '<td width=125>'. $row['banys'] . '</td>';
                    	   	// echo '<td width=350>';
                    	   	// echo '<a class="Button_blue" href="index.php?page=controller_inmo&op=read&id='.$row['id_ref'].'">Read</a>';
                    	   	// echo '&nbsp;';
                    	   	// echo '<a class="Button_green" href="index.php?page=controller_inmo&op=update&id='.$row['id_ref'].'">Update</a>';
                    	   	// echo '&nbsp;';
                    	   	// echo '<a class="Button_red" href="index.php?page=controller_inmo&op=delete&id='.$row['id_ref'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>