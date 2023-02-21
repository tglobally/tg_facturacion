<?php
namespace tglobally\tg_facturacion\controllers;

use PDO;
use stdClass;
use tglobally\template_tg\html;

class controlador_fc_csd extends \gamboamartin\facturacion\controllers\controlador_fc_csd {

    public array $sidebar = array();

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){
        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'CSD';

        $this->sidebar['lista']['titulo'] = "CSD";
        $this->sidebar['lista']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Alta", link: $this->link_alta,menu_seccion_active: true,
                menu_lateral_active: true));

        $this->sidebar['alta']['titulo'] = "Alta CSD";
        $this->sidebar['alta']['stepper_active'] = true;
        $this->sidebar['alta']['menu'] = array(
            $this->menu_item(menu_item_titulo: "", link: $this->link_alta,menu_lateral_active: true));

        $this->sidebar['modifica']['titulo'] = "Modifica CSD";
        $this->sidebar['modifica']['stepper_active'] = true;
        $this->sidebar['modifica']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Modifica", link: $this->link_modifica,menu_lateral_active: true),
            $this->menu_item(menu_item_titulo: "Subir Key", link: $this->link_fc_key_csd,menu_seccion_active: true),
            $this->menu_item(menu_item_titulo: "Subir Cer", link: $this->link_fc_cer_csd,menu_seccion_active: true));

        $this->sidebar['subir_key']['titulo'] = "Modifica CSD";
        $this->sidebar['subir_key']['stepper_active'] = true;
        $this->sidebar['subir_key']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Modifica", link: $this->link_modifica,menu_seccion_active: true),
            $this->menu_item(menu_item_titulo: "Subir Key", link: $this->link_fc_key_csd,menu_lateral_active: true),
            $this->menu_item(menu_item_titulo: "Subir Cer", link: $this->link_fc_cer_csd,menu_seccion_active: true));

        $this->sidebar['subir_cer']['titulo'] = "Modifica CSD";
        $this->sidebar['subir_cer']['stepper_active'] = true;
        $this->sidebar['subir_cer']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Modifica", link: $this->link_modifica,menu_seccion_active: true),
            $this->menu_item(menu_item_titulo: "Subir Key", link: $this->link_fc_key_csd,menu_seccion_active: true),
            $this->menu_item(menu_item_titulo: "Subir Cer", link: $this->link_fc_cer_csd,menu_lateral_active: true));

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
