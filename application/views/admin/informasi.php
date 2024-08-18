<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1><?php echo $title; ?></h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12">

        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Informasi Baru</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?php echo base_url('admin/informasi/tambah'); ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" id="title" name="title" required>
              </div>
              <div class="form-group">
                <label for="content">Konten</label>
                <textarea id="content" class="form-control" name="content" required></textarea>
              </div>
              <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>

        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Daftar Informasi</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered">
              <tr>
                <th>Judul</th>
                <th>Konten</th>
                <th>Status</th>
                <th>Gambar</th>
                <th>Aksi</th>
              </tr>
              <?php foreach($informasi as $info) : ?>
              <tr>
                <td><?php echo $info->title; ?></td>
                <td><?php echo $info->content; ?></td>
                <td><?php echo $info->status; ?></td>
                <td><?php if($info->gambar) { echo '<img src="'.base_url('uploads/'.$info->gambar).'" width="100">'; } ?></td>
                <td>
                  <a href="<?php echo base_url('admin/informasi/edit/'.$info->id); ?>" class="btn btn-warning">Edit</a>
                  <a href="<?php echo base_url('admin/informasi/delete/'.$info->id); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus informasi ini?');">Hapus</a>
                </td>
              </tr>
              <?php endforeach; ?>
            </table>
          </div>
          <!-- /.box-body -->
        </div>

      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
