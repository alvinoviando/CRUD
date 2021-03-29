<html>
  <head>
    <title>Form Ubah - Data Mahasiswa</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script srchttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script "<?php echo base_url() ?>assets/js/javascript.js"></script>
<link rel="stylesheet" href="assets/css/style.css">

  </head>
  <body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="row">
                    <div class="col-sm-6">
  <h1>Form Ubah <b>Data Mahasiswa</b></h1>
  </div>
</div>
</div>
</div>
</div>

    <hr>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("mahasiswa/ubah/".$mahasiswa->nis); ?>
      <table cellpadding="8">
        <tr>
          <td>NIM</td>
          <td><input type="text" class="form-control" name="input_nis" placeholder="NIM" value="<?php echo set_value('input_nis', $mahasiswa->nis); ?>" readonly></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" class="form-control" name="input_nama" placeholder="Nama" value="<?php echo set_value('input_nama', $mahasiswa->nama); ?>"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
          <input type="radio" name="input_jeniskelamin" value="Laki-laki" <?php echo set_radio('jeniskelamin', 'Laki-laki', ($mahasiswa->jenis_kelamin == "Laki-laki")? true : false); ?>> Laki-laki
          <input type="radio" name="input_jeniskelamin" value="Perempuan" <?php echo set_radio('jeniskelamin', 'Perempuan', ($mahasiswa->jenis_kelamin == "Perempuan")? true : false); ?>> Perempuan
          </td>
        </tr>
        <tr>
          <td>Telepon</td>
          <td><input type="text" class="form-control" name="input_telp" placeholder="Telepon" value="<?php echo set_value('input_telp', $mahasiswa->telp); ?>"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><textarea class="form-control" name="input_alamat" placeholder="Alamat"><?php echo set_value('input_alamat', $mahasiswa->alamat); ?></textarea></td>
        </tr>
      </table>
        
      <hr>
      <input type="submit" name="submit" button class="btn btn-success" value="Ubah">
      <a href="<?php echo base_url(); ?>"><input type="button" button class="btn btn-danger" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>