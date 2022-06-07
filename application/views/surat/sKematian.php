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

    <h1 style="text-align:center" class="display-4">Surat Kematian</h1>
    <p align="center">Berikut ini merupakan form pengajuan Surat Kematian, silahkan isi form dibawah ini.</p>
    <br><p align="center">Contoh Tampilan Surat</p>
  
    <h1 style="text-align:center">
    <img id="sktmrs" src="<?= base_url('assets/img/templates/sktmKematian.png');?>" width="50%">
    </h1>

    <<form class="container" action="<?= base_url('/Laporanpdf/skematian'); ?>" method="post" enctype="multipart/form-data">

    <hr>
    <p><b>Yang bertanda tangan di bawah ini, menerangkan bahwa :</p></b>

    <!-- Tab panes -->
    
    <div class="tab-content">
 						<div class="tab-pane active" id="home2" role="tabpanel">
 							<div class="p-20">
 								<div class="row">
 									<div class="col-md-6">
 										<div class="form-group">
										 
 											<label for="">Nama Lengkap</label>
 											<input type="text" name="nama" class="form-control" id="nama">
 										</div>

 										<div class="form-group">
 											<label for="">Jenis Kelamin</label>
 											<input type="text" name="jk" class="form-control" id="jk">

 										</div>
 									<div class="form-group">
 											<label for="">Umur </label>
 											<input type="text" name="umur" class="form-control" id="umur">
 										</div>
                     </div>

                    <div class="col-md-6">
 										<div class="form-group">
                     <label for="">Pekerjaan </label>
 											<input type="text" name="pekerjaan" class="form-control" id="pekerjaan">
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

             <hr>
             <p><b>Telah meninggal dunia, pada : </p></b>

    <!-- Tab panes -->
    <div class="tab-content">
 						<div class="tab-pane active" id="home2" role="tabpanel">
 							<div class="p-20">
 								<div class="row">
 									<div class="col-md-6">
 										<div class="form-group">
 											<label for="">Hari</label>
 											<input type="text" name="hari" class="form-control" id="hari">
 										</div>

 										<div class="form-group">
                     <label for="">Tanggal</label>
 											<input type="text" name="rgl" class="form-control" id="tgl">
 										</div>
                     </div>

                     <div class="col-md-6">   
 									<div class="form-group">
                   <label for="">Pukul</label>
 											<input type="text" name="pukul" class="form-control" id="pukul"></input>
 										</div>

 										<div class="form-group">
                     <label for="">Sebab Kematian</label>
 											<input type="text" name="pukul" class="form-control" id="pukul" placeholder="Sakit / Lansia / Kecelakaan dll">
 										</div>
                     </div>

 									</div>
 								</div>
 							</div>
 						</div>
    
    <br>
    <div class="text-center mt-3">
            <button type="button" class="btn btn-success">   
            <i class="fa fa-print" aria-hidden="true"></i> CETAK LAPORAN
      </button>
	  </form>
</font>
</div>
</div>
<font size="2" class="row justify-content-center" color="black">Copyright &copy; Desa Langensari <?= date('Y')?></font>