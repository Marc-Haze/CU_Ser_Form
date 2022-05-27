<!DOCTYPE html>
<html>
    <body>
    <div class="container">
            <section class="main row">     
                <article class="col-xs-12 col-sm-8 col-md-9">
                    <br><h2>Lista de Pedidos</h2>
                    <div class="container borde">
                    <table id="aprovisionamiento" class="table-striped table-hover">
                            <thead class="text-right">
                                <th>NUMERO DE PEDIDO</th>
                                <th>NUMERO DE CLIENTE</th>
                                <th>FECHA DE PEDIDO</th>
                                <th>FECHA DE TERMINACIÓN</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach($dataPedido as $pedido){
                                ?>
                                    <tr>
                                        <td align="center"><a href="{{ route('id.pedido', ['id'=>$pedido['id']]) }}"><?php echo $pedido['id'] ?> </a></td>
                                        <td align="center"><?php echo $pedido['idCliente'] ?></td>
                                        <td align="center"><?php echo substr($pedido['created_at'],0,10) ?></td>
                                        <td align="center"><?php echo $pedido['fechaTerminacion'] ?></td>
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