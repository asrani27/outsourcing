@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/karyawan/edit/{{$data->id}}">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK</label>
                        <input type="text" name="nik" class="form-control" value="{{$data->nik}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Karyawan</label>
                        <input type="text" name="nama" class="form-control" value="{{$data->nama}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jenis Kelamin</label>
                        <select name="jkel" class="form-control" required>
                            <option value="">-pilih-</option>
                            <option value="L" {{$data->jkel == 'L' ? 'selected':''}}>Laki-Laki</option>
                            <option value="P" {{$data->jkel == 'P' ? 'selected':''}}>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jabatan</label>
                        <select name="jabatan_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach (jabatan() as $item)
                            <option value="{{$item->id}}" {{$data->jabatan_id == $item->id ?
                                'selected':''}}>{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Vendor</label>
                        <select name="vendor_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach (vendor() as $item)
                            <option value="{{$item->id}}" {{$data->vendor_id == $item->id ?
                                'selected':''}}>{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{$data->alamat}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" value="{{$data->tempat_lahir}}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="{{$data->tanggal_lahir}}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Penugasan</label>
                        <input type="text" name="tempat_penugasan" class="form-control"
                            value="{{$data->tempat_penugasan}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Masuk Kerja</label>
                        <input type="date" name="tmt" class="form-control" value="{{$data->tmt}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telp</label>
                        <input type="text" name="telp" class="form-control" value="{{$data->telp}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control" value="{{$data->email}}" required>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Update</button>
                    <a href="/karyawan" class="btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush