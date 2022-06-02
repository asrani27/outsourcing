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
                <br />
                <br />

                LAPORAN ABSENSI
                <form action="/laporan/absensi" method="POST" target="_blank">
                    @csrf
                    <input type="date" class="form-control" name="tanggal"
                        value="{{\Carbon\Carbon::now()->format('Y-m-d')}}">
                    {{-- <select name="bulan" class="form-control" required>
                        <option value="">-pilih Bulan-</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                    <select name="tahun" class="form-control" required>
                        <option value="">-pilih Tahun-</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select> --}}
                    <button type="submit" class="btn btn-info btn-block btn-sm">
                        <i class="fa fa-print"></i> Print</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush