<?php
namespace tglobally\tg_facturacion\controllers;

use gamboamartin\errores\errores;
use PDO;
use stdClass;
use tglobally\template_tg\html;

class controlador_fc_factura extends \gamboamartin\facturacion\controllers\controlador_fc_factura {

    public array $sidebar = array();

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){
        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'Facturas';

        $this->sidebar['lista']['titulo'] = "Facturas";
        $this->sidebar['lista']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Alta", link: $this->link_alta,menu_seccion_active: true,
                menu_lateral_active: true));


        $this->sidebar['alta']['titulo'] = "Facturas";
        $this->sidebar['alta']['stepper_active'] = true;
        $this->sidebar['alta']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Alta", link: $this->link_alta,menu_lateral_active: true));

        $this->sidebar['modifica']['titulo'] = "Facturas";
        $this->sidebar['modifica']['stepper_active'] = true;
        $this->sidebar['modifica']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Modifica", link: $this->link_modifica,menu_lateral_active: true),
            $this->menu_item(menu_item_titulo: "Partidas", link: $this->link_fc_factura_nueva_partida,menu_seccion_active: true));

        $this->sidebar['nueva_partida']['titulo'] = "Facturas";
        $this->sidebar['nueva_partida']['stepper_active'] = true;
        $this->sidebar['nueva_partida']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Modifica", link: $this->link_modifica,menu_seccion_active: true),
            $this->menu_item(menu_item_titulo: "Partidas", link: $this->link_fc_factura_nueva_partida,menu_lateral_active: true));

    }

    public function nueva_partida(bool $header, bool $ws = false): array|stdClass
    {
        $this->modifica($header, $ws);

       $partida = parent::nueva_partida($header, $ws);
        if (errores::$error) {
            $error = $this->errores->error(mensaje: 'Error al inicializar partida', data: $partida);
            print_r($error);
            die('Error');
        }

       return $partida;
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
