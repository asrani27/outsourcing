@extends('layouts.app')
@section('title')
Beranda
@endsection
@section('content')

<div class="callout callout-info">
    Hi, {{Auth::user()->name}}, Selamat Datang Di Aplikasi Outsourcing
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Absensi Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/beranda/karyawan/absensi">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">TANGGAL</label>
                        <input type="date" name="tanggal" class="form-control"
                            value="{{\Carbon\Carbon::now()->format('Y-m-d')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK</label>
                        <input type="text" name="nik" class="form-control" value="{{Auth::user()->karyawan->nik}}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{Auth::user()->karyawan->nama}}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jam</label>
                        <input type="time" name="jam" class="form-control">
                    </div>
                    <div class="form-group">

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info btn-block" name="button" value="masuk"><i
                                    class="fa fa-save"></i>
                                MASUK</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info btn-block" name="button" value="keluar"><i
                                    class="fa fa-save"></i>
                                KELUAR</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection