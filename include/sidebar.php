<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= sidemenu_page('dashboard') ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= sidemenu_page('sample_menu') ?>">
                <i class="bi bi-grid"></i>
                <span>Sample</span>
            </a>
        </li>



        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Sample2</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= sidemenu_page('sample_menu') ?>">
                        <i class="bi bi-circle"></i><span>First</span>
                    </a>
                </li>
                <li>
                    <a href="<?= sidemenu_page('sample_menu') ?>">
                        <i class="bi bi-circle"></i><span>Second</span>
                    </a>
                </li>
            </ul>
        </li>


    </ul>

</aside>