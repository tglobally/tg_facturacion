<?php /** @var \tglobally\tg_facturacion\controllers\controlador_fc_csd $controlador */ ?>

<?php (new \tglobally\template_tg\template())->sidebar($controlador); ?>

<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>

        <div class="  form-main" id="form">
            <form method="post" action="<?php echo $controlador->link_fc_cer_csd_alta_bd;?>" class="form-additional" enctype="multipart/form-data">
                <?php echo $controlador->inputs->fc_csd_id; ?>
                <?php echo $controlador->inputs->codigo; ?>
                <?php echo $controlador->inputs->codigo_bis; ?>
                <?php echo $controlador->inputs->documento; ?>
                <div class="buttons col-md-12">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " name="btn_action_next" value="subir_cer">Guarda</button>
                    </div>
                    <div class="col-md-6 ">
                        <a href="<?php echo $controlador->link_lista; ?>"  class="btn btn-info btn-guarda col-md-12 ">Lista</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="lista">
            <div class="card">
                <div class="card-header">
                    <span class="text-header">Registro de Cers</span>
                </div>
                <div class="card-body">
                    <div class="cont_tabla_sucursal  col-md-12">
                        <table id="fc_cer_csd" class="table table-striped" ></table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
