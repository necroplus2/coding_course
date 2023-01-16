<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <h2>Irwan Course</h2>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="{{ Request::is('dashboard') ? 'active has-sub' : '' }}">
                    <a href="/dashboard">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="{{ Request::is('dashboard/category*') ? 'active has-sub' : '' }}">
                    <a href="/dashboard/category">
                        <i class="fas fa-chart-bar"></i>Kategori</a>
                </li>
                <li class="{{ Request::is('dashboard/module*') ? 'active has-sub' : '' }}">
                    <a href="/dashboard/module">
                        <i class="fas fa-table"></i>Kelas</a>
                </li>
                <li class="{{ Request::is('dashboard/content*') ? 'active has-sub' : '' }}">
                    <a href="/dashboard/content">
                        <i class="fas fa-table"></i>Materi</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
