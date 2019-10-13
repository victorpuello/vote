<ul class="nav nav-main">
    <li>
        <a class="nav-link {{ request()->is('/home') ? 'nav-active' : '' }}" href="{{route('home')}}">
            <i class="fas fa-home" aria-hidden="true"></i>
            <span>Escritorio</span>
        </a>
    </li>
    @admin
    <li class="nav-parent {{ request()->is('/users') ? 'nav-active' : '' }}">
        <a class="nav-link" href="#">
            <i class="fas fa-user" aria-hidden="true"></i>
            <span>Usuarios</span>
        </a>
        <ul class="nav nav-children">
            <li>
                <a class="nav-link" href="{{route('users.index')}}">
                    Ver usuarios
                </a>
            </li>
        </ul>
    </li>
    @endadmin
    <li class="nav-parent {{ request()->is('/leaders') ? 'nav-active' : '' }}">
        <a class="nav-link" href="#">
            <i class="fas fa-walking" aria-hidden="true"></i>
            <span>Lideres</span>
        </a>
        <ul class="nav nav-children">
            <li>
                <a class="nav-link" href="{{route('leaders.index')}}">
                    Ver lideres
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-parent {{ request()->is('/voters') ? 'nav-active' : '' }}">
        <a class="nav-link" href="#">
            <i class="fas fa-restroom" aria-hidden="true"></i>
            <span>Votantes</span>
        </a>
        <ul class="nav nav-children">
            <li>
                <a class="nav-link" href="{{route('voters.index')}}">
                    Ver votantes
                </a>
            </li>
        </ul>
    </li>
    @admin
    <li class="nav-parent {{ request()->is('/campain') ? 'nav-active' : '' }}">
        <a class="nav-link" href="#">
            <i class="fas fa-bullhorn" aria-hidden="true"></i>
            <span>Campaña</span>
        </a>
        <ul class="nav nav-children">
            <li>
                <a class="nav-link" href="{{route('points.index')}}">
                    <i class="fas fa-box" aria-hidden="true"></i>
                    <span>Puestos</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('sectors.index')}}">
                    <i class="fas fa-map-marked-alt" aria-hidden="true"></i>
                    <span>Sectores</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('message.index')}}">
                    <i class="fas fa-envelope" aria-hidden="true"></i>
                    <span>Mensajes</span>
                </a>
            </li>
        </ul>
        <a class="nav-link" href="{{route('config')}}">
            <i class="fas fa-tools" aria-hidden="true"></i>
            <span>Configuración</span>
        </a>
    </li>
    @endadmin
{{--    <li class="nav-parent {{ request()->is('/reports') ? 'nav-active' : '' }}">--}}
{{--        <a class="nav-link" href="#">--}}
{{--            <i class="fas fa-print" aria-hidden="true"></i>--}}
{{--            <span>Reportes</span>--}}
{{--        </a>--}}
{{--        <ul class="nav nav-children">--}}
{{--            <li>--}}
{{--                <a class="nav-link" href="{{route('reports.index')}}">--}}
{{--                    Reportes--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </li>--}}
</ul>
