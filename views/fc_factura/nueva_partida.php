<?php /** @var \tglobally\tg_facturacion\controllers\controlador_fc_factura $controlador */ ?>

<?php (new \tglobally\template_tg\template())->sidebar(controlador: $controlador, seccion_step: 2); ?>

<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">
            Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>

        <div class="  form-main" id="form">
            <form method="post" action="<?php echo $controlador->link_fc_partida_alta_bd; ?>" class="form-additional">

                <?php echo $controlador->inputs->fc_factura_id; ?>
                <?php echo $controlador->inputs->com_producto_id; ?>
                <?php echo $controlador->inputs->unidad; ?>
                <?php echo $controlador->inputs->impuesto; ?>
                <?php echo $controlador->inputs->descripcion; ?>
                <?php echo $controlador->inputs->cantidad; ?>
                <?php echo $controlador->inputs->valor_unitario; ?>
                <?php echo $controlador->inputs->subtotal; ?>
                <?php echo $controlador->inputs->descuento; ?>
                <?php echo $controlador->inputs->total; ?>


                <div class="buttons col-md-12">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " value="modifica">Guarda
                        </button>
                    </div>
                    <div class="col-md-6 ">
                        <a href="<?php echo $controlador->link_lista; ?>" class="btn btn-info btn-guarda col-md-12 ">Lista</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="lista">
            <div class="card">
                <div class="card-header">
                    <span class="text-header">Partidas Agregadas</span>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <?php foreach ($controlador->partidas->registros as $partida) {?>
                            <table id="fc_partida" class="table table-striped"
                                   style="font-size: 12px; border: 2px solid #e0e0e0; border-radius: 0.5rem !important;">
                                <?php echo $controlador->t_head_producto; ?>
                                <tbody>
                                <?php echo $partida['data_producto_html']; ?>
                                <tr>
                                    <td class="nested" colspan="9" style="padding: 0;">
                                        <table class="table table-striped"
                                               style='font-size: 14px; vertical-align: middle; background-color: #dfe7f6; color: #2c58a0; margin-bottom: 0; '>
                                            <thead>
                                            <tr>
                                                <th>Producto</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><?php echo $partida['com_producto_descripcion']; ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <?php echo $partida['impuesto_traslado_html']; ?>
                                <?php echo $partida['impuesto_retenido_html']; ?>

                                </tbody>
                            </table>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

