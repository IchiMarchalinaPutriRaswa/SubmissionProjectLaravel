@extends('layouts.app')


@section('title','Profil Mahasiswa')


@section('content')


<h2>Profil Mahasiswa</h2>


<p>
Nama : {{ $nama }}
</p>


<p>
NIM : {{ $nim }}
</p>


<p>
Prodi : {{ $prodi }}
</p>



@endsection