@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Gaji Karyawan bulan {{convertBulan($periode->bulan)}}
                    {{$periode->tahun}}
                </h3>
                <div class="pull-right box-tools">
                    <a href="/gaji" type="button" class="btn btn-info btn-sm">
                        <i class="fa fa-arrow-left"></i> Kembali</a>
                    <a href="/gaji/periode/{{$periode->id}}/create" type="button" class="btn btn-info btn-sm">
                        <i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Gaji Pokok</th>
                            <th>Lembur</th>
                            <th>Bonus</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->karyawan->nik}}</td>
                            <td>{{$item->karyawan->nama}}</td>
                            <td>{{$item->karyawan->jabatan == null ? '': $item->karyawan->jabatan->nama}}</td>
                            <td>{{number_format($item->gaji_pokok)}}</td>
                            <td>{{number_format($item->lembur)}}</td>
                            <td>{{number_format($item->bonus)}}</td>
                            <td>{{number_format($item->total)}}</td>
                            <td>
                                <a href="/gaji/periode/{{$item->id}}/delete"
                                    onclick="return confirm('Yakin ingin di hapus?');" class="btn btn-sm btn-info"><i
                                        class="fa fa-trash"></i>
                                    Delete</a>

                                <a href="/gaji/periode/{{$item->id}}/cetak" target="_blank"
                                    class="btn btn-sm btn-info"><i class="fa fa-money"></i>
                                    Slip Gaji</a>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush