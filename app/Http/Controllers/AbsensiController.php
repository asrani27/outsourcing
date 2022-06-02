<?php

namespace App\Http\Controllers;

use App\Absensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsensiController extends Controller
{
    public function beranda()
    {
        return view('karyawan.beranda');
    }

    public function riwayat()
    {
        $data = Absensi::where('karyawan_id', Auth::user()->karyawan->id)->orderBy('tanggal', 'DESC')->get();
        return view('karyawan.riwayat', compact('data'));
    }
    public function simpanabsensi(Request $req)
    {
        if ($req->jam == null) {
            toastr()->error('JAM Kosong');
            return back();
        } else {
            if ($req->button == 'masuk') {
                //simpan masuk
                $check = Absensi::where('tanggal', $req->tanggal)->where('karyawan_id', Auth::user()->karyawan->id)->first();
                if ($check == null) {
                    //simpan
                    $n = new Absensi;
                    $n->karyawan_id = Auth::user()->karyawan->id;
                    $n->tanggal = $req->tanggal;
                    $n->jam_masuk = $req->jam;
                    $n->save();
                    toastr()->success('Disimpan');
                    return back();
                } else {
                    //update
                    $check->update([
                        'jam_masuk' => $req->jam
                    ]);
                    toastr()->success('Disimpan');
                    return back();
                }
            } else {
                //simpan keluar 
                $check = Absensi::where('tanggal', $req->tanggal)->where('karyawan_id', Auth::user()->karyawan->id)->first();
                if ($check == null) {
                    //simpan
                    $n = new Absensi;
                    $n->karyawan_id = Auth::user()->karyawan->id;
                    $n->tanggal = $req->tanggal;
                    $n->jam_pulang = $req->jam;
                    $n->save();
                    toastr()->success('Disimpan');
                    return back();
                } else {
                    //update
                    $check->update([
                        'jam_pulang' => $req->jam
                    ]);
                    toastr()->success('Disimpan');
                    return back();
                }
            }
        }
    }
}
