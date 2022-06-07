<div class="container mt-3">
<div class="jumbotron jumbotron-fluid">
  <div class="container">

  <script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>

      <font color="black">

	<h1 style="text-align:center" class="display-4">Surat Keterangan Pernyataan Kelahiran</h1>
    <p align="center">Berikut ini merupakan form pengajuan Surat Keterangan Pernyataan Kelahiran, silahkan isi form dibawah ini.</p>
    <br><p align="center">Contoh Tampilan Surat</p>
  
    <h1 style="text-align:center">
    <img id="sktmrs" src="<?= base_url('assets/img/templates/sktmKelahiran.png');?>" width="50%">
    </h1>

    <form action="<?php echo site_url('laporanpdf');?>" method="POST">

    <hr>
    <p><center>Yang bertanda tangan dibawah ini Kepala Desa Langensari Kecamatan Solokanjeruk Kabupaten Bandung Provinsi Jawa Barat,
    <b>menyatakan dibawah ini :</p></b></center>

    <!-- Tab panes -->
    <div class="tab-content">
 						<div class="tab-pane active" id="home2" role="tabpanel">
 							<div class="p-20">
 								<div class="row">
 									<div class="col-md-6">

            <b>Isi Data Anak</b>
             <hr width="50" align="left" color="black"></hr>

 										<div class="form-group">
 											<label for="">Nama</label>
 											<input type="text" name="nama" class="form-control" id="nama">
 										</div>

 										<div class="form-group">
 											<label for="">Jenis Kelamin</label>
 											<input type="text" name="jk" class="form-control" id="jk">

 										</div>
 									<div class="form-group">
 											<label for="">Dilahirkan di </label>
 											<input type="text" name="dilahirkandi" class="form-control" id="dilahirkandi">
 										</div>
                     </div>
                    
                    <div class="col-md-6">
					<b>Isi Data Anak</b>
             		<hr width="50" align="left" color="black"></hr>
 										<div class="form-group">
 											<label for="">Hari</label>
 											<input type="text" name="hari" class="form-control" id="hari">
 										</div>

                     <div class="form-group">
 											<label for="">Pukul</label>
 											<input type="text" name="Pukul" class="form-control" id="Pukul">
 										</div>

                     <div class="form-group">
 											<label for="">Anak ke</label>
 											<input type="text" name="anakke" class="form-control" id="anakke">
 										</div>
                    </div>

 									</div>
 								</div>
 							</div>
 						</div>

             <hr>
             <p><center><b>Adalah anak dari Suami-Istri : </p></b></center>

    <!-- Tab panes -->
    <div class="tab-content">
 						<div class="tab-pane active" id="home2" role="tabpanel">
 							<div class="p-20">
 								<div class="row">
 									<div class="col-md-6">
									 <b>Data Suami</b>
             <hr width="50" align="left" color="black">
 										<div class="form-group">

 											<label for="">Nama Ayah</label>
 											<input type="text" name="namaayah" class="form-control" id="namaayah">
 										</div>

 										<div class="form-group">
 											<label for="">Umur</label>
 											<input type="text" name="umurAyah" class="form-control" id="umurAyah">
 										</div>
                    
                     <div class="form-group">
 											<label for="">Agama </label>
 											<select name="agama" class="form-control">
												<option value="Islam">Islam</option>
												<option value="Kristen Protestan">Kristen Protestan</option>
												<option value="Kristen Katolik">Kristen Katolik</option>
												<option value="Hindu">Hindu</option>
												<option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
											</select>
                     </div>

                     <div class="form-group">
 											<label for="">Pekerjaan</label>
 											<input type="text" name="pekerjaanAyah" class="form-control" id="pekerjaanAyah">
 										</div>

                     <div class="form-group">
 											<label for="">Alamat</label>
 											<textarea name="alamat" id="alamat" class="form-control"></textarea>
 										</div>
                     </div>

                     <div class="col-md-6">
					 <b>Data Istri</b>
             <hr width="50" align="left" color="black">
 										<div class="form-group">
 											<label for="">Nama Istri</label>
 											<input type="text" name="namaistri" class="form-control" id="namaistri">
 										</div>

 										<div class="form-group">
 											<label for="">Umur</label>
 											<input type="text" name="umurIstri" class="form-control" id="umurIstri">
 										</div>
                    
                     <div class="form-group">
 											<label for="">Agama </label>
 											<select name="agama" class="form-control">
												<option value="Islam">Islam</option>
												<option value="Kristen Protestan">Kristen Protestan</option>
												<option value="Kristen Katolik">Kristen Katolik</option>
												<option value="Hindu">Hindu</option>
												<option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
											</select>
                     </div>

                     <div class="form-group">
 											<label for="">Pekerjaan</label>
 											<input type="text" name="pekerjaanIstri" class="form-control" id="pekerjaanIstri">
 										</div>

                     <div class="form-group">
 											<label for="">Alamat</label>
 											<textarea name="alamat" id="alamat" class="form-control"></textarea>
 										</div>

 									</div>
 								</div>
 							</div>
 						</div>
    
    <br>
    <div class="text-center mt-3">
           <a href="<?= base_url('laporanpdf');?>">
            <button type="button" class="btn btn-success">        
            <i class="fa fa-print" aria-hidden="true"></i> Cetak Laporan
      </button>
      </a>
    </div>

</font>
</div>
</div>
<font size="2" class="row justify-content-center" color="black">Copyright &copy; Desa Langensari <?= date('Y')?></font>