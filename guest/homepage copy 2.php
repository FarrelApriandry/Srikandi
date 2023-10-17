<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Srikandi -  Homepage</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
    <body>
        <div class="app">
            <div class="sidebar">
                <header>
                    SRIKANDI
                </header>
                <div class="sidebar-profile">
                    <img src="../img/profile.jpg" alt="">
                    <div class="sidebar-profile-information">
                        <h3>Kobe Bryant</h3>
                        <p>Professional Basketball Player</p>
                        <p class="last-profile-sidebar">LA Lakers - NBA - Superstar</p>
                    </div>
                </div>
                <nav class="sidebar-nav">
                    <ul>
                        <li class="unactive-item">
                            <img src="../img/logo.png" alt="" srcset=""><a href="./homepage.php">Beranda</a>
                        </li>
                        <li class="unactive-item">
                            <img src="../img/logo.png" alt="" srcset=""><a href="./homepage copy.php">Tandatangan Naskah</span></a>
                        </li>
                        <li class="active-item">
                            <img src="../img/logo.png" alt="" srcset=""><a href="./homepage copy 2.php">Registrasi Naskah Keluar</span></a>
                        </li>
                        <li class="unactive-item">
                            <img src="../img/logo.png" alt="" srcset=""><a href="#">Template Naskah</span></a>
                        </li>
                        <li class="unactive-item">
                            <img src="../img/logo.png" alt="" srcset=""><a href="#">Verifikasi Naskah</span></a>
                        </li>
                        <li class="unactive-item">
                            <img src="../img/logo.png" alt="" srcset=""><a href="#">Naskah Masuk</span></a>
                        </li>
                        <li class="unactive-item">
                            <img src="../img/logo.png" alt="" srcset=""><a href="#">Naskah Keluar</span></a>
                        </li>
                        <li class="unactive-item">
                            <img src="../img/logo.png" alt="" srcset=""><a href="#">Daftar Disposisi</span></a>
                        </li>
                        <li class="unactive-item">
                            <img src="../img/logo.png" alt="" srcset=""><a href="#">Log Disposisi</span></a>
                        </li>
                        <li class="unactive-item">
                            <img src="../img/logo.png" alt="" srcset=""><a href="#">Daftar Tembusan</span></a>
                        </li>
                        <li class="unactive-item">
                            <img src="../img/logo.png" alt="" srcset=""><a href="#">Pengaturan</span></a>
                        </li>
                        <li class="unactive-item">
                            <img src="../img/logo.png" alt="" srcset=""><a href="#">Berkas</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="navbar">
                <button class="btn-menu">
                    <img src="../img/menu.svg" alt="" srcset="" id>
                </button>
                <p>Selamat Datang, Kobe Bryant</p>
                <img src="../img/profile.jpg" id="profile-img" alt="Your Image">
                <button class="btn-dropdown-menu"><img src="../img/down-arrow.svg" alt="" srcset=""></button>
            </div>
            <div class="dashboard-container">
                <div class="dashboard-content">
                    <div class="header-dashboard">
                        <img src="../img/logo.png" alt="" srcset=""><h1><span class="bold-text">Registrasi Naskah</span> - Keluar</h1>
                    </div>
                    <div class="card-rnk">
                        <div class="header-rnk">
                            <p>Form Registrasi Naskah Keluar</p>
                            <p>DETAIL ISI NASKAH</p>
                        </div>
                        <div>
                            <div class="first-input">
                                <form action="./I-regisSuratMasuk.php" method="post" onsubmit="return konfirmasiSubmit()">
                                    <label for="ttg">Tanggal Permohonan:</label>
                                    <br>
                                    <input type="date" name="ttg" required>
                                    <br>
                                    <br>
                                    <label for="unit_kerja">Unit Kerja:</label>
                                    <br>
                                    <select name="unit_kerja" id="unit_kerja" required>
                                        <option value="" disabled selected>Pilih Asal Naskah</option>
                                        <option value="PPIT">Pusat Pemetaan dan Integrasi Tematik</option>
                                        <option value="PTRA">Pusat Pemetaan Tata Ruang dan Atlas</option>
                                        <option value="Unit Kearsipan BIG">Unit Kearsipan BIG</option>
                                        <option value="PPIG">Pusat Pengelolaan dan Penyebarluasan Informasi Geospasial</option>
                                        <option value="PSKIG">Pusat Standarisasi dan Kelembagaan Informasi Geospasial</option>
                                        <option value="UK">Biro Umum dan Keuangan</option>
                                        <option value="PGSP">Parangtritis Geomaritime Science Park</option>
                                        <option value="ULP">Bagian Umum dan Layanan Pengadaan</option>
                                        <option value="PPBW">Pusat Pemetaan Batas Wilayah</option>
                                        <option value="LJP">Balai Layanan Jasa dan Produk</option>
                                        <option value="IGT">Deputi Informasi Geospasial Tematik</option>
                                        <option value="Inspektorat">Inspektorat</option>
                                        <option value="PPKLP">Pusat Pemetaan Kelautan dan Lingkungan Pantai</option>
                                        <option value="PJKGG">Pusat Jaring Kontrol Geodesi dan Geodinamika</option>
                                        <option value="PPRT">Pusat Pemetaan Rupabumi dan Toponim</option>
                                        <option value="IIG">Deputi Infrastruktur Informasi Geospasial</option>
                                        <option value="PKH">Biro Perencanaan Kepegawaian dan Hukum</option>
                                        <option value="PP">Balai Pendidikan dan Pelatihan</option>
                                        <option value="PPKS">Pusat Penelitian Promosi dan Kerja Sama</option>
                                        <option value="SESMA">Sekretariat Umum</option>
                                        <option value="Kepala BIG">Kepala Badan Informasi Geospasial</option>
                                        <option value="DWP">Dharma Wanita Persatuan</option>
                                        <option value="Korpri BIG">Korpri Badan Informasi Geospasial</option>
                                        </select><br><br>

                                        <label for="kepada">Kepada:</label>
                                        <br>
                                        <input type="text" name="kepada" required><br><br>

                                    <label for="tgl_surat">Tanggal Surat:</label><br>
                                    <input type="date" name="tgl_surat" required><br><br>
                                    <label for="jenis_naskah">Jenis Naskah:</label><br>
                                    <select name="jenis_naskah" id="jenis_naskah" required>
                                        <option value="" disabled selected>Pilih Jenis Naskah</option>
                                        <option value="Memo Dinas">Memo Dinas</option>
                                        <option value="Pengumuman">Pengumuman</option>
                                        <option value="Surat Kuasa">Surat Kuasa</option>
                                        <option value="Naskah Dinas Arahan (Penugasan)">Naskah Dinas Arahan (Penugasan)</option>
                                        <option value="Sertifikat">Sertifikat</option>
                                        <option value="Surat Dinas Eksternal">Surat Dinas Eksternal</option>
                                        <option value="Nota Dinas">Nota Dinas</option>
                                        <option value="Surat Undangan Internal">Surat Undangan Internal</option>
                                        <option value="Surat Undangan Eksternal">Surat Undangan Eksternal</option>
                                        <option value="Berita Acara">Berita Acara</option>
                                        <option value="Surat Perjanjian">Surat Perjanjian</option>
                                        <option value="Surat Permohonan">Surat Permohonan</option>
                                        <option value="Pernyataan">Pernyataan</option>
                                        <option value="Surat Tugas">Surat Tugas</option>
                                        <option value="Surat Keterangan">Surat Keterangan</option>
                                        <option value="Surat Dinas Mengatur">Surat Dinas Mengatur</option>
                                        <option value="Surat Dinas Tidak Mengatur">Surat Dinas Tidak Mengatur</option>
                                        <option value="Surat Pernyataan">Surat Pernyataan</option>
                                        <option value="Surat Perintah">Surat Perintah</option>
                                        </select><br><br>

                                    <label for="sifat_naskah">Sifat Naskah:</label><br>
                                    <select name="sifat_naskah" id="sifat_naskah" required>
                                        <option value="" disabled selected>Pilih Sifat Naskah</option>
                                        <option value="Rahasia">Rahasia</option>
                                        <option value="Sangat Rahasia">Sangat Rahasia</option>
                                        <option value="Terbatas">Terbatas</option>
                                        <option value="Biasa">Biasa</option>
                                        </select><br><br>
                                        
                                        <label for="ttd">Penandatangan:</label><br>
                                        <select name="ttd" id="ttd" required>
                                        <option value="" disabled selected>Pilih Penandatangan</option>
                                        <option value="Analis Kepegawaian Madya">Analis Kepegawaian Madya</option>
                                        <option value="Kepala Pusat Pemetaan Rupabumi dan Toponim">Kepala Pusat Pemetaan Rupabumi dan Toponim</option>
                                        <option value="Perancang Peraturan Perundang-Undangan Muda">Perancang Peraturan Perundang-Undangan Muda</option>
                                        <option value="Kepala Biro Perencanaan Kepegawaian dan Hukum">Kepala Biro Perencanaan Kepegawaian dan Hukum</option>
                                        <option value="Plt. Sekretaris Utama">Plt. Sekretaris Utama</option>
                                        <option value="Ketua KORPRI Badan Informasi Geospasial">Ketua KORPRI Badan Informasi Geospasial</option>
                                        <option value="Deputi Bidang Informasi Geospasial Tematik">Deputi Bidang Informasi Geospasial Tematik</option>
                                        <option value="Perencana Madya">Perencana Madya</option>
                                        <option value="Perancang Peraturan Perundang-Undangan Madya">Perancang Peraturan Perundang-Undangan Madya</option>
                                        <option value="Kepala Badan Informasi Geospasial">Kepala Badan Informasi Geospasial</option>
                                        <option value="Kepala Pusat Standardisasi dan Kelembagaan Informasi Geospasial">Kepala Pusat Standardisasi dan Kelembagaan Informasi Geospasial</option>
                                        <option value="Kepala Biro Umum dan Keuangan">Kepala Biro Umum dan Keuangan</option>
                                        </select><br><br>

                                        <label for="lembar">Jumlah Lembar Naskah:</label><br>
                                        <input type="number" name="lembar" required><br><br>

                                        <label for="klasifikasi">klasifikasi:</label><br>
                                        <select name="klasifikasi" id="klasifikasi" required>
                                            <option value="" disabled selected>Pilih Klasifikasi</option>
                                            <option value="AW">AW - Pengawasan</option>
                                            <option value="AW.01">AW.01 - Sosialisasi dan Asistensi Pengawasan</option>
                                            <option value="AW.02">AW.02 - Perencanaan</option>
                                            <option value="AW.03">AW.03 - Audit</option>
                                            <option value="AW.04">AW.04 - Reviu</option>
                                            <option value="AW.05">AW.05 - Evaluasi</option>
                                            <option value="AW.06">AW.06 - Pemantauan</option>
                                            <option value="AW.07">AW 07 - Pengawasan Lainnya</option>
                                            <option value="AW.08">AW.08 - Laporan Pengawasan Eksternal</option>
                                            <option value="DL">DL - Pendidikan dan Pelatihan</option>
                                            <option value="DL.01">DL.01 - Diklat Informasi Geospasial</option>
                                            <option value="DL01.01">DL01.01 - Program Diklat/Kebijakan Diklat/Pedoman Penyelenggaraan Diklat</option>
                                            <option value="DL.01.02">DL.01.02 - Penyelenggaraan Diklat</option>
                                            <option value="DL01.03">DL01.03 - Sarana Diklat</option>
                                            <option value="DL01.04">DL01.04 - Perpustakaan</option>
                                            <option value="DL02">DL02 - Diklat Non Informasi Geospasial</option>
                                            <option value="HK">HK - Hukum</option>
                                            <option value="HK.01">HK.01 - Peraturan Perundang-Undangan</option>
                                            <option value="HK.01.01">HK.01.01 - Produk Hukum Peraturan Perundang-Undangan di Bidang Informasi Geospasial</option>
                                            <option value="HK.01.02">HK.01.02 - Produk Hukum BIG</option>
                                            <option value="HK.01.03">HK.01.03 - Perjanjian Kerjasama</option>
                                            <option value="HK.02">HK.02 - Bantuan Hukum</option>
                                            <option value="HK.02.01">HK.02.01 - Pidana</option>
                                            <option value="HK.02.02">HK.02.02 - Perdata</option>
                                            <option value="HK.02.03">HK.02.03 - Tata Usaha Negara</option>
                                            <option value="HK.03">HK 03 - Dokumentasi dan Informasi Hukum</option>
                                            <option value="HK.03.01">HK.03.01 - Dokumentasi Hukum</option>
                                            <option value="HK.03.02">HK.03.02 - Sosialisasi/Penyuluhan/Pembinaan Hukum</option>
                                            <option value="IGD">IGD - Informasi Geospasial Dasar</option>
                                            <option value="IGD.01">IGD.01 - Jaring Kontrol Geodesi Dan Geodinamika</option>
                                            <option value="IGD.01.01">IGD.01.01 - Pengelolaan Jaring Kontrol Horizontal Nasional</option>
                                            <option value="IGD.01.02">IGD.01.02 - Pengelolaan Jaring Kontrol Vertikal Nasional</option>
                                            <option value="IGD.01.03">IGD.01.03 - Pengelolaan Jaring Gaya Berat Nasional</option>
                                            <option value="IGD.01.04">IGD.01.04 - Pembangunan Jaring Kontrol Geodesi</option>
                                            <option value="IGD.02">IGD.02 - Pemetaan Rupabumi Dan Toponim</option>
                                            <option value="IGD.02.01">IGD.02.01 - Pemetaan Rupabumi Skala Kecil Dan Menengah Digital</option>
                                            <option value="IGD.02.02">IGD.02.02 - Pemetaan Rupabumi Skala Kecil dan Menengah Cetakan</option>
                                            <option value="IGD.02.03">IGD.02.03 - Pemutakhiran Peta Rupabumi</option>
                                            <option value="IGD.02.04">IGD.02.04 - Pemutakhiran Data Elevation Model (Dem) Nasional</option>
                                            <option value="IGD.02.05">IGD.02.05 - Pemutakhiran Data Kebijakan Satu Peta</option>
                                            <option value="IGD.02.06">IGD.02.06 - Pemetaan Rupabumi Skala Besar Digital</option>
                                            <option value="IGD.02.07">IGD.02.07 - Supervisi Pemetaan Dasar Pertanahan (Digital Dan Cetak)</option>
                                            <option value="IGD.02.08">IGD.02.08 - Pemutakhiran Data Geospasial (Digital)</option>
                                            <option value="IGD.02.09">IGD.02.09 - Penegakan Citra Satelit Resolusi Sangat Tinggi (Digital)</option>
                                            <option value="IGD.02.10">IGD.02.10 - Prepare Satellite Imagery For Working Maps (Digital)</option>
                                            <option value="IGD.02.11">IGD.02.11 - Pemetaan Rupabumi Skala Besar (Cetak)</option>
                                            <option value="IGD.02.12">IGD.02.12 - Pemutakhiran Data Geospasial (Cetak)</option>
                                            <option value="IGD.02.13">IGD.02.13 - Prepare Satellite Imagery For Working Maps</option>
                                            <option value="IGD.02.14">IGD.02.14 - Toponim</option>
                                            <option value="IGD.03">IGD.03 - Pemetaan Kelautan dan Lingkungan Pantai</option>
                                            <option value="IGD.03.01">IGD.03.01 - Survei Hidrografi</option>
                                            <option value="IGD.03.02">IGD.03.02 - Validasi Pulau-Pulau</option>
                                            <option value="IGD.03.03">IGD.03.03 - Landas Kontingen Indonesia</option>
                                            <option value="IGD.04">IGD.04 - Pemetaan Batas Wilayah</option>
                                            <option value="IGD.04.01">IGD.04.01 - Pemetaan Batas Negara Wilayah Daratan</option>
                                            <option value="IGD.04.02">IGD.04.02 - Pemetaan Batas Negara Wilayah Laut</option>
                                            <option value="IGD.04.03">IGD.04.03 - Pemetaan Wilayah Kawasan Perbatasan Negara</option>
                                            <option value="IGD.04.04">IGD.04.04 - Pemetaan Batas Wilayah Administrasi Provinsi, Kabupaten dan Kota</option>
                                            <option value="IGD.04.05">IGD.04.05 - Pemetaan Batas Wilayah Administrasi Desa/Kelurahan</option>
                                            <option value="IGT">IGT - Informasi Geospasial Tematik</option>
                                            <option value="IGT.01">IGT.01 - Pemetaan dan Integrasi Tematik</option>
                                            <option value="IGT.01.01">IGT.01.01 - Penyelenggaraan Pemetaan dan Integrasi Tematik Darat</option>
                                            <option value="IGT.01.02">IGT.01.02 - Pemetaan dan Integrasi Tematik Laut</option>
                                            <option value="IGT.01.03">IGT.01.03 - Pemetaan Kebencanaan dan Perubahan Iklim</option>
                                            <option value="IGT.01.04">IGT.01.04 - Pembinaan Kebijakan Satu Peta (KSP)</option>
                                            <option value="IGT.01.05">IGT.01.05 - Pembinaan Informasi Geospasial Tematik Lainnya</option>
                                            <option value="IGT.02">IGT.02 - Pemetaan Tata Ruang dan Atlas</option>
                                            <option value="IGT.02.01">IGT.02.01 - Penyusunan Atlas</option>
                                            <option value="IGT.02.02">IGT.02.02 - Pemetaan Sosial</option>
                                            <option value="IGT.02.03">IGT.02.03 - Pemetaan Kewilayahan</option>
                                            <option value="IGT.02.04">IGT.02.04 - Layanan Asistensi dan Supervisi Penyusunan Peta Rencana Tata Ruang</option>
                                            <option value="IGT.02.05">IGT.02.05 - Penyusunan Peta RDTR Kawasan Perbatasan/Pusat Kegiatan Strategis Nasional (PKSN)</option>
                                            <option value="IGT.02.06">IGT.02.06 - Pemetaan Dinamika Sumberdaya</option>
                                            <option value="IGT.02.07">IGT.02.07 - Pembinaan Tata Ruang. Dinamika Sumberdaya dan Atlas</option>
                                            <option value="IIG">IIG - Infrastruktur Informasi Geospasial</option>
                                            <option value="IIG.01">IIG.01 - Pengelolaan dan Penyebarluasan Informasi Geospasial</option>
                                            <option value="IIG.01.01">IIG.01.01 - Pemeliharaan dan Peningkatan Kapasitas Layanan Data Center</option>
                                            <option value="IIG.01.02">IIG.01.02 - Penerapan Standar Layanan Data Center</option>
                                            <option value="IIG.01.03">IIG.01.03 - Inventarisasi Data Geospasial dan Informasi Geospasial</option>
                                            <option value="IIG.01.04">IIG.01.04 - Penyimpanan dan Pengamanan Data dan Informasi Geospasial</option>
                                            <option value="IIG.01.05">IIG.01.05 - Penjaminan Kualitas Data dan Informasi Geospasial</option>
                                            <option value="IIG.01.06">IIG.01.06 - Pemeliharaan/Pengembangan Inageoportal</option>
                                            <option value="IIG.01.07">IIG.01.07 - Pemeliharaan/Pengembangan Palapa</option>
                                            <option value="IIG.01.08">IIG.01.08 - Pemeliharaan/Pengembangan Aplikasi Lainnya</option>
                                            <option value="IIG.01.09">IIG.01.09 - Konektivitas Sipul Jaringan</option>
                                            <option value="IIG.02">IIG.02 - Standardisasi dan Kelembagaan Informasi Geospasial</option>
                                            <option value="IIG.02.01">IIG.02.01 - Standar Penyelenggaraan Informasi Geospasial</option>
                                            <option value="IIG.02.02">IIG.02.02 - Kelembagaan dan Simpul Jaringan IG</option>
                                            <option value="IIG.02.03">IIG.02.03 - Pengembangan SDM dan Industri Informasi Geospasial</option>
                                            <option value="IIG.02.04">IIG.02.04 - Pembinaan Standardisasi dan Kelembagaan Informasi Geospasial</option>
                                            <option value="KP">KP - Kepegawaian</option>
                                            <option value="KP.01">KP.01 - Pengadaan Pegawai</option>
                                            <option value="KP.01.01">KP.01.01 - Penyusunan Formasi</option>
                                            <option value="KP.01.02">KP.01.02 - Penerimaan Pegawai</option>
                                            <option value="KP.01.03">KP.01.03 - Pengangkatan CPNS dan PNS</option>
                                            <option value="KP.01.04">KP.01.04 - Penerimaan dan Penugasan Non PNS/ASN</option>
                                            <option value="KP.01.05">KP.01.05 - Pelatihan Dasar CPNS</option>
                                            <option value="KP.02">KP.02 - Mutasi</option>
                                            <option value="KP.02.01">KP.02.01 - Mutasi Pegawai</option>
                                            <option value="KP.02.02">KP.02.02 - Mutasi Keluarga</option>
                                            <option value="KP.02.03">KP.02.03 - Kenaikan Pangkat</option>
                                            <option value="KP.02.04">KP.02.04 - Ujian Dinas</option>
                                            <option value="KP.02.05">KP.02.05 - Kenaikan Berkala</option>
                                            <option value="KP.02.06">KP.02.06 - Pengangkatan dan Pemberhentian Dalam Jabatan Struktural dan Operasional</option>
                                            <option value="KP.02.07">KP.02.07 - Pengangkatan dan Pemberhentian Dalam Jabatan Fungisional</option>
                                            <option value="KP.02.08">KP.02.08 - Peninjauan Masa Kerja</option>
                                            <option value="KP.02.09">KP.02.09 - Seleksi Jabatan Pimpinan Tinggi</option>
                                            <option value="KP.02.10">KP.02.10 - Pengisian Jabatan Administrator dan Pengawas</option>
                                            <option value="KP.02.11">KP.02.11 - Pejabat Pelaksana Tugas/Harian</option>
                                            <option value="KP.03">KP.03 - Pembinaan Pegawai</option>
                                            <option value="KP.03.01">KP.03.01 - Penilaian Kinerja</option>
                                            <option value="KP.03.02">KP.03.02 - Hukuman</option>
                                            <option value="KP.03.03">KP.03.03 - Penghargaan</option>
                                            <option value="KP.03.04">KP.03.04 - Pengembangan Kapasitas Pegawai</option>
                                            <option value="KP.03.05">KP.03.05 - Tugas Belajar</option>
                                            <option value="KP.03.06">KP.03.06 - Izin Belajar</option>
                                            <option value="KP.03.07">KP.03.07 - Pembinaan Surveyor Pemetaan</option>
                                            <option value="KP.04">KP.04 - Kesejahteraan Pegawai</option>
                                            <option value="KP.04.01">KP.04.01 - Cuti</option>
                                            <option value="KP.04.02">KP.04.02 - Kesehatan</option>
                                            <option value="KP.04.03">KP.04.03 - Tabungan dan Asuransi Pensiun</option>
                                            <option value="KP.04.04">KP.04.04 - Perumahan</option>
                                            <option value="KP.04.05">KP.04.05 - Bantuan Sosial</option>
                                            <option value="KP.04.06">KP.04.06 - Olahraga</option>
                                            <option value="KP.04.07">KP.04.07 - Pakaian Dinas</option>
                                            <option value="KP.05">KP.05 - Pemberhentian Pegawai</option>
                                            <option value="KP.05.01">KP.05.01 - Pemberhentian Tanpa Hak Pensiun</option>
                                            <option value="KP.05.02">KP.05.02 - Pemberhentian Dengan Hak Pensiun</option>
                                            <option value="KP.05.03">KP.05.03 - Pemberhentian Atas Permintaan Sendiri</option>
                                            <option value="KP.05.04">KP.05.04 - Pemberhentian Tidak Atas Permintaan Sendiri</option>
                                            <option value="KP.05.05">KP.05.05 - Meninggal Dunia</option>
                                            <option value="KP.06">KP.06 - Data Pegawai</option>
                                            <option value="KP.06.01">KP.06.01 - Dokumentasi Identitas Pegawai</option>
                                            <option value="KP.06.02">KP.06.02 - Berkas Perseorangan Pegawai</option>
                                            <option value="KP.07">KP.07 - Organisasi Kedinasan</option>
                                            <option value="KP.07.01">KP.07.01 - KORPRI</option>
                                            <option value="KP.07.02">KP.07.02 - Dharma Wanita</option>
                                            <option value="KP.07.03">KP.07.03 - Koperasi</option>
                                            <option value="KP.07.04">KP.07.04 - Organisasi Lainnya</option>
                                            <option value="KP.08">KP.08 - Praktek Kerja/Magang</option>
                                            <option value="KU">KU - Keuangan</option>
                                            <option value="KU.01">KU.01 - Keuangan</option>
                                            <option value="KU.01.01">KU.01.01 - Pelaksanaan Anggaran</option>
                                            <option value="KU.01.02">KU.01.02 - Sistem Akuntansi Instansi (SAI)</option>
                                            <option value="KU.01.03">KU.01.03 - Pertanggungjawaban Keuangan Negara</option>
                                            <option value="KU.02">KU.02 - Pengelolaan Barang Milik Negara</option>
                                            <option value="LT">LT - Penelitian</option>
                                            <option value="LT.01">LT.01 - Penelitian dan Pengembangan</option>
                                            <option value="LT.02">LT.02 - Koordinasi Litbang Antar Lembaga</option>
                                            <option value="LT.03">LT.03 - Jurnal Penelitian</option>
                                            <option value="OT">OT - Organisasi dan Tata Laksana</option>
                                            <option value="OT.01">OT.01 - Organisasi dan Tata Laksana</option>
                                            <option value="OT.01.01">OT.01.01 - Struktur Organisasi</option>
                                            <option value="OT.01.02">OT.01.02 - Analisis Jabatan</option>
                                            <option value="OT.01.03">OT.01.03 - Evaluasi Kelembagaan</option>
                                            <option value="OT.01.04">OT.01.04 - Mekanisme Kerja</option>
                                            <option value="OT.02">OT.02 - Reformasi Birokrasi</option>
                                            <option value="PK">PK - Promosi dan Kerjasama</option>
                                            <option value="PK.01">PK.01 - Publikasi dan Dokumentasi</option>
                                            <option value="PK.02">PK.02 - Pameran</option>
                                            <option value="PK.03">PK.03 - Workshop/Sosialisasi/Diseminasi</option>
                                            <option value="PK.04">PK.04 - Layanan Kunjungan</option>
                                            <option value="PK.05">PK.05 - Administrasi Kerjasama</option>
                                            <option value="PL">PL - Pelayanan</option>
                                            <option value="PL.01">PL.01 - Pelayanan Produk</option>
                                            <option value="PL.02">PL.02 - Pelayanan Jasa</option>
                                            <option value="PR">PR - Perencanaan</option>
                                            <option value="PR.01">PR.01 - Penyusunan Rencana Program dan Anggaran</option>
                                            <option value="PR.01.01">PR.01.01 - Penyusunan Rencana dan Program Strategis</option>
                                            <option value="PR.01.02">PR.01.02 - Penyusunan Rencana dan Program Tahunan</option>
                                            <option value="PR.01.03">PR.01.03 - Rencana Anggaran Pendapatan dan Belanja Negara (RAPBN) dan RUU APBN-P</option>
                                            <option value="PR.01.04">PR.01.04 - Bantuan/Pinjaman Luar Negeri</option>
                                            <option value="PR.01.05">PR.01.05 - Penetapan/Kontrak Kinerja</option>
                                            <option value="PR.02">PR.02 - Evaluasi dan Pelaporan</option>
                                            <option value="PR.02.01">PR.02.01 - Pelaporan</option>
                                            <option value="PR.02.02">PR.02.02 - Evaluasi</option>
                                            <option value="UM">UM - Umum</option>
                                            <option value="UM.01">UM.01 - Ketatausahaan</option>
                                            <option value="UM.01.01">UM.01.01 - Persuratan</option>
                                            <option value="UM.01.02">UM.01.02 - Agenda Pimpinan</option>
                                            <option value="UM.02">UM.02 - Kearsipan</option>
                                            <option value="UM.02.01">UM.02.01 - Pengelolaan Arsip</option>
                                            <option value="UM.02.02">UM.02.02 - Pembinaan Kearsipan</option>
                                            <option value="UM.02.03">UM.02.03 - Pengawasan Kearsipan</option>
                                            <option value="UM.03">UM.03 - Rumah Tangga</option>
                                            <option value="UM.03.01">UM.03.01 - Dokumen Pengurusan Ijin Perjalanan Luar Negeri</option>
                                            <option value="UM.03.02">UM.03.02 - Fasilitas Dinas</option>
                                            <option value="UM.03.03">UM.03.03 - Keamanan</option>
                                            <option value="UM.04">UM.04 - Protokol</option>
                                            <option value="UM.05">UM.05 - Pemeliharaan Aset</option>
                                            <option value="UM.06">UM.06 - Perlengkapan Perkantoran</option>
                                            <option value="UM.07">UM.07 - Pengadaan Barang dan Jasa</option>
                                        </select><br><br>

                                    <label for="nama_pemohon">Nama Pemohon:</label><br>
                                    <input type="text" name="nama_pemohon" required><br><br>

                                    <label for="hal">Hal:</label>
                                    <input type="text" name="hal" required><br><br>

                                <button type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>