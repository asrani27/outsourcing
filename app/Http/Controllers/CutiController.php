<?php

namespace App\Http\Controllers;

use App\Cuti;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    public function cuti()
    {
        $data = Cuti::orderBy('id', 'DESC')->get();
        return view('superadmin.cuti.index', compact('data'));
    }
    public function cuticreate()
    {
        return view('superadmin.cuti.create');
    }
    public function cutistore(Request $req)
    {
        $attr = $req->all();

        Cuti::create($attr);
        toastr()->success('Berhasil disimpan');
        return redirect('/cuti');
    }
    public function cutiedit($id)
    {
        $data = Cuti::find($id);
        return view('superadmin.cuti.edit', compact('data'));
    }
    public function cutiupdate(Request $req, $id)
    {
        $attr = $req->all();
        Cuti::find($id)->update($attr);
        toastr()->success('Berhasil disimpan');
        return redirect('/cuti');
    }
    public function cutidelete($id)
    {
        try {
            Cuti::find($id)->delete();
            toastr()->success('Berhasil dihapus');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Tidak bisa di hapus karena ada relasi dengan data gaji');
            return back();
        }
    }
}
