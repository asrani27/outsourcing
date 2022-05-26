@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Data Gaji bulan {{convertBulan($periode->bulan)}} {{$periode->tahun}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/gaji/periode/{{$id}}/create">
                @csrf
                <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Karyawan</label>
                        <select name="karyawan_id" class="form-control">
                            <option value="">-pilih-</option>
                            @foreach (karyawan() as $item)
                            <option value="{{$item->id}}" {{old('karyawan_id')==$item->id ?
                                'selected':''}}>{{$item->nik}} - {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-info" name="button" value="tampilkan"><i
                                class="fa fa-user"></i>
                            Tampilkan</button>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK</label>
                        <input type="text" name="nik" class="form-control" value="{{$data == null ? '': $data->nik}}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{$data == null ? '': $data->nama}}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control"
                            value="{{$data == null ? '': $data->alamat}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gaji Pokok</label>
                        <input type="text" name="gaji_pokok" class="form-control"
                            value="{{$data == null ? '': number_format($data->jabatan->gaji)}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Lembur (Jam)</label>
                        <input type="text" name="lembur" class="form-control"
                            value="{{$data == null ? '': $data->lembur}}" onkeypress="return hanyaAngka(event)">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bonus (Rp)</label>
                        <input type="text" name="bonus" class="form-control"
                            value="{{$data == null ? '': $data->bonus}}" onkeypress="return hanyaAngka(event)">
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-info" name="button" value="simpan"><i class="fa fa-save"></i>
                        Simpan</button>
                    <a href="/gaji/periode/{{$id}}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush