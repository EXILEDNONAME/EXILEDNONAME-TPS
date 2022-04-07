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

<li class="menu-item {{ (request()->is('dashboard/dummy/tables*')) ? 'menu-item-submenu menu-item-here menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
  <a class="menu-link menu-toggle">
    <i class="menu-icon fas fa-table"></i>
    <span class="menu-text"> Peserta </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu" style="">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item {{ (request()->is('dashboard/dummy/tables/generals*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
        <a class="menu-link" onclick="location.href='/dashboard/dummy/tables/generals';">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Tambah Peserta </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/dummy/tables/generals*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
        <a class="menu-link" onclick="location.href='/dashboard/dummy/tables/generals';">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Semua Peserta </span>
        </a>
      </li>
    </ul>
  </div>
</li>

<li class="menu-item {{ (request()->is('dashboard/statistics*')) ? 'menu-item-active' : '' }}">
  <a class="menu-link" onclick="location.href='/dashboard/statistics';">
    <i class="menu-icon fas fa-bug"></i>
    <span class="menu-text"> Seleksi </span>
  </a>
</li>
