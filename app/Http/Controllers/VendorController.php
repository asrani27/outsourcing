<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function vendor()
    {
        $data = Vendor::orderBy('id', 'DESC')->get();
        return view('superadmin.vendor.index', compact('data'));
    }
    public function vendorcreate()
    {
        return view('superadmin.vendor.create');
    }
    public function vendorstore(Request $req)
    {
        $attr = $req->all();

        $check = Vendor::where('kode', $req->kode)->first();
        if ($check == null) {
            Vendor::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/vendor');
        } else {
            toastr()->error('Sudah Ada');
            return back();
        }
    }
    public function vendoredit($id)
    {
        $data = Vendor::find($id);
        return view('superadmin.vendor.edit', compact('data'));
    }
    public function vendorupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Vendor::where('kode', $req->kode)->first();
        if ($check == null) {
            //simpan
            Vendor::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/vendor');
        } else {
            if ($id == $check->id) {
                Vendor::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/vendor');
            } else {
                toastr()->error('Sudah ada');
                return back();
            }
        }
    }
    public function vendordelete($id)
    {
        try {
            Vendor::find($id)->delete();
            toastr()->success('Berhasil dihapus');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Tidak bisa di hapus karena ada relasi dengan data karyawan');
            return back();
        }
    }
}
