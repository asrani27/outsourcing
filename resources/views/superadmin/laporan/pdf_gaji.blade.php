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
            font-weight: bold;
            border: 2px solid #000;
            font-size: 10px;
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
                    <span style="font-size: 18px;"><strong>SLIP GAJI</strong></span><br />
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
                <td style="border: 0px;" width="15%">NIK</td>
                <td style="border: 0px;" width="55%">: {{$data->karyawan->nik}}</td>
                <td style="border: 0px;" width="10%">Alamat</td>
                <td style="border: 0px;">: {{$data->karyawan->alamat}}</td>
            </tr>
            <tr style="border: 0px;">
                <td style="border: 0px;">Nama</td>
                <td style="border: 0px;">: {{$data->karyawan->nama}}</td>
                <td style="border: 0px;">Jabatan</td>
                <td style="border: 0px;">: {{$data->karyawan->jabatan->nama}} </td>
            </tr>
        </table>
        <hr>
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
        <table cellpadding="5" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Keterangan</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                <tr>
                    <td>1</td>
                    <td>Gaji Pokok</td>
                    <td>{{number_format($data->gaji_pokok)}}</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bonus</td>
                    <td>{{number_format($data->bonus)}}</td>
                </tr>
                <tr>
                    <td colspan=2>Total</td>
                    <td>{{number_format($data->bonus + $data->gaji_pokok)}}</td>
                </tr>
            </tbody>
        </table>
        <br />
        <table width="100%" border="0">
            <tr style="border: 0px;">
                <td width="70%" style="border: 0px; text-align:center">
                    PENERIMA
                    <br />
                    <br />
                    <br />
                    <br />
                    {{$data->karyawan->nama}}
                </td>
                <td width="30%" style="border: 0px;">
                    PERIODE GAJI : {{convertBulan($data->periode->bulan)}} {{$data->periode->tahun}}
                    <br />
                    <br />
                    <br />
                    <br />


                </td>
            </tr>
        </table>

    </main>
</body>

</html>