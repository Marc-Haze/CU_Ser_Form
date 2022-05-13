<!DOCTYPE html>
<html>
    <body>
        <h1>Lista de Pedidos</h1>
        {{ csrf_field() }}
        <?php 
        foreach($dataPedido as $pedido){
            echo "Pedido";   
            echo "<ul>";    
                echo "<li>"."Número de Venta: ".$pedido["id"]."</li>";
                echo "<li>"."DNI del Cliente: ".$pedido["idCliente"]."</li>";
                echo "<li>"."Creación: ".$pedido["creacion"]."</li>";
            echo "</ul>";       
        }
        ?>
        <br>
        <br>
        <br>
    </body>
</html>