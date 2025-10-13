<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory;

    /**
     * Menonaktifkan timestamps created_at dan updated_at bawaan Laravel.
     */
    public $timestamps = false;

    /**
     * Nama tabel yang digunakan oleh model.
     * @var string
     */
    protected $table = 'message';

    /**
     * [PERBAIKAN]
     * Mendefinisikan nama primary key jika BUKAN 'id'.
     * Ganti 'id_pesan' dengan nama kolom primary key Anda yang sebenarnya.
     * @var string
     */
    protected $primaryKey = 'id_message'; // <-- GANTI INI SESUAI NAMA KOLOM ANDA

    /**
     * Atribut yang dapat diisi secara massal.
     * @var array
     */
    protected $fillable = [
        'tanggal_masuk',
        'nama',
        'email',
        'no_telp',
        'pesan',
        'status',
    ];

    /**
     * Casts tipe data atribut.
     * @var array
     */
    protected $casts = [
        'tanggal_masuk' => 'date:Y-m-d',
    ];
}