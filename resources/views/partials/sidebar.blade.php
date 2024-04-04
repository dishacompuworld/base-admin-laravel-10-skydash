<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#servers" aria-expanded="false" aria-controls="servers">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Servers</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="servers">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('server.create')}}">Add New Server</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('server.index')}}">View Servers</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#stats" aria-expanded="false" aria-controls="stats">
          <i class="icon-ban menu-icon"></i>
          <span class="menu-title">Server Stats</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="stats">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('stats.index')}}"> Server Stats </a></li>
          </ul>
        </div>
      </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#microtik" aria-expanded="false" aria-controls="microtik">
          <i class="icon-columns menu-icon"></i>
          <span class="menu-title">Microtik</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="microtik">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('pppoe.active')}}">Active Users</a></li>
          </ul>
        </div>
      </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
        <i class="icon-columns menu-icon"></i>
        <span class="menu-title">Form elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="forms">Basic Elements</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <i class="icon-bar-graph menu-icon"></i>
        <span class="menu-title">Charts</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="chart">ChartJs</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
        <i class="icon-grid-2 menu-icon"></i>
        <span class="menu-title">Tables</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="tables">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="table">Basic table</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
        <i class="icon-contract menu-icon"></i>
        <span class="menu-title">Icons</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="icons">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="icons">Mdi icons</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="login"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="register"> Register </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
        <i class="icon-ban menu-icon"></i>
        <span class="menu-title">Error pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="error">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="erro404"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="erro500"> 500 </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://github.com/dishacompuworld" target="_blank">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Author</span>
      </a>
    </li>
  </ul>
</nav>
