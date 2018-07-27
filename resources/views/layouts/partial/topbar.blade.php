<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
<div class="container-fluid">
    <div class="navbar-wrapper">
    <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Tableau de bord</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
    <span class="sr-only">Toggle navigation</span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">person</i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Another Notification</a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <i class="material-icons">
                    power_settings_new
                </i>&nbsp;
                Logout
            </a>
            <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        </li>
        <li class="nav-item  ">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <i class="material-icons">power_settings_new</i>
                <p>Deconnexion</p>
            </a>
            <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                @csrf
            </form>
        </li>


    </ul>
    </div>
</div>
</nav>
<!-- End Navbar -->