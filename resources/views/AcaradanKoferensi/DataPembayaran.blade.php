<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dataPembayaran</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table {
            margin-top: 20px;
        }
        thead {
            background-color: #f8f9fa;
        }
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
@extends('AcaradanKoferensi.header')
@section('content')
<div class="container">
    <h2 class="text-center my-4">Data Pembayaran</h2>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th class="text-center">Nama</th>
                <th class="text-center">Nomor Telepon</th>
                <th class="text-center">Kelas Gedung</th>
                <th class="text-center">Tanggal Acara</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Bayar</th>
                <th class="text-center">Kembalian</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data_pembayaran as $DataPembayaran)
            <tr>
                <td>{{ $DataPembayaran->nama }}</td>
                <td>{{ $DataPembayaran->nomor_telepon }}</td>
                <td>{{ $DataPembayaran->kelas_gedung }}</td>
                <td>{{ $DataPembayaran->tanggal_acara }}</td>
                <td>Rp. {{ number_format($DataPembayaran->harga, 0, ',', '.') }}</td>
                <td>Rp. {{ number_format($DataPembayaran->bayar, 0, ',', '.') }}</td>
                <td>Rp. {{ number_format($DataPembayaran->kembalian, 0, ',', '.') }}</td>
                <td><a href="{{ route('hapuspembayaran', $DataPembayaran->id) }}" class="btn btn-danger">Hapus</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
