<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
       <div class="nav">
         <div class="sb-sidenav-menu-heading">Dashboard</div>
         <li class="nav-item dropdown">
            <a href="{{ route('dashboard.index') }}" class="nav-link">
               <i class="fas fa-fire"></i>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
          <div class="sb-sidenav-menu-heading">Master</div>
          <li class="nav-item dropdown" href="{{ route('footers.index') }}">
            <a href="{{ route('footers.index') }}" class="nav-link">
               <i class="fas fa-tags"></i>
               <span class="ml-3">Menu Footer</span>
            </a>
         </li>
         <li class="nav-item dropdown" href="{{ route('foods.index') }}">
            <a href="{{ route('foods.index') }}" class="nav-link">
               <i class="fas fa-tags"></i>
               <span class="ml-3">Menu Makanan</span>
            </a>
         </li>
       </div>
    </div>
    <div class="sb-sidenav-footer">
       <div class="small">
         Welcome
       </div>
       {{ Auth::user()->name }}
    </div>
 </nav>
 