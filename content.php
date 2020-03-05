<?php

if($_GET['module']=="siswa"){
include "module/siswa/siswa.php";
}
if($_GET['module']=="tampil"){
include "module/siswa/tampil.php";
}
if($_GET['module']=="input_siswa"){
include "module/siswa/input_siswa.php";
}
if($_GET['module']=="siswa_det"){
include "module/siswa/siswa_det.php";
}
if($_GET['module']=="detail_siswa"){
include "module/siswa/detail_siswa.php";
}

/*if($_GET['module']=="pilih"){
include "module/absen/pilih.php";
}
if($_GET['module']=="pilih_view"){
include "module/absen/pilih_view.php";
}

if($_GET['module']=="input_absen"){
include "module/absen/input_absen.php";
}
if($_GET['module']=="absen"){
include "module/absen/absen.php";
}
if($_GET['module']=="pilih_laporan"){
include "module/laporan/pilih_laporan.php";
}
if($_GET['module']=="laporan"){
include "module/laporan/laporan.php";
}*/
if($_GET['module']=="user"){
include "module/user/user.php";
}
if($_GET['module']=="input_user"){
include "module/user/input_user.php";
}

if($_GET['module']=="input_kelas"){
include "module/kelas/input_kelas.php";
}
if($_GET['module']=="kelas"){
include "module/kelas/kelas.php";
}
if($_GET['module']=="input_sekolah"){
include "module/sekolah/input_sekolah.php";
}
if($_GET['module']=="sekolah"){
include "module/sekolah/sekolah.php";
}
if($_GET['module']=="input_periode"){
include "module/periode/input_periode.php";
}
if($_GET['module']=="periode"){
include "module/periode/periode.php";
}

if($_GET['module']=="input_transaksi"){
include "module/transaksi/input_transaksi.php";
}

if($_GET['module']=="bayar"){
include "module/transaksi/bayar.php";
}
if($_GET['module']=="tampil_trans"){
include "module/transaksi/tampil_trans.php";
}
/*if($_GET['module']=="export"){
include "module/transaksi/export.php";
}
*/?>