<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Cetak Formulir</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="asset/css/bootstrap.css" rel="stylesheet" />
	  <!-- CUSTOM STYLE  -->
    <link href="asset/css/custom-style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />

</head>
<body>
 <div class="container">
     
      <div class="row pad-top-botm ">
         <div class="col-lg-6 col-md-6 col-sm-6 ">
            <img src="asset/images/logo forum.jpg" style="padding-bottom:20px;" /> 
         </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            
               <strong>   PC Pemuda PERSIS Cipedes</strong>
              <br />
                  Alamat : Kantor Sekretariat PC Pemuda PERSIS Cipedes
              <br />
                  Jln. R.E. Martadinata No. 95
              <br />
                  Cipedes Kota Tasikmalaya
              
         </div>
     </div>
     <div  class="row text-center contact-info">
         <div class="col-lg-12 col-md-12 col-sm-12" style="background-color:#18bc9c">
             <hr />
             <span>
                 <strong>Email : </strong>  pemudapersis-cipedes@gmail.com 
             </span>
             <span>
                 <strong>Telephone : </strong>  0265-340496 
             </span>
              <span>
                 <strong>Website </strong>  www.pemudapersis-cipedes.or.id 
             </span>
             <hr />
         </div>
     </div>
     <div  class="row pad-top-botm client-info">
         <div class="col-lg-6 col-md-6 col-sm-6">
         <h4>  <strong>Biodata Calon Anggota</strong></h4>
         	<?php
				$sql="select*from tbl_daftar order by id_daftar desc";
				$data=mysql_query($sql);
			?>
    		<?php
			$record=mysql_fetch_array($data);
			?>
           <strong>  <?php echo $record['nama_depan'];?>&nbsp;<?php echo $record['nama_belakang'];?></strong>
             <br />
                  <b>Alamat :</b> <?php echo $record['alamat'];?>
             <br />
             <b>Tanggal Lahir :</b> <?php echo $record['tanggal_lahir'];?>
             <br />
             <b>Nomor Telp :</b> <?php echo $record['nomor_telp'];?>
              <br />
             <b>E-mail :</b> <?php echo $record['email'];?>
         </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            
               <h4>  <strong>Tujuan mengikuti Kegiatan </strong></h4>
            	<p>
                	<?php echo $record['tujuan'];?>
                </p>
         </div>
     </div>
     <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
           <div class="table-responsive">
           <h4>  <strong>Agenda Acara Kegiatan Ma'ruf</strong>&nbsp;</h4>
           <table border="1" cellspacing="0" cellpadding="0" class="table table-striped table-bordered">
           
             <tr align="center" valign="middle" bgcolor="#18BC9C">
               <td align="center" valign="middle"><p><strong>Hari</strong></p></td>
               <td align="center" valign="middle"><p><strong>Waktu</strong></p></td>
               <td><p><strong>Materi</strong></p></td>
               <td align="center" valign="middle"><p><strong>Durasi</strong></p></td>
               <td align="center" valign="middle"><p><strong>Ket</strong></p></td>
             </tr>
             <tr>
               <td rowspan="10" align="center" valign="middle"><p>I</p></td>
               <td align="center" valign="middle"><p>12.00-12.30</p></td>
               <td valign="top"><p>Check in    Peserta</p></td>
               <td align="center" valign="middle"><p>30&rsquo;</p></td>
               <td align="left" valign="middle"><p>Panitia</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>12.30-13.30</p></td>
               <td valign="top"><p>Sholiskan <br>
                 (Sholat,    Istirahat, Makan)</p></td>
               <td align="center" valign="middle"><p>30&rsquo;</p></td>
               <td align="left" valign="middle"><p>Panitia</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>13.30-14.00</p></td>
               <td valign="top"><p>Opening    Ceremony</p></td>
               <td align="center" valign="middle"><p>30&rsquo;</p></td>
               <td align="left" valign="middle">Sambutan Ketua PC Persis (sekaligus membuka) </td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>14.00-15.00</p></td>
               <td valign="top"><p>Ta&rsquo;aruf <br>
                 (Perkenalan    Peserta)</p></td>
               <td align="center" valign="middle"><p>60&rsquo;</p></td>
               <td align="left" valign="middle"><p>Instruktur    Ruang</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>15.00-15.30</p></td>
               <td valign="top"><p>Sholis <br>
                 (Sholat dan    Istirahat)</p></td>
               <td align="center" valign="middle"><p>30&rsquo;</p></td>
               <td align="left" valign="middle"><p>Panitia</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>15.30-16.00</p></td>
               <td valign="top"><p>Materi I</p></td>
               <td align="center" valign="middle"><p>90&rsquo;</p></td>
               <td align="left" valign="middle"><p>Instruktur    Materi</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>16.00-17.30</p></td>
               <td valign="top"><p>Materi II</p></td>
               <td align="center" valign="middle"><p>90&rsquo;</p></td>
               <td align="left" valign="middle"><p>Instruktur    Materi</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>17.30-19.30</p></td>
               <td valign="top"><p>Sholiskandi <br>
                 (Sholat,    Istirahat, Makan, Mandi)</p></td>
               <td align="center" valign="middle"><p>90&rsquo;</p></td>
               <td align="left" valign="middle"><p>Panitia</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>19.30-21.00</p></td>
               <td valign="top"><p>Materi III</p></td>
               <td align="center" valign="middle"><p>90&rsquo;</p></td>
               <td align="left" valign="middle"><p>Instruktur    Materi</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>21.00-22.00</p></td>
               <td valign="top"><p>Materi IV</p></td>
               <td align="center" valign="middle"><p>60&rsquo;</p></td>
               <td align="left" valign="middle"><p>Instruktur    Materi</p></td>
             </tr>
             <tr>
               <td rowspan="15" align="center" valign="middle"><p>II</p></td>
               <td align="center" valign="middle"><p>02.30-03.00</p></td>
               <td valign="top"><p>Persiapan    Sholat Tahajud</p></td>
               <td align="center" valign="middle"><p>30&rsquo;</p></td>
               <td align="left" valign="middle"><p>Panitia</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>03.00-04.00</p></td>
               <td valign="top"><p>Sholat    Tahajud + Muhasabah</p></td>
               <td align="center" valign="middle"><p>60&rsquo;</p></td>
               <td align="left" valign="middle"><p>Panitia</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>04.00-04.30</p></td>
               <td valign="top"><p>Sholat Shubuh    Berjamaah</p></td>
               <td align="center" valign="middle"><p>60&rsquo;</p></td>
               <td align="left" valign="middle"><p>Panitia</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>04.30-05.00</p></td>
               <td valign="top"><p>Kulkas (Kuliah Ringkas) Antar    Peserta</p></td>
               <td align="center" valign="middle"><p>30&rsquo;</p></td>
               <td align="left" valign="middle"><p>Panitia</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>05.00-06.00</p></td>
               <td valign="top"><p>Bina Jasmani<br>
                 (Olahraga)</p></td>
               <td align="center" valign="middle"><p>60&rsquo; </p></td>
               <td align="left" valign="middle"><p>Panitia</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>06.00-07.30</p></td>
               <td valign="top"><p>Istirahat<br>
                 (Mandi dan Sarapan Pagi)</p></td>
               <td align="center" valign="middle"><p>90&rsquo;</p></td>
               <td align="left" valign="middle"><p>Panitia</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>07.30-09.00</p></td>
               <td valign="top"><p>Materi V</p></td>
               <td align="center" valign="middle"><p>90&rsquo;</p></td>
               <td align="left" valign="middle"><p>Instruktur    Materi</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>09.00-10.30</p></td>
               <td valign="top"><p>Materi VI</p></td>
               <td align="center" valign="middle"><p>90&rsquo;</p></td>
               <td align="left" valign="middle"><p>Instruktur    Materi</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>10.30-12.00</p></td>
               <td valign="top"><p>Materi VII</p></td>
               <td align="center" valign="middle"><p>90&rsquo;</p></td>
               <td align="left" valign="middle"><p>Instruktur    Materi</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>12.00-13.00</p></td>
               <td valign="top"><p>Istirahat<br>
                 (Sholat +    Makan Siang)</p></td>
               <td align="center" valign="middle"><p>60&rsquo;</p></td>
               <td align="left" valign="middle"><p>Panitia</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>13.00-14.00</p></td>
               <td valign="top"><p>Materi VIII</p></td>
               <td align="center" valign="middle"><p>60&rsquo;</p></td>
               <td align="left" valign="middle"><p>Instruktur    Materi</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>14.00-15.00</p></td>
               <td valign="top"><p>Materi IX</p></td>
               <td align="center" valign="middle"><p>60&rsquo;</p></td>
               <td align="left" valign="middle"><p>Instruktur    Materi</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>15.00-15.30</p></td>
               <td valign="top"><p>Istirahat</p></td>
               <td align="center" valign="middle"><p>30&rsquo;</p></td>
               <td align="left" valign="middle"><p>Panitia</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>15.30-16.00</p></td>
               <td valign="top"><p>Materi X <strong></strong></p></td>
               <td align="center" valign="middle"><p>30&rsquo;</p></td>
               <td align="left" valign="middle"><p>Instruktur    Materi</p></td>
             </tr>
             <tr>
               <td align="center" valign="middle"><p>16.00-16.30</p></td>
               <td valign="top"><p>Closing    Ceremony</p></td>
               <td align="center" valign="middle"><p>30&rsquo;</p></td>
               <td align="left" valign="middle"><p>Panitia</p></td>
             </tr>
           </table>
<h4>&nbsp;</h4>
           </div>
           
     </div>
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <strong> Important: </strong>
             <ol>
                  <li>
                    Cetak formulir ini dan harap dibawa pada saat kegiatan ma'ruf

                 </li>
                 <li>
                     Diharapkan datang tepat waktu

                 </li>
             </ol>
             </div>
         </div>
      <div class="row pad-top-botm">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <hr />
             <a href="#" class="btn btn-primary btn-lg" onClick="window.print() ;" >Cetak</a>
             &nbsp;&nbsp;&nbsp;
              <a href="index.php" class="btn btn-success btn-lg" >Kembali ke halaman utama</a>

             </div>
         </div>
 </div>

</body>
</html>
