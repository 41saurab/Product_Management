 <div class="main-sidebar sidebar-style-2">
     <aside id="sidebar-wrapper">
         <div class="sidebar-brand">
             <a href="{{ route('category.create') }}"> <img alt="image" src="/assets/img/logo.png" class="header-logo" /> <span class="logo-name">Otika</span>
             </a>
         </div>
         <ul class="sidebar-menu">
             <li class="menu-header">Main</li>
             <li class="dropdown active">
                 <a href="{{ route('category.create') }}" class="nav-link"><i data-feather="monitor"></i><span>Manage</span></a>
             </li>
             <li class="dropdown">
                 <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Category</span></a>
                 <ul class="dropdown-menu">
                     <li><a class="nav-link" href="{{ route('category.create') }}">Add Category</a></li>
                     <li><a class="nav-link" href="{{ route('category.index') }}">Category List</a></li>
                 </ul>
             </li>
             <li class="dropdown">
                 <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Product</span></a>
                 <ul class="dropdown-menu">
                     <li><a class="nav-link" href="{{ route('product.create') }}">Add Product</a></li>
                     <li><a class="nav-link" href="{{ route('product.index') }}">Product List</a></li>
                 </ul>
             </li>
         </ul>
     </aside>
 </div>