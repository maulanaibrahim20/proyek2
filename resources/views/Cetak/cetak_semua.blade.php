<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak PDF</title>
</head>

<body>
    <div class="form-group">
        <p Align="center">
            <b>
				Laporan Data Pasien
            </b>
        </p>
		<table class="static" align="center" rules="all" border="1px" style="width: 95%">
			<tr>
				<th>No.</th>
				<th>Nama Pasien</th>
				<th>Alamat</th>
				<th>No.Hp</th>
				<th>Status</th>
			</tr>
            @foreach ($cetak_semua as $nama_pasien )
			<tr align="center">
                <td>{{ $loop->iteration }}</td>
				<td>{{ $nama_pasien->getPasien->nama }}</td>
				<td>{{ $nama_pasien->getPasien->alamat }}</td>
				<td>{{ $nama_pasien->nomor_hp }}</td>
				<td>@if  ($nama_pasien->getJawaban )
					@if ($nama_pasien->getJawaban->jawaban >=70)
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
			</tr>
            @endforeach
		</table>
    </div>
</body>

</html>
