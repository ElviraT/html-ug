<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Calidad</title>

        <!-- Fonts -->
        <link 
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" 
            rel="stylesheet">

        <!-- Styles -->     
        <link 
            rel="stylesheet" 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.css" 
            crossorigin="anonymous">
        <link 
            rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
            integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" 
            crossorigin="anonymous" 
            referrerpolicy="no-referrer" />
        <!-- Latest compiled and minified CSS -->
        <link 
            rel="stylesheet" 
            href="{{ asset('css/bootstrap-select.min.css') }}"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">


        @yield('css')
    </head>
    <body>
        <div class="container-fluid p-3">
            @yield('content')
        </div>        
    </body>
    <script
        src="https://code.jquery.com/jquery-3.6.3.js"
        crossorigin="anonymous"></script>  
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"  
            crossorigin="anonymous"></script>     
        <!-- Latest compiled and minified JavaScript -->
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js">
        </script>
  
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script>
          $(document).ready(function () {
                $(function () {
                    $('.selectpicker').selectpicker();
                });
            });
           
        </script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
        @yield('modal')    
        @yield('js')
</html>
