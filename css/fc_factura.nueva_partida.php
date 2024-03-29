<?php
/** @var string $url_template */
use config\views;

$ruta_template_base = (new views())->ruta_template_base;
include $ruta_template_base.'assets/css/_base_css.php';
?>

<style>

    .head-principal{
        background-color: #0B0595 !important;
    }


    body .pagination li.page-item a:hover, body .pagination li.page-item a.active, body .pagination-carousel li a:hover, body .pagination-carousel li.active a, .header .top-bar .pull-right, body .color-secondary, body .btn.color-secondary {
        background-color: #ffffff;
    }


    .acciones_filter{
        display: flex;
        justify-content: center;
    }

    .info {

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .titulo-form{
        color: #0B0595;
        margin-bottom: 20px;
    }

    h3{
        font-weight: bold;
    }

    .content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .colum_accion{
        display: flex;
        justify-content: center;
    }

    .filters {
        margin: 20px 25px;
        padding-bottom: 25px;
    }


    input {
        border: 0;
        outline: 0;
        width: 100%;
        padding: 5px 22px;
        background-color: #F1F2F6;
        border-radius: 15px;
    }

    .icon_inicio_lista{
        padding: 0 15px;
    }

    .icon_inicio_lista img{
        width: 35px;
    }

    .icon_back_lista{
        padding: 0 15px;
    }

    .icon_back_lista img{
        width: 35px;
    }

    .icon_recargar_lista{
        padding: 0 15px;
    }

    .icon_recargar_lista img{
        width: 35px;
    }

    .icon_xls_lista{
        padding: 0px 15px;
    }

    .icon_xls_lista img{
        width: 30px;
    }


    .icon_atras_lista{
        padding: 0 15px;
    }

    .icon_atras_lista img{
        width: 35px;
    }

    .icon_adelante_lista{
        padding: 0 15px;
    }

    .icon_adelante_lista img{
        width: 35px;
    }

    .icon_modifica_lista{
        padding: 0 15px;
    }

    .icon_modifica_lista img{
        width: 35px;
    }

    .icon_elimina_lista{
        padding: 0 15px;
    }

    .icon_elimina_lista img{
        width: 35px;
    }

    .icon_descargar_lista{
        padding: 0 15px;
    }

    .icon_descargar_lista img{
        width: 35px;
    }

    .input_icon{
        color: #191919;
        position: absolute;
        width: 20px;
        height: 20px;
        left: 30px;
        top: 50%;
        transform: translateY(-50%);
    }

    .input_search{
        position: relative;
    }

    .paginador{
        width: 30px;
        display: contents;
    }


    .table>thead>tr>th{
        border: 0 !important;
    }

    input:focus {outline:none!important;}

    table thead {
        background-color: #F1F2F6;
    }

    .btn-icon-only, .btn-icon-only:hover, .btn-icon-only:focus{
        background-color: transparent;
    }

    .card-header{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }


    tr.group,
    tr.group:hover {
        background-color: #ddd !important;
    }

    .partidas{
        padding: 0 !important;
    }

    .partidas  .col-md-12{
        padding-left: 0px !important;
        padding-right: 0px !important;
    }

    .tabla_titulo{
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(113, 107, 107, 0.12);
    }






    .buttons {
        margin-bottom: 2.25rem;
    }

    .lista{
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .text-header {
        font-family: Helvetica;
        font-weight: 700!important;
        color: #000098;
    }

    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0,0,0,.125);
        border-radius: 0.25rem;
    }

    .card-header:first-child {
        border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
    }

    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0,0,0,.03);
        border-bottom: 1px solid rgba(0,0,0,.125);
    }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem;
    }

    .card-title {
        margin-bottom: 0.75rem;
    }



    .footable.table th, .footable-details.table th {
        font-family: Helvetica;
    }
    .footable.table td, .footable-details.table td {
        font-family: Helvetica;
    }
    .footable .footable-filtering .input-group .form-control:last-child, .footable .footable-filtering .input-group-addon:last-child, .footable .footable-filtering .input-group-btn:last-child > .btn, .footable .footable-filtering .input-group-btn:last-child > .btn-group > .btn, .footable .footable-filtering .input-group-btn:last-child > .dropdown-toggle, .footable .footable-filtering .input-group-btn:first-child > .btn:not(:first-child), .footable .footable-filtering .input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
        background-color: #0B0595;
        border: 1px solid #0B0595
    }
</style>



