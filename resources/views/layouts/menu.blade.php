<style>

    /*Mis Estilos*/
    .nav-link-sidebar{
        margin-top: 10px !important;
    }

</style>

<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link nav-link-sidebar" href="/home">
        <i class=" fas fa-house-user"></i><span>Inicio</span>
    </a>
    <a class="nav-link nav-link-sidebar" href="/roles">
        <i class=" fas fa-user-check"></i><span>Roles</span>
    </a>
    <a class="nav-link nav-link-sidebar" href="/usuarios">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    <a class="nav-link nav-link-sidebar" href="/categorias">
        <i class=" fas fa-shapes"></i><span>Categorías</span>
    </a>
    <a class="nav-link nav-link-sidebar" href="/productos">
        <i class=" fas fa-star"></i><span>Productos</span>
    </a>
    <a class="nav-link nav-link-sidebar" href="/solicitudes">
        <i class=" fas fa-envelope"></i><span>Solicitudes</span>
    </a>
</li>
