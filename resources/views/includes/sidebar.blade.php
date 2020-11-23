<div class="sidebar" data-image="{{ asset('assets/img/sidebar-5.jpg')}}">
  <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
  <div class="sidebar-wrapper">
      <div class="logo">
          <a href="#" class="simple-text">
              IKET <small>(IT Ticketing)</small>
          </a>
      </div>
      <ul class="nav">
          <li class="nav-item {{ request()->is('/') || 
            request()->is('t') || 
            request()->is('m') ? 
            'active' : '' }}">
              <a class="nav-link" href="{{ route('user.dashboard') }}">
                  <i class="nc-icon nc-chart-pie-35"></i>
                  <p>Dashboard</p>
              </a>
          </li>

          @if (Auth::user()->role == 'USER')
            <li class="nav-item {{ request()->is('request') ? 'active' : '' }}">
              <a class="nav-link " href="{{ route('user.request') }}">
                  <i class="nc-icon nc-bullet-list-67"></i>
                  <p>List Request</p>
              </a>
            </li>    
          @endif
          
          @if (Auth::user()->role == 'TECHNICIAN')
            <li class="nav-item {{ request()->is('t/f-up-request') ? 'active' : '' }}">
              <a class="nav-link " href="{{ route('technician.f-up-request') }}">
                  <i class="nc-icon nc-bullet-list-67"></i>
                  <p>L. Req. Ditindaklanjut</p>
              </a>
            </li>

            <hr>

            <li class="nav-item {{ request()->is('t/break-type') ? 'active' : '' }}">
              <a class="nav-link " href="{{ route('break-type.index') }}">
                  <i class="nc-icon nc-fav-remove"></i>
                  <p>List Jenis Kerusakan</p>
              </a>
            </li>

            <li class="nav-item {{ request()->is('t/computer') ? 'active' : '' }}">
              <a class="nav-link " href="{{ route('computer.index') }}">
                  <i class="nc-icon nc-tv-2"></i>
                  <p>List Komputer</p>
              </a>
            </li>

            <li class="nav-item {{ request()->is('t/department') ? 'active' : '' }}">
              <a class="nav-link " href="{{ route('department.index') }}">
                  <i class="nc-icon nc-vector"></i>
                  <p>List Departemen</p>
              </a>
            </li>
          @endif

      </ul>
  </div>
</div>