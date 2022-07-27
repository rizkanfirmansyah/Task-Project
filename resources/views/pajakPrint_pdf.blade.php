<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pajak Users</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Tipe Pajak</th>
				<th>Deskripsi</th>
				<th>Penghasilan</th>
				<th>Jumlah Pajak</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($pajakPrint as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->tipe_pajak}}</td>
				<td>{{$p->deskripsi}}</td>
				<td>{{$p->penghasilan}}</td>
				<td>{{$p->jumlah_pajak}}</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>