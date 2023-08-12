@extends('admin.layout')
@section('title', 'XI - Admin Keuangan')
<link rel="stylesheet" href="/assets/css/admin-layout.css">

@role('admin')
@section('content')
<div class="card-finance">
    <div class="card-header-finance">
        Data Pemasukan dan Pengeluaran SMA XI - 1 
    </div>
    <div class="card-body-finance">
        <div class="finance-recap-view">
            <p>Total Pemasukan</p>
            Rp. {{ $pemasukan }}
        </div>
        <div class="finance-recap-view">
            <p>Total Pengeluaran</p>
            Rp. {{ $pengeluaran }}
        </div>
        <div class="finance-recap-view">
            <p>Total Uang Kas</p>
            Rp. {{ $pemasukan - $pengeluaran }}
        </div>
    </div>
</div>

<div class="table-pemasukan">
<table>
  <caption>Riwayat Pemasukan</caption>
  <thead>
    <tr>
      <th scope="col">Tanggal:</th>
      <th scope="col">Keterangan:</th>
      <th scope="col">Nominal:</th>
      <th scope="col">Dibuat Pada:</th>
    </tr>
  </thead>
  @foreach ($pemasukans as $pemasukan)
  <tbody>
    <tr>
      <td data-label="Tanggal:">{{ $pemasukan->tanggal }}</td>
      <td data-label="Keterangan:">{{ $pemasukan->note }}</td>
      <td data-label="Nominal:">Rp. {{ $pemasukan->nominal }}</td>
      <td data-label="Riwayat Dibuat:">{{ \Carbon\Carbon::parse($pemasukan->created_at)->diffForHumans() }}</td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>

<div class="table-pengeluaran">
<table>
  <caption>Riwayat Pengeluaran</caption>
  <thead>
    <tr>
      <th scope="col">Tanggal:</th>
      <th scope="col">Keterangan:</th>
      <th scope="col">Nominal:</th>
      <th scope="col">Dibuat Pada:</th>
    </tr>
  </thead>
  @foreach ($pengeluarans as $pengeluaran)
  <tbody>
    <tr>
      <td data-label="Tanggal:">{{ $pengeluaran->tanggal }}</td>
      <td data-label="Keterangan:">{{ $pengeluaran->note }}</td>
      <td data-label="Nominal:">Rp. {{ $pengeluaran->nominal }}</td>
      <td data-label="Riwayat Dibuat:">{{ \Carbon\Carbon::parse($pengeluaran->created_at)->diffForHumans() }}</td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>

@endsection
@endrole