<div class="main-sidebar">

    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a>L C I</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a>L C I</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <!--<li class="nav-item dropdown active">
                <a href="" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li class="active"><a class="nav-link">Driver / Admin</a></li>
                  <!-<li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>--
                </ul>-->
            <li id="dashboard" class="nav-item active"><a href="<?= base_url(); ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

            <li class="menu-header">Menu</li>
            <!--<li><a class="nav-link" href="blank.html"><i class="fas fa-car"></i> <span>Mobil</span></a></li>-->
            <li id="CrudData" class="nav-item dropdown">
                <a href="<?= base_url() ?>" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book"></i><span>Menu</span></a>
                <ul class="dropdown-menu crData">
                    <li><a class="nav-link" href="<?= base_url('search') ?>"><i class="fas fa-search"></i><span id="pencarian">Pencarian Data</span></a></li>
                </ul>
            </li>
        </ul>

    </aside>
</div>