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
            <form role="form" method="post" action="/cuti/edit/{{$data->id}}">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Karyawan</label>
                        <select name="karyawan_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach (karyawan() as $item)
                            <option value="{{$item->id}}" {{$data->karyawan_id == $item->id ?
                                'selected':''}}>{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Mulai Cuti</label>
                        <input type="date" name="mulai" class="form-control" value="{{$data->mulai}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Berakhir Cuti</label>
                        <input type="date" name="sampai" class="form-control" value="{{$data->sampai}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" value="{{$data->keterangan}}">
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Update</button>
                    <a href="/cuti" class="btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush