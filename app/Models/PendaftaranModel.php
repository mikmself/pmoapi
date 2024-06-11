<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pendaftaran';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = '\App\Entities\Pendaftaran';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected bool $updateOnlyChanged = false;
    protected $allowedFields    = [
        "nama",
        "email",
        "no_telpon",
        "jenis_kelamin",
        "bahasa",
        "agama",
        "tanggal_daftar",
        "jam_daftar",
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules = [
        "nama" => "required|min_length[5]|is_unique[pendaftaran.nama]",
        "email" => "required|valid_email",
        "no_telpon" => "required",
        "jenis_kelamin" => "required",
        "bahasa" => "required",
        "agama" => "required",
        "tanggal_daftar" => "required",
        "jam_daftar" => "required",
    ];
    protected $validationMessages   = [
        'nama' => [
            'required' => 'Nama wajib diisi',
            'min_length' => 'Nama minimal 5 karakter',
            'is_unique' => 'Nama sudah terdaftar'
        ],
        'email' => [
            'required' => 'Email wajib diisi',
            'valid_email' => 'Email tidak valid'
        ],
        'no_telpon' => [
            'required' => 'No Telpon wajib diisi'
        ],
        'jenis_kelamin' => [
            'required' => 'Jenis Kelamin wajib diisi'
        ],
        'bahasa' => [
            'required' => 'Bahasa wajib diisi'
        ],
        'agama' => [
            'required' => 'Agama wajib diisi'
        ],
        'tanggal_daftar' => [
            'required' => 'Tanggal Daftar wajib diisi'
        ],
        'jam_daftar' => [
            'required' => 'Jam Daftar wajib diisi'
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
