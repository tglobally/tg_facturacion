<?php
namespace tglobally\tg_facturacion\controllers;

use PDO;
use stdClass;
use tglobally\template_tg\html;

class controlador_fc_key_csd extends \gamboamartin\facturacion\controllers\controlador_fc_key_csd {

    public array $sidebar = array();

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){
        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'CSD';

        $this->sidebar['lista']['titulo'] = "KEY CSD";
        $this->sidebar['lista']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Alta", link: $this->link_alta,menu_seccion_active: true,
                menu_lateral_active: true));

        $this->sidebar['alta']['titulo'] = "Alta KEY CSD";
        $this->sidebar['alta']['stepper_active'] = true;
        $this->sidebar['alta']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Alta", link: $this->link_alta,menu_lateral_active: true));

        $this->sidebar['modifica']['titulo'] = "Modifica KEY CSD";
        $this->sidebar['modifica']['stepper_active'] = true;
        $this->sidebar['modifica']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Modifica", link: $this->link_alta,menu_lateral_active: true));
    }

    public function init_datatable(): stdClass
    {
        $columns["fc_key_csd_id"]["titulo"] = "Id";
        $columns["fc_csd_descripcion"]["titulo"] = "CSD";
        $columns["doc_documento_descripcion"]["titulo"] = "Documento";
        $columns["fc_key_csd_descripcion"]["titulo"] = "Descripción";

        $filtro = array("fc_key_csd.id","fc_csd.descripcion",
            "doc_documento.descripcion","fc_key_csd.descripcion");

        $datatables = new stdClass();
        $datatables->columns = $columns;
        $datatables->filtro = $filtro;

        return $datatables;
    }

    public function menu_item(string $menu_item_titulo, string $link, bool $menu_seccion_active = false,bool $menu_lateral_active = false): array
    {
        $menu_item = array();
        $menu_item['menu_item'] = $menu_item_titulo;
        $menu_item['menu_seccion_active'] = $menu_seccion_active;
        $menu_item['link'] = $link;
        $menu_item['menu_lateral_active'] = $menu_lateral_active;

        return $menu_item;
    }

}
