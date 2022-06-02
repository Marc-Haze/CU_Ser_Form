<!DOCTYPE html>
<html>
    <body>
        <h1>PRIMER FORMULARIO - TIENDA</h1>
        {{ csrf_field() }}
        <form method="POST"  action="pedidos">
            <h2>Datos de Pedido</h2>
            Número de Tienda:
            <input type="text" name="numeroTienda" maxlength="50">
            <br>
            Número Pedido de Venta:
            <input type="text" name="numeroPedido" maxlength="50">
            <br>
            <br>
            Creación:
            Sí<input type="radio" name="creacion" value="si">
            No<input type="radio" name="creacion" value="no">
            <br>
            <br>
            <h3>Datos de Cliente:</h3>
            Número Cliente:
            <input type="text" name="idCliente" maxlength="50">
            <br>
            <br>
            <input type="submit" name="submit" value="Enviar">
        </form>
        <br>
        <br>
        <br>
    </body>
</html>