            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Data Transaksi</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Transaksi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th class="text-center">Nama</th>
                                            <th class="text-center">Jan</th>
                                            <th class="text-center" >Feb</th>
                                            <th class="text-center">Mar</th>
                                            <th class="text-center">Apr</th>
                                            <th class="text-center">Mei</th>
                                            <th class="text-center" >Jun</th>
                                            <th class="text-center" >Jul</th>
                                            <th class="text-center" >Agu</th>
                                            <th class="text-center" >Sep</th>
                                            <th class="text-center" >Okt</th>
                                            <th class="text-center" >Nov</th>
                                            <th class="text-center" >Des</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php


    $sql=mysql_query("select * from transaksi");
    while($rs=mysql_fetch_array($sql))
    {
?>                                        <tr class="odd gradeX">

                                            <td><?php echo "$rs[nama]";?></td>
                                            <td><?php echo"$rs[januari]";  ?></td>
                                            <td><?php echo"$rs[februari]";  ?></td>
                                            <td><?php echo"$rs[maret]";  ?></td>
                                            <td><?php echo"$rs[april]";  ?></td>
                                            <td><?php echo"$rs[mei]";  ?></td>
                                            <td><?php echo"$rs[juni]";  ?></td>
                                            <td><?php echo"$rs[juli]";  ?></td>
                                            <td><?php echo"$rs[agustus]";  ?></td>
                                            <td><?php echo"$rs[september]";  ?></td>
                                            <td><?php echo"$rs[oktober]";  ?></td>
                                            <td><?php echo"$rs[november]";  ?></td>
                                            <td><?php echo"$rs[desember]";  ?></td>

                                        
<?php
}

?>  
     

<?php


?>
                                    </tbody>
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
