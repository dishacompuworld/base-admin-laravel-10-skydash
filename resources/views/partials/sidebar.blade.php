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
      <a class="nav-link" href="https://github.com/dishacompuworld" target="_blank">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Author</span>
      </a>
    </li>
  </ul>
</nav>
