@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/jabatan/edit/{{$data->id}}">
                @csrf
                <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Jabatan</label>
                        <input type="text" name="nama" class="form-control" value="{{$data->nama}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gaji Pokok</label>
                        <input type="text" name="gaji" class="form-control" value="{{$data->gaji}}" required>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Update</button>
                    <a href="/jabatan" class="btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush