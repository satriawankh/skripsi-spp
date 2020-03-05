            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Pembayaran SPP</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pembayaran SPP
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="10%">NIS</th>
                                            <th class="text-center" width="40%">Nama</th>
                                            <th class="text-center" width="10%">Kelas</th>
                                            <th class="text-center" width="15%">No. Telepon</th>
                                            <th class="text-center" width="15%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                        
<?php

    $sql=mysql_query("select * from transaksi");

    while($rs=mysql_fetch_array($sql))
    {
        $sqlw=mysql_query("select * from kelas where idk='$rs[idk]'");
        $rsw=mysql_fetch_array($sqlw);

?>                                        <tr class="odd gradeX">
                                            <td><?php echo"$rs[nis]";  ?></td>
                                            <td><?php echo"$rs[nama]";  ?></td>
                                            <td><?php echo"$rsw[nama]";  ?></td>
                                            <td><?php echo "$rs[tlp]";?></td>

                                        <td class="text-center">
                                        <a href="./././media.php?module=bayar&ids=<?php echo $rs['ids'] ?>">
                                        <button type="button" class="btn btn-danger">Bayar</button> 

                                        </tr>
<?php
}

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
