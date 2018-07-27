<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo">
      <a href="{{ route('welcome') }}" class="simple-text logo-normal">
        Amina Kitchen
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{ Request::is('admin/dashboard*') ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="material-icons">dashboard</i>
            <p>Tableau de bord</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('admin/slider*') ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('slider.index')}}">
            <i class="material-icons">slideshow</i>
            <p>Slides</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('admin/category*') ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('category.index')}}">
            <i class="material-icons">content_paste</i>
            <p>Categories</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('admin/item*') ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('item.index')}}">
            <i class="material-icons">library_books</i>
            <p>Produits</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./icons.html">
            <i class="material-icons">bubble_chart</i>
            <p>Icons</p>
          </a>
        </li>
      </ul>
    </div>
  </div>