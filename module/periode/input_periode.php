<?php
if($_GET['act']=="input"){
	?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Tambah Data</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="post" role="form" action="././module/simpan.php?act=input_periode">

                                <div class="col-lg-6">
                                <div class="form-group">
                                            <label>Tahun Ajaran (TA)</label>
                                            <input class="form-control" placeholder="TA Awal/TA Akhir" name="tahun_ajaran" required>
                                        </div>                                          
                                        <div class="form-group">
                                            <label>Nominal SPP</label>
                                            <input class="form-control" placeholder="Nominal SPP" name="nominal_spp" required>
                                        </div>                                                                           
                                        <button type="submit" class="btn btn-success">Simpan</button>

                                </div>

                                    <!-- /.col-lg-6 (nested) -->
                                 

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           <?php } ?>


<?php
if($_GET['act']=="edit_periode"){
    ?>
          <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Data</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data
                            </div>
                        <div class="panel-body">
                            <div class="row">

                            <?php                            
                                $sql=mysql_query("select * from periode where idp='$_GET[idp]'");
                                $rs=mysql_fetch_array($sql);

                            ?>
                                    <form method="post" role="form" action="././module/simpan.php?act=edit_periode">
                                    <input type="hidden" name="id" value="<?php echo $_GET['idp'] ?>" />

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tahun Ajaran</label>
                                            <input class="form-control" placeholder="Tahun Ajaran" name="tahun_ajaran" value="<?php echo "$rs[tahun_ajaran]"; ?>">
                                </div>
                                                                                <div class="form-group">
         
                        
                                        <div class="form-group">
                                            <label>Nominal SPP</label>
                                            <input class="form-control" placeholder="Nominal SPP" name="nominal_spp" value="<?php echo "$rs[nominal_spp]"; ?>">
                                        </div>

                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back(-1)">
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                    </form>
                                      
                                   

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <?php } ?>