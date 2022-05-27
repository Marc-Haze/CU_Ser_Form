<!DOCTYPE html>
<html>
    <body>
        <h1>FORMULARIO DE CLIENTES</h1>
        {{ csrf_field() }}
        <form method="POST"  action="clientes">
            <h2>Datos de Cliente</h2>
            Número:
            <input type="text" name="numero" maxlength="50">
            <br>
            <br>
            DNI:
            <input type="text" name="cif_nif" maxlength="9" minlength="9">
            <br>
            <br>
            Razón Social:
            <input type="text" name="razonSocial">
            <br>
            <br>
            Nombre Comercial:
            <input type="text" name="nombreComercial">
            <br>
            <br>
            Teléfono:
            <input type="text" name="telefono">
            <br>
            <br>
            Email:
            <input type="text" name="email">
            <br>
            <br>
            Domicilio:
            <input type="text" name="domicilio">
            <br>
            <br>
            Código Postal:
            <input type="text" name="codigoPostal">
            <br>
            <br>
            Municipio:
            <input type="text" name="municipio">
            <br>
            <br>
            Provincia:
            <input type="text" name="provincia">
            <br>
            <br>
            Observaciones:
            <input type="text" name="observaciones">
            <br>
            <br>
            <input type="submit" name="submit" value="Enviar">
        </form>
        <br>
        <br>
        <br>
    </body>
</html>