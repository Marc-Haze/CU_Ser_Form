<!DOCTYPE html>
<html>
    <head>
        <title>Índice de Páginas y Formularios</title>
    </head>
    <body>
        {{ csrf_field() }}
        <h1>ÍNDICE</h1>
        <div>
            <form method="GET"  action="clientes">
                <input type="submit" name="submit" value="Listar Clientes">
            </form>
        </div>
        <br>
        <div>
            <form method="GET"  action="pedidos">
                <input type="submit" name="submit" value="Listar Pedidos">
            </form>
        </div>
        <br>
        <div>
            <a href="/addClient">  
                <input type="submit" value="Crear Nuevo Cliente"/>  
            </a>
        </div>
        <br>
        <div>
            <a href="/firstForm">  
                <input type="submit" value="Crear Nuevo Pedido"/>  
            </a>
        </div>
        <br>
    </body>
</html>