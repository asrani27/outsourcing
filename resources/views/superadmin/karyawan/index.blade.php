@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Karyawan</h3>
                <div class="pull-right box-tools">
                    <a href="/karyawan/create" type="button" class="btn btn-info btn-sm">
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
                            <th>Email</th>
                            <th>Telp</th>
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
                            <td>{{$item->nik}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->jabatan->nama}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->telp}}</td>

                            <td>
                                <a href="/karyawan/edit/{{$item->id}}" class="btn btn-sm btn-info"><i
                                        class="fa fa-edit"></i> Edit</a>
                                <a href="/karyawan/delete/{{$item->id}}" class="btn btn-sm btn-info"
                                    onclick="return confirm('Yakin ingin di hapus?');"><i class="fa fa-trash"></i>
                                    Delete</a>
                                @if ($item->user == null)

                                <a href="/karyawan/akun/{{$item->id}}" class="btn btn-sm btn-info"><i
                                        class="fa fa-lock"></i> Buat Akun</a>
                                @else
                                <a href="/karyawan/reset/{{$item->id}}" class="btn btn-sm btn-info"><i
                                        class="fa fa-key"></i> Reset Pass</a>
                                @endif
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