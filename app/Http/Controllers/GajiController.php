<?php

namespace App\Http\Controllers;

use App\Gaji;
use App\Periode;
use App\Karyawan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class GajiController extends Controller
{
    public function gaji()
    {
        return view('superadmin.gaji.index');
    }

    public function gajikaryawan($id)
    {
        $data = Gaji::where('periode_id', $id)->get();
        $periode = Periode::find($id);
        return view('superadmin.gaji.gaji_karyawan', compact('data', 'periode'));
    }

    public function gajicreate($id)
    {
        $periode = Periode::find($id);
        $data = null;
        return view('superadmin.gaji.create', compact('id', 'periode', 'data'));
    }
    public function gajistore(Request $req, $id)
    {
        $periode = Periode::find($id);
        if ($req->button == 'tampilkan') {
            if ($req->karyawan_id == null) {
                toastr()->error('Pilih Karyawan');
                return back();
            } else {
                $data = Karyawan::find($req->karyawan_id);
                $data->lembur = 0;
                $data->bonus = 0;
                $req->flash();
                toastr()->success('Berhasil Di Tampilkan');
                return view('superadmin.gaji.create', compact('data', 'periode', 'id'));
            }
        } else {
            if ($req->karyawan_id == null) {
                toastr()->error('Pilih Karyawan');
                return back();
            } else {
                $check = Gaji::where('periode_id', $id)->where('karyawan_id', $req->karyawan_id)->first();
                if ($check == null) {
                    $lembur = $req->lembur == null ? 0 : $req->lembur;
                    $bonus  =  $req->bonus == null ? 0 : $req->bonus;
                    $gaji  =  Karyawan::find($req->karyawan_id)->jabatan->gaji;
                    $n = new Gaji;
                    $n->periode_id = $id;
                    $n->karyawan_id = $req->karyawan_id;
                    $n->lembur = $lembur;
                    $n->bonus = $bonus;
                    $n->gaji_pokok = $gaji;
                    $n->total = $lembur + $bonus + $gaji;
                    $n->save();
                    toastr()->success('Berhasil Di Simpan');
                    return redirect('/gaji/periode/' . $id);
                } else {
                    toastr()->error('Gaji Karyawan Ini telah Diinput');
                    return back();
                }
            }
        }
    }
    public function gajidelete($id)
    {
        Gaji::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function cetak($id)
    {
        $data = Gaji::find($id);
        $pdf = PDF::loadView('superadmin.laporan.pdf_gaji', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
}
