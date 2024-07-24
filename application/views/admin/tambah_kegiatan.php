<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Kegiatan
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Your Page Content Here -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Form Tambah Kegiatan</h3>
          </div>
          <!-- /.box-header -->

          <!-- form start -->
          <form action="<?php echo base_url('admin/kegiatan/tambah_aksi'); ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="judul">Judul Kegiatan</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Kegiatan" required>
              </div>
              <div class="form-group">
                <label for="isi">Isi Kegiatan</label>
                <textarea class="form-control" id="isi" name="isi" rows="3" placeholder="Masukkan Isi Kegiatan" required></textarea>
              </div>
              <div class="form-group">
                <label for="gambar">Unggah Gambar</label>
                <input type="file" id="gambar" name="gambar" required>
                <p class="help-block">Format gambar yang diperbolehkan: jpg, jpeg, png. Ukuran maksimal 2MB.</p>
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
