<!DOCTYPE html>
<html>
    <body>
        <h1>TERCER FORMULARIO - TIENDA</h1>
        {{ csrf_field() }}
        <form method="POST"  action="formulario2">
            <input type="hidden" name="numeroPedido" value=<?php echo $numeroPedido ?>>
            <h2>Datos de Artículo</h2>
            Número del Artículo:
            <input type="text" name="articulo" maxlength="50">
            <br><br>
            Talla:
            <input type="text" name="talla" maxlength="50">
            <br><br>
            Color:
            <input type="text" name="color" maxlength="50">
            <br><br>
            Descripción:
            <input type="text" name="descripcion" maxlength="50">
            <br><br>
            Código Interno:
            <input type="text" name="codigoInterno" maxlength="50">
            <br><br>
            EAN:
            <input type="text" name="ean" maxlength="50">
            <br>
            <br>
            <h2>Datos del Estampado:</h2>
            Referencia:
            <input type="text" name="referencia" maxlength="50">
            <br><br>
            Unidades:
            <input type="text" name="unidades" maxlength="50">
            <br><br>
            Precio / Und:
            <input type="text" name="precioUnd" maxlength="50">
            <br><br>
            Importe Total:
            <input type="text" name="importeTotal" maxlength="50">
            <br><br>
            Observaciones:
            <input type="text" name="observaciones" maxlength="50">
            <br>
            <br>
            <input type="submit" name="submit" value="Enviar">
        </form>
    </body>
</html>