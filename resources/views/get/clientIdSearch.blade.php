<html>
    <body>
        <div class="container">
            <section class="main row">     
                <article class="col-xs-12 col-sm-8 col-md-9">
                    <br><h2>Lista de Clientes</h2>
                    <div class="container borde">
                    <table id="aprovisionamiento" class="table-striped table-hover">
                            <thead class="text-right">
                                <th>NUMERO DE CLIENTE</th>
                                <th>CIF/NIF</th>
                                <th>RAZÓN SOCIAL</th>
                                <th>NOMBRE COMERCIAL</th>
                                <th>TELÉFONO</th>
                                <th>EMAIL</th>
                                <th>DOMICILIO</th>
                                <th>CÓDIGO POSTAL</th>
                                <th>MUNICIPIO</th>
                                <th>PROVINCIA</th>
                                <th>OBSERVACIONES</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="center"><?php echo $dataCliente['id'] ?></td>
                                    <td align="center"><?php echo $dataCliente['cif_nif'] ?></td>
                                    <td align="center"><?php echo $dataCliente['razonSocial'] ?></td>
                                    <td align="center"><?php echo $dataCliente['nombreComercial'] ?></td>
                                    <td align="center"><?php echo $dataCliente['telefono'] ?></td>
                                    <td align="center"><?php echo $dataCliente['email'] ?></td>
                                    <td align="center"><?php echo $dataCliente['domicilio'] ?></td>
                                    <td align="center"><?php echo $dataCliente['codigoPostal'] ?></td>
                                    <td align="center"><?php echo $dataCliente['municipio'] ?></td>
                                    <td align="center"><?php echo $dataCliente['provincia'] ?></td>
                                    <td align="center"><?php echo $dataCliente['observaciones'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                </article>
            </section>
        </div>
        <br>
        <div>
            <form method="POST"  action="/imagens">
                Añadir Imagen al Cliente:
                <input type="hidden" name="idCliente" value="<?php echo $dataCliente['id'] ?>">
                <input type="file" name="imagen">
                <br>
                <br>
                <input type="submit" name="submit" value="Enviar">
            </form>
        </div>
        <br>
        <br>
        <br>
    </body>
</html>