<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{{ route('usuarios.index') }}"><i class="fa fa-edit"></i><span>Usuarios</span></a>
</li>

<li class="{{ Request::is('mascotas*') ? 'active' : '' }}">
    <a href="{{ route('mascotas.index') }}"><i class="fa fa-edit"></i><span>Mascotas</span></a>
</li>

<li class="{{ Request::is('historials*') ? 'active' : '' }}">
    <a href="{{ route('historials.index') }}"><i class="fa fa-edit"></i><span>Historial</span></a>
</li>

<li class="{{ Request::is('razas*') ? 'active' : '' }}">
    <a href="{{ route('razas.index') }}"><i class="fa fa-edit"></i><span>Razas</span></a>
</li>

<li class="{{ Request::is('servicios*') ? 'active' : '' }}">
    <a href="{{ route('servicios.index') }}"><i class="fa fa-edit"></i><span>Servicios</span></a>
</li>

<li class="{{ Request::is('citas*') ? 'active' : '' }}">
    <a href="{{ route('citas.index') }}"><i class="fa fa-edit"></i><span>Citas</span></a>
</li>

<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{{ route('productos.index') }}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

