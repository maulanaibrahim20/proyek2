<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Data Pasien Cetak Keseluruhan</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        label {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }

        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }

        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }

        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }

        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }

        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }

        .text-end {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }

        .no-border {
            border: 1px solid #fff !important;
        }

        .bg-blue {
            background-color: #ff0000;
            color: #fff;
        }

    </style>
</head>

<body>

    <table class="order-details no-border">
        <thead>
            <tr>
                <th width="50%" colspan="2" class="no-border">
                    <h1 class="text-start">Puskesmas Lohbener</h1>
                </th>
                <th width="50%" colspan="2" class="text-end company-data no-border">
                    <span>Puskesmas Lohbener</span> <br>
                    <span>"Bersinergi, Berintegrasi, Solid, Inovatif, Dan Bekerja Sama"</span> <br>
                    <span>Jl. By Pass, Lohbener, Kec. Lohbener, Kabupaten Indramayu, Jawa Barat</span> <br>
                    <span>Kode Pos : 45252</span> <br>
                    <span>Tanggal : {{ $nama_pasien->tanggal_daftar }}</span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Data Pasien</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nama Lengkap : </td>
                <td>{{ $nama_pasien->getPasien->nama }}</td>
            </tr>
            <tr>

                <td>Email : </td>
                <td>{{ $nama_pasien->getPasien->email }}</td>
            </tr>
            <tr>
                <td>Nomor Hp : </td>
                <td>{{ $nama_pasien->nomor_hp }}</td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td>{{ $nama_pasien->getPasien->alamat }}</td>
            </tr>

        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Keterangan Pasien
                </th>
            </tr>
            <tr class="bg-blue">
                <th class="text-center">No</th>
                <th class="text-center">Kode Pasien</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
			
				
            <tr>
				<td width="15%" class="text-center">1.</td>
                <td width="15%" class="text-center">{{ $nama_pasien->kode_pasien }}</td>
                <td class="text-center">
					@if  ($nama_pasien->getJawaban )
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
			
        </tbody>
    </table>

    <br>
    <h1 class="text-center">
        Puskesmas Lohbener
    </h1>
    <h4 class="text-center">
        "Bersinergi, Berintegrasi, Solid, Inovatif, Dan Bekerja Sama"
    </h4>

</body>

</html>
