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
            {{-- [UI DIPERBARUI] Kartu Statistik Pesan --}}
            <div class="col-12 col-md-3">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon purple mb-2">
                                    <i data-feather="mail" style="width: 40px; height: 40px;"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Total Pesan Masuk</h6>
                                <h6 class="font-extrabold mb-0">{{ $totalMessages }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Anda bisa menambahkan kartu statistik lain di sini dengan gaya yang sama --}}
            {{-- Contoh kartu lain:
            <div class="col-12 col-md-3">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon blue mb-2">
                                    <i data-feather="message-square" style="width: 40px; height: 40px;"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Pesan Baru</h6>
                                <h6 class="font-extrabold mb-0">5</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            --}}
                   
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
                                    @foreach($messages as $message)
                                    <tr>
                                        {{-- Sintaks konsisten menggunakan '->' --}}
                                        <td>{{ $message->tanggal_masuk->format('d-m-Y') }}</td>
                                        <td>{{ $message->nama }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td><small>{{ $message->no_telp }}</small></td>
                                        <td>{{ $message->pesan }}</td>
                                        <td>
                                            @if($message->status === 'baru')
                                                <span class="badge bg-primary">Baru</span>
                                            @elseif($message->status === 'dibaca')
                                                <span class="badge bg-warning">Dibaca</span>
                                            @elseif($message->status === 'dibalas')
                                                <span class="badge bg-success">Dibalas</span>
                                            @else
                                                <span class="badge bg-secondary">Tidak Diketahui</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{-- <a href="#" class="btn btn-sm btn-info"><i data-feather="eye"></i></a> --}}
                                            
                                            {{-- [PERBAIKAN] Ganti $message->id menjadi $message --}}
                                            <form action="{{ route('messages.destroy', $message) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus pesan ini?')">
                                                    <i data-feather="trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- [PENAMBAHAN] Bagian Catatan untuk Tim --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Catatan & Tugas</h3>
                    </div>
                    <div class="card-body">
                        <p>Gunakan area ini untuk meninggalkan catatan atau tugas untuk anggota tim lainnya.</p>
                        <ul>
                            <li>Follow up pesan dari Budi (Project X).</li>
                            <li>Siapkan penawaran untuk PT. Sejahtera Abadi.</li>
                            <li>Update status semua pesan yang sudah dibalas.</li>
                        </ul>
                        <textarea class="form-control" rows="3" placeholder="Tambah catatan baru..."></textarea>
                        <button class="btn btn-primary mt-2">Simpan Catatan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection