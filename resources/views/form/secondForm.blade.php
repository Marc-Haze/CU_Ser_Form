<!DOCTYPE html>
<html>
    <body>
        <h1>SEGUNDO FORMULARIO - SERIGRAFÍA</h1>
        {{ csrf_field() }}
        <form method="POST" action="formulario">
            <h3>Tipos de Trabajo:</h3>
            <input type="hidden" name="numeroPedido" value=<?php echo $numeroPedido ?>>
            <br>
            Boceto<input type="radio" name="tipoTrabajo" value="boceto">
            Bordado<input type="radio" name="tipoTrabajo" value="bordado" >
            Serigrafía<input type="radio" name="tipoTrabajo" value="serigrafia">
            Transfer<input type="radio" name="tipoTrabajo" value="transfer" >
            Impresión Digital<input type="radio" name="tipoTrabajo" value="impresion_digital">
            <br>
            <br>
            Referencia de Tarifa:
            <input type="text" name="referencia">
            <br>
            <br>
            <h3>Tipos de Prenda:</h3>
            <br>
            Camiseta<input type="radio" name="tipoPrenda" value="camiseta">
            Polo<input type="radio" name="tipoPrenda" value="polo">
            Sudadera<input type="radio" name="tipoPrenda" value="sudadera">
            Polar<input type="radio" name="tipoPrenda" value="polar">
            Camisa<input type="radio" name="tipoPrenda" value="camisa">
            Pantalón<input type="radio" name="tipoPrenda" value="pantalon">
            Chaleco<input type="radio" name="tipoPrenda" value="chaleco">
            <br>
            Blusón<input type="radio" name="tipoPrenda" value="bluson">
            Chaqueta Cocina<input type="radio" name="tipoPrenda" value="chaqueta_cocina">
            Casulla<input type="radio" name="tipoPrenda" value="casulla">
            Delantal<input type="radio" name="tipoPrenda" value="delantal">
            Pijama<input type="radio" name="tipoPrenda" value="pijama">
            Bata<input type="radio" name="tipoPrenda" value="bata">
            Gorra<input type="radio" name="tipoPrenda" value="gorra">
            <br>
            <br>
            <h3>ID Imagen:</h3>
            <input type="text" name="idImagen" maxlength="50">
            <br>
            <h3>Posición del Logo:</h3>
            Pecho Izquierdo<input type="radio" name="posicion" value="pecho_izquierdo">
            Pecho Derecho<input type="radio" name="posicion" value="pecho_derecho">
            <br>
            Fuera Bolsillo<input type="radio" name="posicion" value="fuera_bolsillo">
            Dentro Bolsillo<input type="radio" name="posicion" value="dentro_bolsillo">
            <br>
            Manga Izquierda<input type="radio" name="posicion" value="manga_izquierda">
            Manga Derecha<input type="radio" name="posicion" value="manga_derecha">
            <br>
            Espalda<input type="radio" name="posicion" value="espalda">
            <br>
            <br>
            Otros:
            <input type="text" name="logo">
            <br>
            <br>
            <input type="submit" name="submit" value="Enviar">
        </form>
        <br>
        <form method="POST" action="formulario">
        <input type="hidden" name="numeroPedido" value=<?php echo $numeroPedido ?>>
        <input type="submit" name="submit" value="Siguiente">
        </form>
    </body>
</html>