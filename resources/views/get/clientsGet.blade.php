 <!DOCTYPE html>
<html>
    <body>
        <h1>Lista de Clientes</h1>
        {{ csrf_field() }}
        <?php 
        foreach($dataCliente as $cliente){     
            echo "Cliente";   
            echo "<ul>";    
                echo "<li>"."Número: ".$cliente["numero"]."</li>";
                echo "<li>"."DNI: ".$cliente["cif_nif"]."</li>";
                echo "<li>"."Email: ".$cliente["email"]."</li>";
            echo "</ul>";
        }
        ?>
        {{-- Crear hipervinculo con html para pasar el id del cliente ¿O el objeto? --}}
        <br>
        <br>
        <br>
    </body>
</html>