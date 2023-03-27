<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pengaduan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style>
	    table.static{
	        position: relative;
	        border: 1px solid #543535;
	    }
	  </style>
	<center>
		<h3>Laporan Pengaduan Masyarakat</h3>
		<br>
	</center>
 
    <table class="static" cellspacing=0 cellpadding=15 align="center" rules="all" style="width: 95%;">
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal Pengaduan</th>
				<th>NIK</th>
				<th>Nama Pelapor</th>
				<th>Isi Laporan</th>
				<th>Foto</th>
                <th>Status Laporan</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data_pengaduan as $p)
			<tr>
				<td>{{$loop->iteration }}</td>
				<td>{{$p->tanggal_pengaduan}}</td>
				<td>{{$p->user->nik}}</td>
				<td>{{$p->user->nama}}</td>
                <td>{{\Str::limit($p->isi_laporan,30)}}</td>
				<td><img src="{{ public_path ('image/'. $p->file ) }}" width="100" height="50" alt=""></td>
				<td>
					@if ($p->status == '0')
					<p>Pending</p>
					@elseif ($p->status == 'proses')
					<p>Proses</p>
					@else
					<p>Selesai</p>
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>