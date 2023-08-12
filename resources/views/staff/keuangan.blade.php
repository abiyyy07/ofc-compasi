@extends('staff.layout')
@section('title', 'XI - Keuangan')
<link rel="stylesheet" href="/assets/css/keuangan.css">

@role('staff')
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

<div class="pemasukan-pengeluaran">
    <p>Klik dibawah untuk menambahkan</p>
    <div class="pemasukan-pengurangan-body">
        <div class="add-pemasukan">
            <a href="{{route('pemasukan.create')}}">Tambah Pemasukan</a>
        </div>
        <div class="add-pengeluaran">
            <a href="{{route('pengeluaran.create')}}">Tambah Pengurangan</a>
        </div>
    </div>
</div>


@endsection
@endrole