<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        
        <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       <![endif]-->
               
        <title>{{ $title or 'Área Administrativa' }}</title>
        
        
        
        <!--  <Style type='text/css' >body
            {background-color:rgb(0,0,0);
            background-image:url(http://www.zingerbugimages.com/backgrounds/woodland_camouflage.jpg);
            background-position:top left;background-repeat:repeat;background-attachment:fixed;}</Style>
        -->
        
        
        
        <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css" rel="stylesheet">
        
        <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" /> 
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        @stack('styles')
    </head>
    <body>
        
        {{--
        <div style="background-color: #8a1818; height: 150px">
            <div class="container text-center logo">
                <img alt="Logo" src="{{ asset('uploads/agencia/logotipo.png') }}" />
            </div>
        </div>
        --}}
        
        
        {{-- Inclui o menu  --}}
        @include('template.menu')
        
        
        <div class="container-fluid back">
            <div class="container text-center">
                <h4 class="page-head-line titulo"> @yield('main_title') </h4>
            </div>
        </div>
        
        <div class="content-wrapper">
            <div class="container">
                
                @yield('content')
                
            </div>
        </div>
        
      
        <footer>
            <div class="container">
                <div class="text-center">
                    <span style='font-size: 14px'>Desenvolvido por Rander Carlos. Copyright © {{ date('Y') }}</span> 
                </div>
            </div>
        </footer>
        
        <script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.1.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
        <script type="text/javascript">

            $(document).ready(function() {
                
            	$("#menu-home").addClass('menu-top-active');

                
            	$('.dropdown').hover(function () {
                    $(this).addClass('open');
                },
                function () {
                    $(this).removeClass('open');
                });

                
            	// desabilita os botões de submit após o primeiro click
            	$('form').submit(function() {
    			    $("button[type='submit']", this).val("Carregando...").attr('disabled', true);
    			 
    			    return true;
    		    });
            			                
            });

        </script>
        
        @stack('scripts')
        
    </body>
</html>