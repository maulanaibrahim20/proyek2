@extends("templating")

@section("content")

<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Form Pengajuan Pertanyaan</h4>
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
                <a href="{{ url ('/admin/pertanyaan/pertanyaan') }}">Form Pertanyaan</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Pertanyaan</h4>
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
                                    <th>Nama Keluhan</th>
                                    
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1
                                ?>
                                @foreach ($pertanyaan as $pt)
                                <tr>
                                    
                                    <td class="text-center"> {{ $no++ }}</td>
                                    <td>{{$pt->nama_keluhan}}</td>
                                    <td class="text-center">
                                        
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#example-edit{{ $pt->id }}">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                        &nbsp;
                                        <form action="{{ url('/admin/pertanyaan/pertanyaan'. $pt->id) }}" method="POST" style="display:inline">
                                            @method("DELETE")
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Ingin Dihapus?')">
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pertanyaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ url("admin/pertanyaan/pertanyaan/") }}">
                @csrf 
                {{-- fungsi pengaman metode hacking --}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="pertanyaan">Pertanyaan</label>
                                <input type="text" class="form-control" name="pertanyaan"
                                id="pertanyaan" placeholder="Masukan Pertanyaan" required>
                            </div>
                        </div>
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
@foreach ($pertanyaan as $edit)
<div class="modal fade" id="example-edit{{ $edit->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pertanyaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ url("admin/pertanyaan/pertanyaan/".$edit->id) }}">
                @method('PUT')
                @csrf 
                {{-- fungsi pengaman metode hacking --}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="pertanyaan">Pertanyaan</label>
                                <input type="text" class="form-control" name="pertanyaan"
                                id="pertanyaan" placeholder="Masukan Pertanyaan" required value="{{ $edit->nama_keluhan }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    @include("komponen.button.btn_tambah")
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