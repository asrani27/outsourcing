<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{

    public function karyawan()
    {
        $data = Karyawan::orderBy('id', 'DESC')->get();
        return view('superadmin.karyawan.index', compact('data'));
    }
    public function karyawancreate()
    {
        return view('superadmin.karyawan.create');
    }
    public function karyawanstore(Request $req)
    {
        $attr = $req->all();

        $check = Karyawan::where('nik', $req->nik)->first();
        if ($check == null) {
            Karyawan::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/karyawan');
        } else {
            toastr()->error('Sudah Ada');
            return back();
        }
    }
    public function karyawanedit($id)
    {
        $data = Karyawan::find($id);
        return view('superadmin.karyawan.edit', compact('data'));
    }
    public function karyawanupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Karyawan::where('nik', $req->nik)->first();
        if ($check == null) {
            //simpan
            Karyawan::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/karyawan');
        } else {
            if ($id == $check->id) {
                Karyawan::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/karyawan');
            } else {
                toastr()->error('Sudah ada');
                return back();
            }
        }
    }
    public function karyawandelete($id)
    {
        try {
            Karyawan::find($id)->delete();
            toastr()->success('Berhasil dihapus');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Tidak bisa di hapus karena ada relasi dengan data gaji/cuti/lembur');
            return back();
        }
    }
    public function akun($id)
    {
        $k = Karyawan::find($id);
        $check = User::where('username', $k->nik)->first();
        if ($check == null) {
            $role = Role::where('name', 'karyawan')->first();
            $n = new User;
            $n->name = $k->nama;
            $n->username = $k->nik;
            $n->password = bcrypt($k->nik);
            $n->save();

            $n->roles()->attach($role);

            $k->update(['user_id' => $n->id]);

            toastr()->success('Berhasil Di buat, password : ' . $k->nik);
            return back();
        } else {
            toastr()->error('Username sudah ada');
            return back();
        }
    }

    public function reset($id)
    {
        $k = Karyawan::find($id)->user;
        $k->update([
            'password' => bcrypt(Karyawan::find($id)->nik),
        ]);
        toastr()->success('Berhasil Di reset, password : ' . $k->nik);
        return back();
    }
}
