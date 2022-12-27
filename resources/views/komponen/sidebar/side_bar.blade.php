<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ url('') }}/assets/img/profile.jpg" alt="{{ url('') }}."
                    class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span >
                            {{ auth()->user()->nama }}
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
                <li class="nav-item active" >
                    <a href="{{ url('/admin/dashboard') }}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                @hasrole('admin')
                <li class="nav-item">
                    <a data-toggle="collapse" href="#daftar_akun">
                        <i class="fa fa-pen-square"></i>
                        <p>Daftar Akun</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="daftar_akun">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('/admin/akun/bidan') }}">
                                    <span class="sub-item">
                                        Form Pendaftaran Bidan
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/akun/pasien') }}">
                                    <span class="sub-item">
                                        Form Pendaftaran Pasien
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/Master/pertanyaan') }}">
                        <i class="fa fa-question" aria-hidden="true"></i>
                        <p>Form Pertanyaan</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
                @endhasrole
                @hasrole(['admin', 'bidan'])
                <li class="nav-item">
                    <a data-toggle="collapse" href="#perawatan">
                        <i class="fas   fa-pen-square"></i>
                        <p>Perawatan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="perawatan">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('/bidan/perawatan/pasien') }}">
                                    <span class="sub-item">
                                        Pasien
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endhasrole
                @role(['kepala desa', 'kepala kecamatan', 'kepala puskesmas', 'admin', 'pasien'])
                <li class="nav-item">
                    <a href="{{ url('/admin/pasien/pasien') }}">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                        <p>Pasien</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
                @endrole
                @role(['kepala desa', 'kepala kecamatan', 'kepala puskesmas', 'admin', 'pasien', 'bidan'])
                <li class="nav-item">
                    <a href="/Cetak/cetak">
                        <i class="fa fa-print" aria-hidden="true"></i>
                        <p>Cetak</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
                @endrole
            </ul>
        </div>
    </div>
</div>
