<?php

namespace App\Http\Controllers;

use App\Cuti;
use App\Guru;
use App\Mapel;
use App\Nilai;
use App\Siswa;
use App\Lembur;
use App\Periode;
use App\Karyawan;
use App\PKGsiswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class LaporanController extends Controller
{

    public function index()
    {
        return view('superadmin.laporan.index');
    }

    public function karyawan()
    {
        $data = Karyawan::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_karyawan', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }

    public function cuti()
    {
        $data = Cuti::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_cuti', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }

    public function lembur()
    {
        $data = Lembur::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_lembur', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
}
