<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('admin'); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-heading">Warung</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#dataUser" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Data User</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="dataUser" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('admin/lihatUser'); ?>">
                        <i class="bi bi-circle"></i><span>Lihat User</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/editUser'); ?>">
                        <i class="bi bi-circle"></i><span>Edit User</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#dataWarung" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Data Warung</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="dataWarung" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('admin/lihatWarung'); ?>">
                        <i class="bi bi-circle"></i><span>Lihat Warung</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/tambahWarung'); ?>">
                        <i class="bi bi-circle"></i><span>Tambah Warung</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/editWarung'); ?>">
                        <i class="bi bi-circle"></i><span>Edit Warung</span>
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