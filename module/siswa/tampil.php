          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Data Siswa</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pilih Kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <form method="get" role="form" action="././media.php?module=siswa">


                                <div class="col-lg-6">
<input type="hidden" name="module" value="siswa">

                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kls">

  <?php 

	$sql=mysql_query("select * from kelas");	
?>
                                                <option>semua</option>

<?php
  	while($rs=mysql_fetch_array($sql)){
	$sqla=mysql_query("select * from sekolah where id='$rs[id]'");
	$rsa=mysql_fetch_array($sqla);

	echo "<option value='$rs[idk]'>$rsa[nama] | $rs[nama]</option>";	
}
?>
                                            </select>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success">Lanjut</button>

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