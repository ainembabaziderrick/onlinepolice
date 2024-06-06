<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'dashboard') @else collapsed @endif "
        href="{{ url('admin/dashboard')}}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'cases') @else collapsed @endif " href="{{ url('police/cases')}}">
        <i class="bi bi-window"></i>
        <span>Report Case</span>
      </a>
    </li><!-- End Cases Nav -->


    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'lost') @else collapsed @endif " href="{{ url('police/lost')}}">
        <i class="bi bi-phone"></i>
        <span>Lost & Found</span>
      </a>
    </li><!-- End Cases Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'accidents') @else collapsed @endif "
        href="{{ url('police/accidents')}}">
        <i class="bi bi-triangle-fill"></i>
        <span>Accidents</span>
      </a>
    </li><!-- End Accidents Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'wanted') @else collapsed @endif " href="{{ url('police/wanted')}}">
        <i class="bi bi-person-square"></i>
        <span>Wanted </span>
      </a>
    </li><!-- End Wanted Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'suspects') @else collapsed @endif "
        href="{{ url('police/suspects')}}">
        <i class="bi bi-exclamation-circle"></i>
        <span>Suspects</span>
      </a>
    </li><!-- End Suspects Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'wanted_cars') @else collapsed @endif "
        href="{{ url('police/wanted_cars')}}">
        <i class="bi bi-cart2"></i>
        <span>Wanted Cars</span>
      </a>
    </li><!-- End Wanted Cars Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'stolen_cars') @else collapsed @endif "
        href="{{ url('police/stolen_cars')}}">
        <i class="bi bi-cart-x"></i>
        <span>Stolen Cars</span>
      </a>
    </li><!-- End Stolen Cars Nav -->


    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'logout') @else collapsed @endif " href="{{ url('logout')}}">
        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
      </a>
    </li><!-- End My Account Nav -->







</aside><!-- End Sidebar-->