<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('home') }}">
    <i class="fa fa-home" style="font-size:24px"></i><span>TU PAIS S.A.</span>
    </a>
</li>
<li class="side-menus {{ Request::is('medicos*') ? 'active' : '' }}">

    <a class="nav-link" href="{{ route('medicos.index') }}"><i class="fa fa-user-md" style="font-size:20px;color:red"></i><span>Medicos</span></a>
</li>

<li class="side-menus {{ Request::is('servicios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('servicios.index') }}"><i class="fa fa-briefcase" style="font-size:20px;color:yellow"></i><span>Servicios</span></a>
</li>

<li class="side-menus {{ Request::is('colaboradors*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('colaboradors.index') }}"><i class="fa fa-male" style="font-size:20px;color:green"></i><span>Colaboradores</span></a>
</li>

<li class="side-menus {{ Request::is('reservacions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('reservacions.index') }}"><i class="	fa fa-calendar" style="font-size:20px;color:purple"></i><span>Reservaciones</span></a>
</li>

<li class="side-menus {{ Request::is('medicamentos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('medicamentos.index') }}"><i class="fa fa-medkit" style="font-size:20px;color:brown"></i><span>Medicamentos</span></a>
</li>

<li class="side-menus {{ Request::is('recetas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('recetas.index') }}"><i class="fa fa-heartbeat" style="font-size:20px;color:aqua"></i><span>Recetas</span></a>
</li>

<li class="side-menus {{ Request::is('encuestas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('encuestas.index') }}"><i class="fa fa-comment" style="font-size:20px;color:black"></i><span>Encuestas</span></a>
</li>

