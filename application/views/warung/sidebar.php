<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('admin'); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-heading">Menu</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#dataMenu" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Data Menu</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="dataMenu" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('warung/lihatMenu'); ?>">
                        <i class="bi bi-circle"></i><span>Lihat Menu</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('warung/editMenu'); ?>">
                        <i class="bi bi-circle"></i><span>Edit Menu</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

    </ul>

</aside><!-- End Sidebar-->