@extends('layouts.master')
@section('konten')
<div class="container">
	<h1 class="my-4">Data Siswa
        <small>Kodaline</small>
      </h1>
      <hr>

<center>
<table border="3" class="table table-bordered">
	<th>ID</th>
	<th>NIS</th>
	<th>Nama</th>
	<th>Tempat Lahir</th>
	<th>Tanggal Lahir</th>
	<th>Alamat</th>
	<th>Cita-Cita</th>
	<th>Hobi</th>
	<th>Foto</th>
	@foreach($dono as $key)
	<tr>
	<td>{{ $key->id}}</td>
    <td>{{ $key->NIS}}</td>
   	<td>{{ $key->nama}}</td>
    <td>{{ $key->tempat_lahir}}</td>
    <td>{{ $key->tanggal_lahir}}</td>
    <td>{{ $key->alamat}}</td>
    <td>{{ $key->citacita}}</td>
    <td>{{ $key->hobi}}</td>
    <td><img src="{{asset('image/'.$key->gambar)}}" style="max-height:100px;max-width:100px;margin-top:10px"></td>
</tr>
@endforeach
</table>
</center>
</div>
@endsection