<?php
include "../config/conn.php";

if($_GET['act']=="input_user"){
$pw=md5($_POST['pass']);
mysql_query("INSERT INTO user(nama,pass,level,id) 
VALUES(
'$_POST[nama]',
'$pw',
'admin_guru','$_POST[sekolah]')");
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=user')</script>";

}
if($_GET['act']=="edit_user"){
if(!empty($_POST['pass'])){
$pw=md5($_POST['pass']);
mysql_query("update user set nama='$_POST[nama]',
pass='$pw',id='$_POST[sekolah]' where idu='$_POST[idu]'");
}else{
mysql_query("update user set nama='$_POST[nama]',id='$_POST[sekolah]' where idu='$_POST[idu]'");	
	
}
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=user')</script>";

}

if($_GET['act']=="hapus_user"){
mysql_query("delete from user where idu='$_GET[idu]'");
echo "<script>window.alert('Data Terhapus');
        window.location=('../media.php?module=user')</script>";

}

if($_GET['act']=="input_periode")
{
mysql_query("INSERT INTO periode(tahun_ajaran,nominal_spp) 
VALUES(
'$_POST[tahun_ajaran]',
'$_POST[nominal_spp]')");
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=periode')</script>";

}

if($_GET['act']=="aktif_periode")
{
mysql_query("UPDATE periode SET status='Aktif' where idp='$_GET[idp]'");
mysql_query("INSERT into transaksi (ids,nama,idk) select ids,nama,idk from siswa");
echo "<script>window.alert('Data Aktif');
        window.location=('../media.php?module=periode')</script>";

}


if($_GET['act']=="trans"){


$bis=mysql_query("select * from transaksi");
while($bis2=mysql_fetch_array($bis)){
$ea=$bis2['ids'];
mysql_query("UPDATE transaksi SET januari='$_POST[$ea]' where ids='$bis2[ids]'");
}

/*$bis=mysql_query("select * from transaksi");
$bis2=mysql_fetch_array($bis);
$ea=$bis2['ids'];*/
/*mysql_query("UPDATE transaksi SET januari='$_POST[ids]' where ids='$_GET[ids]'");
*/
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=tampil_trans')</script>";

}

/*if($_GET['act']=="trans"){
//echo "$_GET[klas] <br>";
//echo "$_GET[tanggal] <br>";
//echo "$_GET[bulan] <br>";
//echo "$_GET[tahun] <br>";


$sql=mysql_query("select * from transaksi where idk='$_GET[klas]' ");
while($rs=mysql_fetch_array($sql)){

$ra=$rs['ids'];
echo $_POST[$ra];
        $sqla=mysql_query("select * from transaksi where ids='$rs[ids]'");
        $rsa=mysql_fetch_array($sqla);
        $conk=mysql_num_rows($sqla);
//echo "$rs[nama] $_POST[$ra] <br>";
mysql_query("update transaksi set januari='$_POST[$ra]' where ids='$rs[ids]'");     
//echo "edit";
        }
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=tampil_trans')</script>";

}*/

if($_GET['act']=="edit_periode")
{
mysql_query("UPDATE periode SET tahun_ajaran='$_POST[tahun_ajaran]',
nominal_spp='$_POST[nominal_spp]' where idp='$_POST[id]'");
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=periode')</script>";

}

if($_GET['act']=="hapus_periode"){
mysql_query("delete from periode where idp='$_GET[idp]'");
echo "<script>window.alert('Data Terhapus');
        window.location=('../media.php?module=periode')</script>";

}

if($_GET['act']=="input_siswa"){
mysql_query("INSERT INTO siswa(idp,nis,nama,jk,alamat,idk,tlp,bapak,k_bapak,ibu,k_ibu) 
VALUES(
'$_POST[ta]',
'$_POST[nis]',
'$_POST[nama]',
'$_POST[jk]',
'$_POST[alamat]',
'$_POST[kelas]',
'$_POST[tlp]',
'$_POST[bapak]',
'$_POST[k_bapak]',
'$_POST[ibu]',
'$_POST[k_ibu]')");
/*mysql_query("INSERT into transaksi (ids,idp,idk) select ids,idp,idk from siswa");*/
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=siswa&kls=semua')</script>";

}

if($_GET['act']=="edit_siswa"){

mysql_query("UPDATE siswa SET idp='$_POST[ta]', nis='$_POST[nis]',
nama='$_POST[nama]',
jk='$_POST[jk]',
alamat='$_POST[alamat]',
idk='$_POST[kelas]',
tlp='$_POST[tlp]',
bapak='$_POST[bapak]',
k_bapak='$_POST[k_bapak]',
ibu='$_POST[ibu]',
k_ibu='$_POST[k_ibu]' where ids='$_POST[id]'");
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=siswa&kls=semua')</script>";

}

if($_GET['act']=="siswa_det"){
	$pw=md5($_POST['pass']);
if(!empty($_POST['pass'])){
mysql_query("UPDATE siswa SET pass='$pw' where ids='$_POST[id]'");
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=siswa_det')</script>";
}else{
echo "<script>window.alert('Isi Password');
        window.location=('../media.php?module=siswa_det')</script>";

}
}

if($_GET['act']=="hapus"){
mysql_query("delete from siswa where ids='$_GET[ids]'");
echo "<script>window.alert('Data Terhapus');
        window.location=('../media.php?module=siswa&kls=semua')</script>";

}


if($_GET['act']=="input_absen"){
//echo "$_GET[klas] <br>";
//echo "$_GET[tanggal] <br>";
//echo "$_GET[bulan] <br>";
//echo "$_GET[tahun] <br>";


	$sql=mysql_query("select * from siswa where idk='$_GET[klas]' ");
	while($rs=mysql_fetch_array($sql)){

$ra=$rs['ids'];
$tgl=date("y-m-d");
echo $_POST[$ra];
	$sqla=mysql_query("select * from absen where ids='$rs[ids]' and tgl='$tgl' and jam='$_GET[jam]'");
	$rsa=mysql_fetch_array($sqla);
	$conk=mysql_num_rows($sqla);

//echo "$rs[nama] $_POST[$ra] <br>";
if($conk==0){
	
if($_POST[$ra]=="A"){
$noTujuan = "+62$rs[tlp]";
$message = "Kami Memberitahukan bahwa pada tanggal $rsa[tgl]. Nama : $rs[nama]. Alamat : $rs[alamat]. Tidak Masuk Sekolah Tanpa Keterangan";
 
exec('c:\xampp\htdocs\smsku\bin\gammu-smsd-inject.exe -c c:\xampp\htdocs\smsku\bin\smsdrc EMS '.$noTujuan.' -text "'.$message.'"');
}

mysql_query("INSERT INTO absen(ids,tgl,jam,ket) 
VALUES(
'$rs[ids]',
'$tgl',
'$_GET[jam]',
'$_POST[$ra]')");
//echo "SIMPAN";
}else{

if($_POST[$ra]=="A"){
$noTujuan = "+62$rs[tlp]";
$message = "Kami Memberitahukan bahwa pada tanggal $rsa[tgl]. Nama : $rs[nama]. Alamat : $rs[alamat]. Tidak Masuk Sekolah Tanpa Keterangan";
 
exec('c:\xampp\htdocs\smsku\bin\gammu-smsd-inject.exe -c c:\xampp\htdocs\smsku\bin\smsdrc EMS '.$noTujuan.' -text "'.$message.'"');
}


mysql_query("update absen set ket='$_POST[$ra]' where ids='$rs[ids]' and tgl='$tgl' and jam='$_GET[jam]'");	
//echo "edit";

}


	}
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=pilih')</script>";

}


if($_GET['act']=="input_sekolah"){
mysql_query("INSERT INTO sekolah(kode,nama,alamat) 
VALUES(
'$_POST[kode]',
'$_POST[nama]',
'$_POST[alamat]')");
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=sekolah')</script>";

}
if($_GET['act']=="edit_sekolah"){
mysql_query("update sekolah set kode='$_POST[kode]',
nama='$_POST[nama]',
alamat='$_POST[alamat]' where id='$_POST[id]'");
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=sekolah')</script>";

}
if($_GET['act']=="hapus_sekolah"){
mysql_query("delete from sekolah where id='$_GET[id]'");
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=sekolah')</script>";

}




if($_GET['act']=="input_kelas"){
mysql_query("INSERT INTO kelas(id,nama) 
VALUES(
'$_POST[id]',
'$_POST[nama]')");
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=kelas')</script>";

}
if($_GET['act']=="edit_kelas"){
mysql_query("update kelas set id='$_POST[id]',
nama='$_POST[nama]' where idk='$_POST[idk]'");
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=kelas')</script>";

}
if($_GET['act']=="hapus_kelas"){
mysql_query("delete from kelas  where idk='$_GET[idk]'");
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=kelas')</script>";

}



if($_GET['act']=="input_guru"){
$mrg=md5($_POST['k_password']);
mysql_query("INSERT INTO guru(nip,nama,jk,alamat,idk,pass) 
VALUES(
'$_POST[nip]',
'$_POST[nama]',
'$_POST[jk]',
'$_POST[alamat]',
'$_POST[kelas]',
'$mrg')");
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=guru&kls=semua')</script>";

}
if($_GET['act']=="edit_guru"){
$mrg=md5($_POST['k_password']);
mysql_query("update guru set nip='$_POST[nip]',
nama='$_POST[nama]',
jk='$_POST[jk]',
alamat='$_POST[alamat]',
pass='$mrg',
idk='$_POST[kelas]' where idg='$_POST[idg]'");
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=guru&kls=semua')</script>";

}
if($_GET['act']=="hapus_guru"){
mysql_query("delete from guru  where idg='$_GET[idg]'");
echo "<script>window.alert('Data Guru Sudah Terhapus');
		window.location=('../media.php?module=guru&kls=semua')</script>";

}



if($_GET['act']=="guru_det"){
if(!empty($_POST['pass'])){
$pw=md5($_POST['pass']);
mysql_query("update guru set nama='$_POST[nama]',
jk='$_POST[jk]',
alamat='$_POST[alamat]',pass='$pw' where idg='$_POST[idg]'");
}else{
mysql_query("update guru set nama='$_POST[nama]',
jk='$_POST[jk]',
alamat='$_POST[alamat]' where idg='$_POST[idg]'");
	
}
echo "<script>window.alert('Data Tersimpan');
        window.location=('../media.php?module=guru_det')</script>";

}


?>
