<!DOCTYPE html>
<html>
    <body>
        <h1>OBTENER LISTA DE CLIENTES</h1>
        {{ csrf_field() }}
        <form method="GET"  action="clientes">
            <input type="submit" name="submit" value="Enviar">
        </form>
        <br>
        <br>
        <br>
    </body>
</html>