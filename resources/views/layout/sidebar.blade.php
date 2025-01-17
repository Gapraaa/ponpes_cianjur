        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('dashboard.index') }}" class="brand-link">
                <img src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('ppdb.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data PPDB</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('campaign.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Campaign</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('donation.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Riwayat Donasi</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    DONASI
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('donation.detail') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Donasi Campaign</p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('berita.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('gallery.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Gallery</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('paud.show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>PAUD</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>MDTA</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>SMP</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>PONPES</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
