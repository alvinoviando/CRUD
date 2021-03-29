<!DOCTYPE html>
<html>
<head>

	<title>CRUD Codeigniter</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script "<?php echo base_url() ?>assets/js/javascript.js"></script>
<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
	<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Data <b>Mahasiswa</b> </h2></div>
                    <div class="col-sm-4">
                    	<?php echo form_open('mahasiswa/search') ?>
		<input type="text" name="keyword" class="form-control" placeholder="Search&hellip;">
				<input type="submit" name="search_submit" button class="btn btn-success" value="Cari">

	<?php echo form_close() ?>

                        
                            
                        </div>
                    </div>
                </div>
            </div>
	<hr>
	<button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i><a href='<?php echo base_url("mahasiswa/tambah"); ?>'>
	Tambah Data</a></button><br><br>
	<table class="table table-striped table-hover table-bordered"border="1" cellpadding="7">
		<?php foreach($mahasiswa as $data) {?>
				<tr>
					
				</tr>
			<?php } ?>
	<hr>


		<tr>

			<th>NIM <i class="fa fa-sort"> </th>
			<th>Nama <i class="fa fa-sort"> </th>
			<th>Jenis Kelamin</th>
			<th>Telepon</th>
			<th>Alamat</th>
			<th class=""colspan="2"><center>Aksi</center></th>
		
		</tr>
		<?php
		if( ! empty($mahasiswa)){
			foreach($mahasiswa as $data){
				echo "<tr>
				<td>".$data->nis."</td>
				<td>".$data->nama."</td>
				<td>".$data->jenis_kelamin."</td>
				<td>".$data->telp."</td>
				<td>".$data->alamat."</td>
				<td ><center><a href='".base_url("mahasiswa/ubah/".$data->nis)."'>Ubah</a></center></td>
				<td><center><a href='".base_url("mahasiswa/hapus/".$data->nis)."'>Hapus</a></center></td>
				</tr>";

			}
		}
		else{
			echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
		}
		?>
	</table>

	
                </ul>
            </div>
        </div>
    </div>

</body>
</html>