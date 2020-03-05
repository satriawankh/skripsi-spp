           <?php                            
                                $sql=mysql_query("select * from siswa where ids='$_GET[ids]'");
                                $rs=mysql_fetch_array($sql);
                            ?>
<script type="text/javascript" src="js/export/tableExport.js"></script>
<script type="text/javascript" src="js/export/jquery.based.js"></script>
<script type="text/javascript" onClick ="$('#tableID').tableExport({type:'excel',escape:'false'});"></script>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Data Pembayaran <?php echo"$rs[nama]";  ?></strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Pembayaran
                        </div>
                        

                    <form method="post" role="form" action="././module/simpan.php?act=trans">
                    <input type="hidden" name="sis" value="<?php echo $_GET['ids'] ?>">
                     
                                                 
        <div class="panel-body">
        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <!-- <th class="text-center">Nama</th> -->
                                            <th class="text-center">Jan</th>
                                            <th class="text-center">Feb</th>
                                            <th class="text-center">Mar</th>
                                            <th class="text-center">Apr</th>
                                            <th class="text-center">Mei</th>
                                            <th class="text-center">Jun</th>
                                            <th class="text-center">Jul</th>
                                            <th class="text-center">Agu</th>
                                            <th class="text-center">Sep</th>
                                            <th class="text-center">Okt</th>
                                            <th class="text-center">Nov</th>
                                            <th class="text-center">Des</th>


                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                     
                                    
                                    
                                  <tr class="odd gradeX">
                                            <!-- <td><?php echo"$rs[nama]";  ?></td> -->

                                            <td><input type="checkbox" name="jan" value="Lunas"></td>
                                            <td><input type="checkbox" name="feb" value="Lunas"></td>
                                            <td><input type="checkbox" name="apr" value="Lunas"></td>
                                            <td><input type="checkbox" name="mar" value="Lunas"></td>
                                            <td><input type="checkbox" name="mei" value="Lunas"></td>
                                            <td><input type="checkbox" name="jun" value="Lunas"></td>
                                            <td><input type="checkbox" name="jul" value="Lunas"></td>
                                            <td><input type="checkbox" name="agu" value="Lunas"></td>
                                            <td><input type="checkbox" name="sep" value="Lunas"></td>
                                            <td><input type="checkbox" name="okt" value="Lunas"></td>
                                            <td><input type="checkbox" name="nov" value="Lunas"></td>
                                            <td><input type="checkbox" name="des" value="Lunas"></td>

                                            

                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        <!-- /.panel-heading -->
                       


                                <button type="submit" class="btn btn-success">Simpan</button>    
                                 <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back(-1)">
                                                                        
                     </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>    </div>
            <!-- /.row -->
