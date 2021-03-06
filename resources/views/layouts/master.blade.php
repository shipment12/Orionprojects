<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Orion Tech Resources | Admin</title>

  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body class="sidebar-mini sidebar-collapse" style="height: auto;">

<div class="wrapper" id="app">




  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-black navbar-inverse" style="
    background-color: darkslategrey;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item" style="float-left;">
        <a class="nav-link" data-slide="true" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>
    




    <!-- SEARCH FORM -->
    
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" @keyup="searchIt" v-model="search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" @click="searchIt">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    


    

   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="../img/orion_tech.png" alt="orion" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-size: large;">Orion Tech Resources</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
         
          <img src="img/profile/{{Auth::user()->photo}}" class="img-circle elevation-2" alt="User Image">
         
          
        </div>
        <div class="info">
          <a href="#" class="d-block"style="font-size: large;">
          {{ Auth::user()->type }}
          </a>
          <a href="#" class="d-block">
          {{ Auth::user()->name }}
          </a>


          <hr>
          
          @can('isAdmin')
          <a href="#" class="d-block">
            Total No of Users:-<span class="w3-badge w3-red"> {{(Auth::user()->count() )}}</span>
          </a>
          @endcan
         
        </div>
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->



        <li class="nav-item">
             <router-link to='/dashboard' class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
               Dashboard
              
            </p>
            </router-link>
          </li>  


         @can('isAdmin')

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <router-link to="/users" class="nav-link">
                  <i class="fa fa-users"></i>
                  <p>Users</p>
                </router-link>
              </li>
          
            </ul>
          </li>

          @endcan

          @can('isAdmin')
          <li class="nav-item">
             <router-link to='/developer' class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
               <p>
               Developer
              
            </p>
            </router-link>
          </li>  
          @endcan

          <li class="nav-item">
             <router-link to='/profile' class="nav-link">
              <i class="nav-icon fas fa-user"></i>
               <p>
               Profile
              
            </p>
            </router-link>
          </li>  

          


          <a href="#" class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">

                   <i class="nav-icon fa fa-power-off"></i>
                     {{ __('Logout') }}
         </a>
                                    

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
          
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="min-height: 285px;">
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <router-view></router-view>

        <vue-progress-bar></vue-progress-bar>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-header -->

   
  </div>
  <!-- /.content-wrapper -->
  @auth
  <script>
   window.user = @json(auth()->user())
  </script>
 

  @endauth


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright © 2019-2020 <a href="#">Orion Tech Resources</a>.</strong> All rights reserved.
  </footer>
<div id="sidebar-overlay"></div></div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<script src='/js/app.js'></script>


</body>





