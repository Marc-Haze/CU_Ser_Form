<!DOCTYPE html>
<html>
    <body>
        <h1>Formulario:</h1>
        {{ csrf_field() }}

        <form method="POST" action="/pedidos">
            Número Pedido:
            <input type="text" name="numero_pedido" maxlength="50">
            <br>
            <br>
            Fecha de Pedido:
            <input type="text" name="fecha">
            <br>
            <br>
            Creación:
            Sí<input type="radio" name="creacion" value="si">
            No<input type="radio" name="creacion" value="no">
            <br>
            <br>
            <h3>Trabajos:</h3>
            Boceto<input type="checkbox" name="trabajos[]" value="boceto">
            Bordado<input type="checkbox" name="trabajos[]" value="bordado" >
            Serigrafía<input type="checkbox" name="trabajos[]" value="serigrafia">
            Transfer<input type="checkbox" name="trabajos[]" value="transfer" >
            Impresión Digital<input type="checkbox" name="trabajos[]" value="impresion_digital">
            <br>
            <br>
            <h3>Prendas:</h3>
            <br>
            Camiseta<input type="checkbox" name="prendas[]" value="camiseta" placeholder="Camiseta">
            Polo<input type="checkbox" name="prendas[]" value="polo" placeholder="Polo">
            Sudadera<input type="checkbox" name="prendas[]" value="sudadera" placeholder="Sudadera">
            Polar<input type="checkbox" name="prendas[]" value="polar" placeholder="Polar">
            Camisa<input type="checkbox" name="prendas[]" value="camisa" placeholder="Camisa">
            Pantalón<input type="checkbox" name="prendas[]" value="pantalon" placeholder="Pantalón">
            Chaleco<input type="checkbox" name="prendas[]" value="chaleco" placeholder="Chaleco">
            <br>
            Blusón<input type="checkbox" name="prendas[]" value="bluson" placeholder="Blusón">
            Chaqueta Cocina<input type="checkbox" name="prendas[]" value="chaqueta_cocina" placeholder="Chaqueta Cocina">
            Casulla<input type="checkbox" name="prendas[]" value="casulla" placeholder="Casulla">
            Delantal<input type="checkbox" name="prendas[]" value="delantal" placeholder="Delantal">
            Pijama<input type="checkbox" name="prendas[]" value="pijama" placeholder="Pijama">
            Bata<input type="checkbox" name="prendas[]" value="bata" placeholder="Bata">
            Gorra<input type="checkbox" name="prendas[]" value="gorra" placeholder="Gorra">
            <br>
            <br>
            <h3>Posición del Logo:</h3>
            <br>
            Pecho Izquierdo<input type="checkbox" name="logo[]" value="pecho_izquierdo">
            Pecho Derecho<input type="checkbox" name="logo[]" value="pecho_derecho">
            <br>
            Fuera Bolsillo<input type="checkbox" name="logo[]" value="fuera_bolsillo">
            Dentro Bolsillo<input type="checkbox" name="logo[]" value="dentro_bolsillo">
            <br>
            Manga Izquierda<input type="checkbox" name="logo[]" value="manga_izquierda">
            Manga Derecha<input type="checkbox" name="logo[]" value="manga_derecha">
            <br>
            Espalda<input type="checkbox" name="logo[]" value="espalda">
            <br>
            <br>
            Otros:
            <input type="textarea" name="logo[]">
            <br>
            <br>
            <h3>Datos de Artículo:</h3>
            <br>
            Referencia Prenda:
            <input type="text" name="ref_prenda">
            <br>
            Color:
            <input type="text" name="color">
            <br>
            Talla:
            <input type="text" name="talla">
            <br>
            Cantidad:
            <input type="text" name="cantidad">
            <br>
            Color Estampado:
            <input type="text" name="color_estampado">
            <br>
            Num.Bultos:
            <input type="text" name="numero_bultos">
            <br>
            Total Prendas:
            <input type="text" name="color_estampado">
            <br>
            <br>
            <h3>Datos de Tarifa:</h3>
            <br>
            Referencia Estampa:
            <input type="text" name="ref_estampa">
            <br>
            Unidades:
            <input type="text" name="unidades">
            <br>
            Precio Unidad:
            <input type="text" name="precio_unidad">
            <br>
            Total Importe:
            <input type="text" name="total_importe">
            <br>
            Observacion:
            <input type="text" name="observacion">
            <br>
            <br>
            <input type="submit" name="submit" value="Enviar">
        </form>
    </body>
</html>