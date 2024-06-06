








 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='dashboard') @else collapsed @endif " href="{{ url('admin/dashboard')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

   <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='cases') @else collapsed @endif " href="{{ url('citizen/cases/add')}}">
      <i class="bi bi-window"></i>
      <span>Report Case</span>
    </a>
  </li><!-- End Cases Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='letter') @else collapsed @endif " href="{{ url('citizen/letter/add')}}">
      <i class="bi bi-filter-square"></i>
      <span>Download Letter</span>
    </a>
  </li><!-- End Cases Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='lost') @else collapsed @endif " href="{{ url('citizen/lost')}}">
      <i class="bi bi-phone"></i>
      <span>Lost & Found</span>
    </a>
  </li><!-- End Cases Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='accidents') @else collapsed @endif " href="{{ url('citizen/accidents')}}">
      <i class="bi bi-triangle-fill"></i>
      <span>Accidents</span>
    </a>
  </li><!-- End Accidents Nav -->


  


  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)=='logout') @else collapsed @endif " href="{{ url('logout')}}">
      <i class="bi bi-box-arrow-right"></i>
      <span>Logout</span>
    </a>
  </li><!-- End My Account Nav -->



 

 

</aside><!-- End Sidebar-->
