<li class="menu-section">
  <h5 class="menu-text"> TPS </h5>
  <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>

<li class="menu-item {{ (request()->is('dashboard/tps/customers*')) ? 'menu-item-active' : '' }}">
  <a class="menu-link" onclick="location.href='/dashboard/tps/customers';">
    <i class="menu-icon fas fa-book-open"></i>
    <span class="menu-text"> Customer </span>
  </a>
</li>
