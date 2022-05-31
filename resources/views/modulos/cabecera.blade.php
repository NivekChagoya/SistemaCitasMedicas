<header class="main-header">
    <a href="{{url('Inicio')}}" class="logo">
        <span class="logo-mini">
            <b>C M</b>
        </span>
        <span class="logo-lg">
            <b>CLINICA MEDICA </b>
        </span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="side bar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ auth()->user()->name }}
                        <span class="hidden-xs"></span>
                    </a>
                </li>
            </ul>
            <ul class="dropdown-menu">
                <li class="user-footer">
                    <div class="pull-left">
                        <a href="" class="btn btn-primary btn-flat">Mis Datos</a>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit;" class="btn btn-danger btn-flat">Salir</a>
                    </div>
                    <form method="POST" id="logout-form" action="{{route('logout')}}">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>