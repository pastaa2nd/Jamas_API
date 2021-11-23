<div class="box box-primary">
	<div class="box-header">
        <h3 class="box-title">Update Data mitra</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <?php foreach($mitra as $b){ ?>
		<form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/admin/mitra/edit">
			<div class="box-body">
			<input type="hidden" name="id" value="<?php echo $b->id ?>">
      <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Mitra</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputPassword3" value="<?php echo $b->nama ?>">
                  </div>
                </div>
          
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Slug</label>

                  <div class="col-sm-10">
                    <input type="text" name="slug" class="form-control" id="inputPassword3" value="<?php echo $b->slug ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="inputPassword3" value="<?php echo $b->email ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="inputPassword3" value="<?php echo $b->alamat ?>">
                  </div>
                </div>
  
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Telepon</label>

                  <div class="col-sm-10">
                    <input type="text" name="telepon" class="form-control" id="inputPassword3" value="<?php echo $b->telepon ?>">
                  </div>
                </div>
  
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">KTP</label>

                  <div class="col-sm-10">
                    <input type="text" name="ktp" class="form-control" id="inputPassword3" value="<?php echo $b->ktp ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <input type="text" name="status" class="form-control" id="inputPassword3" value="<?php echo $b->status ?>">
                    <br>
                    <label> 1. Terdaftar Sebagai Mitra</label>
                    <br>
                    <label> 0. Tidak Terdaftar Sebagai Mitra</label>
                  </div>
                </div>
                
                <input type="hidden" name="created_at" class="form-control" value="<?php echo date('y-m-d\TH:i:s'); ?>">
                <input type="hidden" name="update_at" class="form-control" value="<?php echo date('y-m-d\TH:i:s'); ?>">
  
              
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/admin/mitra" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Update</button>
              </div>
              <!-- /.box-footer -->
            <?php } ?>
		</form>
	</div>
</div>