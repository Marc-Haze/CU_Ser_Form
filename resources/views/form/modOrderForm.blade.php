<!DOCTYPE html>
<html>
    <body>
        <h1>MODIFICACIÓN DE PEDIDO</h1>
        {{ csrf_field() }}
        <form method="POST"  action="/modPedido/<?php echo $dataPedido['id']?>">
            <div class="container">
            <section class="main row">     
                <article class="col-xs-12 col-sm-8 col-md-9">
                    <br><h2>DATOS DE PEDIDO</h2>
                    <div class="container borde">
                    <table id="aprovisionamiento" class="table-striped table-hover">
                            <thead class="text-right">
                                <th>NUMERO DE TIENDA</th>
                                <th>NUMERO CLIENTE</th>
                                <th>FECHA TERMINACIÓN</th>
                                <th>CREACIÓN</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="center">
                                        <input type="text" name="numeroTienda" maxlength="50" value="<?php echo $dataPedido['numeroTienda'] ?>">
                                    </td>
                                    <td align="center">
                                        <input type="text" name="idCliente" maxlength="50" value="<?php echo $dataPedido['idCliente'] ?>">
                                    </td>
                                    <td align="center">
                                        <input type="text" name="fechaTerminacion" maxlength="50" value="<?php echo $dataPedido['fechaTerminacion'] ?>">
                                    </td>
                                    <td align="center">
                                        <input type="text" name="creacion" maxlength="50" value="<?php echo $dataPedido['creacion'] ?>">
                                    </td>
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
                                <th>TIPO DE PRENDA</th>
                            </thead>
                            <tbody>
                                <?php foreach ($dataPrenda as $prenda) {?>
                                <tr>
                                    <td align="center">
                                        <input type="text" name="tipoPrenda" maxlength="50" value="<?php echo $prenda['tipoPrenda'] ?>">
                                    </td>
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
                                    <td align="center">
                                        <input type="text" name="tipoTrabajo" maxlength="50" value="<?php echo $trabajo['tipoTrabajo'] ?>">
                                    </td>
                                    <td align="center">
                                        <input type="text" name="referencia" maxlength="50" value="<?php echo $trabajo['referencia'] ?>">
                                    </td>
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
                                    <td align="center">
                                        <input type="text" name="articulo" maxlength="50" value="<?php echo $articulo['articulo'] ?>">
                                    </td>
                                    <td align="center">
                                        <input type="text" name="color" maxlength="50" value="<?php echo $articulo['color'] ?>">
                                    </td>
                                    <td align="center">
                                        <input type="text" name="talla" maxlength="50" value="<?php echo $articulo['talla'] ?>">
                                    </td>
                                    <td align="center">
                                        <input type="text" name="descripcion" maxlength="50" value="<?php echo $articulo['descripcion'] ?>">
                                    </td>
                                    <td align="center">
                                        <input type="text" name="codigoInterno" maxlength="50" value="<?php echo $articulo['codigoInterno'] ?>">
                                    </td>
                                    <td align="center">
                                        <input type="text" name="ean" maxlength="50" value="<?php echo $articulo['ean'] ?>">
                                    </td>
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
                                    <td align="center">
                                        <input type="text" name="referencia" maxlength="50" value="<?php echo $estampado['referencia'] ?>">
                                    </td>
                                    <td align="center">
                                        <input type="text" name="unidades" maxlength="50" value="<?php echo $estampado['unidades'] ?>">
                                    </td>
                                    <td align="center">
                                        <input type="text" name="precioUnd" maxlength="50" value="<?php echo $estampado['precioUnd'] ?>">
                                    </td>
                                    <td align="center">
                                        <input type="text" name="importeTotal" maxlength="50" value="<?php echo $estampado['importeTotal'] ?>">
                                    </td>
                                    <td align="center">
                                        <input type="text" name="observaciones" maxlength="50" value="<?php echo $estampado['observaciones'] ?>">
                                    </td>
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
        <div>
            <input type="submit" name="submit" value="Modificar Datos">
        </div>
        </form>
        <br>
        <br>
        <br>
    </body>
</html>