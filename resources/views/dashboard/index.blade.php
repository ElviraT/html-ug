@extends('layouts.base')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css" />
<style>
    .header{
        font-size: 12px;
        color: #B4B2B2;
    }
    .otro{
        color: #303030;
        font-size: 16px;
    }
    a{
        color: #B4B2B2;
    }
    .img-circle{
        border-radius:50%;
        color: white;
        font-size: 14px;
        padding: 5px;
    }
    .plus{
        border-radius:50%;
        color: grey;
        border: solid 1px grey;
    }
</style>
@endsection
@section('content')

    @include('dashboard.header')

    <div class="content mt-3">
        <button type="button" class="btn btn-primary" id="proyecto"><i class="fa fa-folder-o"></i> Proyectos</button>
        <button type="button" class="btn btn-secondary" id="tarea"><i class="fa fa-calendar-check-o"></i> Tareas</button>
        <button type="button" class="btn btn-secondary" id="calendario"><i class="fa fa-calendar"></i> Calendario</button>
        <button type="button" class="btn btn-secondary" id="compras"><i class="fa fa-shopping-cart"></i> Compras</button>
        <button type="button" class="btn btn-secondary" id="ppis"><i class="fa fa-bars"></i> PPIs</button>
        <button type="button" class="btn btn-secondary" id="costo"><i class="fa fa-database"></i> Costos</button>
        <button type="button" class="btn btn-secondary" id="documento"><i class="fa fa-file"></i> Documentos</button>
    </div>
    <div id="pro" class="mt-3">
        @include('projects.index')
    </div>
    <div id="tar" hidden>
        @include('tareas.index')
    </div>
    <div id="cal" hidden>
        {{'estoy en calendario'}}
    </div>
    <div id="com" hidden>
        {{'estoy en compras'}}
    </div>
    <div id="ppi" hidden>
        {{'estoy en ppis'}}
    </div>
    <div id="cos" hidden>
        {{'estoy en costo'}}
    </div>
    <div id="doc" hidden>
        {{'estoy en documentos'}}
    </div>

@endsection

@section('modal')
@include('modales.status')
@include('modales.proyecto')
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $("#proyecto").click(function () {
        $("#pro").prop('hidden', false);
        $("#proyecto").removeClass('btn-secondary').addClass('btn-primary');
        $("#tarea, #calendario, #compras, #ppis, #costo, #documentos").removeClass('btn-primary').addClass('btn-secondary');
        $("#tar, #cal, #com, #ppi, #cos, #doc").prop('hidden', true);
    });

    $("#tarea").click(function () {
        $("#tar").prop('hidden', false);
        $("#tarea").removeClass('btn-secondary').addClass('btn-primary');
        $("#proyecto, #calendario, #compras, #ppis, #costo, #documentos").removeClass('btn-primary').addClass('btn-secondary');
        $("#pro, #cal, #com, #ppi, #cos, #doc").prop('hidden', true);
    });

    $("#calendario").click(function () {
        $("#cal").prop('hidden', false);
        $("#calendario").removeClass('btn-secondary').addClass('btn-primary');
        $("#proyecto, #tarea, #compras, #ppis, #costo, #documentos").removeClass('btn-primary').addClass('btn-secondary');
        $("#pro, #tar, #com, #ppi, #cos, #doc").prop('hidden', true);
    });

    $("#compras").click(function () {
        $("#com").prop('hidden', false);
        $("#compras").removeClass('btn-secondary').addClass('btn-primary');
        $("#proyecto, #calendario, #tarea, #ppis, #costo, #documentos").removeClass('btn-primary').addClass('btn-secondary');
        $("#pro, #tar, #cal, #ppi, #cos, #doc").prop('hidden', true);
    });

    $("#ppis").click(function () {
        $("#ppi").prop('hidden', false);
        $("#ppis").removeClass('btn-secondary').addClass('btn-primary');
        $("#proyecto, #calendario, #compras, #tarea, #costo, #documentos").removeClass('btn-primary').addClass('btn-secondary');
        $("#pro, #tar, #com, #cal, #cos, #doc").prop('hidden', true);
    });

    $("#costo").click(function () {
        $("#cos").prop('hidden', false);
        $("#costo").removeClass('btn-secondary').addClass('btn-primary');
        $("#proyecto, #calendario, #compras, #ppis, #tarea, #documentos").removeClass('btn-primary').addClass('btn-secondary');
        $("#pro, #tar, #com, #cal, #ppi, #doc").prop('hidden', true);
    });

    $("#documento").click(function () {
        $("#doc").prop('hidden', false);
        $("#documento").removeClass('btn-secondary').addClass('btn-primary');
        $("#proyecto, #calendario, #compras, #ppis, #costo, #tarea").removeClass('btn-primary').addClass('btn-secondary');
        $("#pro, #tar, #com, #cal, #ppi, #cos").prop('hidden', true);

    });

    $(document).ready(function () {
        $('#tabla-proyecto').DataTable({
            dom: 'frtp',
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.3/i18n/es-ES.json',
            },
        });
    });

    $(document).ready(function(){

        $('.input-daterange').datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            calendarWeeks : true,
            clearBtn: true,
            disableTouchKeyboard: true
        });

    });
</script>
@endsection