<?php

namespace App\Http\Controllers;

use App\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function jabatan()
    {
        $data = Jabatan::orderBy('id', 'DESC')->get();
        return view('superadmin.jabatan.index', compact('data'));
    }
    public function jabatancreate()
    {
        return view('superadmin.jabatan.create');
    }
    public function jabatanstore(Request $req)
    {
        $attr = $req->all();

        $check = Jabatan::where('nama', $req->nama)->first();
        if ($check == null) {
            Jabatan::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/jabatan');
        } else {
            toastr()->error('Sudah Ada');
            return back();
        }
    }
    public function jabatanedit($id)
    {
        $data = Jabatan::find($id);
        return view('superadmin.jabatan.edit', compact('data'));
    }
    public function jabatanupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Jabatan::where('nama', $req->nama)->first();
        if ($check == null) {
            //simpan
            Jabatan::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/jabatan');
        } else {
            if ($id == $check->id) {
                Jabatan::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/jabatan');
            } else {
                toastr()->error('Sudah ada');
                return back();
            }
        }
    }
    public function jabatandelete($id)
    {
        try {
            Jabatan::find($id)->delete();
            toastr()->success('Berhasil dihapus');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Tidak bisa di hapus karena ada relasi dengan data karyawan');
            return back();
        }
    }
}
