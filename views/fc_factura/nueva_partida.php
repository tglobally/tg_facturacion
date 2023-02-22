<?php /** @var \tglobally\tg_facturacion\controllers\controlador_fc_factura $controlador */ ?>

<?php (new \tglobally\template_tg\template())->sidebar(controlador:$controlador, seccion_step: 2); ?>

<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>

        <div class="  form-main" id="form">
            <form method="post" action="<?php echo $controlador->link_modifica_bd;?>" class="form-additional">

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
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " value="modifica">Guarda</button>
                    </div>
                    <div class="col-md-6 ">
                        <a href="<?php echo $controlador->link_lista; ?>"  class="btn btn-info btn-guarda col-md-12 ">Lista</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
