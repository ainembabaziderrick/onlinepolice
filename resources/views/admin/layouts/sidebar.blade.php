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
      <a class="nav-link @if(Request::segment(2) == 'crimes') @else collapsed @endif " href="{{ url('admin/crimes')}}">
        <i class="bi bi-person-x-fill"></i>
        <span>Crimes</span>
      </a>
    </li><!-- End Crimes Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'cases') @else collapsed @endif " href="{{ url('admin/cases')}}">
        <i class="bi bi-window"></i>
        <span>Cases</span>
      </a>
    </li><!-- End Cases Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'sliders') @else collapsed @endif " href="{{ url('admin/sliders')}}">
        <i class="bi bi-window-sidebar"></i>
        <span>Sliders</span>
      </a>
    </li><!-- End Cases Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'welcome') @else collapsed @endif " href="{{ url('admin/welcome')}}">
        <i class="bi bi-chat-right-text-fill"></i>
        <span>Welcome Message</span>
      </a>
    </li><!-- End Welcome Message Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'news') @else collapsed @endif " href="{{ url('admin/news')}}">
        <i class="bi bi-newspaper"></i>
        <span>News </span>
      </a>
    </li><!-- End Cases Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'wanted') @else collapsed @endif " href="{{ url('admin/wanted')}}">
        <i class="bi bi-person-square"></i>
        <span>Wanted Criminals</span>
      </a>
    </li><!-- End Wanted Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'lost') @else collapsed @endif " href="{{ url('admin/lost')}}">
        <i class="bi bi-phone"></i>
        <span>Lost & Found </span>
      </a>
    </li><!-- End Lost & Found Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'accidents') @else collapsed @endif "
        href="{{ url('admin/accidents')}}">
        <i class="bi bi-triangle-fill"></i>
        <span>Accidents</span>
      </a>
    </li><!-- End Accidents Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'suspects') @else collapsed @endif "
        href="{{ url('admin/suspects')}}">
        <i class="bi bi-exclamation-circle"></i>
        <span>Suspects</span>
      </a>
    </li><!-- End Suspects Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'wanted_cars') @else collapsed @endif "
        href="{{ url('admin/wanted_cars')}}">
        <i class="bi bi-cart2"></i>
        <span>Wanted Cars</span>
      </a>
    </li><!-- End Wanted Cars Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'stolen_cars') @else collapsed @endif "
        href="{{ url('admin/stolen_cars')}}">
        <i class="bi bi-cart-x"></i>
        <span>Stolen Cars</span>
      </a>
    </li><!-- End Stolen Cars Nav -->


    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'user') @else collapsed @endif " href="{{ url('admin/user')}}">
        <i class="bi bi-people-fill"></i>
        <span>Users </span>
      </a>
    </li><!-- End Users Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'logout') @else collapsed @endif " href="{{ url('logout')}}">
        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
      </a>
    </li><!-- End My Account Nav -->







</aside><!-- End Sidebar-->