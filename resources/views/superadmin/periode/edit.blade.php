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
            <form role="form" method="post" action="/periode/edit/{{$data->id}}">
                @csrf
                <div class="box-body">


                    <div class="form-group">
                        <label for="exampleInputEmail1">Bulan</label>
                        <select name="bulan" class="form-control" required>
                            <option value="">-pilih-</option>
                            <option value="01" {{$data->bulan == '01' ? 'selected':''}}>Januari</option>
                            <option value="02" {{$data->bulan == '02' ? 'selected':''}}>Februari</option>
                            <option value="03" {{$data->bulan == '03' ? 'selected':''}}>Maret</option>
                            <option value="04" {{$data->bulan == '04' ? 'selected':''}}>April</option>
                            <option value="05" {{$data->bulan == '05' ? 'selected':''}}>Mei</option>
                            <option value="06" {{$data->bulan == '06' ? 'selected':''}}>Juni</option>
                            <option value="07" {{$data->bulan == '07' ? 'selected':''}}>Juli</option>
                            <option value="08" {{$data->bulan == '08' ? 'selected':''}}>Agustus</option>
                            <option value="09" {{$data->bulan == '09' ? 'selected':''}}>September</option>
                            <option value="10" {{$data->bulan == '10' ? 'selected':''}}>Oktober</option>
                            <option value="11" {{$data->bulan == '11' ? 'selected':''}}>November</option>
                            <option value="12" {{$data->bulan == '12' ? 'selected':''}}>Desember</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tahun</label>
                        <input type="text" name="tahun" class="form-control" value="{{$data->tahun}}"
                            onkeypress="return hanyaAngka(event)" required>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Update</button>
                    <a href="/periode" class="btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush