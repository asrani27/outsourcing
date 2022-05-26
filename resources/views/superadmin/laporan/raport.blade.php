@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Cetak Raport</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="post" action="/laporan/raport">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIS Siswa</label>
                        <input type="text" name="nis" class="form-control" placeholder="NIS SISWA" required>
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

@push('js')

@endpush