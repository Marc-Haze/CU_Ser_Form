<?php
// $fechaPedido = isset($_GET['fechaPedido']) ? $_GET['fechaPedido']: "";
// $fechaTerminacion = isset($_GET['fechaTerminacion']) ? $_GET['fechaTerminacion']: "";
// $creacion = isset($_GET['creacion']) ? $_GET['creacion']: "";
// $idCliente = isset($_GET['idCliente']) ? $_GET['idCliente']: "";

echo "numeroPedido:".$numeroPedido;
// echo "fechaPedido:".$fechaPedido;
// echo "fechaTerminacion:".$fechaTerminacion;
// echo "creacion:".$creacion;
// echo "idCliente:".$idCliente;

//Realizar un select aquí para obtener el numeroPedido? *REVISAR*
?>
<!DOCTYPE html>
<html>
    <body>
        <h1>SEGUNDO FORMULARIO - SERIGRAFÍA</h1>
        {{ csrf_field() }}
        <form method="POST" action="/formulario">
            <h3>Tipos de Trabajo:</h3>
            Número de Pedido<input type="text" name="idPedido" value=<?php echo $numeroPedido ?>>
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
            Camiseta<input type="radio" name="prendas" value="camiseta">
            Polo<input type="radio" name="prendas" value="polo">
            Sudadera<input type="radio" name="prendas" value="sudadera">
            Polar<input type="radio" name="prendas" value="polar">
            Camisa<input type="radio" name="prendas" value="camisa">
            Pantalón<input type="radio" name="prendas" value="pantalon">
            Chaleco<input type="radio" name="prendas" value="chaleco">
            <br>
            Blusón<input type="radio" name="prendas" value="bluson">
            Chaqueta Cocina<input type="radio" name="prendas" value="chaqueta_cocina">
            Casulla<input type="radio" name="prendas" value="casulla">
            Delantal<input type="radio" name="prendas" value="delantal">
            Pijama<input type="radio" name="prendas" value="pijama">
            Bata<input type="radio" name="prendas" value="bata">
            Gorra<input type="radio" name="prendas" value="gorra">
            <br>
            <br>
            <h3>Posición del Logo:</h3>
            Pecho Izquierdo<input type="radio" name="logo" value="pecho_izquierdo">
            Pecho Derecho<input type="radio" name="logo" value="pecho_derecho">
            <br>
            Fuera Bolsillo<input type="radio" name="logo" value="fuera_bolsillo">
            Dentro Bolsillo<input type="radio" name="logo" value="dentro_bolsillo">
            <br>
            Manga Izquierda<input type="radio" name="logo" value="manga_izquierda">
            Manga Derecha<input type="radio" name="logo" value="manga_derecha">
            <br>
            Espalda<input type="radio" name="logo" value="espalda">
            <br>
            Imagen<input type="file" name="imagen">
            <br>
            <br>
            Otros:
            <input type="text" name="logo">
            <br>
            <br>
            <input type="submit" name="submit" value="Enviar">
        </form>
    </body>
</html>