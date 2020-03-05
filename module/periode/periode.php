            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Data Tahun Ajaran</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Tahun Ajaran
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Tahun Ajaran</th>                                            
                                            <th class="text-center">Nominal SPP</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$no=1;
    $sql=mysql_query("select * from periode");
    while($rs=mysql_fetch_array($sql)){

?>                                        <tr class="odd gradeX">
                                            <td><?php echo"$rs[tahun_ajaran]";  ?></td>
                                            <td ><?php echo"$rs[nominal_spp]";  ?></td>
                                            <td><?php echo "$rs[status]";?></td>

                                        <td class="text-center"><a href="./././module/simpan.php?act=aktif_periode&idp=<?php echo $rs['idp'] ?>"><button type="button" class="btn btn-primary">Aktifkan</button> 
                                        <a href="./././media.php?module=input_periode&act=edit_periode&idp=<?php echo $rs['idp'] ?>"><button type="button" class="btn btn-info">Edit</button> <a href="././module/simpan.php?act=hapus_periode&idp=<?php echo $rs['idp'] ?>"><button type="button" class="btn btn-danger">Hapus</button></a></td>

                                        </tr>
<?php
}
?>                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
 

             