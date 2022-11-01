<?php /** @var \tglobally\tg_facturacion\controllers\controlador_fc_factura $controlador */ ?>

<?php (new \tglobally\template_tg\template())->sidebar($controlador); ?>

<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>

        <div class="  form-main" id="form">
            <form method="post" action="<?php echo $controlador->link_modifica_bd;?>" class="form-additional">

                <?php echo $controlador->inputs->fc_csd_id; ?>
                <?php echo $controlador->inputs->com_sucursal_id; ?>
                <?php echo $controlador->inputs->folio; ?>
                <?php echo $controlador->inputs->fecha; ?>
                <?php echo $controlador->inputs->exportacion; ?>
                <?php echo $controlador->inputs->serie; ?>
                <?php echo $controlador->inputs->subtotal; ?>
                <?php echo $controlador->inputs->descuento; ?>
                <?php echo $controlador->inputs->impuestos_trasladados; ?>
                <?php echo $controlador->inputs->impuestos_retenidos; ?>
                <?php echo $controlador->inputs->total; ?>
                <?php echo $controlador->inputs->cat_sat_tipo_de_comprobante_id; ?>
                <?php echo $controlador->inputs->cat_sat_forma_pago_id; ?>
                <?php echo $controlador->inputs->cat_sat_metodo_pago_id; ?>
                <?php echo $controlador->inputs->cat_sat_moneda_id; ?>
                <?php echo $controlador->inputs->com_tipo_cambio_id; ?>
                <?php echo $controlador->inputs->cat_sat_uso_cfdi_id; ?>
                <div class="buttons col-md-12">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " name="btn_action_next" value="modifica">Guarda</button>
                    </div>
                    <div class="col-md-6 ">
                        <a href="<?php echo $controlador->link_lista; ?>"  class="btn btn-info btn-guarda col-md-12 ">Lista</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
