<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pendaftaran extends Seeder
{
    public function run()
    {
        $data = [
            [
                "nama" => "muhamad",
                "email" => "muhamad@gmail.com",
                "no_telpon" => "081229473829",
                "jenis_kelamin" => "Pria",
                "bahasa" => "Indonesia, Inggris, Arab, Sunda, Jawa",
                "agama" => "Islam",
                "tanggal_daftar" => "2024-01-1",
                "jam_daftar" => "08:30:45",
            ],
            [
                "nama" => "irga",
                "email" => "irga@gmail.com",
                "no_telpon" => "081229473829",
                "jenis_kelamin" => "Pria",
                "bahasa" => "Indonesia, Inggris, Arab, Sunda, Jawa",
                "agama" => "Islam",
                "tanggal_daftar" => "2024-01-1",
                "jam_daftar" => "08:30:45",
            ],
            [
                "nama" => "khoirul",
                "email" => "khoirul@gmail.com",
                "no_telpon" => "081229473829",
                "jenis_kelamin" => "Pria",
                "bahasa" => "Indonesia, Inggris, Arab, Sunda, Jawa",
                "agama" => "Islam",
                "tanggal_daftar" => "2024-01-1",
                "jam_daftar" => "08:30:45",
            ],
            [
                "nama" => "mahfis",
                "email" => "mahfis@gmail.com",
                "no_telpon" => "081229473829",
                "jenis_kelamin" => "Pria",
                "bahasa" => "Indonesia, Inggris, Arab, Sunda, Jawa",
                "agama" => "Islam",
                "tanggal_daftar" => "2024-01-1",
                "jam_daftar" => "08:30:45",
            ],
        ];
        $this->db->table("pendaftaran")->insertBatch($data);
    }
}
