<?php
        $usuario = "root";
        $contrasena = "";
        $servidor = "localhost";
        $database = "conocetumente";

        //CREAMOS LA CONEXIÓN CON EL SERVIDOR QUE SE ALMACENARÁ EN $conexion
        $conexion = mysqli_connect($servidor, $usuario, $contrasena, $database) or die("No se ha podido conectar con el servidor");

  $sql = "SELECT * FROM TEMATICAS";

  $datos = mysqli_query($conexion, $sql);
  $arrayDatos = array();

  while($row = mysqli_fetch_array($datos)){
    $arrayDatos[] = $row;
  }
  print_r ($arrayDatos);
?>

<!DOCTYPE html>
<html>
    <body>
        <h1>PRIMER Formulario:</h1>
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
            <input type="submit" name="submit" value="Enviar">
        </form>
    </body>
</html>