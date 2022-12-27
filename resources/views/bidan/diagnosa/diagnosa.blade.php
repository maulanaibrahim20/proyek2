@extends('templating')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Diagnosa</h4>
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
                    <a href="{{ url('/bidan/perawatan/diagnosa') }}">Diagnosa Pasien</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Diagnosa Pasien</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Kode Pasien </th>
                                        <th class="text-center">Nama </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">{{ $pasien->kode_pasien }}</td>
                                        <td class="text-center">{{ $pasien->getPasien->nama }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <form method="post" action='{{ route('diagnosa.store') }}'>
                    @csrf
                    <input type="hidden" name="kode_pasien" value="{{ $pasien->kode_pasien }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    @foreach ($pertanyaan as $pt)
                                    <input type="hidden" name="id_pertanyaan" value="{{ $pt->id }}">
                                        <tr>
                                            <td>{{ $pt->teks_pertanyaan }}</td>
                                            <td>
                                                <span class="mr-3">
                                                    <input type="checkbox" name="pertanyaan[{{ $pt->id }}][opsi]" value="1"> Ya
                                                </span>
                                                <span>
                                                    <input type="checkbox" name="pertanyaan[{{ $pt->id }}][opsi]" value="0"> Tidak
                                                </span>
                                            </td>
                                            <td class="p-3">
                                                @if ($pt->note==1)
                                                <input type="text" name="pertanyaan[{{ $pt->id }}][note]" class="form-control input-sm border" value="">
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                
                                @include("komponen.button.btn_tambah")
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ url('') }}/assets/js/plugin/datatables/datatables.min.js"></script>
    {{-- <script>
        $(document).ready(function() {
            $('#basic-datatables').DataTable({});
        });
    </script> --}}
@endsection
