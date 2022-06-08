<!DOCTYPE html>
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
                                <th>NOMBRE COMERCIAL</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach($dataCliente as $cliente){
                                ?>
                                    <tr>
                                        <td align="center"><a href="{{ route('dni.cliente', ['id'=>$cliente['id']]) }}"> <?php echo $cliente['id'] ?> </a></td>
                                        <td align="center"><?php echo $cliente['cif_nif'] ?></td>
                                        <td align="center"><?php echo $cliente['nombreComercial'] ?></td>
                                        
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <br>
                </article>
            </section>
        </div>
        <br>
        <br>
        <br>
    </body>
</html>