@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lembur</h3>
                <div class="pull-right box-tools">
                    <a href="/lembur/create" type="button" class="btn btn-info btn-sm">
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
                            <th>Tanggal</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                            <th>Total Lembur</th>
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
                            <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d-m-Y')}}</td>
                            <td>{{\Carbon\Carbon::parse($item->mulai)->format('H:i:s')}}</td>
                            <td>{{\Carbon\Carbon::parse($item->sampai)->format('H:i:s')}}</td>
                            <td>{{\Carbon\Carbon::parse($item->sampai)->diff($item->mulai)->format('%H:%I:%S')}}
                            </td>

                            <td>
                                <a href="/lembur/edit/{{$item->id}}" class="btn btn-sm btn-info"><i
                                        class="fa fa-edit"></i> Edit</a>
                                <a href="/lembur/delete/{{$item->id}}" class="btn btn-sm btn-info"
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