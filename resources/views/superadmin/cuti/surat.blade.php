<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="en-us" http-equiv="Content-Language" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Untitled 1</title>
    {{-- <style type="text/css">
        .auto-style1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: x-small;
        }
    </style> --}}
    <style>
        @page {
            margin-top: 80px;
            margin-left: 50px;
        }

        header {
            position: fixed;
            top: -60px;
            left: 0px;
            right: 0px;
            height: 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            /** Extra personal styles **/
            /* background-color: #03a9f4;
            color: white;
            text-align: center; 
            line-height: 35px;*/
        }

        tr,
        th,
            {
            border: 2px solid #000;
            font-size: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }

        td {
            border: 2px solid #000;
            font-size: 14px;
        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 50px;
            font-size: 8px;
            font-family: Arial, Helvetica, sans-serif;
            /** Extra personal styles **/
            /* background-color: #03a9f4;
            color: white;
            text-align: center;
            line-height: 35px; */
        }
    </style>
</head>

<body>
    <header>

        <table border="0" width="100%">
            <tr>
                <td style="border: 0px;" align="right" width="10%">
                    <img src="http://annualreport.id/assets/bankkalsel-1477477174.png" width="140px" height="60px">
                </td>
                <td style="border: 0px;" valign="top" align="center" width="50%">
                    <br />
                    <span style="font-size: 18px;"><strong>KANTOR CABANG UTAMA BANK KALSEL</strong></span><br />
                    <span style="font-size: 14px;"><strong>JL. LAMBUNG MANGKURAT NO 7 BANJARMASIN
                            70111</strong></span><br />
                    <span style="font-size: 14px;"><strong>Telp. 0511 3350726 Fax 0511 3357330</strong></span><br />
                    <span style="font-size: 14px;"><strong>BANJARMASIN</strong></span>
                    </strong></span>
                </td>
                <td style="border: 0px;" align="right" width="10%">
                    {{-- <img src="http://annualreport.id/assets/bankkalsel-1477477174.png" width="140px" height="60px">
                    --}}
                </td>
            </tr>
        </table>
        <hr>
        <table border="0" width="100%">
            <tr style="border: 0px;">
                <td style="border: 0px;" width="75%"></td>
                <td style="border: 0px;" width="25%">Banjarmasin, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}
                </td>
            </tr>
        </table>
        {{-- <p><span class="auto-style1"><strong>LAPORAN DATA SISWA </strong></span></p> --}}
    </header>
    <footer>
        <hr>
        <p>Tanggal Cetak : {{\Carbon\Carbon::now()->format('d-m-Y H:i:s')}}
        </p>
    </footer>
    <br />
    <br />
    <br />
    <br />
    <main>
        <center> <strong><u>Surat Izin Cuti Tahunan</u></strong></center>
        <br />
        <br />
        Diberikan Cuti Tahunan Kepada Karyawan :<br />
        <table width="100%" border="0">
            <tr style="border: 0px; font-family:'Times New Roman', Times, serif; font-size:14px;">
                <td width="10%" style="border: 0px;">NIK</td>
                <td width="1%" style="border: 0px;">:</td>
                <td width="40%" style="border: 0px;">{{$data->karyawan->nik}}</td>
            </tr>
            <tr style="border: 0px; font-family:'Times New Roman', Times, serif; font-size:14px;">
                <td width="10%" style="border: 0px;">NAMA</td>
                <td width="1%" style="border: 0px;">:</td>
                <td width="40%" style="border: 0px;">{{$data->karyawan->nama}}</td>
            </tr>
            <tr style="border: 0px; font-family:'Times New Roman', Times, serif; font-size:14px;">
                <td width="10%" style="border: 0px;">JABATAN</td>
                <td width="1%" style="border: 0px;">:</td>
                <td width="40%" style="border: 0px;">{{$data->karyawan->jabatan->nama}}</td>
            </tr>
            <tr style="border: 0px; font-family:'Times New Roman', Times, serif; font-size:14px;">
                <td width="10%" style="border: 0px;">PENEMPATAN</td>
                <td width="1%" style="border: 0px;">:</td>
                <td width="40%" style="border: 0px;">{{$data->karyawan->tempat_penugasan}}</td>
            </tr>
        </table>
        <br />
        Selama 8 Hari, Terhitung Dari Tanggal, Sampai Tanggal dengan ketentuan sebagai berikut :<br />
        a. Sebelum menjalankan cuti, karyawan wajib menyerahkan pekerjaan nya kepada atasan langsung atau kepada rekan
        kerja lain yan di tunjuk.<br />
        b. Setelah menjalankan cuti, karyawan diwajibkan melapor kepada atasan dan kembali bekerja sebagaimana
        mestinya.<br /><br />

        Demikian Surat cuti ini dibuat untuk dapat digunakan sebagaimana mestinya.
        <br /><br />

        <table width="100%" border="0">
            <tr style="border: 0px; font-family:'Times New Roman', Times, serif;">
                <td width="50%" style="border: 0px; text-align:center">Mengetahui, </td>
                <td width="50%" style="border: 0px; text-align:center">Dengan hormat,</td>
            </tr>
            <tr style="border: 0px; font-family:'Times New Roman', Times, serif;">
                <td width="50%" style="border: 0px; text-align:center"><br /><br /><br /><br /><u>Heru
                        Dwimoy</u><br />Pinbag Bagian Nasabah
                </td>
                <td width="50%" style="border: 0px; text-align:center"><br /><br /><br /><br />{{$data->karyawan->nama}}
                </td>
            </tr>
        </table>
    </main>
</body>

</html>