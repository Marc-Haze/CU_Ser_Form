<html>
    <body>
        <div class="container">
            <section class="main row">     
                <article class="col-xs-12 col-sm-8 col-md-9">
                    <br><h2>DATOS DE PEDIDO</h2>
                    <div class="container borde">
                    <table id="aprovisionamiento" class="table-striped table-hover">
                            <thead class="text-right">
                                <th>NUMERO DE PEDIDO</th>
                                <th>NUMERO CLIENTE</th>
                                <th>FECHA DE PEDIDO</th>
                                <th>FECHA TERMINACIÓN</th>
                                <th>CREACIÓN</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="center"><?php echo $dataPedido['id'] ?></td>
                                    <td align="center"><?php echo $dataPedido['idCliente'] ?></td>
                                    <td align="center"><?php echo substr($dataPedido['created_at'],0,10) ?></td>
                                    <td align="center"><?php echo $dataPedido['fechaTerminacion'] ?></td>
                                    <td align="center"><?php echo $dataPedido['creacion'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                    </div>
                    <br>
                </article>
            </section>
        </div>
        <br>
        <div class="container">
            <section class="main row">     
                <article class="col-xs-12 col-sm-8 col-md-9">
                    <br><h2>PRENDAS DEL PEDIDO</h2>
                    <div class="container borde">
                    <table id="aprovisionamiento" class="table-striped table-hover">
                            <thead class="text-right">
                                <th>ID PRENDA</th>
                                <th>TIPO DE PRENDA</th>
                            </thead>
                            <tbody>
                                <?php foreach ($dataPrenda as $prenda) {?>
                                <tr>
                                    <td align="center"><?php echo $prenda['id'] ?></td>
                                    <td align="center"><?php echo $prenda['tipoPrenda'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <br>
                    </div>
                    <br>
                </article>
            </section>
        </div>
        <br>
        <div class="container">
            <section class="main row">     
                <article class="col-xs-12 col-sm-8 col-md-9">
                    <br><h2>TIPOS DE TRABAJO</h2>
                    <div class="container borde">
                    <table id="aprovisionamiento" class="table-striped table-hover">
                            <thead class="text-right">
                                <th>TIPO</th>
                                <th>REFERENCIA</th>
                            </thead>
                            <tbody>
                                <?php foreach ($dataTrabajo as $trabajo) {?>
                                <tr>
                                    <td align="center"><?php echo $trabajo['tipoTrabajo'] ?></td>
                                    <td align="center"><?php echo $trabajo['referencia'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <br>
                    </div>
                    <br>
                </article>
            </section>
        </div>
        <br>
        <div class="container">
            <section class="main row">     
                <article class="col-xs-12 col-sm-8 col-md-9">
                    <br><h2>ARTÍCULOS DEL PEDIDO</h2>
                    <div class="container borde">
                    <table id="aprovisionamiento" class="table-striped table-hover">
                            <thead class="text-right">
                                <th>ARTICULO</th>
                                <th>COLOR</th>
                                <th>TALLA</th>
                                <th>DESCRIPCIÓN</th>
                                <th>CÓDIGO INTERNO</th>
                                <th>EAN</th>
                            </thead>
                            <tbody>
                                <?php foreach ($dataArticulo as $articulo) {?>
                                <tr>
                                    <td align="center"><?php echo $articulo['articulo'] ?></td>
                                    <td align="center"><?php echo $articulo['color'] ?></td>
                                    <td align="center"><?php echo $articulo['talla'] ?></td>
                                    <td align="center"><?php echo $articulo['descripcion'] ?></td>
                                    <td align="center"><?php echo $articulo['codigoInterno'] ?></td>
                                    <td align="center"><?php echo $articulo['ean'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <br>
                    </div>
                    <br>
                </article>
            </section>
        </div>
        <div class="container">
            <section class="main row">     
                <article class="col-xs-12 col-sm-8 col-md-9">
                    <br><h2>Estampados del Pedido</h2>
                    <div class="container borde">
                    <table id="aprovisionamiento" class="table-striped table-hover">
                            <thead class="text-right">
                                <th>REFERENCIA</th>
                                <th>UNIDADES</th>
                                <th>PRECIO/UND</th>
                                <th>IMPORTE TOTAL</th>
                                <th>ONSERVACIONES</th>
                            </thead>
                            <tbody>
                                <?php foreach ($dataEstampado as $estampado) {?>
                                <tr>
                                    <td align="center"><?php echo $estampado['referencia'] ?></td>
                                    <td align="center"><?php echo $estampado['unidades'] ?></td>
                                    <td align="center"><?php echo $estampado['precioUnd'] ?></td>
                                    <td align="center"><?php echo $estampado['importeTotal'] ?></td>
                                    <td align="center"><?php echo $estampado['observaciones'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <br>
                    </div>
                    <br>
                </article>
            </section>
        </div>
    </body>
</html>