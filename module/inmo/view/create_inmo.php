<div id="contenido">
    <form autocomplete="on" method="post" name="alta_inmo" id="alta_inmo" 
    onsubmit="return validate();" action="index.php?page=controller_inmo&op=create" > 
        <h1>REGISTRO NUEVO</h1>
        <table width="100%" border="0">
            <tr>
                <td>Referencia catastral: </td>
                <td><input type="text" id="id_ref" name="id_ref" value=""/></td>
            </tr>
            <tr>
                <td>Descripcion: </td>
                <td><input type="longtext" id="descripcion" name="descripcion" value=""/></td>
            </tr>
            <tr>
                <td>Tipo: </td>
                <td><select id="tipo" name="tipo">
                    <option value="Casa">Casa</option>
					<option value="Piso">Piso</option>
					<option value="Local">Local</option>
					<option value="Trastero">Trastero</option>
                    <option value="Garaje">Garaje</option>
                    <option value="Terreno">Terreno</option>
                    </select></td>
                </td>
            </tr>
            <tr>
                <td>Opcion: </td>
                <td><input type="checkbox" id= "opcion[]" name="opcion[]" value="Venta"/>Venta
                    <input type="checkbox" id= "opcion[]" name="opcion[]" value="Alquiler"/>Alquiler
                    <input type="checkbox" id= "opcion[]" name="opcion[]" value="Nueva"/>Obra Nueva
                    <input type="checkbox" id= "opcion[]" name="opcion[]" value="Compartir"/>Compartir</td>
            </tr>
            <tr>
                <td>Metros cuadrados: </td>
                <td><input type="text" id="m2" name="m2" value=""/></td>
            </tr>
            <tr>
                <td>Precio: </td>
                <td><input type="text" id="m2" name="m2" value=""/></td>
            </tr>
            <tr>
                <td>Habitaciones: </td>
                <td><input type="text" id="m2" name="m2" value=""/></td>
            </tr>
            <tr>
                <td>Banyos: </td>
                <td><input type="text" id="m2" name="m2" value=""/></td>
            </tr>
            <tr>
                <td>Ascensor: </td>
                <td><input type="radio" id= "ascensor" name="ascensor" value="1"/>Si
                    <input type="radio" id= "ascensor" name="ascensor" value="0"/>No</td>
            </tr>
            <tr>
                <td><input type="submit" name="create" id="create"/></td>
                <td align="right"><a href="index.php?page=controller_inmo&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>