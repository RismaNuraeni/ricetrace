        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-seedling"></i>
                </div>
                <div class="sidebar-brand-text mx-3">RiceTrack</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <?php if (session()->get('role') == 'admin'): ?>

                <li class="nav-item">

                    <a class="nav-link" href="<?= base_url('admin') ?>">

                        <i class="fas fa-fw fa-tachometer-alt"></i>

                        <span>Dashboard Admin</span>

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="<?= base_url('data-panen') ?>">

                        <i class="fas fa-fw fa-seedling"></i>

                        <span>Data Panen</span>

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="<?= base_url('data-penggilingan') ?>">

                        <i class="fas fa-fw fa-industry"></i>

                        <span>Dashboard Penggilingan</span>

                    </a>

                </li>



                <li class="nav-item">

                    <a class="nav-link" href="<?= base_url('data-distribusi') ?>">

                        <i class="fas fa-fw fa-truck"></i>

                        <span>Data Distribusi</span>

                    </a>

                </li>

            <?php endif; ?>

            <?php if (session()->get('role') == 'petani'): ?>

                <li class="nav-item">

                    <a class="nav-link" href="<?= base_url('panen') ?>">

                        <i class="fas fa-fw fa-home"></i>

                        <span>Dashboard Petani</span>

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="<?= base_url('data-panen') ?>">

                        <i class="fas fa-fw fa-truck"></i>

                        <span>Data Petani</span>

                    </a>

                </li>

            <?php endif; ?>

            <?php if (session()->get('role') == 'penggilingan'): ?>

                <li class="nav-item">

                    <a class="nav-link" href="<?= base_url('penggilingan') ?>">

                        <i class="fas fa-fw fa-home"></i>

                        <span>Dashboard Penggilingan</span>

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="<?= base_url('data-penggilingan') ?>">

                        <i class="fas fa-fw fa-truck"></i>

                        <span>Data Penggilingan</span>

                    </a>

                </li>

            <?php endif; ?>

            <?php if (session()->get('role') == 'distributor'): ?>

                <li class="nav-item">

                    <a class="nav-link" href="<?= base_url('distributor') ?>">

                        <i class="fas fa-fw fa-home"></i>

                        <span>Dashboard Distributor</span>

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="<?= base_url('data-distribusi') ?>">

                        <i class="fas fa-fw fa-truck"></i>

                        <span>Data Distribusi</span>

                    </a>

                </li>

            <?php endif; ?>
        </ul>
        <!-- End of Sidebar -->