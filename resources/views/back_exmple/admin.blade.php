<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/jquery/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery/dataTables.jqueryui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery/rowReorder.jqueryui.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/navbar/home.png') }}">
    

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css')}}">
  <!-- Boostrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

  <title>@yield('title') | Administration</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('img/navbar/home.png')}}" alt="logo 102 103" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
      @auth
            <form action="{{ route('logout') }}" method="post">
                @csrf
                @method('delete')
                <button class="admin-button-logout">Se déconnecter</button>
            </form>
        @endauth
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('back789658.layouts.home') }}" class="brand-link">
      <img src="{{ asset('img/navbar/home.png')}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Administration</span>
    </a>

    <!-- Sidebar -->
    <!-- <div class="sidebar"> -->
      <!-- SidebarSearch Form -->
      <!--<div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
              <a href="{{ route('back789658.layouts.home') }}" class="nav-link  @if(request()->url() == url('back789658/article')) active @endif">
              
                <i class="fas fa-home nav-icon"></i>
                <p>Accueil </p>
              </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('back789658.page.index') }}" class="nav-link @if(request()->url() == url('back789658/article')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Toutes les pages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('back789658.page.form') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter une page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('back789658.template.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous les templates</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('back789658.template.form') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un templates</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Articles
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('back789658.article.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous les articles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('back789658.article.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un article</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('back789658.category.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Toutes les catégories</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-landmark"></i>
              <p>
                Formules
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('back789658.formule.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Toutes les formules</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('back789658.formule.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter une formule</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Offre d'emploi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('back789658.offer.index') }}" class="nav-link  @if(request()->url() == url('back789658/offer')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Toutes les offres</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{ route('back789658.offer.form') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter une offre</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('back789658.skill.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous les skills</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('back789658.profile.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous les profils</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('back789658.application.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Voir les candidatures</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-inbox"></i>
              <p>
                Contact
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('back789658.contact.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous les contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Collaborateurs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('back789658.collaborator.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous les collaborateurs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('back789658.collaborator.form') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un collaborateur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('back789658.partner.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous les partenaires</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('back789658.partner.form') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un partenaire</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-sliders-h nav-icon"></i>
              <p>
                Paramêtres
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('back789658.lang.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestion des langues</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('back789658.menu.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestion des menus</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/back789658">Accueil</a></li>
              @yield('breadcrumbs')
              <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @if(session('success'))
          <div class="alert alert-success">
            {{  session('success')  }}
          </div>
        @endif

        @if ($errors->any())
          <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
              {{ $error }}<br>
            @endforeach
          </div>
        @endif
        @yield('content')
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="https://unpkg.com/htmx.org@1.8.6"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/htmx.org@1.8.6/dist/htmx.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/nrpm0wjhi9e6lcvaxu8kw7obcfrnniqyyi17xwx1vp5fjz1u/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
     <!-- Jquery -->
    <script>
        tinymce.init({
            selector: '.tinymce-editor',
            height: 500, // hauteur de l'éditeur
            plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime table paste code help wordcount',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | removeformat | code', // barre d'outils à afficher
            images_upload_url: '/admin/article/uploadFromLocal', // URL de l'endpoint pour le téléchargement des images
            images_upload_handler: function (blobInfo, success, failure) {
              handleSectionPictureUpload(blobInfo.blob(), success, failure);
            },
        });

        tinymce.init({
            selector: '.simple-editor',
            height: 300, // hauteur de l'éditeur
            plugins: 'advlist autolink lists charmap  preview anchor searchreplace visualblocks code fullscreen insertdatetime table paste code help wordcount',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code', // barre d'outils à afficher
        });
    </script>
<script src="{{ asset('dist/js/adminlte.js')}}"></script>
<script src="{{ asset('js/jquery/jquery-3.7.0.js') }}"></script>
<script src="{{ asset('js/jquery/jquery-ui.js') }}"></script>
<script src="{{ asset('js/jquery/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/jquery/dataTables.jqueryui.min.js') }}"></script>
<script src="{{ asset('js/jquery/dataTables.rowReorder.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
