<?php
// $numeroPedido = isset($_GET['numeroPedido']) ? $_GET['numeroPedido']: "";
?>
<!DOCTYPE html>
<html>
    <body>
        <h1>PRIMER FORMULARIO - TIENDA</h1>
        {{ csrf_field() }}
        <iframe name="frame" style="display:none;"></iframe>
        <form method="POST"  action="pedidos">
            <h2>Datos de Pedido</h2>
            Número Pedido de Venta:
            <input type="text" name="numeroPedido" maxlength="50">
            <br>
            <br>
            {{-- Dato automático --}}
            Fecha de Pedido:
            <input type="text" name="fechaPedido">
            <br>
            <br>
            {{-- Serigrafía es quien lo determina, no la tienda --}}
            {{-- Fecha de Terminación:
            <input type="text" name="fechaTerminacion">
            <br>
            <br> --}}
            Creación:
            Sí<input type="radio" name="creacion" value="si">
            No<input type="radio" name="creacion" value="no">
            <br>
            <br>
            <h3>Datos de Cliente:</h3>
            ID Cliente:
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