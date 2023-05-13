@extends('layouts.main')

@section('container')
    @foreach ($karyawan as $k)
        <h1>{{ $k->nama_karyawan }}</h1>
        <h1>Test</h1>
    @endforeach
@endsection