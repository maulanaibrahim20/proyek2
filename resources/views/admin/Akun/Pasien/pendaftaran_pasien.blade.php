@extends("templating")

@section("content")

<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Pendaftaran Pasien</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{ url('/admin/dashboard') }}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ url ('/admin/akun/pasien') }}">Form Pendaftaran Pasien</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Pasien</h4>
                    <button type="button" class="btn btn-primary pull-right " data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-plus"></i>  Tambah Data
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Nama</th>
                                    <th>username</th>
                                    <th>NIK</th>
                                    <th>Alamat</th>
                                    <th>Umur</th>
                                    <th>Email</th>
                                    <th>Nomer Hp</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1
                                ?>
                                @foreach ($pasien as $data)
                                <tr>
                                    
                                    <td class="text-center"> {{ $no++ }}</td>
                                    <td>{{$data->getPasien->nama}}</td>
                                    <td>{{$data->getPasien->username}}</td>
                                    <td>{{$data->nik}}</td>
                                    <td>{{$data->getPasien->alamat}}</td>
                                    <td>{{$data->getPasien->umur}}</td>
                                    <td>{{$data->getPasien->email}}</td>
                                    <td>{{ $data->nomor_hp }}</td>
                                    <td class="text-center">
                                        
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#example-edit{{$data->id }}">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                        &nbsp;
                                        <form action="{{url('/admin/akun/pasien/'. $data->user_id) }}" method="POST" style="display:inline">
                                            @method("DELETE")
                                            @csrf
                                            <button type="submit" class="btn btn-danger " onclick="return confirm('Apakah Anda Ingin Dihapus?')">
                                                <i class="fa fa-trash"></i>  Delete
                                            </button>
                                        </form>
                                    </td>   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tambah Data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ url("admin/akun/pasien/") }}">
                {{-- fungsi pengaman metode hacking --}}
                @csrf <!-- Fungsi Pengamanan -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nik"> NIK </label>
                        <input type="number" class="form-control" name="nik" id="nik" placeholder="Masukkan NIK" required min="1">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama"> Nama </label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username"> Username </label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email"> Email </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="umur"> Umur </label>
                                <input type="number" class="form-control" name="umur" id="umur" placeholder="0" required min="1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nomor_hp"> Nomor HP </label>
                                <input type="text" class="form-control" name="nomor_hp" id="nomor_hp" placeholder="0" required min="1">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat"> Alamat </label>
                        <textarea name="alamat" class="form-control" id="alamat" rows="5" placeholder="Masukkan Alamat" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    @include("komponen.button.btn_tambah")
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end -->

<!-- Edit Data -->
@foreach ($pasien as $edit)
<div class="modal fade" id="example-edit{{ $edit->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ url("admin/akun/bidan/".$edit->user_id) }}">
                @method("PUT")
                @csrf 
                {{-- fungsi pengaman metode hacking --}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama"
                                id="nama" placeholder="Masukan Nama" required value="{{$edit->getPasien->nama}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">username</label>
                                <input type="text" class="form-control" name="username"
                                id="username" placeholder="Masukan Username" required value="{{$edit->getPasien->username}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" class="form-control" name="email"
                        id="email" placeholder="Masukan Email(example@gmail.com)" required value="{{$edit->getPasien->email}}">
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="number" class="form-control" name="umur"
                                id="umur" placeholder="0" required min="20" value="{{$edit->getPasien->umur}}">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="nomor">Nomor Telepon</label>
                                <input type="text" class="form-control" name="nomor"
                                id="nomor" placeholder="08xxxxx" required min="20" value="{{$edit->nomor_hp}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat"
                        id="alamat" placeholder="Masukan Alamat" required>{{$edit->getPasien->alamat}}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    @include("komponen.button.btn_edit")
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
{{-- end edit --}}



@endsection
@section('js')
<script src="{{url('')}}/assets/js/plugin/datatables/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#basic-datatables').DataTable({
        });
    });
</script>
@endsection