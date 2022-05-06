<!DOCTYPE html>
<html>
    <body>
        <h1>Formulario:</h1>
        {{ csrf_field() }}
        <div>
            <form method="POST" action="/pruebas">
                Creación:
                Sí<input type="radio" name="dato1" value="si">
                No<input type="radio" name="dato1" value="no">
                <br>
                <br>
                <h3>Trabajos:</h3>
                Boceto<input type="checkbox" name="dato2" value="boceto">
                <br>
                <br>
                <h3>Datos de Tarifa:</h3>
                <br>
                Referencia Estampa:
                <input type="text" name="dato3">
                <br>
                <br>
                <input type="submit" name="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>
