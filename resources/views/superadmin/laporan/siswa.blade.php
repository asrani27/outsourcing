@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <a href="/laporan/siswa/cetak" class="btn btn-primary" target="_blank">EXPORT PDF</a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush