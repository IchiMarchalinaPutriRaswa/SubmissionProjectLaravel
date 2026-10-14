@extends('layouts.app')

@section('title','Detail Mahasiswa')

@section('content')

<h2>Detail Mahasiswa</h2>

<table border="1">

<tr>

<th>Nama</th>

<td>
{{$data['nama']}}
</td>

</tr>

<tr>

<th>NIM</th>

<td>
{{$data['nim']}}
</td>

</tr>

<tr>

<th>IPK</th>

<td>
{{$data['ipk']}}
</td>

</tr>

</table>

<a href="{{route('mahasiswa.daftar')}}">
Kembali
</a>

@endsection