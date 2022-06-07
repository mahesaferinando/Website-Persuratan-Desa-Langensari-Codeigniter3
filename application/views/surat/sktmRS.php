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

    <h1 style="text-align:center" class="display-4">SKTM Rumah Sakit</h1>
    <p align="center">Berikut ini merupakan form pengajuan Surat Keterangan Tidak Mampu Rumah Sakit, silahkan isi form dibawah ini.</p>
    <br><p align="center">Contoh Tampilan Surat</p>
  
    <h1 style="text-align:center">
    <img id="sktmrs" src="<?= base_url('assets/img/templates/sktmRS.png');?>" width="50%">
    </h1>

    <form class="container" action="<?= base_url('/Laporanpdf/sktmrs'); ?>" method="post" enctype="multipart/form-data">
 
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
 											<label for="">Jenis Kelamin </label>
 											<select name="jenisk" class="form-control">
											 	<option value="">-</option>
												<option value="Laki - laki">Laki - Laki</option>
												<option value="Perempuan">Perempuan</option>
											</select>
 										</div>

 									<div class="form-group">
 											<label for="">Tempat Tanggal Lahir </label>
 											<input type="text" name="date" class="form-control" id="date">
 										</div>

 										<div class="form-group">
 											<label for="">Nomor Induk Penduduk</label>
 											<input type="text" name="nik1" class="form-control" id="nik1" maxlength="16"
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
											 	<option value="">-</option>
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
             <p><center>Menurut keterangan dari RT / RW setempat dan data sepengathuan kami,
             <b>orang tersebut diatas termasuk keluarga miskin sehingga tidak mampu untuk membiayai Persalinan Anaknya
             ke Rumah Sakit :</p></b></center>

    <!-- Tab panes -->
    <div class="tab-content">
 						<div class="tab-pane active" id="home2" role="tabpanel">
 							<div class="p-20">
 								<div class="row">
 									<div class="col-md-6">
 										<div class="form-group">
 											<label for="">Nama Lengkap</label>
 											<input type="text" name="nama2" class="form-control" id="nama2">
 										</div>

 										<div class="form-group">
 											<label for="">Jenis Kelamin</label>
 											<input type="text" name="jk" class="form-control" id="jk">
 										</div>
                     </div>

                     <div class="col-md-6">   
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
            <button type="submit" class="btn btn-success">   
            <i class="fa fa-print" aria-hidden="true"> </i> CETAK LAPORAN
      </button>
    </div>
	</form>
</div>
</div>
<p class="row justify-content-center" color="black">Copyright &copy; Desa Langensari <?= date('Y')?></p>