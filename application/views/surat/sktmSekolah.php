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

	<h1 style="text-align:center" class="display-4">SKTM Sekolah</h1>
    <p align="center">Berikut ini merupakan form pengajuan Surat Keterangan Tidak Mampu Sekolah, silahkan isi form dibawah ini.</p>
    <br><p align="center">Contoh Tampilan Surat</p>
  
    <h1 style="text-align:center">
    <img id="sktmrs" src="<?= base_url('assets/img/templates/sktmSekolah.png');?>" width="50%">
    </h1>

    <form action="<?php echo site_url('laporanpdf');?>" method="POST">

    <hr>
    <p><center>Pemerintah Desa Langensari Kecamatan Solokanjeruk Kabupaten Bandung Provinsi Jawa Barat,
    <b>menerangkan dibawah ini bahwa:</p></b></center>

    <!-- Tab panes -->
    <div class="tab-content">
 						<div class="tab-pane active" id="home2" role="tabpanel">
 							<div class="p-20">
 								<div class="row">
 									<div class="col-md-6">
									 <b>Isi Data Pribadi</b>
             							<hr width="50" align="left" color="black">
 										<div class="form-group">
 											<label for="">Nama Lengkap</label>
 											<input type="text" name="nama" class="form-control" id="nama">
 										</div>

 										<div class="form-group">
 											<label for="">Jenis Kelamin</label>
 											<input type="text" name="jk" class="form-control" id="jk">

 										</div>
 									<div class="form-group">
 											<label for="">Tempat Tanggal Lahir </label>
 											<input type="text" name="ttl" class="form-control" id="ttl">
 										</div>

 										<div class="form-group">
 											<label for="">Nomor Induk Penduduk</label>
 											<input type="text" name="nik" class="form-control" id="nik" maxlength="16"
                       onkeypress="return hanyaAngka(event)">
 										</div>

                     <div class="form-group">
 											<label for="">Nomor Kartu Keluarga</label>
 											<input type="text" name="nokk" class="form-control" id="nokk" maxlength="16"
                       onkeypress="return hanyaAngka(event)">
 										</div>
                    </div>

                  <div class="col-md-6">
				  <b>Isi Data Pribadi</b>
             						<hr width="50" align="left" color="black">
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
 											<label for="">Status Perkawinan</label>
 											<input type="text" name="statuskawin" class="form-control" id="statuskawin">
 										</div>

                     <div class="form-group">
 											<label for="">Pekerjaan</label>
 											<input type="text" name="pekerjaan" class="form-control" id="pekerjaan">
 										</div>

                     <div class="form-group">
 											<label for="">Kewarganegaraan</label>
 											<input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan">
 										</div>

                     <div class="form-group">
 											<label for="">Alamat</label>
 											<textarea name="alamat" id="alamat" class="form-control"></textarea>
 										</div>

 									</div>
 								</div>
 							</div>
 						</div>

             <hr>
             <p><center>Menurut keterangan dari RT / RW setempat, sesuai pula dengan data sepengathuan kami,
             <b>orang tersebut diatas keadaan ekonominya lemah sehingga tidak mampu untuk membiayai Pendidikan Anaknya :</p></b></center>

    <!-- Tab panes -->
    <div class="tab-content">
 						<div class="tab-pane active" id="home2" role="tabpanel">
 							<div class="p-20">
 								<div class="row">
 									<div class="col-md-6">
									 <b>Isi Data Anak</b>
             							<hr width="50" align="left" color="black">
 										<div class="form-group">
 											<label for="">Nama Lengkap</label>
 											<input type="text" name="nama" class="form-control" id="nama">
 										</div>

 										<div class="form-group">
 											<label for="">Jenis Kelamin</label>
 											<input type="text" name="jk" class="form-control" id="jk">
 										</div>

                     <div class="form-group">
 											<label for="">Nama Sekolah</label>
 											<input type="text" name="namasekolah" class="form-control" id="namasekolah">
 										</div>
                     </div>

                  <div class="col-md-6">   
				  <b>Isi Data Anak</b>
             							<hr width="50" align="left" color="black"></hr>
 									<div class="form-group">
 											<label for="">Tempat Tanggal Lahir </label>
 											<input type="text" name="ttl" class="form-control" id="ttl">
 										</div>

 										<div class="form-group">
 											<label for="">Nomor Induk Kependudukan</label>
 											<input type="text" name="nik" class="form-control" id="nik" maxlength="16"
                       onkeypress="return hanyaAngka(event)">
 										</div>
                     </div>

 									</div>
 								</div>
 							</div>
 						</div>
    
    <br>
    <div class="text-center mt-3">
           <a href="<?= base_url('laporanpdf');?>">
            <button type="button" class="btn btn-success">        
            <i class="fa fa-print" aria-hidden="true"></i> CETAK LAPORAN
      </button>
      </a>
    </div>

</font>
</div>
</div>
<font size="2" class="row justify-content-center" color="black">Copyright &copy; Desa Langensari <?= date('Y')?></font>