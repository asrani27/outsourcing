@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Gaji</h3>
                <div class="pull-right box-tools">
                    {{-- <a href="/gaji/create" type="button" class="btn btn-info btn-sm">
                        <i class="fa fa-plus"></i> Tambah Data</a> --}}
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bulan Tahun</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach (periode() as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{convertBulan($item->bulan)}} {{$item->tahun}}</td>
                            <td>
                                <a href="/gaji/periode/{{$item->id}}" class="btn btn-sm btn-info"><i
                                        class="fa fa-money"></i> Gaji Karyawan</a>
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