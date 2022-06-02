@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Cuti</h3>
                <div class="pull-right box-tools">
                    <a href="/cuti/create" type="button" class="btn btn-info btn-sm">
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
                            <th>Tgl Mulai</th>
                            <th>Tgl Selesai</th>
                            <th>Total Cuti</th>
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
                            <td>{{\Carbon\Carbon::parse($item->mulai)->format('d-m-Y')}}</td>
                            <td>{{\Carbon\Carbon::parse($item->sampai)->format('d-m-Y')}}</td>
                            <td>{{\Carbon\Carbon::parse($item->sampai)->diffInDays($item->mulai)}} Hari</td>

                            <td>
                                <a href="/cuti/edit/{{$item->id}}" class="btn btn-sm btn-info"><i
                                        class="fa fa-edit"></i> Edit</a>
                                <a href="/cuti/delete/{{$item->id}}" class="btn btn-sm btn-info"
                                    onclick="return confirm('Yakin ingin di hapus?');"><i class="fa fa-trash"></i>
                                    Delete</a>
                                <a href="/cuti/print/{{$item->id}}" target="_blank" class="btn btn-sm btn-info"><i
                                        class="fa fa-print"></i>
                                    Print</a>
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