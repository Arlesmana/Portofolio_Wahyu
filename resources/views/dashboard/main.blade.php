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
                                            <a href="#" class="btn btn-sm btn-info"><i data-feather="eye"></i></a>
                                            
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
    </section>
</div>
@endsection