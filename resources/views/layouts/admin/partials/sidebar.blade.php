<style>
  .botao{
    background-color:transparent; border:none; width:100% ;
    color:#c2c7d0;

  }
  .botao:hover{
    /* background-color:blue; */
    color:darkgrey;
  }
  .form{


  }
  .form:hover{

  }

</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AbnasirMotors</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="#" class="d-block" class="">{{ucwords(Auth::user()->name)}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Users
                    
                  </p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('province.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-map-marked-alt"></i>
                  <p>
                    Provinces
                    
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('car.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-car"></i>
                  <p>
                    Cars
                    
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.car_image.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-camera"></i>
                  <p>
                    Car Images
                    
                  </p>
                </a>
              </li>



          {{-- -----------------------------Marcado para emails etc------------------------------------- --}}
          <li class="nav-header"></li>
          
          
          <li class="nav-item">
            <form action="{{route('logout')}}" method="post" class="nav-link form" style="border:none; ">
              @csrf
              <button href="pages/gallery.html" class="nav-link botao text-left text-white p-0" >
                <i class="nav-icon fas fa-power-off text-danger " style="font-size:150%;"></i><span class="ml-1">Logout</span>  
                
              </button>
            </form>
          </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>