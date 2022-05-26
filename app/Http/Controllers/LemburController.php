<?php

namespace App\Http\Controllers;

use App\Lembur;
use Illuminate\Http\Request;

class LemburController extends Controller
{

    public function lembur()
    {
        $data = Lembur::orderBy('id', 'DESC')->get();
        return view('superadmin.lembur.index', compact('data'));
    }
    public function lemburcreate()
    {
        return view('superadmin.lembur.create');
    }
    public function lemburstore(Request $req)
    {
        if ($req->mulai > $req->sampai) {
            toastr()->error('Jam Mulai Tidak Boleh lebih dari jam selesai');
            return back();
        }
        $attr = $req->all();
        Lembur::create($attr);
        toastr()->success('Berhasil disimpan');
        return redirect('/lembur');
    }
    public function lemburedit($id)
    {
        $data = Lembur::find($id);
        return view('superadmin.lembur.edit', compact('data'));
    }
    public function lemburupdate(Request $req, $id)
    {
        $attr = $req->all();
        Lembur::find($id)->update($attr);
        toastr()->success('Berhasil disimpan');
        return redirect('/lembur');
    }
    public function lemburdelete($id)
    {
        try {
            Lembur::find($id)->delete();
            toastr()->success('Berhasil dihapus');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Tidak bisa di hapus karena ada relasi dengan data lain');
            return back();
        }
    }
}
