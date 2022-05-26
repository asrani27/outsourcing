@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/jabatan/create">
                @csrf
                <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Jabatan</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Jabatan" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gaji Pokok</label>
                        <input type="text" name="gaji" class="form-control" required>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
                    <a href="/jabatan" class="btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush