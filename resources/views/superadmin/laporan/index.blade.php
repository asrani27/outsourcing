@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan</h3>
                <div class="pull-right box-tools">
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <a href="/laporan/karyawan" target="_blank" type="button" class="btn btn-info btn-sm">
                    <i class="fa fa-users"></i> Data Karyawan</a>

                <a href="/laporan/cuti" target="_blank" type="button" class="btn btn-info btn-sm">
                    <i class="fa fa-users"></i> Data Cuti</a>

                <a href="/laporan/lembur" target="_blank" type="button" class="btn btn-info btn-sm">
                    <i class="fa fa-users"></i> Data Lembur</a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush