<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        
        
    }
    
    function sktmrs(){
        $pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','',20);
        // mencetak string
        $pdf->letak('assets/img/logo/logo.png');
        $pdf->Cell(210,8,'PEMERINTAH KABUPATEN BANDUNG',0,4,'C');
        $pdf->Cell(210,8,'KECAMATAN SOLOKANJERUK',0,4,'C');
        $pdf->SetFont('Arial','B',22);
        $pdf->Cell(210,8,'DESA LANGENSARI',0,4,'C');
        $pdf->SetFont('Arial','',9);
        $pdf->Cell(210,6,'Alamat : Jalan R.H.O  Kosasih  Nomor 60 Telp. 022-85964578 Langensari, 40376',0,3,'C');
        $pdf->Cell(210,3,'e-mail : Langensari111@gmail.com',0,2,'C');
        
        //pindah baris
		$pdf->Ln(7);
        //buat garis horisontal
        $pdf->SetLineWidth(1);
        $pdf->Line(20,45,190,46);
        $pdf->SetLineWidth(0);
        $pdf->Line(20,46,190,47);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->SetFont('Arial','BU',12);
        $pdf->Cell(190,9,'SURAT KETERANGAN TIDAK MAMPU',0,1,'C');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(190,3,'Nomor :         /         /         /           /           ',0,1,'C');
        $pdf->Ln(5);
        $pdf->SetMargins(20,30,20);
        $pdf->SetAutoPageBreak(false);
        $pdf->SetFont('Arial','',12);
        $pdf->SetX(20);
        $pdf->MultiCell(0, 5, '       Pemerintah Desa Langensari Kecamatan Solokanjeruk Kabupaten Bandung Provinsi Jawa Barat, menerangkan dibawah ini bahwa :',0,'J');
        $pdf->Ln(7);
        $pdf->SetX(30);
        $pdf->Write(5,'Nama');
        $pdf->SetX(90);
        $pdf->Write(5,': '.$this->input->post('nama'));
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Jenis Kelamin' );
        $pdf->SetX(90);
        $pdf->Write(5,': '.$this->input->post('jenisk'));
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Tempat Tanggal Lahir' );
        $pdf->SetX(90);
        $pdf->Write(5,': '.$this->input->post('date'));
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Nomor Induk Kependudukan' );
        $pdf->SetX(90);
        $pdf->Write(5,': '.$this->input->post('nik1'));
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Nomor Kartu Keluarga' );
        $pdf->SetX(90);
        $pdf->Write(5,': '.$this->input->post('nokk'));
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Agama' );
        $pdf->SetX(90);
        $pdf->Write(5,': '.$this->input->post('agama'));
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Status Perkawinan' );
        $pdf->SetX(90);
        $pdf->Write(5,':');
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Pekerjaan' );
        $pdf->SetX(90);
        $pdf->Write(5,':');
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Kewarganegaraan' );
        $pdf->SetX(90);
        $pdf->Write(5,':');
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Alamat' );
        $pdf->SetX(90);
        $pdf->Write(5,':');
        $pdf->Ln(20);
        $pdf->SetX(20);
        $pdf->MultiCell(0, 5, '    Menurut keterangan dari RT / RW setempat dan data sepengetahuan kami, orang tersebut diatas termasuk keluarga miskin sehingga tidak mampu untuk membiayai Persalinan Istrinya ke Rumah Sakit.',0,'J');
        $pdf->Ln(7);
        $pdf->SetX(30);
        $pdf->Write(5,'Nama');
        $pdf->SetX(90);
        $pdf->Write(5,':');
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Jenis Kelamin' );
        $pdf->SetX(90);
        $pdf->Write(5,':');
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Tempat Tanggal Lahir' );
        $pdf->SetX(90);
        $pdf->Write(5,':');
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Nomor Induk Kependudukan' );
        $pdf->SetX(90);
        $pdf->Write(5,':');
        $pdf->Ln(10);
        $pdf->SetX(20);
        $pdf->MultiCell(0, 5, '    Demikian Surat Keterangan ini kami buat dengan sebenarnya dan untuk dipergunakan sebagaimana mestinya.',0,'J');
        $pdf->Ln(10);
        $pdf->SetX(25);
        $pdf->Write(5,'Reg / No');
        $pdf->SetX(50);
        $pdf->Write(5,':');
        $pdf->Ln(5);
        $pdf->SetX(25);
        $pdf->Write(5,'Tanggal' );
        $pdf->SetX(50);
        $pdf->Write(5,':');
        $pdf->SetX(25);
        $pdf->Cell(0,20,'Melihat keterangan tersebut diatas,',0,0,'L',0);
        $pdf->SetX(107);
        $pdf->Cell(0,20,('Langensari, '),0,0,'C',0);
        $pdf->SetX(153);
        $pdf->Cell(0,20, date("d M Y"),0,0,'C',0);
        $pdf->SetX(130);
        $pdf->Cell(0,30,'an. Kepala Desa Langensari',0,0,'C',0);
        $pdf->SetX(37);
        $pdf->Cell(0,30,'Camat Solokanjeruk',0,0,'L',0);
        $pdf->SetX(130);
        $pdf->Cell(0,40,'Sekretaris',0,0,'C',0);
        $pdf->SetX(30);
        $pdf->Cell(0,90,'(........................................)',0,0,'L',0);
        $pdf->SetX(130);
        $pdf->SetFont('Arial','BU',12);
        $pdf->Cell(0,90,'NOPI HARDIANSAH',0,0,'C',0);

        $pdf->Output();
    }

    function skematian(){
        $pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','',20);
        // mencetak string
        $pdf->letak('assets/img/logo/logo.png');
        $pdf->Cell(210,8,'PEMERINTAH KABUPATEN BANDUNG',0,4,'C');
        $pdf->Cell(210,8,'KECAMATAN SOLOKANJERUK',0,4,'C');
        $pdf->SetFont('Arial','B',22);
        $pdf->Cell(210,8,'DESA LANGENSARI',0,4,'C');
        $pdf->SetFont('Arial','',9);
        $pdf->Cell(210,6,'Alamat : Jalan R.H.O  Kosasih  Nomor 60 Telp. 022-85964578 Langensari, 40376',0,3,'C');
        $pdf->Cell(210,3,'e-mail : Langensari111@gmail.com',0,2,'C');
        
        //pindah baris
		$pdf->Ln(7);
        //buat garis horisontal
        $pdf->SetLineWidth(1);
        $pdf->Line(20,45,190,46);
        $pdf->SetLineWidth(0);
        $pdf->Line(20,46,190,47);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->SetFont('Arial','BU',12);
        $pdf->Cell(190,9,'SURAT KETERANGAN TIDAK MAMPU',0,1,'C');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(190,3,'Nomor :         /         /         /           /           ',0,1,'C');
        $pdf->Ln(5);
        $pdf->SetMargins(20,30,20);
        $pdf->SetAutoPageBreak(false);
        $pdf->SetFont('Arial','',12);
        $pdf->SetX(20);
        $pdf->MultiCell(0, 5, '       Pemerintah Desa Langensari Kecamatan Solokanjeruk Kabupaten Bandung Provinsi Jawa Barat, menerangkan dibawah ini bahwa :',0,'J');
        $pdf->Ln(7);
        $pdf->SetX(30);
        $pdf->Write(5,'Nama');
        $pdf->SetX(90);
        $pdf->Write(5,': '.$this->input->post('nama'));
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Jenis Kelamin' );
        $pdf->SetX(90);
        $pdf->Write(5,': '.$this->input->post('jenisk'));
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Tempat Tanggal Lahir' );
        $pdf->SetX(90);
        $pdf->Write(5,': '.$this->input->post('date'));
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Nomor Induk Kependudukan' );
        $pdf->SetX(90);
        $pdf->Write(5,': '.$this->input->post('nik1'));
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Nomor Kartu Keluarga' );
        $pdf->SetX(90);
        $pdf->Write(5,': '.$this->input->post('nokk'));
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Agama' );
        $pdf->SetX(90);
        $pdf->Write(5,': '.$this->input->post('agama'));
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Status Perkawinan' );
        $pdf->SetX(90);
        $pdf->Write(5,':');
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Pekerjaan' );
        $pdf->SetX(90);
        $pdf->Write(5,':');
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Kewarganegaraan' );
        $pdf->SetX(90);
        $pdf->Write(5,':');
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Alamat' );
        $pdf->SetX(90);
        $pdf->Write(5,':');
        $pdf->Ln(20);
        $pdf->SetX(20);
        $pdf->MultiCell(0, 5, '    Menurut keterangan dari RT / RW setempat dan data sepengetahuan kami, orang tersebut diatas termasuk keluarga miskin sehingga tidak mampu untuk membiayai Persalinan Istrinya ke Rumah Sakit.',0,'J');
        $pdf->Ln(7);
        $pdf->SetX(30);
        $pdf->Write(5,'Nama');
        $pdf->SetX(90);
        $pdf->Write(5,':');
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Jenis Kelamin' );
        $pdf->SetX(90);
        $pdf->Write(5,':');
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Tempat Tanggal Lahir' );
        $pdf->SetX(90);
        $pdf->Write(5,':');
        $pdf->Ln(5);
        $pdf->SetX(30);
        $pdf->Write(5,'Nomor Induk Kependudukan' );
        $pdf->SetX(90);
        $pdf->Write(5,':');
        $pdf->Ln(10);
        $pdf->SetX(20);
        $pdf->MultiCell(0, 5, '    Demikian Surat Keterangan ini kami buat dengan sebenarnya dan untuk dipergunakan sebagaimana mestinya.',0,'J');
        $pdf->Ln(10);
        $pdf->SetX(25);
        $pdf->Write(5,'Reg / No');
        $pdf->SetX(50);
        $pdf->Write(5,':');
        $pdf->Ln(5);
        $pdf->SetX(25);
        $pdf->Write(5,'Tanggal' );
        $pdf->SetX(50);
        $pdf->Write(5,':');
        $pdf->SetX(25);
        $pdf->Cell(0,20,'Melihat keterangan tersebut diatas,',0,0,'L',0);
        $pdf->SetX(107);
        $pdf->Cell(0,20,('Langensari, '),0,0,'C',0);
        $pdf->SetX(153);
        $pdf->Cell(0,20, date("d M Y"),0,0,'C',0);
        $pdf->SetX(130);
        $pdf->Cell(0,30,'an. Kepala Desa Langensari',0,0,'C',0);
        $pdf->SetX(37);
        $pdf->Cell(0,30,'Camat Solokanjeruk',0,0,'L',0);
        $pdf->SetX(130);
        $pdf->Cell(0,40,'Sekretaris',0,0,'C',0);
        $pdf->SetX(30);
        $pdf->Cell(0,90,'(........................................)',0,0,'L',0);
        $pdf->SetX(130);
        $pdf->SetFont('Arial','BU',12);
        $pdf->Cell(0,90,'NOPI HARDIANSAH',0,0,'C',0);

        $pdf->Output();
    }
}