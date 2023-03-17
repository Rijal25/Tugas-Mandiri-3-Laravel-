<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function dataMahasiswa(){
        $mhs1 = 'Fawwaz'; $asal1 = 'Jakarta';
        $mhs2 = 'Inaya'; $asal2 = 'Depok';
        return view('data_mahasiswa',
        compact('mhs1','mhs2','asal1','asal2')
        );
    }


    public function tugasMandiri3(){
        $nama1 = 'Fawwaz'; $alamat1 = 'Jakarta';
        $nama2 = 'Inaya'; $alamat2 = 'Depok';
        $nama3 = 'Zidan'; $alamat3 = 'Sinjai';
        $nama4 = 'Bambang'; $alamat4 = 'Mojokerto';
        $nama5 = 'Unyil'; $alamat5 = 'Bandung';
        return view('mandiri3',
        compact('nama1','nama2','nama3','nama4','nama5','alamat1','alamat2','alamat3','alamat4','alamat5')
        );
    }
}
