@extends('layouts.dashboard')

{{-- Mengatur judul khusus untuk halaman dashboard pesan --}}
@section('title', 'Dashboard Pesan')

@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Dashboard Pesan Kontak</h3>
        <p class="text-subtitle text-muted">Kelola semua pesan yang masuk dari formulir kontak Anda.</p>
    </div>
    <section class="section">
        <div class="row mb-2">
            {{-- Kartu Statistik Pesan --}}
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>TOTAL PESAN MASUK</h3>
                                <div class="card-right d-flex align-items-center"><p>152</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>PESAN BELUM DIBACA</h3>
                                <div class="card-right d-flex align-items-center"><p>5</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>SUDAH DIBALAS</h3>
                                <div class="card-right d-flex align-items-center"><p>120</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>PESAN HARI INI</h3>
                                <div class="card-right d-flex align-items-center"><p>2</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            {{-- Kolom Utama (Tabel Daftar Pesan) --}}
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Pesan Masuk</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Tanggal Masuk</th>
                                        <th>Nama Pengirim</th>
                                        <th>Email</th>
                                        <th>Telepon</th>
                                        <th>Pesan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $message['tanggal_masuk'] }}</td>
                                        <td>{{ $message['nama'] }}</td>
                                        <td>andi.pratama@mail.com <br> <small>081234567890</small></td>
                                        <td>Halo, saya tertarik untuk membuat website company profile...</td>
                                        <td><span class="badge bg-primary">Baru</span></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-info"><i data-feather="eye"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger"><i data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Kolom Samping (Pesan Terbaru & Catatan) --}}
            <div class="col-md-4">
                {{-- Kartu Pesan Terbaru Belum Dibaca --}}
                {{-- <div class="card">
                    <div class="card-header">
                        <h4>Pesan Terbaru (Belum Dibaca)</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Andi Pratama
                                <a href="#" class="btn btn-sm btn-outline-primary">Lihat</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Rian Hidayat
                                <a href="#" class="btn btn-sm btn-outline-primary">Lihat</a>
                            </li>
                             <li class="list-group-item d-flex justify-content-between align-items-center">
                                (Nama Pengirim Lain)
                                <a href="#" class="btn btn-sm btn-outline-primary">Lihat</a>
                            </li>
                        </ul>
                    </div> --}}
                </div>

                {{-- Kartu Catatan & Tugas --}}
                <div class="card widget-todo">
                    <div class="card-header">
                        <h4>Catatan & Tugas</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-secondary">
                            <i data-feather="check-square"></i> Buat catatan cepat atau daftar tugas di sini.
                        </div>
                         {{-- Contoh To-Do List --}}
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item">Follow up Rian Hidayat.</li>
                            <li class="list-group-item">Buat penawaran harga untuk Andi Pratama.</li>
                            <li class="list-group-item">Jadwalkan meeting.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection