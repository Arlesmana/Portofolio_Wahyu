@extends('layouts.dashboard')

{{-- Mengatur judul khusus untuk halaman Tim --}}
@section('title', 'Daftar Karyawan')

@section('content')
<div class="main-content container-fluid">
    <div class="page-title mb-4">
        <h3>Daftar Karyawan</h3>
        <p class="text-subtitle text-muted">Kelola data semua karyawan di perusahaan Anda.</p>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Data Karyawan</span>
                <a href="#" class="btn btn-primary btn-sm">
                    <i data-feather="plus-circle" class="me-1"></i> Tambah Karyawan
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Karyawan</th>
                                <th>Jabatan</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Contoh Data Karyawan 1 --}}
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar me-3">
                                            <img src="https://i.pravatar.cc/150?img=1" alt="Avatar">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0">John Doe</h6>
                                            <small class="text-muted">ID: EMP-001</small>
                                        </div>
                                    </div>
                                </td>
                                <td>CEO & Founder</td>
                                <td>john.doe@example.com</td>
                                <td>081234567890</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning icon"><i data-feather="edit"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger icon"><i data-feather="trash"></i></a>
                                </td>
                            </tr>

                            {{-- Contoh Data Karyawan 2 --}}
                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar me-3">
                                            <img src="https://i.pravatar.cc/150?img=2" alt="Avatar">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0">Jane Smith</h6>
                                            <small class="text-muted">ID: EMP-002</small>
                                        </div>
                                    </div>
                                </td>
                                <td>Lead Developer</td>
                                <td>jane.smith@example.com</td>
                                <td>081234567891</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning icon"><i data-feather="edit"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger icon"><i data-feather="trash"></i></a>
                                </td>
                            </tr>

                            {{-- Contoh Data Karyawan 3 --}}
                            <tr>
                                <td>3</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar me-3">
                                            <img src="https://i.pravatar.cc/150?img=3" alt="Avatar">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0">Mike Johnson</h6>
                                            <small class="text-muted">ID: EMP-003</small>
                                        </div>
                                    </div>
                                </td>
                                <td>UI/UX Designer</td>
                                <td>mike.johnson@example.com</td>
                                <td>081234567892</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning icon"><i data-feather="edit"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger icon"><i data-feather="trash"></i></a>
                                </td>
                            </tr>
                            
                            {{-- Data akan di-loop di sini menggunakan @foreach saat terhubung ke database --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection