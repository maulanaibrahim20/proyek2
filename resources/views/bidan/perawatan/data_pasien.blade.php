@extends('templating')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Keluhan Pasien</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="{{ url('/bidan/dashboard') }}">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/bidan/perawatan/pasien') }}">keluhan pasien</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Keluhan Pasien</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Kode Pasien </th>
                                        <th class="text-center">NIK</th>
                                        <th>Nama</th>
                                        <th>Nomor HP</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 0;
                                    @endphp
                                    @foreach ($pasien as $ps)
                                        <Tr>
                                            <td class="text-center">{{ ++$no }}.</td>
                                            <td class="text-center">{{ $ps->kode_pasien }}.</td>
                                            <td class="text-center">{{ $ps->nik }}.</td>
                                            <td>{{ $ps->getPasien->nama }}</td>
                                            <td>{{ $ps->nomor_hp }}</td>
                                            <td class="text-center">
                                                <a href=" {{ route('diagnosa.show', $ps->kode_pasien) }}" class="btn btn-primary">
                                                    <i class="fa fa-plus">Tambah Keluhan</i>     
                                                </a>
                                                    
                                            </td>
                                        </Tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- tambah keluhan --}}
    <div class="modal fade" id="exampleKeluhan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Keluhan Pasien</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ url('bidan/perawatan/') }}">
                    @csrf
                    {{-- fungsi pengaman metode hacking --}}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        placeholder="Masukan Nama" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username">username</label>
                                    <input type="text" class="form-control" name="username" id="username"
                                        placeholder="Masukan Username" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Masukan Email(example@gmail.com)" required>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <input type="number" class="form-control" name="umur" id="umur" placeholder="0"
                                        required min="20">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="nomor">Nomor Telepon</label>
                                    <input type="text" class="form-control" name="nomor" id="nomor"
                                        placeholder="08xxxxx" required min="20">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        @include('komponen.button.btn_tambah')
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ url('') }}/assets/js/plugin/datatables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#basic-datatables').DataTable({});
        });
    </script>
@endsection
