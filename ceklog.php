<?php
include"config/conn.php";

$pass=md5($_POST['password']);
$passw=$_POST['password'];

$user=$_POST['username'];

	$sql=mysql_query("select * from user where nama='$user' and pass='$pass'");
	$count=mysql_num_rows($sql);
	$rs=mysql_fetch_array($sql);
		if($count>0){
			session_start();
				$_SESSION['idu']=$rs['idu'];

				$_SESSION['nama']=$rs['nama'];
				$_SESSION['level']=$rs['level'];
				$_SESSION['idk']="";
				$_SESSION['ortu']="";
				$_SESSION['id']=$rs['id'];
				
			
			header('location:home');
		
	
}else{
	
			echo"<center><h2>Username atau Password Anda salah!</h2><br>
				<a href=index.php><b>Ulangi Lagi</b></a></center>";	
}

?>
