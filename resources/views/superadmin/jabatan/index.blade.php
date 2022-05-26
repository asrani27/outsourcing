@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Jabatan</h3>
                <div class="pull-right box-tools">
                    <a href="/jabatan/create" type="button" class="btn btn-info btn-sm">
                        <i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Gaji</th>
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
                            <td>{{$item->nama}}</td>
                            <td>{{number_format($item->gaji)}}</td>
                            <td>
                                <a href="/jabatan/edit/{{$item->id}}" class="btn btn-sm btn-info"><i
                                        class="fa fa-edit"></i> Edit</a>
                                <a href="/jabatan/delete/{{$item->id}}" class="btn btn-sm btn-info"
                                    onclick="return confirm('Yakin ingin di hapus?');"><i class="fa fa-trash"></i>
                                    Delete</a>
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