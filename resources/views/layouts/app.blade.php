{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Orientation.Key') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('vendor/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/jquery-steps/jquery.steps.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/style.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="navbar-brand">
                   <img src="{{asset('vendors/images/logo-orc-annime.png')}}" alt="">
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn" ><a class="nav-link">{{ __('home') }}</a></button>
                                </form>
                            </li>
                            @if (!Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif
                            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                            @else
                            <li>
                                <a class="image">
                                    <span>
                                        <img style="height: 50px; width:52px;border-radius:25px;  " src="{{asset('vendors/images/'.auth()->user()->avatars)}}" alt="">
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    @can('profil-utilisateur')
                                        <a href="" class="dropdown-item">Profil</a>
                                    @endcan
                                    @can('management-users')
                                    <a href="{{route('home.index')}}" class="dropdown-item">Gestion des utilisateurs</a>
                                    @endcan
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}































<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>App Calender - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{('app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/calendars/fullcalendar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/calendars/extensions/daygrid.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/calendars/extensions/timegrid.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
    <!-- END: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('msfmultiselect.css')}}"/>
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/calendars/fullcalendar.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <!-- END: Custom CSS-->    
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/data-list-view.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END: Custom CSS-->
    
    
    

    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/ag-grid/ag-grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/ag-grid/ag-theme-material.css')}}">
    <!-- END: Vendor CSS-->

    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/style.css')}}">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-user.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/aggrid.css')}}">
    

    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/card-analytics.css')}}">

    
    <link rel="stylesheet" type="text/css" href="{{asset('src/example-styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('demo-styles.css')}}">




     <link href="{{asset('assetss/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assetss/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assetss/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assetss/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assetss/vendor/owl.carousel/assetss/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assetss/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assetss/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assetss/css/style.css')}}" rel="stylesheet">
    <!-- =======================================================
  * Template Name: BizLand - v1.2.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<style>
      label{
          float: left;
      }
      a:link{
          text-decoration: none;
      }
.component-fade-enter-active, .component-fade-leave-active {
  transition: opacity .3s ease;
}
.component-fade-enter, .component-fade-leave-to
/* .component-fade-leave-active avant la 2.1.8 */ {
  opacity: 0;
}
.component1-fade-enter-active, .component-fade-leave-active {
  transition: opacity .3s ease;
}
.component1-fade-enter, .component-fade-leave-to
/* .component-fade-leave-active avant la 2.1.8 */ {
  opacity: 0;
}
.component2-fade-enter-active, .component-fade-leave-active {
  transition: opacity .3s ease;
}
.component2-fade-enter, .component-fade-leave-to
/* .component-fade-leave-active avant la 2.1.8 */ {
  opacity: 0;
}
  </style>
</head>

<body>
    @include('layouts.nav')
        @yield('content')
    @include('layouts.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <!-- Vendor JS Files -->
        <!-- BEGIN: Vendor JS-->
        <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
        <!-- BEGIN Vendor JS-->
    
        <!-- BEGIN: Page Vendor JS-->
        <script src="{{asset('app-assets/vendors/js/extensions/moment.min.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/calendar/extensions/daygrid.min.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/calendar/extensions/timegrid.min.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/calendar/extensions/interactions.min.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
        <!-- END: Page Vendor JS-->
    
        <!-- BEGIN: Theme JS-->
        <script src="{{asset('app-assets/js/core/app-menu.js')}}"></script>
        <script src="{{asset('app-assets/js/core/app.js')}}"></script>
        <script src="{{asset('app-assets/js/scripts/components.js')}}"></script>
        <!-- END: Theme JS-->
    
        <!-- BEGIN: Page Vendor JS-->
        <script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
        <!-- END: Page Vendor JS-->
    
        <!-- BEGIN: Theme JS-->
        <script src="{{asset('app-assets/vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js')}}"></script>
       
        <!-- END: Theme JS-->
    
        <!-- BEGIN: Page JS-->
        <script src="{{asset('app-assets/js/scripts/pages/app-user.js')}}"></script>
        <script src="{{asset('app-assets/js/scripts/navs/navs.js')}}"></script>
        <!-- BEGIN: Page JS-->
        <script src="{{asset('app-assets/js/scripts/extensions/fullcalendar.js')}}"></script>
      
    
    
    
        
        <!-- BEGIN: Page Vendor JS-->
        <script src="{{asset('app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
        <!-- END: Page Vendor JS-->
        <script src="{{asset('msfmultiselect.js')}}"></script>
        
    
    
    
    
    
    
        <script src="{{asset('app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
      
        <script src="{{asset('app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
        
        <script src="{{asset('app-assets/js/scripts/datatables/datatable.js')}}"></script>
     
    
    
    
    
    
    
        <script src="{{asset('assetss/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assetss/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assetss/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('assetss/vendor/php-email-form/validate.js')}}"></script>
        <script src="{{asset('assetss/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assetss/vendor/counterup/counterup.min.js')}}"></script>
        <script src="{{asset('assetss/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assetss/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assetss/vendor/venobox/venobox.min.js')}}"></script>
        <script src="{{asset('assetss/vendor/aos/aos.js')}}"></script>
      
        <!-- Template Main JS File -->
        <script src="{{asset('assetss/js/main.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>
        <script type="text/javascript"  src="{{asset('FormWizard/js/main.js')}}"></script>
        <script type="text/javascript"  src="{{asset('app-assets/FormWizard.js')}}"></script>
        <!-- BEGIN: Page JS-- ici active>
        {{-- <script src="{{asset('app-assets/js/scripts/datatables/datatable.js')}}"></script> --}}
        END: Page JS-->
        {{-- <script type="text/javascript" src="{{asset('test/lib/jquery-2.2.4.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('src/jquery.multi-select.js')}}"></script> --}}
    
        <script type="text/javascript">
          $(function(){
              $('#people').multiSelect();
              $('#ice-cream').multiSelect();
              $('#line-wrap-example').multiSelect({
                  positionMenuWithin: $('.position-menu-within')
              });
              $('#categories').multiSelect({
                  noneText: 'All categories',
                  presets: [
                      {
                          name: 'All categories',
                          all: true
                      },
                      {
                          name: 'My categories',
                          options: ['a', 'c']
                      }
                  ]
              });
              $('#modal-example').multiSelect({
                  'modalHTML': '<div class="multi-select-modal">'
              });
          });
    document.querySelector("html").classList.add('js');
    
    // initialisation des variables
    var fileInput = document.querySelector( ".input-file" ),
        button = document.querySelector( ".input-file-trigger" ),
        the_return = document.querySelector(".file-return");
    
    // action lorsque la "barre d'espace" ou "Entrée" est pressée
    button.addEventListener( "keydown", function( event ) {
        if ( event.keyCode == 13 || event.keyCode == 32 ) {
            fileInput.focus();
        }
    });
    // action lorsque le label est cliqué
    button.addEventListener( "click", function( event ) {
        fileInput.focus();
        return false;
    });
    
    // affiche un retour visuel dès que input:file change
    fileInput.addEventListener( "change", function( event ) {
        the_return.innerHTML = this.value;
    });
    //filiere
    var select = new MSFmultiSelect(
      document.querySelector('#multiselect'),
      {
        theme: 'theme1',  selectAll: true,
        searchBox: true,
        width: 250,
        height: 45,
        onChange:function(checked, value, instance) {
          //console.log(checked, value, instance);
        },
        //appendTo: '#myselect',
        //readOnly:true,
        placeholder: 'filiéres',
        //autoHide: false,
        afterSelectAll:function(checked, values, instance) {
          //console.log(checked, values, instance);
        }
      }
    );
    var select2 = new MSFmultiSelect(
      document.querySelector('#multiselect2'),
      {
        theme: 'theme2',
        selectAll: true,
        searchBox: true,
        width: '250px',
        height: '145px',
        // readOnly: true,
        onChange:function(checked, value, instance) {
          // console.log(checked, value, instance);
        },
        //appendTo: '#myselect2',
        //readOnly:true,
        //autoHide: false
      }
    );
    
    
</body>
  
</html>


