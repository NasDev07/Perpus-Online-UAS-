<aside class="main-sidebar sidebar-dark-primary bg-info elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/dashboard') }}" class="brand-link">        
        <span class="brand-text font-weight-light">
            <img src="../../../img/logo.png" alt="" width="30"> <b>Kelompok 6</b>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2.0 mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{ url('/dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/mahasiswa/create') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            + Peminjam Buku
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/mahasiswa') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/mahasiswa') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Peminjam Buku</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/mahasiswa/dosen') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Buku</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ url('/mahasiswa/matkul') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Matkul</p>
                            </a>
                        </li>                         --}}
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
