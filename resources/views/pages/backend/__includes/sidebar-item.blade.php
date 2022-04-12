<li class="menu-section">
  <h5 class="menu-text"> TPS </h5>
  <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item {{ (request()->is('dashboard/tps/location*')) ? 'menu-item-submenu menu-item-here menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
  <a class="menu-link menu-toggle">
    <i class="menu-icon fas fa-table"></i>
    <span class="menu-text"> Location </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu" style="">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item {{ (request()->is('dashboard/tps/location/areas*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
        <a class="menu-link" onclick="location.href='/dashboard/tps/location/areas';">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Areas </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/tps/location/districts*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
        <a class="menu-link" onclick="location.href='/dashboard/tps/location/districts';">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Districts </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/tps/location/villages*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
        <a class="menu-link" onclick="location.href='/dashboard/tps/location/villages';">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Villages </span>
        </a>
      </li>
    </ul>
  </div>
</li>

<li class="menu-item {{ (request()->is('dashboard/tps/participants*')) ? 'menu-item-submenu menu-item-here menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
  <a class="menu-link menu-toggle">
    <i class="menu-icon fas fa-table"></i>
    <span class="menu-text"> Participants </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu" style="">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item {{ (request()->is('dashboard/tps/participants/create*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
        <a class="menu-link" onclick="location.href='/dashboard/tps/participants/create';">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Create </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/tps/participants*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
        <a class="menu-link" onclick="location.href='/dashboard/tps/participants';">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> All Participants </span>
        </a>
      </li>
    </ul>
  </div>
</li>

<li class="menu-item {{ (request()->is('dashboard/tps/selections*')) ? 'menu-item-active' : '' }}">
  <a class="menu-link" onclick="location.href='/dashboard/tps/selections';">
    <i class="menu-icon fas fa-bug"></i>
    <span class="menu-text"> Selections </span>
  </a>
</li>
