<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Tambah Data kategori</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>/admin/kategori/simpan">
      <div class="box-body">
                  </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Kategori">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Slug</label>

                  <div class="col-sm-10">
                    <input type="text" name="slug" class="form-control" id="inputEmail3" placeholder="Slug">
                  </div>
                </div>

                <input type="hidden" name="created_at" class="form-control" value="<?php echo date('y-m-d\TH:i:s'); ?>">
                <input type="hidden" name="update_at" class="form-control" value="<?php echo date('y-m-d\TH:i:s'); ?>">

                 
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/admin/kategori" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div>
              <!-- /.box-footer -->
    </form>
  </div>
</div>