<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function profil()
    {
        $nama = "Ichi Marchalina Putri Raswa";
        $nim = "242520113";
        $prodi = "Teknologi Informasi";

        return view('mahasiswa.profil', compact(
            'nama',
            'nim',
            'prodi'
        ));
    }

    public function daftar()
    {
        $mahasiswa = [
            [
                'nama' => 'AHMAD EDITA NURMA ABRIADI',
                'nim' => '242520101',
                'ipk' => 3.80
            ],
            [
                'nama' => 'BISMO DININGRAT',
                'nim' => '242520102',
                'ipk' => 3.40
            ],
            [
                'nama' => 'VARENSHIN BEBBIL KOMEITO',
                'nim' => '242520115',
                'ipk' => 3.60
            ],
            [
                'nama' => 'SALLY FEMITA ZAHRA SALSABILLA',
                'nim' => '242520127',
                'ipk' => 2.90
            ],
            [
                'nama' => 'MUHAMMAD HUMAM ZUFAR SYAHIDHAR',
                'nim' => '242520125',
                'ipk' => 3.10
            ],
        ];

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function detail($nim)
    {

        $mahasiswa = [

            [
                'nama' => 'AHMAD EDITA NURMA ABRIADI',
                'nim' => '242520101',
                'ipk' => 3.80
            ],

            [
                'nama' => 'BISMO DININGRAT',
                'nim' => '242520102',
                'ipk' => 3.40
            ],

            [
                'nama' => 'VARENSHIN BEBBIL KOMEITO',
                'nim' => '242520115',
                'ipk' => 3.60
            ],

            [
                'nama' => 'SALLY FEMITA ZAHRA SALSABILLA',
                'nim' => '242520127',
                'ipk' => 2.90
            ],

            [
                'nama' => 'MUHAMMAD HUMAM ZUFAR SYAHIDHAR',
                'nim' => '242520125',
                'ipk' => 3.10
            ],

        ];

        $data = collect($mahasiswa)
                ->where('nim', $nim)
                ->first();

        if(!$data){

            abort(404);

        }

        return view(
            'mahasiswa.detail',
            compact('data')
        );

    }
}