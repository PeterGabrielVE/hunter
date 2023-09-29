<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
   
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
     
      <ul class="navbar-nav navbar-nav-left header-links">
          <li style="margin: 0">
            <a class="navbar-brand brand-logo" href="{{ url('/') }}">
                <img class="" src="{{ url('assets/images/hunter-logo.png') }}" alt="logo" width="200" height="150"/> 
            </a>
          </li>
        <li class="nav-item" style="padding-top:50px !important">
            <a class="nav-link text-center" href="#">
                <div class="flex-container text-center pt-4" style="font-size: 20px;">
                 <i class="mdi mdi-email-outline mt-4" style="font-size: 100px;font-weight:bold;"></i>
                <br>Mensajes
                </div>
              </a>
        </li>
        <li class="nav-item" style="padding-top:50px !important">
            <a class="nav-link text-center" href="#">
                <div class="flex-container text-center pt-4" style="font-size: 20px;">
                 <i class="mdi mdi-account-multiple mt-4" style="font-size: 100px;font-weight:bold;"></i>
                <br>Usuarios
                </div>
              </a>
        </li>
        <li class="nav-item" style="padding-top:50px !important">
            <a class="nav-link text-center" href="#">
                <div class="flex-container text-center pt-4" style="font-size: 20px;">
                 <i class="mdi mdi-chart-bar mt-4" style="font-size: 100px;font-weight:bold;"></i>
                <br>Estadísticas
                </div>
              </a>
        </li>
       
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        
        <li class="nav-item dropdown d-none d-xl-inline-block">
          <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false" style="margin-top:80px;">
           
            <img class="" src="{{ url('assets/images/faces/face8.jpg') }}" alt="Profile image"> </a>
            <span class="" style="font-size: 20px;">{{ Auth::user()->name }}</span>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
           
            <a class="dropdown-item mt-2"> Manage Accounts </a>
            <a class="dropdown-item"> Change Password </a>
            <a class="dropdown-item"> Check Inbox </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            Salir
             </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu icon-menu"></span>
      </button>
    </div>
  </nav>