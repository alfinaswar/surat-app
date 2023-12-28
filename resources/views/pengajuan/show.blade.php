<header class="page-header">
<body onload="window.print()">
        <div class="right-wrapper text-left">
            <ol class="breadcrumbs">

            </ol>
        </div>

        <style>
            hr {
                display: block;
                margin-top: 0em;
                margin-bottom: 0em;
                margin-left: auto;
                margin-right: auto;
                border-top: 3px solid black;
            }

            input {
                width: 97%;
                height: auto;
                border: 0px dotted #f30;
                border-radius: 4px;
                -moz-border-radius: 8px;
                margin-right: 0px;
                //font-family:Garamond;
                //background:#363;
            }

            .myinput {
                width: 97%;
                height: auto;
                border: 0px solid #000;
                border-radius: 0px;
                -moz-border-radius: 8px;
                margin-left: 0px;
                background: #b7d5ac;
            }

            .myselect {
                width: 97%;
                height: auto;
                border: 0px solid #000;
                border-radius: 4px;
                -moz-border-radius: 8px;
                margin: 0px;
                //background:#b7d5ac;
            }

            .mydiv br {
                display: none;
            }

            .mydiv p {
                padding: 0;
                margin: 0;
            }
        </style>
    </header>
    
    <div class="col-xl-10 mb-8 mb-xl-0;" style=" margin: auto;">
        <div class="card-body" style="background-color:#FFFFFF; padding:5%;">
            <div class="table-responsive">
                <div class="text-center mt-0">
                    <h2>
                        <font color='#000000' face='Times New Roman'></font>
                    </h2>
                </div>
                <font color='#000000'>
                    <form action="{{ route('pengajuan.update', $pengajuan->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <table id="tbl_1" style="font-family:Times New Roman; font-size:15px" border="0"
                            width="100%" color="red">
                            <tr>
                                <td style="text-align: center" width="40%">
                                    <img src="{{ Storage::url('public/login-bg/logo-surat.png') }}" width="70px"
                                        height="70px">
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">
                                    <b>KEPOLISIAN NEGARA REPUBLIK INDONESIA DAERAH RIAU<br>RESOR ROKAN HILIR</b><br>
                                    Jalan lintas Riau - Sumut Km.167 Banjar XII 2893
                                    <hr style="height:2px;border-width:0;color:gray;background-color:rgb(5, 0, 0)">
                                </td>
                                <td style="text-align:right;">
                                    <br><br><br>
                                    Ujung Tanjung, {{ date('d F Y') }}
                                </td>
                            </tr>
                        </table>
                        <table id="tbl_1" style="font-family:Times New Roman; font-size:15px" border="0"
                            width="100%" color="red">

                            <tr>
                                <td width="15%">Nomor</td>
                                <td>:&nbsp;{{ $pengajuan->no_surat }}</td>
                            </tr>
                            <tr>
                                <td width="15%">Klasifikasi </td>
                                <td>:&nbsp;{{ $pengajuan->klasifikasi }}</td>
                            </tr>
                            <tr>
                                <td width="15%">Lampiran </td>
                                <td>:&nbsp;{{ $pengajuan->lampiran ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td width="15%">Perihal </td>
                                <td>:&nbsp;{{ $pengajuan->perihal }}</td>
                            </tr>

                        </table>
                        <table id="tbl_1" style="font-family:Times New Roman; font-size:15px" border="0"
                            width="100%" color="red">

                            <tr>
                                <td width="70%">
                                    <font color="white">i </font>
                                </td>
                                <td style="text-align: left">Kepada <br>Yth. Kepala Kepolisian Daerah Riau
                                    <br>&nbsp;
                                    <br>&nbsp;
                                    <br>&nbsp;
                                    <br>&nbsp;
                                    <br>&nbsp;
                                    <br>&nbsp;
                                    di Pekanbaru
                                </td>
                            </tr>

                            </tr>
                        </table>

                        <table id="myTable1" style="font-family:Times New Roman; font-color:black; font-size:15px"
                            border="0" width="100%">
                            <tr>
                                <td colspan="6">u.p Kabid Propam Polda Riau </td>
                            </tr>
                            <tr>
                                <td width="10%">1. Rujukan</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="vertical-align: top">A.</td>
                                <td>Surat telegram Kepala Kepolisian Negara Republik Indonesia nomor :
                                    ST/1567/VII/DIK.2.2./2023 tanggal
                                    18 Juli 2023 Tentang STWO Awal Seleksi Pendidikan Alih Golongan ( PAG ) Dari Bintara Ke
                                    Perwira
                                    Polri TA.2023 Dan Sekolah Bintara Polisi ( SBP ) Dari TA Ke BA TA.2024;</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="vertical-align: top">B.</td>
                                <td>Surat telegram Kapolda Riau nomor : ST/782/VII/DIK.2.2./2023 tanggal 19 Juli 2023
                                    tentang STWO awal
                                    seleksi pendidikan alih golongan (PAG) dari Bintara ke Perwira Polri T.A. 2023.
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">2.</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="vertical-align: top" colspan="2">Sehubungan dengan rujukan tersebut diatas,
                                    Dengan ini kami mohon kepada Ka agar menerbitkan SuratKeterangan Hasil Pemeriksaan
                                    Penelitian (SKHP) anggota Polres Rokan Hilir yang akan mengikuti Seleksi
                                    Pendidikan Ahli Golongan (PAG) dari Bintara ke Perwira T.A. 2023 tersebut (daftar nama
                                    terlampir).

                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="10%">3.</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="vertical-align: top" colspan="2">Demikian untuk menjadi maklum.

                                </td>
                                <td></td>
                            </tr>
                        </table>
                        <table id="myTable1" style="font-family:Times New Roman; font-color:black; font-size:15px"
                            border="0" width="100%">
                            <tr>
                                <td width="50%">
                                    <br><br><br><br><br><br><br>Tembusan : <br>- <u>Kasubbid Paminal Bid Propam Polda
                                        Riau</u>


                                </td>
                                <td>
                                    KEPALA KEPOLISIAN RESOR ROKAN HILIR
                                    <br><br><br><br><br><br><br>
                                    Nama
                                    <hr>
                                    qw3


                                </td>
                            </tr>

                        </table>
                        <br>
                        <table id="myTable1" style="font-family:Times New Roman; font-color:black; font-size:15px"
                            border="0" width="100%">
                            <tr>
                                <td style="text-align: center" width="50%">
                                    KEPOLISIAN NEGARA REPUBLIK INDONESIA<br>
                                    DAERAH RIAU<br>
                                    RESOR ROKAN HILIR<br><u>
                                    Jalan lintas Riau-Sumut Km.167 Banjar XII 28983</u>
                                    <br>

                                </td>
                                <td style="text-align:justify">
                                    SURAT KAPOLRES ROKAN HILIR<br>
                                    NOMOR : B / 583 / VIII / HUK.12.10./ 2023<br>
                                    TANGGAL : 08 AGUSTUS 2023
                                </td>
                            </tr>

                        </table><br><br>
                        <center>
                            <p style="font-family:Times New Roman; font-color:black; font-size:15px"><b>
                                    DAFTAR NAMA-NAMA PERSONEL POLRES ROKAN HILIR<br>
                                    YANG AKAN MENGIKUTI SELEKSI PENDIDIKAN AHLI GOLONGAN (PAG)<br>
                                    DARI BINTARA KE PERWIRA T.A. 2023</b></p>
                        </center>
                        <hr><br>
                        <table id="myTable1" style="font-family:Times New Roman; font-color:black; font-size:15px"
                            border="1" width="100%">
                            <thead>
                                <tr>
                                    <th style="text-align:center" bgcolor="#C6DEFF" width="10%"> NAMA</th>
                                    <th style="text-align:center" bgcolor="#C6DEFF" width="15%"> PANGKAT </th>
                                    <th style="text-align:center" bgcolor="#C6DEFF" width="25%"> NRP </th>
                                    <th style="text-align:center" bgcolor="#C6DEFF" width="25%"> JABATAN</th>
                                    <th style="text-align:center" bgcolor="#C6DEFF" width="5%"> KETERANGAN </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="text-align: center">
                                    <td>
                                        1
                                    </td>
                                    <td style="text-align:center">
                                        2
                                    </td>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        4
                                    </td>

                                    <td>
                                        5
                                    </td>
                                </tr>
                                <tr style="text-align:left">
                                    <td>
                                        {{ $pengajuan->id_polisi }}
                                    </td>
                                    <td>
                                        {{ $pengajuan->pangkat }}
                                    </td>
                                    <td>
                                        {{ $pengajuan->nrp }}
                                    </td>
                                    <td>
                                        {{ $pengajuan->jabatan }}
                                    </td>

                                    <td>
                                        {{ $pengajuan->keterangan }}
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <table id="tbl_3" border="0"
                            style="width:100%; font-family:Times New Roman; font-color:black; font-size:15px;">
                            <tbody>
                                <tr>
                                    <td height="20px"></td>
                                </tr>
                                <tr style="height: 35px;">

                                </tr>
                                <tr style="height: 18px;">
                                    <td style="text-align:center; width:25.5%;" colspan="2"></td>
                                    <td style="text-align:center; width:49%;" colspan="3"> </td>
                                    <td style="text-align:center; width:25.5%;" colspan="2"><b>KEPALA KEPOLISIAN ROKAN
                                            HILIR</b></td>
                                </tr>
                                <tr style="height:60px;">

                                    <td style="text-align:center; width:23%;"></td>
                                    <td style="text-align:center; width:2.5%;"></td>
                                    <td style="text-align:center; width:23%;"> </td>
                                    <td style="text-align:center; width:2%;"></td>
                                    <td style="text-align:center; width:24%;"> </td>
                                    <td style="text-align:center; width:2.5%;"></td>
                                    <td style="text-align:center; width:23%;"><?php echo '<img src="" height="70">'; ?></td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; "></td>
                                    <td style="text-align:center; "></td>
                                    <td style="text-align:center; "></td>
                                    <td style="text-align:center; "></td>
                                    <td style="text-align:center; "></td>
                                    <td style="text-align:center; "></td>
                                    <td style="text-align:center; ">
                                        <hr>
                                        </hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; vertical-align:top;"></td>
                                    <td style="text-align:center; "></td>
                                    <td style="text-align:center; vertical-align:top;"></td>
                                    <td style="text-align:center; "></td>
                                    <td style="text-align:center; vertical-align:top;"></td>
                                    <td style="text-align:center; "></td>
                                    <td style="text-align:center; vertical-align:top;"><i></i></td>
                                </tr>
                            </tbody>

                        </table>

            </div>

            <br><br>
            <div>
                
                
                <button type="submit" class="btn btn-primary btn-md btn-block">Submit</button>
                
                {{-- <a href="{{ route('pengajuan.tolaksurat',$pengajuan->id) }}" class="btn btn-danger btn-md btn-block">Tolak Surat</a> --}}
            </div>
            <br><br>
        </div>
        </form>
</body>