<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Tambah Data mitra</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>/admin/mitra/simpan">
      <div class="box-body">
                  </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Mitra</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Mitra">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Slug</label>
                  <div class="col-sm-10">
                    <input type="text" name="slug" class="form-control" id="inputEmail3" placeholder="Slug">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Telepon</label>
                  <div class="col-sm-10">
                    <input type="text" name="telepon" class="form-control" id="inputEmail3" placeholder="Telepon">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">KTP</label>
                  <div class="col-sm-10">
                    <input type="text" name="ktp" class="form-control" id="inputEmail3" placeholder="KTP">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                    <input type="text" name="status" class="form-control" id="inputEmail3" placeholder="Isi Pakai Angka">
                    <br>
                    <label> 1. Terdaftar Sebagai Mitra</label>
                    <br>
                    <label> 0. Tidak Terdaftar Sebagai Mitra</label>
                  </div>
                </div>

<!--                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">status</label>
                  <div class="col-sm-10">
                    <input type="radio" name="status" value="1">
                    <lebel for="1">Terdaftar Sebagai Mitra</lebel>
                    <br>
                    <input type="radio" name="status" value="0">
                    <lebel for="0">Tidak Terdaftar Sebagai Mitra</lebel>
                  </div>
                </div>
 -->
                <input type="hidden" name="created_at" class="form-control" value="<?php echo date('y-m-d\TH:i:s'); ?>">
                <input type="hidden" name="update_at" class="form-control" value="<?php echo date('y-m-d\TH:i:s'); ?>">
                 
                 
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/admin/mitra" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div>
              <!-- /.box-footer -->
    </form>
  </div>
</div>