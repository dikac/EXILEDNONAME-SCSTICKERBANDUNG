<li class="menu-section">
  <h4 class="menu-text"> MAIN </h4>
  <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item {{ (request()->is('dashboard/banners')) ? 'menu-item-active' : '' }}"><a href="/dashboard/banners" class="menu-link"><i class="menu-icon fas fa-list-ul"></i><span class="menu-text"> Banners </span></a></li>
<li class="menu-item {{ (request()->is('dashboard/products')) ? 'menu-item-active' : '' }}"><a href="/dashboard/products" class="menu-link"><i class="menu-icon fas fa-list-ul"></i><span class="menu-text"> Products </span></a></li>
<li class="menu-item {{ (request()->is('dashboard/sliders')) ? 'menu-item-active' : '' }}"><a href="/dashboard/sliders" class="menu-link"><i class="menu-icon fas fas fa-list-ul"></i><span class="menu-text"> Sliders </span></a></li>
