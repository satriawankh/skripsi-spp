<?php
session_start();
if(!empty($_SESSION['nama'])){
$uidi=$_SESSION['idu'];	
$usre=$_SESSION['nama'];
$level=$_SESSION['level'];
$klss=$_SESSION['idk'];
$ortu=$_SESSION['ortu'];
$idd=$_SESSION['id'];


include "config/conn.php";

/*header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=tutorialweb-export.xls");*/

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SISTEM PEMBAYARAN SPP</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">



</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home">SISTEM PEMBAYARAN SPP</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
<?php 
echo "User : $usre"; 
?> 

                   </a>
      <!--           </li>
       <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
<?php 
if($level=="admin_guru"){
	$sqla=mysql_query("select * from sekolah where id='$idd'");
	$rsa=mysql_fetch_array($sqla);
echo "Sekolah : $rsa[nama]" ;
}else{
	$sql=mysql_query("select * from kelas where idk='$klss'");
	$rs=mysql_fetch_array($sql);
	$sqla=mysql_query("select * from sekolah where id='$rs[id]'");
	$rsa=mysql_fetch_array($sqla);
echo "Sekolah : $rsa[nama] | $rs[nama]" ;
}
?> 
                   </a>
                </li> -->
              
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
<?php echo "Tanggal : ".date("d-m-Y"); ?> 
                   </a>
                </li>
                
<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="" href="logout.php">
<?php echo "Logout"; ?> 
                   </a>
                </li>  
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        
<?php if($level=='admin' ){ ?>

                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Periode<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tambah_periode">Tambah</a>
                                </li>
                                <li>
                                    <a href="lihat_periode">Lihat</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tambah_trans">Tambah</a>
                                </li>
                                <li>
                                    <a href="lihat_trans">Lihat</a>
                                </li>
                               

                                                                </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Siswa<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tambah_siswa">Tambah</a>
                                </li>
                                <li>
                                    <a href="lihat_siswa">Lihat</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
<?php } ?>

<?php if($level=='admin'){ ?>

                        <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i> Kelas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tambah_kelas">Tambah</a>
                                </li>
                                <li>
                                    <a href="lihat_kelas">Lihat</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
<?php } ?>

<?php if($level=='admin'){ ?>

                          <li>
                            <a href="#"><i class="fa fa-building-o fa-fw"></i> Sekolah<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tambah_sklh">Tambah</a>
                                </li>
                                <li>
                                    <a href="lihat_sklh">Lihat</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                      
<?php } ?>
<?php if($level=='admin'){ ?>

                          <li>
                            <a href="#"><i class="fa fa-lock fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="media.php?module=input_user&act=input">Tambah</a>
                                </li>
                                <li>
                                    <a href="media.php?module=user">Lihat</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                      
<?php } ?>


                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
<?php include "content.php";  ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>
    <script src="js/tableToExcel.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>

<?php } ?>