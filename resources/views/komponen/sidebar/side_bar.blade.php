<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{url('')}}/assets/img/profile.jpg" alt="{{url('')}}." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{url('')}}/demo1/index.html">
                                    <span class="sub-item">Dashboard 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('')}}/demo2/index.html">
                                    <span class="sub-item">Dashboard 2</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                @can("admin")
                <li class="nav-item">
                    <a data-toggle="collapse" href="#daftar_akun">
                        <i class="fas fa-pen-square"></i>
                        <p>Daftar Akun</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="daftar_akun">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url ('/admin/akun/bidan') }}">
                                    <span class="sub-item">
                                        Form Pendaftaran Bidan
                                    </span>
                                </a>
                            </li>
                            <li>    
                                <a href="{{ url ('/admin/akun/pasien') }}">
                                    <span class="sub-item">
                                        Form Pendaftaran Pasien
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endcan
                <li class="nav-item">
                    <a href="widgets.html">
                        <i class="fa fa-user-md" aria-hidden="true"></i>
                        <p>Pasien Risti</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="widgets.html">
                        <i class="fa fa-print" aria-hidden="true"></i>
                        <p>Cetak</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>