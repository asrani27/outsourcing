<?php

namespace App\Http\Controllers;

use App\PKG;
use App\Guru;
use App\Role;
use App\User;
use App\Kelas;
use App\Mapel;
use App\Siswa;
use App\Periode;
use App\PKGmapel;
use App\PKGsiswa;
use App\Predikat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class SuperadminController extends Controller
{
    public function beranda()
    {
        return view('superadmin.beranda');
    }

    public function periode()
    {
        $data = Periode::orderBy('id', 'DESC')->get();
        return view('superadmin.periode.index', compact('data'));
    }
    public function periodecreate()
    {
        return view('superadmin.periode.create');
    }
    public function periodestore(Request $req)
    {
        $attr = $req->all();

        $check = Periode::where('tahun', $req->tahun)->where('semester', $req->semester)->first();
        if ($check == null) {
            Periode::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/periode');
        } else {
            toastr()->error('Sudah Ada');
            return back();
        }
    }
    public function periodeedit($id)
    {
        $data = Periode::find($id);
        return view('superadmin.periode.edit', compact('data'));
    }
    public function periodeupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Periode::where('tahun', $req->tahun)->where('semester', $req->semester)->first();
        if ($check == null) {
            //simpan
            Periode::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/periode');
        } else {
            if ($id == $check->id) {
                Periode::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/periode');
            } else {
                toastr()->error('Sudah ada');
                return back();
            }
        }
    }
    public function periodedelete($id)
    {
        Periode::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }


    public function kelas()
    {
        $data = Kelas::orderBy('id', 'DESC')->get();
        return view('superadmin.kelas.index', compact('data'));
    }
    public function kelascreate()
    {
        return view('superadmin.kelas.create');
    }
    public function kelasstore(Request $req)
    {
        $attr = $req->all();

        $check = Kelas::where('nama', $req->nama)->first();
        if ($check == null) {
            kelas::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/kelas');
        } else {
            toastr()->error('Sudah Ada');
            return back();
        }
    }
    public function kelasedit($id)
    {
        $data = Kelas::find($id);
        return view('superadmin.kelas.edit', compact('data'));
    }
    public function kelasupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Kelas::where('nama', $req->nama)->first();
        if ($check == null) {
            //simpan
            Kelas::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/kelas');
        } else {
            if ($id == $check->id) {
                Kelas::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/kelas');
            } else {
                toastr()->error('Sudah ada');
                return back();
            }
        }
    }
    public function kelasdelete($id)
    {
        Kelas::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function mapel()
    {
        $data = Mapel::orderBy('id', 'DESC')->get();
        return view('superadmin.mapel.index', compact('data'));
    }
    public function mapelcreate()
    {
        return view('superadmin.mapel.create');
    }
    public function mapelstore(Request $req)
    {
        $attr = $req->all();

        $check = Mapel::where('kode', $req->kode)->first();
        if ($check == null) {
            Mapel::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/mapel');
        } else {
            toastr()->error('Kode Sudah Ada');
            return back();
        }
    }
    public function mapeledit($id)
    {
        $data = Mapel::find($id);
        return view('superadmin.mapel.edit', compact('data'));
    }
    public function mapelupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Mapel::where('kode', $req->kode)->first();
        if ($check == null) {
            //simpan
            Mapel::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/mapel');
        } else {
            if ($id == $check->id) {
                Mapel::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/mapel');
            } else {
                toastr()->error('Kode Mapel Sudah ada');
                return back();
            }
        }
    }
    public function mapeldelete($id)
    {
        Mapel::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }


    public function guru()
    {
        $data = Guru::orderBy('id', 'DESC')->get();
        return view('superadmin.guru.index', compact('data'));
    }
    public function gurucreate()
    {
        return view('superadmin.guru.create');
    }
    public function gurustore(Request $req)
    {
        $attr = $req->all();

        $check = Guru::where('nik', $req->nik)->first();
        if ($check == null) {
            Guru::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/guru');
        } else {
            toastr()->error('nik Sudah Ada');
            return back();
        }
    }
    public function guruedit($id)
    {
        $data = Guru::find($id);
        return view('superadmin.guru.edit', compact('data'));
    }
    public function guruupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Guru::where('nik', $req->nik)->first();
        if ($check == null) {
            //simpan
            Guru::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/guru');
        } else {
            if ($id == $check->id) {
                Guru::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/guru');
            } else {
                toastr()->error('nik guru Sudah ada');
                return back();
            }
        }
    }
    public function gurudelete($id)
    {
        Guru::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function siswaakun($id)
    {
        $siswa = Siswa::find($id);
        $check = User::where('username', $siswa->nis)->first();
        if ($check == null) {
            $role = Role::where('name', 'siswa')->first();
            $n = new User;
            $n->name = $siswa->nama;
            $n->username = $siswa->nis;
            $n->password = bcrypt($siswa->nis);
            $n->save();

            $n->roles()->attach($role);

            $siswa->update(['user_id' => $n->id]);

            toastr()->success('Berhasil Di buat, password : ' . $siswa->nis);
            return back();
        } else {
            toastr()->error('Username sudah ada');
            return back();
        }
    }

    public function siswareset($id)
    {
        $siswa = Siswa::find($id)->user;
        $siswa->update([
            'password' => bcrypt(Siswa::find($id)->nis),
        ]);
        toastr()->success('Berhasil Di reset, password : ' . $siswa->nis);
        return back();
    }

    public function siswa()
    {
        $data = Siswa::orderBy('id', 'DESC')->get();

        return view('superadmin.siswa.index', compact('data'));
    }
    public function siswacreate()
    {
        return view('superadmin.siswa.create');
    }
    public function siswastore(Request $req)
    {
        $attr = $req->all();

        $check = Siswa::where('nis', $req->nis)->first();
        if ($check == null) {
            Siswa::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/siswa');
        } else {
            toastr()->error('nis Sudah Ada');
            return back();
        }
    }
    public function siswaedit($id)
    {
        $data = Siswa::find($id);
        return view('superadmin.siswa.edit', compact('data'));
    }
    public function siswaupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Siswa::where('nis', $req->nis)->first();
        if ($check == null) {
            //simpan
            Siswa::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/siswa');
        } else {
            if ($id == $check->id) {
                Siswa::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/siswa');
            } else {
                toastr()->error('nis siswa Sudah ada');
                return back();
            }
        }
    }
    public function siswadelete($id)
    {
        Siswa::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }


    public function predikat()
    {
        $data = Predikat::orderBy('id', 'DESC')->get();

        return view('superadmin.predikat.index', compact('data'));
    }
    public function predikatcreate()
    {
        return view('superadmin.predikat.create');
    }
    public function predikatstore(Request $req)
    {
        $attr = $req->all();

        $check = Predikat::where('predikat', $req->predikat)->first();
        if ($check == null) {
            Predikat::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/predikat');
        } else {
            toastr()->error('nilai huruf Sudah Ada');
            return back();
        }
    }
    public function predikatedit($id)
    {
        $data = Predikat::find($id);
        return view('superadmin.predikat.edit', compact('data'));
    }
    public function predikatupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = Predikat::where('predikat', $req->predikat)->first();
        if ($check == null) {
            //simpan
            Predikat::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/m/predikat');
        } else {
            if ($id == $check->id) {
                Predikat::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/m/predikat');
            } else {
                toastr()->error('nilai huruf predikat Sudah ada');
                return back();
            }
        }
    }
    public function predikatdelete($id)
    {
        Predikat::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }


    public function pkg()
    {
        $data = PKG::orderBy('id', 'DESC')->get();

        return view('superadmin.pkg.index', compact('data'));
    }
    public function pkgcreate()
    {
        $periode =  Periode::get();
        $guru =  Guru::get();
        $kelas =  Kelas::get();

        return view('superadmin.pkg.create', compact('periode', 'guru', 'kelas'));
    }

    public function pkgstore(Request $req)
    {
        $attr = $req->all();

        $check = PKG::where('periode_id', $req->periode_id)->where('kelas_id', $req->kelas_id)->first();
        if ($check == null) {
            PKG::create($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/t/pkg');
        } else {
            toastr()->error('Kelas Pada Periode Sudah ada');
            return back();
        }
    }
    public function pkgedit($id)
    {
        $data = PKG::find($id);
        $periode =  Periode::get();
        $guru =  Guru::get();
        $kelas =  Kelas::get();
        return view('superadmin.pkg.edit', compact('data', 'periode', 'guru', 'kelas'));
    }
    public function pkgupdate(Request $req, $id)
    {
        $attr = $req->all();
        $check = PKG::where('periode_id', $req->periode_id)->where('kelas_id', $req->kelas_id)->first();
        if ($check == null) {
            //simpan
            PKG::find($id)->update($attr);
            toastr()->success('Berhasil disimpan');
            return redirect('/t/pkg');
        } else {
            if ($id == $check->id) {
                PKG::find($id)->update($attr);
                toastr()->success('Berhasil diupdate');
                return redirect('/t/pkg');
            } else {
                toastr()->error('Kelas Pada Periode Sudah ada');
                return back();
            }
        }
    }
    public function pkgdelete($id)
    {
        PKG::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return back();
    }

    public function tambahsiswa($id)
    {
        $pkg = PKG::find($id);
        $siswa = Siswa::get();
        $data = PKGsiswa::where('periode_kelas_guru_id', $id)->get();
        return view('superadmin.pkg.tambahsiswa', compact('pkg', 'siswa', 'id', 'data'));
    }

    public function simpantambahsiswa(Request $req, $id)
    {
        $check = PKGsiswa::where('periode_id', PKG::find($id)->periode_id)->where('siswa_id', $req->siswa_id)->first();
        if ($check == null) {
            $n = new PKGsiswa;
            $n->periode_kelas_guru_id = $id;
            $n->siswa_id = $req->siswa_id;
            $n->periode_id = PKG::find($id)->periode_id;
            $n->save();
            toastr()->success('berhasil Di simpan');
        } else {
            toastr()->error('Siswa ini sudah di tambahkan berada di kelas ' . $check->pkg->kelas->nama);
        }
        return back();
    }

    public function deletetambahsiswa($id, $ids)
    {
        PKGsiswa::find($ids)->delete();
        toastr()->success('berhasil Di Hapus');
        return back();
    }


    public function tambahmapel($id)
    {
        $pkg = PKG::find($id);
        $mapel = Mapel::get();
        $data = PKGmapel::where('periode_kelas_guru_id', $id)->get();
        return view('superadmin.pkg.tambahmapel', compact('pkg', 'mapel', 'id', 'data'));
    }

    public function simpantambahmapel(Request $req, $id)
    {
        $check = PKGmapel::where('periode_kelas_guru_id', $id)->where('mapel_id', $req->mapel_id)->first();
        if ($check == null) {
            $n = new PKGmapel;
            $n->periode_kelas_guru_id = $id;
            $n->mapel_id = $req->mapel_id;
            $n->periode_id = PKG::find($id)->periode_id;
            $n->save();
            toastr()->success('berhasil Di simpan');
        } else {
            toastr()->error('Mapel ini sudah di tambahkan');
        }
        return back();
    }
    public function deletetambahmapel($id, $idm)
    {
        PKGmapel::find($idm)->delete();
        toastr()->success('berhasil Di Hapus');
        return back();
    }

    // public function laporan()
    // {
    //     return view('superadmin.laporan.index');
    // }

    // public function cetakHakim()
    // {
    //     $data = Hakim::get();
    //     $pdf = PDF::loadView('superadmin.laporan.pdf_hakim', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetakJaksa()
    // {
    //     $data = Jaksa::get();
    //     $pdf = PDF::loadView('superadmin.laporan.pdf_jaksa', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetakPanitera()
    // {
    //     $data = Panitera::get();
    //     $pdf = PDF::loadView('superadmin.laporan.pdf_panitera', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetakDataPidana()
    // {
    //     $data = Perkara::where('jenis_perkara', 1)->get();
    //     $pdf = PDF::loadView('superadmin.laporan.pidana', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetakDataPerdata()
    // {
    //     $data = Perkara::where('jenis_perkara', 2)->get();
    //     $pdf = PDF::loadView('superadmin.laporan.perdata', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetakDataTipikor()
    // {
    //     $data = Perkara::where('jenis_perkara', 3)->get();
    //     $pdf = PDF::loadView('superadmin.laporan.tipikor', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetakDataPhi()
    // {
    //     $data = Perkara::where('jenis_perkara', 4)->get();
    //     $pdf = PDF::loadView('superadmin.laporan.phi', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }


    // public function cetaksidangPidana()
    // {
    //     $data = Sidang::where('jenis_perkara', 1)->get();
    //     $pdf = PDF::loadView('superadmin.laporan.sidang_pidana', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetaksidangPerdata()
    // {
    //     $data = Sidang::where('jenis_perkara', 2)->get();
    //     $pdf = PDF::loadView('superadmin.laporan.sidang_perdata', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetaksidangTipikor()
    // {
    //     $data = Sidang::where('jenis_perkara', 3)->get();
    //     $pdf = PDF::loadView('superadmin.laporan.sidang_tipikor', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
    // public function cetaksidangPhi()
    // {
    //     $data = Sidang::where('jenis_perkara', 4)->get();
    //     $pdf = PDF::loadView('superadmin.laporan.sidang_phi', compact('data'))->setPaper('legal');
    //     return $pdf->stream();
    // }
}
