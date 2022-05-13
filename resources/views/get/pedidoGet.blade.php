<!DOCTYPE html>
<html>
    <body>
        <h1>OBTENER LISTA DE PEDIDOS</h1>
        {{ csrf_field() }}
        <form method="GET"  action="pedidos">
            <input type="submit" name="submit" value="Enviar">
        </form>
        <br>
        <br>
        <br>
    </body>
</html>