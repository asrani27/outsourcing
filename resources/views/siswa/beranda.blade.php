@extends('layouts.app')
@section('title')
Beranda
@endsection
@section('content')

<div class="callout callout-info">
    Hi, {{Auth::user()->name}}, Selamat Datang Di Aplikasi Sistem Raport SMAN 1 SUNGAI PANDAN
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Export PDF Raport</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="post" action="/siswa/raport" target="_blank">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIS Anda</label>
                        <input type="text" name="nis" class="form-control" value="{{Auth::user()->siswa->nis}}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tahun Ajar / Periode</label>
                        <select name="periode_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach ($periode as $item)
                            <option value="{{$item->id}}">{{$item->tahun}} - {{$item->semester == '1'?
                                'Ganjil':'Genap'}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">CETAK</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection