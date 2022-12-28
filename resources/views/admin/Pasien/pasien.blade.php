@extends('templating')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data Pasien</h4>
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
                    <a href="{{ url('/bidan/perawatan/pasien') }}">Data Pasien</a>
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
                                        <th>Nama</th>
                                        <th>Status</th>
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
                                            <td>{{ $ps->getPasien->nama }}</td>
                                            <td>@if  ($ps->getJawaban )
                                                @if ($ps->getJawaban->jawaban >=70)
                                                <span class="badge badge-danger">
                                                    Pasien Resiko Tinggi 
                                                </span>
                                                    
                                                @else
                                                <span class="badge badge-success">
                                                    Pasien Sehat
                                                </span>
                                                @endif
                                            @else
                                            <span class="badge badge-warning">
                                                Pasien Belum Di Diagnosa
                                            </span>
                                            @endif</td>
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
@endsection
@section('js')
    <script src="{{ url('') }}/assets/js/plugin/datatables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#basic-datatables').DataTable({});
        });
    </script>
@endsection
