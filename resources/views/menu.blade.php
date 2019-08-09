@extends('layouts.app')

@section('content')


<center><b>DAGANGAN PALSU</b><br>
<br><table border="1">
	<tr>
		<th>KODE</th>
		<th>NAMA BARANG</th>
		<th>KONDISI BARANG</th>
		<th>HARGA BARANG</th>
	</tr>
	@foreach ($tokmul as $row)
	<tr>
	<td>{{ isset($i) ? ++$i :$i = 1 }}</td>
	<td>{{ $row->kode }}</td>
	<td>{{ $row->nama_barang }}</td>
	<td>{{ $row->kondisi_barang }}</td>
	<td>{{ $row->harga_barang }}</td>
	</tr>
	@endforeach
</table>
@endsection