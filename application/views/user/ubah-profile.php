<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row">
    <div class="col-lg-8">
      <?= form_open_multipart('user/ubahProfil'); ?>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" name="email" id="email" class="form-control" value="<?= $user['email']; ?>" readonly>
        </div>
      </div>

      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
          <input type="text" name="nama" id="nama" class="form-control" value="<?= $user['nama']; ?>">
          <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-2">Gambar</div>
        <div class="col-sm-10">
          <div class="row">
            <div class="col-sm-3">
              <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
            </div>
            <div class="col-sm-9">
              <div class="custom-file">
                <input type="file" name="image" id="image" class="custom-file-input">
                <label for="image" class="custom-file-label">Pilih file</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group row justify-content-end">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">edit</button>
          <button class="btn btn-dark" onclick="window.history.go(-1)">Kembali</button>
        </div>
      </div>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->