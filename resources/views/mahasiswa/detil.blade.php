@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>
    <p><strong>Nama:</strong> {{ $data['nama'] }}</p>
    <p><strong>NIM:</strong> {{ $data['nim'] }}</p>
    <p><strong>IPK:</strong> {{ number_format($data['ipk'], 2) }}</p>
    <br>
    <a href="{{ route('mahasiswa.daftar') }}">← Kembali ke Daftar</a>
@endsection
