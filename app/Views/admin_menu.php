<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
    <ul class="nav flex-column">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">
            <span data-feather="home"></span>
            Dashboard
        </a>
        </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Master Data</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
        <span data-feather="plus-circle"></span>
        </a>
    </h6>
    <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <?php echo anchor('admin/barang', '<span data-feather="file-text"></span> Barang', ['class'=>'nav-link']); ?>
        </li>
        <li class="nav-item">
        <?php echo anchor('admin/users', '<span data-feather="file-text"></span> Users', ['class'=>'nav-link']); ?>
        </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Mutasi Barang</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
        <span data-feather="plus-circle"></span>
        </a>
    </h6>

    <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <?php echo anchor('admin/mutasi', '<span data-feather="file-text"></span> Mutasi Keluar', ['class'=>'nav-link']); ?>
        </li>
    </ul>
    </div>
</nav>