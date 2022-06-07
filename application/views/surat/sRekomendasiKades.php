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

</style>

      <font color="black">

    <h1 style="text-align:center" class="display-4">Surat Rekomendasi Kades</h1>
    <p align="center">Berikut ini merupakan form pengajuan Surat Rekomendasi Kades, silahkan isi form dibawah ini.</p>
    <br><p align="center">Contoh Tampilan Surat</p>
  
    <h1 style="text-align:center">
    <img id="sktmrs" src="<?= base_url('assets/img/templates/sktmRekomendasiKades.png');?>" width="50%">
    </h1>

    <form action="<?php echo site_url('laporanpdf');?>" method="POST">

    <hr>
    <p><b>Yang bertanda tangan di bawah ini, menerangkan bahwa :</p></b>

    <!-- Tab panes -->
    
    <div class="tab-content">
 						<div class="tab-pane active" id="home2" role="tabpanel">
 							<div class="p-20">
 								<div class="row">
 									<div class="col-md-6">
 										<div class="form-group">
 											<label for="">Nama Sekolah</label>
 											<input type="text" name="namaSekolah" class="form-control" id="namaSekolah">
 										</div>

 										<div class="form-group">
                     <label for="">Kepala Sekolah</label>
 											<input type="text" name="kepalaSekolah" class="form-control" id="kepalaSekolah">

 										</div>
                     </div>
                     
                     <div class="col-md-6">
 									<div class="form-group">
                   <label for="">NIP</label>
 											<input type="text" name="nip" class="form-control" id="nip" maxlength="18"
                       onkeypress="return hanyaAngka(event)">
 										</div>

 										<div class="form-group">
                     <label for="">Alamat</label>
 											<textarea name="alamat" id="alamat" class="form-control"></textarea>
 										</div>
                    </div>

 									</div>
 								</div>
 							</div>
 						</div>

    <div class="text-center mt-3">
           <a href="<?= base_url('laporanpdf');?>">
            <button type="button" class="btn btn-success">   
            <i class="fa fa-print" aria-hidden="true"></i> CETAK LAPORAN
      </button>
      </a>
</font>
</div>
</div>
<font size="2" class="row justify-content-center" color="black">Copyright &copy; Desa Langensari <?= date('Y')?></font>