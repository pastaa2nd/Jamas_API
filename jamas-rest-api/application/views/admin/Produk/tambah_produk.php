<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Tambah Data Produk</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>/admin/produk/simpan" enctype="multipart/form-data">
      <div class="box-body">
                  </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Penjual</label>
                  <div class="col-sm-10">
                    <?php
                    echo "
                    <select name='penjual' id='penjual' class='form-control'>
                     <option value=''>----Pilih Penjual----</option>";
                      foreach ($mitra->result() as $row_kategori) {  
                      echo "<option value='".$row_kategori->penjual."'>".$row_kategori->nama."</option>";
                      }
                      echo"
                    </select>";
                    ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama produk</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama produk">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi</label>
                  <div class="col-sm-10">
                    <textarea name="deskripsi" class="form-control" id="inputEmail3" placeholder="Deskripsi"> </textarea> 
                  </div>
                </div>
               
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
                  <div class="col-sm-10">
                    <?php
                    echo "
                    <select name='id_kategori' id='id_kategori' class='form-control'>
                     <option value=''>----Pilih Kategori----</option>";
                      foreach ($kategori->result() as $row_kategori) {  
                      echo "<option value='".$row_kategori->id_kategori."'>".$row_kategori->nama."</option>";
                      }
                      echo"
                    </select>";
                    ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis</label>
                  <div class="col-sm-10">
                    <input type="text" name="jenis" class="form-control" id="inputEmail3" placeholder="jenis">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="text" name="harga" class="form-control" id="inputEmail3" placeholder="Harga">
                  </div>
                </div>

                <input type="hidden" name="created_at" class="form-control" value="<?php echo date('y-m-d\TH:i:s'); ?>">
                <input type="hidden" name="update_at" class="form-control" value="<?php echo date('y-m-d\TH:i:s'); ?>">

                 
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/admin/produk" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Simpan</button>
              </div>
              <!-- /.box-footer -->
    </form>
  </div>
</div>