<?php 
$conn = mysqli_connect("localhost","root","","checkbox");

// Check connection
if (mysqli_connect_errno())
  {
   "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>


<?php 

if(isset($_POST['tolol'])) {

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $mysqli = mysqli_connect("localhost","root","","checkbox");

    $nama_ukm=$_POST['nama_ukm'];
    $pendapatan=$_POST['pendapatan'];
    $modal=implode(",", $_POST['modal']);
    $keuangan=implode(",", $_POST['keuangan']);
    $produksi=implode(",", $_POST['produksi']);
    $inovasi=implode(",", $_POST['inovasi']);
    $distribusi=implode(",", $_POST['distribusi']);
    $online=implode(",", $_POST['online']);
    $brand=implode(",", $_POST['brand']);
    $izin=implode(",", $_POST['izin']);
    $teknologi=implode(",", $_POST['teknologi']);
    $waktu=implode(",", $_POST['waktu']);
    $sdm=implode(",", $_POST['sdm']);
    $loyalitas=implode(",", $_POST['loyatitas']);


	 // Memeriksa apakah variabel judul dan pengarang sudah terisi,jika sudah jalankan query dibawah
     $sql = "INSERT INTO kuis "."(namaukm,omsettahun, modal,keuangan,produksi,inovasi,distribusi,online,brand,izin,teknologi,sdm,waktu,loyatitas) "."VALUES ".
     "('$nama_ukm','$pendapatan','$modal','$keuangan','$produksi','$inovasi','$distribusi','$online','$brand','$izin','$teknologi','$sdm','$waktu','$loyalitas')";
  
			 
			if($mysqli->query($sql) === false) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
			  trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $mysqli->error, E_USER_ERROR);
			} else { // Jika berhasil alihkan ke halaman tampil.php
			  header('location: ?m=nft');
			}
  
}

}

?>


<div class='page-header'>
    <h1>SISTEM REKOMENDASI DENGAN METODE NRF</h1>
</div>



<div class="page-header">
    <h5>Biodata UKM </h5>
</div>
<div class="row">
    <div class="col-sm-7">
     
        <form method="post" action="">
            <div class="form-group">
                <label>Nama UKM <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_ukm"  required/>
            </div>

            <div class="form-group">
                <label>Pendapatan <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="pendapatan"  required/>
            </div>

        <div class="form-inline">
        <h5>Faktor apa yang menjadi Modal?</h5>
<div class="form-check form-check-inline">
  <input class="form-check-input a" type="checkbox" name="modal[]" id="inlineCheckbox1" value="1">
  <label class="form-check-label" for="inlineCheckbox1">1</label>

  <input class="form-check-input a" type="checkbox" name="modal[]" id="inlineCheckbox2" value="2">
  <label class="form-check-label" for="inlineCheckbox2">2</label>

  <input class="form-check-input a" type="checkbox" name="modal[]" id="inlineCheckbox1" value="3">
  <label class="form-check-label " for="inlineCheckbox3">3</label>

  <input class="form-check-input a" type="checkbox" name="modal[]" id="inlineCheckbox1" value="4">
  <label class="form-check-label " for="inlineCheckbox1">4</label>

  <input class="form-check-input a" type="checkbox" name="modal[]" id="inlineCheckbox1" value="5">
  <label class="form-check-label" for="inlineCheckbox1">5</label>
</div>
</div>

<div class="form-inline">
    <h5>Faktor apa yang menjadi Keuangan?</h5>
<div class="form-check form-check-inline">
<input class="form-check-input b" type="checkbox" name="keuangan[]" id="inlineCheckbox1" value="1">
<label class="form-check-label" for="inlineCheckbox1">1</label>

<input class="form-check-input b" type="checkbox" name="keuangan[]" id="inlineCheckbox2" value="2">
<label class="form-check-label" for="inlineCheckbox2">2</label>

<input class="form-check-input b" type="checkbox" name="keuangan[]" id="inlineCheckbox1" value="3">
<label class="form-check-label" for="inlineCheckbox3">3</label>

<input class="form-check-input b" type="checkbox" name="keuangan[]" id="inlineCheckbox1" value="4">
<label class="form-check-label" for="inlineCheckbox1">4</label>

<input class="form-check-input b" type="checkbox" name="keuangan[]" id="inlineCheckbox1" value="5">
<label class="form-check-label" for="inlineCheckbox1">5</label>
</div>
</div>

<div class="form-inline">
    <h5>Faktor apa yang menjadi Produksi?</h5>
<div class="form-check form-check-inline">
<input class="form-check-input c" type="checkbox" name="produksi[]" id="inlineCheckbox1" value="1">
<label class="form-check-label" for="inlineCheckbox1">1</label>

<input class="form-check-input c" type="checkbox" name="produksi[]" id="inlineCheckbox2" value="2">
<label class="form-check-label" for="inlineCheckbox2">2</label>

<input class="form-check-input c" type="checkbox" name="produksi[]" id="inlineCheckbox1" value="3">
<label class="form-check-label" for="inlineCheckbox3">3</label>

<input class="form-check-input c" type="checkbox" name="produksi[]" id="inlineCheckbox1" value="4">
<label class="form-check-label" for="inlineCheckbox1">4</label>

<input class="form-check-input c" type="checkbox" name="produksi[]" id="inlineCheckbox1" value="5">
<label class="form-check-label" for="inlineCheckbox1">5</label>
</div>
</div>

<div class="form-inline">
    <h5>Faktor apa yang menjadi Inovasi?</h5>
<div class="form-check form-check-inline">
<input class="form-check-input d" type="checkbox" name="inovasi[]" id="inlineCheckbox1" value="1">
<label class="form-check-label" for="inlineCheckbox1">1</label>

<input class="form-check-input d" type="checkbox" name="inovasi[]" id="inlineCheckbox2" value="2">
<label class="form-check-label" for="inlineCheckbox2">2</label>

<input class="form-check-input d" type="checkbox" name="inovasi[]" id="inlineCheckbox1" value="3">
<label class="form-check-label" for="inlineCheckbox3">3</label>

<input class="form-check-input d" type="checkbox" name="inovasi[]" id="inlineCheckbox1" value="4">
<label class="form-check-label" for="inlineCheckbox1">4</label>

<input class="form-check-input d" type="checkbox" name="inovasi[]" id="inlineCheckbox1" value="5">
<label class="form-check-label" for="inlineCheckbox1">5</label>
</div>
</div>

<div class="form-inline">
        <h5>Faktor apa yang menjadi Distribusi?</h5>
<div class="form-check form-check-inline">
  <input class="form-check-input e" type="checkbox" name="distribusi[]" id="inlineCheckbox1" value="1">
  <label class="form-check-label" for="inlineCheckbox1">1</label>

  <input class="form-check-input e" type="checkbox" name="distribusi[]" id="inlineCheckbox2" value="2">
  <label class="form-check-label" for="inlineCheckbox2">2</label>

  <input class="form-check-input e" type="checkbox" name="distribusi[]" id="inlineCheckbox1" value="3">
  <label class="form-check-label" for="inlineCheckbox3">3</label>

  <input class="form-check-input e" type="checkbox" name="distribusi[]" id="inlineCheckbox1" value="4">
  <label class="form-check-label" for="inlineCheckbox1">4</label>

  <input class="form-check-input e" type="checkbox" name="distribusi[]" id="inlineCheckbox1" value="5">
  <label class="form-check-label" for="inlineCheckbox1">5</label>
</div>
</div>

<div class="form-inline">
        <h5>Faktor apa yang menjadi Online?</h5>
<div class="form-check form-check-inline">
  <input class="form-check-input f" type="checkbox" name="online[]" id="inlineCheckbox1" value="1">
  <label class="form-check-label" for="inlineCheckbox1">1</label>

  <input class="form-check-input f" type="checkbox" name="online[]" id="inlineCheckbox2" value="2">
  <label class="form-check-label" for="inlineCheckbox2">2</label>

  <input class="form-check-input f" type="checkbox" name="online[]" id="inlineCheckbox1" value="3">
  <label class="form-check-label" for="inlineCheckbox3">3</label>

  <input class="form-check-input f" type="checkbox" name="online[]" id="inlineCheckbox1" value="4">
  <label class="form-check-label" for="inlineCheckbox1">4</label>

  <input class="form-check-input f" type="checkbox" name="online[]" id="inlineCheckbox1" value="5">
  <label class="form-check-label" for="inlineCheckbox1">5</label>
</div>
</div>

<div class="form-inline">
        <h5>Faktor apa yang menjadi Brand?</h5>
<div class="form-check form-check-inline">
  <input class="form-check-input g" type="checkbox" name="brand[]" id="inlineCheckbox1" value="1">
  <label class="form-check-label" for="inlineCheckbox1">1</label>

  <input class="form-check-input g" type="checkbox" name="brand[]" id="inlineCheckbox2" value="2">
  <label class="form-check-label" for="inlineCheckbox2">2</label>

  <input class="form-check-input g" type="checkbox" name="brand[]" id="inlineCheckbox1" value="3">
  <label class="form-check-label" for="inlineCheckbox3">3</label>

  <input class="form-check-input g" type="checkbox" name="brand[]" id="inlineCheckbox1" value="4">
  <label class="form-check-label" for="inlineCheckbox1">4</label>

  <input class="form-check-input g" type="checkbox" name="brand[]" id="inlineCheckbox1" value="5">
  <label class="form-check-label" for="inlineCheckbox1">5</label>
</div>
</div>

<div class="form-inline">
        <h5>Faktor apa yang menjadi Izin?</h5>
<div class="form-check form-check-inline">
  <input class="form-check-input h" type="checkbox" name="izin[]" id="inlineCheckbox1" value="1">
  <label class="form-check-label" for="inlineCheckbox1">1</label>

  <input class="form-check-input h" type="checkbox" name="izin[]" id="inlineCheckbox2" value="2">
  <label class="form-check-label" for="inlineCheckbox2">2</label>

  <input class="form-check-input h" type="checkbox" name="izin[]" id="inlineCheckbox1" value="3">
  <label class="form-check-label" for="inlineCheckbox3">3</label>

  <input class="form-check-input h" type="checkbox" name="izin[]" id="inlineCheckbox1" value="4">
  <label class="form-check-label" for="inlineCheckbox1">4</label>

  <input class="form-check-input h" type="checkbox" name="izin[]" id="inlineCheckbox1" value="5">
  <label class="form-check-label" for="inlineCheckbox1">5</label>
</div>
</div>

<div class="form-inline">
    <h5>Faktor apa yang menjadi Teknologi?</h5>
<div class="form-check form-check-inline">
<input class="form-check-input i" type="checkbox" name="teknologi[]" id="inlineCheckbox1" value="1">
<label class="form-check-label" for="inlineCheckbox1">1</label>

<input class="form-check-input i" type="checkbox" name="teknologi[]" id="inlineCheckbox2" value="2">
<label class="form-check-label" for="inlineCheckbox2">2</label>

<input class="form-check-input i" type="checkbox" name="teknologi[]" id="inlineCheckbox1" value="3">
<label class="form-check-label" for="inlineCheckbox3">3</label>

<input class="form-check-input i" type="checkbox" name="teknologi[]" id="inlineCheckbox1" value="4">
<label class="form-check-label" for="inlineCheckbox1">4</label>

<input class="form-check-input i" type="checkbox" name="teknologi[]" id="inlineCheckbox1" value="5">
<label class="form-check-label" for="inlineCheckbox1">5</label>
</div>
</div>

<div class="form-inline">
    <h5>Faktor apa yang menjadi SDM?</h5>
<div class="form-check form-check-inline">
<input class="form-check-input j" type="checkbox" name="sdm[]" id="inlineCheckbox1" value="1">
<label class="form-check-label" for="inlineCheckbox1">1</label>

<input class="form-check-input j" type="checkbox" name="sdm[]" id="inlineCheckbox2" value="2">
<label class="form-check-label" for="inlineCheckbox2">2</label>

<input class="form-check-input j" type="checkbox" name="sdm[]" id="inlineCheckbox1" value="3">
<label class="form-check-label" for="inlineCheckbox3">3</label>

<input class="form-check-input j" type="checkbox" name="sdm[]" id="inlineCheckbox1" value="4">
<label class="form-check-label" for="inlineCheckbox1">4</label>

<input class="form-check-input j" type="checkbox" name="sdm[]" id="inlineCheckbox1" value="5">
<label class="form-check-label" for="inlineCheckbox1">5</label>
</div>
</div>

<div class="form-inline">
    <h5>Faktor apa yang menjadi Waktu?</h5>
<div class="form-check form-check-inline">
<input class="form-check-input k" type="checkbox" name="waktu[]" id="inlineCheckbox1" value="1">
<label class="form-check-label" for="inlineCheckbox1">1</label>

<input class="form-check-input k" type="checkbox" name="waktu[]" id="inlineCheckbox2" value="2">
<label class="form-check-label" for="inlineCheckbox2">2</label>

<input class="form-check-input k" type="checkbox" name="waktu[]" id="inlineCheckbox1" value="3">
<label class="form-check-label" for="inlineCheckbox3">3</label>

<input class="form-check-input k" type="checkbox" name="waktu[]" id="inlineCheckbox1" value="4">
<label class="form-check-label" for="inlineCheckbox1">4</label>

<input class="form-check-input k" type="checkbox" name="waktu[]" id="inlineCheckbox1" value="5">
<label class="form-check-label" for="inlineCheckbox1">5</label>
</div>
</div>

<div class="form-inline">
    <h5>Faktor apa yang menjadi Loyalitas?</h5>
<div class="form-check form-check-inline">
<input class="form-check-input l" type="checkbox" name="loyalitas[]" id="inlineCheckbox1" value="1">
<label class="form-check-label" for="inlineCheckbox1">1</label>

<input class="form-check-input l" type="checkbox" name="loyalitas[]" id="inlineCheckbox2" value="2">
<label class="form-check-label" for="inlineCheckbox2">2</label>

<input class="form-check-input l" type="checkbox" name="loyalitas[]" id="inlineCheckbox1" value="3">
<label class="form-check-label" for="inlineCheckbox3">3</label>

<input class="form-check-input l" type="checkbox" name="loyalitas[]" id="inlineCheckbox1" value="4">
<label class="form-check-label" for="inlineCheckbox1">4</label>

<input class="form-check-input l" type="checkbox" name="loyalitas[]" id="inlineCheckbox1" value="5">
<label class="form-check-label" for="inlineCheckbox1">5</label>
</div>
</div>




            <div class="form-group">
			<input class="btn btn-primary" type="submit" name="tolol" value="Simpan">
                <a class="btn btn-danger" href="?m=nilai"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
        </form>
    </div>
</div>





<div class='panel panel-default'>
    <div class='panel-heading'>
	<div class='row'>
    <div class='col-sm-12'>
	<h3>Faktor apa yang menjadi kendala / masalah dalam mengolola usaha anda ?</h3>
<?php  

$query=mysqli_query($conn,"select * FROM dataset");
				while($data=mysqli_fetch_array($query)){
					?>



<form action="" method="post" class="form-inline">

<div class="form-group">
<input class="form-control"  type="checkbox" name="id_set[]" id="id_set" value="<?=$data['id_set']?>">

<label><?=$data['nama']?> <span class="text-danger">*</span></label>
</div><br>
<?php
  }
 ?>

<div class="form-group">
    <input class="btn btn-primary" type="submit" name="submit" value="submit">
	</div>
</form>

</div>
</div>

<?php
if(isset($_POST['submit'])) {

	$F1TOTAL=0;
	$F2TOTAL=0;
	$F3TOTAL=0;
	$F4TOTAL=0;
	$F5TOTAL=0;





	foreach ($_POST['id_set'] as $id) {

		if($id==1){
         

		 $id_set=$id;	
		
		$sqx=mysqli_query($conn,"select * from `user` where id_set='$id_set'");
		while($srow=mysqli_fetch_array($sqx)){
			$A1 = $srow['A'];
			$B1 = $srow['B'];
			$C1 = $srow['C'];
			$D1 = $srow['D'];
			$E1 = $srow['E'];
							 			$nama1 = $srow['nama'];
							 			$saran1 = $srow['saran'];
		}

	}


if($id==2){
 
		
	 $id_set=$id;	
	
	$total2=0;
	$sqx=mysqli_query($conn,"select * from `user` where id_set='$id_set'");
	while($srow=mysqli_fetch_array($sqx)){

		$A2 = $srow['A'];
		$B2 = $srow['B'];
		$C2 = $srow['C'];
		$D2 = $srow['D'];
		$E2 = $srow['E'];

		$nama2 = $srow['nama'];
		$saran2 = $srow['saran'];

		 $total2 = $srow['A']+$srow['B']+$srow['C']+$srow['D']+$srow['E'];
		}

		
	 
		

}

if($id==3){

	 $id_set=$id;	
	
	$total2=0;
	$sqx=mysqli_query($conn,"select * from `user` where id_set='$id_set'");
	while($srow=mysqli_fetch_array($sqx)){

		$A3 = $srow['A'];
		$B3 = $srow['B'];
		$C3 = $srow['C'];
		$D3 = $srow['D'];
		$E3 = $srow['E'];

		$nama3 = $srow['nama'];
		$saran3 = $srow['saran'];

		 $total3 = $srow['A']+$srow['B']+$srow['C']+$srow['D']+$srow['E'];
		}
	
}


if($id==4){

	 $id_set=$id;	
	
	$total2=0;
	$sqx=mysqli_query($conn,"select * from `user` where id_set='$id_set'");
	while($srow=mysqli_fetch_array($sqx)){
	
		$A4 = $srow['A'];
		$B4 = $srow['B'];
		$C4 = $srow['C'];
		$D4 = $srow['D'];
		$E4 = $srow['E'];

		$nama4 = $srow['nama'];
		$saran4 = $srow['saran'];
	
		 $total4 = $srow['A']+$srow['B']+$srow['C']+$srow['D']+$srow['E'];
		}
	
	}


if($id==5){

	 $id_set=$id;	
	
	$total2=0;
	$sqx=mysqli_query($conn,"select * from `user` where id_set='$id_set'");
	while($srow=mysqli_fetch_array($sqx)){
	
		$A5 = $srow['A'];
		$B5 = $srow['B'];
		$C5 = $srow['C'];
		$D5 = $srow['D'];
		$E5 = $srow['E'];
	
		$nama5 = $srow['nama'];
		$saran5 = $srow['saran'];

		 $total5 = $srow['A']+$srow['B']+$srow['C']+$srow['D']+$srow['E'];
		}

	}


	if($id==6){

		 $id_set=$id;	
		
		$total2=0;
		$sqx=mysqli_query($conn,"select * from `user` where id_set='$id_set'");
		while($srow=mysqli_fetch_array($sqx)){
		
			$A6 = $srow['A'];
			$B6 = $srow['B'];
			$C6 = $srow['C'];
			$D6 = $srow['D'];
			$E6 = $srow['E'];

			$nama6 = $srow['nama'];
			$saran6 = $srow['saran'];
		
			 $total6 = $srow['A']+$srow['B']+$srow['C']+$srow['D']+$srow['E'];
			}
		
		}

		if($id==7){

			 $id_set=$id;	
			
			$total2=0;
			$sqx=mysqli_query($conn,"select * from `user` where id_set='$id_set'");
			while($srow=mysqli_fetch_array($sqx)){
			
				$A7 = $srow['A'];
				$B7 = $srow['B'];
				$C7 = $srow['C'];
				$D7 = $srow['D'];
				$E7 = $srow['E'];

				$nama7 = $srow['nama'];
				$saran7 = $srow['saran'];
			
				 $total7 = $srow['A']+$srow['B']+$srow['C']+$srow['D']+$srow['E'];
				}
			
			}


			if($id==8){

				 $id_set=$id;	
				
				$total2=0;
				$sqx=mysqli_query($conn,"select * from `user` where id_set='$id_set'");
				while($srow=mysqli_fetch_array($sqx)){
				
					$A8 = $srow['A'];
					$B8 = $srow['B'];
					$C8 = $srow['C'];
					$D8 = $srow['D'];
					$E8 = $srow['E'];

					$nama8 = $srow['nama'];
					$saran8 = $srow['saran'];
				
					 $total8 = $srow['A']+$srow['B']+$srow['C']+$srow['D']+$srow['E'];
					}
				
				}

				if($id==9){

					 $id_set=$id;	
					
					$total2=0;
					$sqx=mysqli_query($conn,"select * from `user` where id_set='$id_set'");
					while($srow=mysqli_fetch_array($sqx)){
					
						$A9 = $srow['A'];
						$B9 = $srow['B'];
						$C9 = $srow['C'];
						$D9 = $srow['D'];
						$E9 = $srow['E'];

						$nama9 = $srow['nama'];
						$saran9 = $srow['saran'];
					
						 $total9 = $srow['A']+$srow['B']+$srow['C']+$srow['D']+$srow['E'];
						}
					
					}

					if($id==10){

						 $id_set=$id;	
						
						$total2=0;
						$sqx=mysqli_query($conn,"select * from `user` where id_set='$id_set'");
						while($srow=mysqli_fetch_array($sqx)){
						
							$A10 = $srow['A'];
							$B10 = $srow['B'];
							$C10 = $srow['C'];
							$D10 = $srow['D'];
							$E10 = $srow['E'];

							$nama10 = $srow['nama'];
							$saran10 = $srow['saran'];
						
							 $total10 = $srow['A']+$srow['B']+$srow['C']+$srow['D']+$srow['E'];
							}
						
						}

						if($id==11){

							 $id_set=$id;	
							
							$total2=0;
							$sqx=mysqli_query($conn,"select * from `user` where id_set='$id_set'");
							while($srow=mysqli_fetch_array($sqx)){
							
								$A11 = $srow['A'];
								$B11 = $srow['B'];
								$C11 = $srow['C'];
								$D11 = $srow['D'];
								$E11 = $srow['E'];

								$nama11 = $srow['nama'];
								$saran11 = $srow['saran'];
							
								 $total11 = $srow['A']+$srow['B']+$srow['C']+$srow['D']+$srow['E'];
								}
							
							}

							if($id==12){

								 $id_set=$id;	
								
								$total2=0;
								$sqx=mysqli_query($conn,"select * from `user` where id_set='$id_set'");
								while($srow=mysqli_fetch_array($sqx)){
								
									$A12 = $srow['A'];
									$B12 = $srow['B'];
									$C12 = $srow['C'];
									$D12 = $srow['D'];
									$E12 = $srow['E'];

									$nama12 = $srow['nama'];
									$saran12 = $srow['saran'];
								
									 $total12 = $srow['A']+$srow['B']+$srow['C']+$srow['D']+$srow['E'];
									}
								
								}



		}

		$rowSpan=4;

	$A1; 

	 $A2; 
	 $A3; 
	 $A4; 
	 $A5; 
	 $A6; 
	 $A7; 
	 $A8; 
	 $A9; 
	 $A10; 
	 $A11; 
	 $A12; 
	
	
	 $B1; 
	 $B2; 
	 $B3; 
	 $B4; 
	 $B5; 
	 $B6; 
	 $B7; 
	 $B8; 
	 $B9; 
	 $B10; 
	 $B11; 
	 $B12; 
	
	
	 $C1; 
	 $C2; 
	 $C3; 
	 $C4; 
	 $C5; 
	 $C6; 
	 $C7; 
	 $C8; 
	 $C9; 
	 $C10; 
	 $C11; 
	 $C12; 
	
	
	 $D1; 
	 $D2; 
	 $D3; 
	 $D4; 
	 $D5; 
	 $D6; 
	 $D7; 
	 $D8; 
	 $D9; 
	 $D10; 
	 $D11; 
	 $D12; 
	
	
	 $E1; 
	 $E2; 
	 $E3; 
	 $E4; 
	 $E5; 
	 $E6; 
	 $E7; 
	 $E8; 
	 $E9; 
	 $E10; 
	 $E11; 
	 $E12; 
	
	

	  if($A1 == "1"){
	 $F1A="1";
}else{
	 $F1A="0";
}  




	  if($A1 == "2"){
	 $F2A="1";
}else{
	 $F2A="0";
}  



	  if($A1 == "3"){
	 $F3A="1";
}else{
	 $F3A="0";
}  



	  if($A1 == "4"){
	 $F4A="1";
}else{
	 $F4A="0";
}  



	  if($A1 == "5"){
	 $F5A="1";
}else{
	 $F5A="0";
}  





//td KALI A




	  if($B1 == "1"){
	 $F1B="1";
}else{
	 $F1B="0";
}  




	  if($B1 == "2"){
	 $F2B="1";
}else{
	 $F2B="0";
}  



	  if($B1 == "3"){
	 $F3B="1";
}else{
	 $F3B="0";
}  



	  if($B1 == "4"){
	 $F4B="1";
}else{
	 $F4B="0";
}  



	  if($B1 == "5"){
	 $F5B="1";
}else{
	 $F5B="0";
}  


//td KALI B




	  if($C1 == "1"){
	 $F1C="1";
}else{
	 $F1C="0";
}  




	  if($C1 == "2"){
	 $F2C="1";
}else{
	 $F2C="0";
}  



	  if($C1 == "3"){
	 $F3C="1";
}else{
	 $F3C="0";
}  



	  if($C1 == "4"){
	 $F4C="1";
}else{
	 $F4C="0";
}  



	  if($C1 == "5"){
	 $F5C="1";
}else{
	 $F5C="0";
}  


//td KALI C





	  if($D1 == "1"){
	 $F1D="1";
}else{
	 $F1D="0";
}  




	  if($D1 == "2"){
	 $F2D="1";
}else{
	 $F2D="0";
}  



	  if($D1 == "3"){
	 $F3D="1";
}else{
	 $F3D="0";
}  



	  if($D1 == "4"){
	 $F4D="1";
}else{
	 $F4D="0";
}  



	  if($D1 == "5"){
	 $F5D="1";
}else{
	 $F5D="0";
}  


//td KALI D



 "<th>5</th>";
	  if($E1 == "1"){
	 $F1E="1";
}else{
	 $F1E="0";
}  




	  if($E1 == "2"){
	 $F2E="1";
}else{
	 $F2E="0";
}  



	  if($E1 == "3"){
	 $F3E="1";
}else{
	 $F3E="0";
}  



	  if($E1 == "4"){
	 $F4E="1";
}else{
	 $F4E="0";
}  



	  if($E1 == "5"){
	 $F5E="1";
}else{
	 $F5E="0";
}  


//td KALI E


 "<td>TOTAL"; 	  


	  

 
$F1TOTALA1=$F1A+$F1B+$F1C+$F1D+$F1E;




 
$F2TOTALA2=$F2A+$F2B+$F2C+$F2D+$F2E;




 
$F3TOTALA3=$F3A+$F3B+$F3C+$F3D+$F3E;



 
$F4TOTALA4=$F4A+$F4B+$F4C+$F4D+$F4E;



 
$F5TOTALA5=$F5A+$F5B+$F5C+$F5D+$F5E;



	

//ahhir TABEL FREKUENSI  Pembiayaan usaha/ modal


	  if($A2 == "1"){
	 $F1A2="1";
}else{
	 $F1A2="0";
}  




	  if($A2 == "2"){
	 $F2A2="1";
}else{
	 $F2A2="0";
}  



	  if($A2 == "3"){
	 $F3A2="1";
}else{
	 $F3A2="0";
}  



	  if($A2 == "4"){
	 $F4A2="1";
}else{
	 $F4A2="0";
}  



	  if($A2 == "5"){
	 $F5A2="1";
}else{
	 $F5A2="0";
}  





//td KALI A




	  if($B2 == "1"){
	 $F1B2="1";
}else{
	 $F1B2="0";
}  




	  if($B2 == "2"){
	 $F2B2="1";
}else{
	 $F2B2="0";
}  



	  if($B2 == "3"){
	 $F3B2="1";
}else{
	 $F3B2="0";
}  



	  if($B2 == "4"){
	 $F4B2="1";
}else{
	 $F4B2="0";
}  



	  if($B2 == "5"){
	 $F5B2="1";
}else{
	 $F5B2="0";
}  


//td KALI B




	  if($C2 == "1"){
	 $F1C2="1";
}else{
	 $F1C2="0";
}  




	  if($C2 == "2"){
	 $F2C2="1";
}else{
	 $F2C2="0";
}  



	  if($C2 == "3"){
	 $F3C2="1";
}else{
	 $F3C2="0";
}  



	  if($C2 == "4"){
	 $F4C2="1";
}else{
	 $F4C2="0";
}  



	  if($C2 == "5"){
	 $F5C2="1";
}else{
	 $F5C2="0";
}  


//td KALI C





	  if($D2 == "1"){
	 $F1D2="1";
}else{
	 $F1D2="0";
}  




	  if($D2 == "2"){
	 $F2D2="1";
}else{
	 $F2D2="0";
}  



	  if($D2 == "3"){
	 $F3D2="1";
}else{
	 $F3D2="0";
}  



	  if($D2 == "4"){
	 $F4D2="1";
}else{
	 $F4D2="0";
}  



	  if($D2 == "5"){
	 $F5D2="1";
}else{
	 $F5D2="0";
}  


//td KALI D



 "<th>5</th>";
	  if($E2 == "1"){
	 $F1E2="1";
}else{
	 $F1E2="0";
}  




	  if($E2 == "2"){
	 $F2E2="1";
}else{
	 $F2E2="0";
}  



	  if($E2 == "3"){
	 $F3E2="1";
}else{
	 $F3E2="0";
}  



	  if($E2 == "4"){
	 $F4E2="1";
}else{
	 $F4E2="0";
}  



	  if($E2 == "5"){
	 $F5E2="1";
}else{
	 $F5E2="0";
}  


//td KALI E


 "<td>TOTAL"; 	  


	  

 
$F1TOTALB1=$F1A2+$F1B2+$F1C2+$F1D2+$F1E2;




 
$F2TOTALB2=$F2A2+$F2B2+$F2C2+$F2D2+$F2E2;




 
$F3TOTALB3=$F3A2+$F3B2+$F3C2+$F3D2+$F3E2;



 
$F4TOTALB4=$F4A2+$F4B2+$F4C2+$F4D2+$F4E2;



 
$F5TOTALB5=$F5A2+$F5B2+$F5C2+$F5D2+$F5E2;



//ahhir TABEL FREKUENSI  Pengelolaan keuangan





	  if($A3 == "1"){
	 $F1A3="1";
}else{
	 $F1A3="0";
}  



	  if($A3 == "2"){
	 $F2A3="1";
}else{
	 $F2A3="0";
}  



	  if($A3 == "3"){
	 $F3A3="1";
}else{
	 $F3A3="0";
}  



	  if($A3 == "4"){
	 $F4A3="1";
}else{
	 $F4A3="0";
}  



	  if($A3 == "5"){
	 $F5A3="1";
}else{
	 $F5A3="0";
}  





//td KALI A




	  if($B3 == "1"){
	 $F1B3="1";
}else{
	 $F1B3="0";
}  




	  if($B3 == "2"){
	 $F2B3="1";
}else{
	 $F2B3="0";
}  



	  if($B3 == "3"){
	 $F3B3="1";
}else{
	 $F3B3="0";
}  



	  if($B3 == "4"){
	 $F4B3="1";
}else{
	 $F4B3="0";
}  



	  if($B3 == "5"){
	 $F5B3="1";
}else{
	 $F5B3="0";
}  


//td KALI B




 if($C3 == "1"){
	 $F1C3="1";
}else{
	 $F1C3="0";
}  




	  if($C3 == "2"){
	 $F2C3="1";
}else{
	 $F2C3="0";
}  



	  if($C3 == "3"){
	 $F3C3="1";
}else{
	 $F3C3="0";
}  



	  if($C3 == "4"){
	 $F4C3="1";
}else{
	 $F4C3="0";
}  



	  if($C3 == "5"){
	 $F5C3="1";
}else{
	 $F5C3="0";
}  


//td KALI C





	  if($D3 == "1"){
	 $F1D3="1";
}else{
	 $F1D3="0";
}  




	  if($D3 == "2"){
	 $F2D3="1";
}else{
	 $F2D3="0";
}  



	  if($D3 == "3"){
	 $F3D3="1";
}else{
	 $F3D3="0";
}  



	  if($D3 == "4"){
	 $F4D3="1";
}else{
	 $F4D3="0";
}  



	  if($D3 == "5"){
	 $F5D3="1";
}else{
	 $F5D3="0";
}  


//td KALI D



 "<th>5</th>";
	  if($E3 == "1"){
	 $F1E3="1";
}else{
	 $F1E3="0";
}  




	  if($E3 == "2"){
	 $F2E3="1";
}else{
	 $F2E3="0";
}  



	  if($E3 == "3"){
	 $F3E3="1";
}else{
	 $F3E3="0";
}  



	  if($E3 == "4"){
	 $F4E3="1";
}else{
	 $F4E3="0";
}  



	  if($E3 == "5"){
	 $F5E3="1";
}else{
	 $F5E3="0";
}  


//td KALI E


 "<td>TOTAL"; 	  


	  

 
$F1TOTALC1=$F1A3+$F1B3+$F1C3+$F1D3+$F1E3;




 
$F2TOTALC2=$F2A3+$F2B3+$F2C3+$F2D3+$F2E3;




 
$F3TOTALC3=$F3A3+$F3B3+$F3C3+$F3D3+$F3E3;



 
$F4TOTALC4=$F4A3+$F4B3+$F4C3+$F4D3+$F4E3;



 
$F5TOTALC5=$F5A3+$F5B3+$F5C3+$F5D3+$F5E3;



	
// Penjualan onlineREKUANESI C



if($A4 == "1"){
	 $F1A4="1";
}else{
	 $F1A4="0";
}  




	  if($A4 == "2"){
	 $F2A4="1";
}else{
	 $F2A4="0";
}  



	  if($A4 == "3"){
	 $F3A4="1";
}else{
	 $F3A4="0";
}  



	  if($A4 == "4"){
	 $F4A4="1";
}else{
	 $F4A4="0";
}  



	  if($A4 == "5"){
	 $F5A4="1";
}else{
	 $F5A4="0";
}  





//td KALI A




   if($B4 == "1"){
	 $F1B4="1";
}else{
	 $F1B4="0";
}  




	  if($B4 == "2"){
	 $F2B4="1";
}else{
	 $F2B4="0";
}  



	  if($B4 == "3"){
	 $F3B4="1";
}else{
	 $F3B4="0";
}  



	  if($B4 == "4"){
	 $F4B4="1";
}else{
	 $F4B4="0";
}  



	  if($B4 == "5"){
	 $F5B4="1";
}else{
	 $F5B4="0";
}  


//td KALI B




 if($C4 == "1"){
	 $F1C4="1";
}else{
	 $F1C4="0";
}  




	  if($C4 == "2"){
	 $F2C4="1";
}else{
	 $F2C4="0";
}  



	  if($C4 == "3"){
	 $F3C4="1";
}else{
	 $F3C4="0";
}  



	  if($C4 == "4"){
	 $F4C4="1";
}else{
	 $F4C4="0";
}  



	  if($C4 == "5"){
	 $F5C4="1";
}else{
	 $F5C4="0";
}  


//td KALI C





	  if($D4 == "1"){
	 $F1D4="1";
}else{
	 $F1D4="0";
}  




	  if($D4 == "2"){
	 $F2D4="1";
}else{
	 $F2D4="0";
}  



	  if($D4 == "3"){
	 $F3D4="1";
}else{
	 $F3D4="0";
}  



	  if($D4 == "4"){
	 $F4D4="1";
}else{
	 $F4D4="0";
}  



	  if($D4 == "5"){
	 $F5D4="1";
}else{
	 $F5D4="0";
}  


//td KALI D



 "<th>5</th>";
	  if($E4 == "1"){
	 $F1E4="1";
}else{
	 $F1E4="0";
}  




	  if($E4 == "2"){
	 $F2E4="1";
}else{
	 $F2E4="0";
}  



	  if($E4 == "3"){
	 $F3E4="1";
}else{
	 $F3E4="0";
}  



	  if($E4 == "4"){
	 $F4E4="1";
}else{
	 $F4E4="0";
}  



	  if($E4 == "5"){
	 $F5E4="1";
}else{
	 $F5E4="0";
}  


//td KALI E


 "<td>TOTAL"; 	  


	  

 
$F1TOTALD1=$F1A4+$F1B4+$F1C4+$F1D4+$F1E4;




 
$F2TOTALD2=$F2A4+$F2B4+$F2C4+$F2D4+$F2E4;




 
$F3TOTALD3=$F3A4+$F3B4+$F3C4+$F3D4+$F3E4;



 
$F4TOTALD4=$F4A4+$F4B4+$F4C4+$F4D4+$F4E4;



 
$F5TOTALD5=$F5A4+$F5B4+$F5C4+$F5D4+$F5E4;





// FREKUENSI 4



	  if($A5 == "1"){
	 $F1A5="1";
}else{
	 $F1A5="0";
}  




	  if($A5 == "2"){
	 $F2A5="1";
}else{
	 $F2A5="0";
}  



	  if($A5 == "3"){
	 $F3A5="1";
}else{
	 $F3A5="0";
}  



	  if($A5 == "4"){
	 $F4A5="1";
}else{
	 $F4A5="0";
}  



	  if($A5 == "5"){
	 $F5A5="1";
}else{
	 $F5A5="0";
}  





//td KALI A




  if($B5 == "1"){
	 $F1B5="1";
}else{
	 $F1B5="0";
}  




	  if($B5 == "2"){
	 $F2B5="1";
}else{
	 $F2B5="0";
}  



	  if($B5 == "3"){
	 $F3B5="1";
}else{
	 $F3B5="0";
}  



	  if($B5 == "4"){
	 $F4B5="1";
}else{
	 $F4B5="0";
}  



	  if($B5 == "5"){
	 $F5B5="1";
}else{
	 $F5B5="0";
}  


//td KALI B




 if($C5 == "1"){
	 $F1C5="1";
}else{
	 $F1C5="0";
}  




	  if($C5 == "2"){
	 $F2C5="1";
}else{
	 $F2C5="0";
}  



	  if($C5 == "3"){
	 $F3C5="1";
}else{
	 $F3C5="0";
}  



	  if($C5 == "4"){
	 $F4C5="1";
}else{
	 $F4C5="0";
}  



	  if($C5 == "5"){
	 $F5C5="1";
}else{
	 $F5C5="0";
}  


//td KALI C





	  if($D5 == "1"){
	 $F1D5="1";
}else{
	 $F1D5="0";
}  




	  if($D5 == "2"){
	 $F2D5="1";
}else{
	 $F2D5="0";
}  



	  if($D5 == "3"){
	 $F3D5="1";
}else{
	 $F3D5="0";
}  



	  if($D5 == "4"){
	 $F4D5="1";
}else{
	 $F4D5="0";
}  



	  if($D5 == "5"){
	 $F5D5="1";
}else{
	 $F5D5="0";
}  


//td KALI D



 "<th>5</th>";
	  if($E5 == "1"){
	 $F1E5="1";
}else{
	 $F1E5="0";
}  




	  if($E5 == "2"){
	 $F2E5="1";
}else{
	 $F2E5="0";
}  



	  if($E5 == "3"){
	 $F3E5="1";
}else{
	 $F3E5="0";
}  



	  if($E5 == "4"){
	 $F4E5="1";
}else{
	 $F4E5="0";
}  



	  if($E5 == "5"){
	 $F5E5="1";
}else{
	 $F5E5="0";
}  


//td KALI E


 "<td>TOTAL"; 	  


	  

 
$F1TOTALE1=$F1A5+$F1B5+$F1C5+$F1D5+$F1E5;




 
$F2TOTALE2=$F2A5+$F2B5+$F2C5+$F2D5+$F2E5;




 
$F3TOTALE3=$F3A5+$F3B5+$F3C5+$F3D5+$F3E5;



 
$F4TOTALE4=$F4A5+$F4B5+$F4C5+$F4D5+$F4E5;



 
$F5TOTALE5=$F5A5+$F5B5+$F5C5+$F5D5+$F5E5;






	  if($A6 == "1"){
	 $F1A6="1";
}else{
	 $F1A6="0";
}  




	  if($A6 == "2"){
	 $F2A6="1";
}else{
	 $F2A6="0";
}  



	  if($A6 == "3"){
	 $F3A6="1";
}else{
	 $F3A6="0";
}  



	  if($A6 == "4"){
	 $F4A6="1";
}else{
	 $F4A6="0";
}  



	  if($A6 == "5"){
	 $F5A6="1";
}else{
	 $F5A6="0";
}  



//td KALI A



 if($B6 == "1"){
	 $F1B6="1";
}else{
	 $F1B6="0";
}  




	  if($B6 == "2"){
	 $F2B6="1";
}else{
	 $F2B6="0";
}  



	  if($B6 == "3"){
	 $F3B6="1";
}else{
	 $F3B6="0";
}  



	  if($B6 == "4"){
	 $F4B6="1";
}else{
	 $F4B6="0";
}  



	  if($B6 == "5"){
	 $F5B6="1";
}else{
	 $F5B6="0";
}  

//td KALI B



 if($C6 == "1"){
	 $F1C6="1";
}else{
	 $F1C6="0";
}  




	  if($C6 == "2"){
	 $F2C6="1";
}else{
	 $F2C6="0";
}  



	  if($C6 == "3"){
	 $F3C6="1";
}else{
	 $F3C6="0";
}  



	  if($C6 == "4"){
	 $F4C6="1";
}else{
	 $F4C6="0";
}  



	  if($C6 == "5"){
	 $F5C6="1";
}else{
	 $F5C6="0";
}  




	  if($D6 == "1"){
	 $F1D6="1";
}else{
	 $F1D6="0";
}  




	  if($D6 == "2"){
	 $F2D6="1";
}else{
	 $F2D6="0";
}  



	  if($D6 == "3"){
	 $F3D6="1";
}else{
	 $F3D6="0";
}  



	  if($D6 == "4"){
	 $F4D6="1";
}else{
	 $F4D6="0";
}  



	  if($D6 == "5"){
	 $F5D6="1";
}else{
	 $F5D6="0";
}  


//td KALI D



	  if($E6 == "1"){
	 $F1E6="1";
}else{
	 $F1E6="0";
}  




	  if($E6 == "2"){
	 $F2E6="1";
}else{
	 $F2E6="0";
}  



	  if($E6 == "3"){
	 $F3E6="1";
}else{
	 $F3E6="0";
}  



	  if($E6 == "4"){
	 $F4E6="1";
}else{
	 $F4E6="0";
}  



	  if($E6 == "5"){
	 $F5E6="1";
}else{
	 $F5E6="0";
}  




 "TOTAL"; 	  


	  

 
$F1TOTALF1=$F1A6+$F1B6+$F1C6+$F1D6+$F1E6;




 
$F2TOTALF2=$F2A6+$F2B6+$F2C6+$F2D6+$F2E6;




 
$F3TOTALF3=$F3A6+$F3B6+$F3C6+$F3D6+$F3E6;



 
$F4TOTALF4=$F4A6+$F4B6+$F4C6+$F4D6+$F4E6;



 
$F5TOTALF5=$F5A6+$F5B6+$F5C6+$F5D6+$F5E6;





//FREKUENSI 6 ATAU F





	  if($A7 == "1"){
	 $F1A7="1";
}else{
	 $F1A7="0";
}  




	  if($A7 == "2"){
	 $F2A7="1";
}else{
	 $F2A7="0";
}  



	  if($A7 == "3"){
	 $F3A7="1";
}else{
	 $F3A7="0";
}  



	  if($A7 == "4"){
	 $F4A7="1";
}else{
	 $F4A7="0";
}  



	  if($A7 == "5"){
	 $F5A7="1";
}else{
	 $F5A7="0";
}  


//td KALI A


 if($B7 == "1"){
	 $F1B7="1";
}else{
	 $F1B7="0";
}  




	  if($B7 == "2"){
	 $F2B7="1";
}else{
	 $F2B7="0";
}  



	  if($B7 == "3"){
	 $F3B7="1";
}else{
	 $F3B7="0";
}  



	  if($B7 == "4"){
	 $F4B7="1";
}else{
	 $F4B7="0";
}  



	  if($B7 == "5"){
	 $F5B7="1";
}else{
	 $F5B7="0";
}  


//td KALI B




 if($C7 == "1"){
	 $F1C7="1";
}else{
	 $F1C7="0";
}  




	  if($C7 == "2"){
	 $F2C7="1";
}else{
	 $F2C7="0";
}  



	  if($C7 == "3"){
	 $F3C7="1";
}else{
	 $F3C7="0";
}  



	  if($C7 == "4"){
	 $F4C7="1";
}else{
	 $F4C7="0";
}  



	  if($C7 == "5"){
	 $F5C7="1";
}else{
	 $F5C7="0";
}  


//td KALI C





	  if($D7 == "1"){
	 $F1D7="1";
}else{
	 $F1D7="0";
}  




	  if($D7 == "2"){
	 $F2D7="1";
}else{
	 $F2D7="0";
}  



	  if($D7 == "3"){
	 $F3D7="1";
}else{
	 $F3D7="0";
}  



	  if($D7 == "4"){
	 $F4D7="1";
}else{
	 $F4D7="0";
}  



	  if($D7 == "5"){
	 $F5D7="1";
}else{
	 $F5D7="0";
}  


//td KALI D



 "<th>5</th>";
	  if($E7 == "1"){
	 $F1E7="1";
}else{
	 $F1E7="0";
}  




	  if($E7 == "2"){
	 $F2E7="1";
}else{
	 $F2E7="0";
}  



	  if($E7 == "3"){
	 $F3E7="1";
}else{
	 $F3E7="0";
}  



	  if($E7 == "4"){
	 $F4E7="1";
}else{
	 $F4E7="0";
}  



	  if($E7 == "5"){
	 $F5E7="1";
}else{
	 $F5E7="0";
}  


//td KALI E


 "<td>TOTAL"; 	  


	  

 
$F1TOTALG1=$F1A7+$F1B7+$F1C7+$F1D7+$F1E7;




 
$F2TOTALG2=$F2A7+$F2B7+$F2C7+$F2D7+$F2E7;




 
$F3TOTALG3=$F3A7+$F3B7+$F3C7+$F3D7+$F3E7;



 
$F4TOTALG4=$F4A7+$F4B7+$F4C7+$F4D7+$F4E7;



 
$F5TOTALG5=$F5A7+$F5B7+$F5C7+$F5D7+$F5E7;




//FREKUENSI G




	  if($A8 == "1"){
	 $F1A8="1";
}else{
	 $F1A8="0";
}  




	  if($A8 == "2"){
	 $F2A8="1";
}else{
	 $F2A8="0";
}  



	  if($A8 == "3"){
	 $F3A8="1";
}else{
	 $F3A8="0";
}  



	  if($A8 == "4"){
	 $F4A8="1";
}else{
	 $F4A8="0";
}  



	  if($A8 == "5"){
	 $F5A8="1";
}else{
	 $F5A8="0";
}  



//td KALI A



 if($B8 == "1"){
	 $F1B8="1";
}else{
	 $F1B8="0";
}  




	  if($B8 == "2"){
	 $F2B8="1";
}else{
	 $F2B8="0";
}  



	  if($B8 == "3"){
	 $F3B8="1";
}else{
	 $F3B8="0";
}  



	  if($B8 == "4"){
	 $F4B8="1";
}else{
	 $F4B8="0";
}  



	  if($B8 == "5"){
	 $F5B8="1";
}else{
	 $F5B8="0";
}  


//td KALI B




 if($C8 == "1"){
	 $F1C8="1";
}else{
	 $F1C8="0";
}  




	  if($C8 == "2"){
	 $F2C8="1";
}else{
	 $F2C8="0";
}  



	  if($C8 == "3"){
	 $F3C8="1";
}else{
	 $F3C8="0";
}  



	  if($C8 == "4"){
	 $F4C8="1";
}else{
	 $F4C8="0";
}  



	  if($C8 == "5"){
	 $F5C8="1";
}else{
	 $F5C8="0";
}  


//td KALI C





	  if($D8 == "1"){
	 $F1D8="1";
}else{
	 $F1D8="0";
}  




	  if($D8 == "2"){
	 $F2D8="1";
}else{
	 $F2D8="0";
}  



	  if($D8 == "3"){
	 $F3D8="1";
}else{
	 $F3D8="0";
}  



	  if($D8 == "4"){
	 $F4D8="1";
}else{
	 $F4D8="0";
}  



	  if($D8 == "5"){
	 $F5D8="1";
}else{
	 $F5D8="0";
}  


//td KALI D




	  if($E8 == "1"){
	 $F1E8="1";
}else{
	 $F1E8="0";
}  




	  if($E8 == "2"){
	 $F2E8="1";
}else{
	 $F2E8="0";
}  



	  if($E8 == "3"){
	 $F3E8="1";
}else{
	 $F3E8="0";
}  



	  if($E8 == "4"){
	 $F4E8="1";
}else{
	 $F4E8="0";
}  



	  if($E8 == "5"){
	 $F5E8="1";
}else{
	 $F5E8="0";
}  


//td KALI E


 "<td>TOTAL"; 	  


	  

 
$F1TOTALH1=$F1A8+$F1B8+$F1C8+$F1D8+$F1E8;




 
$F2TOTALH2=$F2A8+$F2B8+$F2C8+$F2D8+$F2E8;




 
$F3TOTALH3=$F3A8+$F3B8+$F3C8+$F3D8+$F3E8;



 
$F4TOTALH4=$F4A8+$F4B8+$F4C8+$F4D8+$F4E8;



 
$F5TOTALH5=$F5A8+$F5B8+$F5C8+$F5D8+$F5E8;


// FREKUENSI H




	  if($A9 == "1"){
	 $F1A9="1";
}else{
	 $F1A9="0";
}  




	  if($A9 == "2"){
	 $F2A9="1";
}else{
	 $F2A9="0";
}  



	  if($A9 == "3"){
	 $F3A9="1";
}else{
	 $F3A9="0";
}  



	  if($A9 == "4"){
	 $F4A9="1";
}else{
	 $F4A9="0";
}  



	  if($A9 == "5"){
	 $F5A9="1";
}else{
	 $F5A9="0";
}  



//td KALI A



 if($B9 == "1"){
	 $F1B9="1";
}else{
	 $F1B9="0";
}  




	  if($B9 == "2"){
	 $F2B9="1";
}else{
	 $F2B9="0";
}  



	  if($B9 == "3"){
	 $F3B9="1";
}else{
	 $F3B9="0";
}  



	  if($B9 == "4"){
	 $F4B9="1";
}else{
	 $F4B9="0";
}  



	  if($B9 == "5"){
	 $F5B9="1";
}else{
	 $F5B9="0";
}  


//td KALI B




 if($C9 == "1"){
	 $F1C9="1";
}else{
	 $F1C9="0";
}  




	  if($C9 == "2"){
	 $F2C9="1";
}else{
	 $F2C9="0";
}  



	  if($C9 == "3"){
	 $F3C9="1";
}else{
	 $F3C9="0";
}  



	  if($C9 == "4"){
	 $F4C9="1";
}else{
	 $F4C9="0";
}  



	  if($C9 == "5"){
	 $F5C9="1";
}else{
	 $F5C9="0";
}  

//td KALI C





	  if($D9 == "1"){
	 $F1D9="1";
}else{
	 $F1D9="0";
}  




	  if($D9 == "2"){
	 $F2D9="1";
}else{
	 $F2D9="0";
}  



	  if($D9 == "3"){
	 $F3D9="1";
}else{
	 $F3D9="0";
}  



	  if($D9 == "4"){
	 $F4D9="1";
}else{
	 $F4D9="0";
}  



	  if($D9 == "5"){
	 $F5D9="1";
}else{
	 $F5D9="0";
}  


//td KALI D



 "<th>5</th>";
	  if($E9 == "1"){
	 $F1E9="1";
}else{
	 $F1E9="0";
}  




	  if($E9 == "2"){
	 $F2E9="1";
}else{
	 $F2E9="0";
}  



	  if($E9 == "3"){
	 $F3E9="1";
}else{
	 $F3E9="0";
}  



	  if($E9 == "4"){
	 $F4E9="1";
}else{
	 $F4E9="0";
}  



	  if($E9 == "5"){
	 $F5E9="1";
}else{
	 $F5E9="0";
}  


//td KALI E


 "<td>TOTAL"; 	  


	  

 
$F1TOTALI1=$F1A9+$F1B9+$F1C9+$F1D9+$F1E9;




 
$F2TOTALI2=$F2A9+$F2B9+$F2C9+$F2D9+$F2E9;




 
$F3TOTALI3=$F3A9+$F3B9+$F3C9+$F3D9+$F3E9;



 
$F4TOTALI4=$F4A9+$F4B9+$F4C9+$F4D9+$F4E9;



 
$F5TOTALI5=$F5A9+$F5B9+$F5C9+$F5D9+$F5E9;







// FREKUENSI I



	  if($A10 == "1"){
	 $F1A10="1";
}else{
	 $F1A10="0";
}  




	  if($A10 == "2"){
	 $F2A10="1";
}else{
	 $F2A10="0";
}  



	  if($A10 == "3"){
	 $F3A10="1";
}else{
	 $F3A10="0";
}  



	  if($A10 == "4"){
	 $F4A10="1";
}else{
	 $F4A10="0";
}  



	  if($A10 == "5"){
	 $F5A10="1";
}else{
	 $F5A10="0";
}  





//td KALI A




 if($B10 == "1"){
	 $F1B10="1";
}else{
	 $F1B10="0";
}  




	  if($B10 == "2"){
	 $F2B10="1";
}else{
	 $F2B10="0";
}  



	  if($B10 == "3"){
	 $F3B10="1";
}else{
	 $F3B10="0";
}  



	  if($B10 == "4"){
	 $F4B10="1";
}else{
	 $F4B10="0";
}  



	  if($B10 == "5"){
	 $F5B10="1";
}else{
	 $F5B10="0";
}  


//td KALI B




 if($C10 == "1"){
	 $F1C10="1";
}else{
	 $F1C10="0";
}  




	  if($C10 == "2"){
	 $F2C10="1";
}else{
	 $F2C10="0";
}  



	  if($C10 == "3"){
	 $F3C10="1";
}else{
	 $F3C10="0";
}  



	  if($C10 == "4"){
	 $F4C10="1";
}else{
	 $F4C10="0";
}  



	  if($C10 == "5"){
	 $F5C10="1";
}else{
	 $F5C10="0";
}  


//td KALI C





	  if($D10 == "1"){
	 $F1D10="1";
}else{
	 $F1D10="0";
}  




	  if($D10 == "2"){
	 $F2D10="1";
}else{
	 $F2D10="0";
}  



	  if($D10 == "3"){
	 $F3D10="1";
}else{
	 $F3D10="0";
}  



	  if($D10 == "4"){
	 $F4D10="1";
}else{
	 $F4D10="0";
}  



	  if($D10 == "5"){
	 $F5D10="1";
}else{
	 $F5D10="0";
}  


//td KALI D



 "<th>5</th>";
	  if($E10 == "1"){
	 $F1E10="1";
}else{
	 $F1E10="0";
}  




	  if($E10 == "2"){
	 $F2E10="1";
}else{
	 $F2E10="0";
}  



	  if($E10 == "3"){
	 $F3E10="1";
}else{
	 $F3E10="0";
}  



	  if($E10 == "4"){
	 $F4E10="1";
}else{
	 $F4E10="0";
}  



	  if($E10 == "5"){
	 $F5E10="1";
}else{
	 $F5E10="0";
}  


//td KALI E


 "<td>TOTAL"; 	  


	  

 
$F1TOTALJ1=$F1A10+$F1B10+$F1C10+$F1D10+$F1E10;




 
$F2TOTALJ2=$F2A10+$F2B10+$F2C10+$F2D10+$F2E10;




 
$F3TOTALJ3=$F3A10+$F3B10+$F3C10+$F3D10+$F3E10;



 
$F4TOTALJ4=$F4A10+$F4B10+$F4C10+$F4D10+$F4E10;



 
$F5TOTALJ5=$F5A10+$F5B10+$F5C10+$F5D10+$F5E10;







// FREKUENSI J



	  if($A11 == "1"){
	 $F1A11="1";
}else{
	 $F1A11="0";
}  




	  if($A11 == "2"){
	 $F2A11="1";
}else{
	 $F2A11="0";
}  



	  if($A11 == "3"){
	 $F3A11="1";
}else{
	 $F3A11="0";
}  



	  if($A11 == "4"){
	 $F4A11="1";
}else{
	 $F4A11="0";
}  



	  if($A11 == "5"){
	 $F5A11="1";
}else{
	 $F5A11="0";
}  





//td KALI A




 if($B11 == "1"){
	 $F1B11="1";
}else{
	 $F1B11="0";
}  




	  if($B11 == "2"){
	 $F2B11="1";
}else{
	 $F2B11="0";
}  



	  if($B11 == "3"){
	 $F3B11="1";
}else{
	 $F3B11="0";
}  



	  if($B11 == "4"){
	 $F4B11="1";
}else{
	 $F4B11="0";
}  



	  if($B11 == "5"){
	 $F5B11="1";
}else{
	 $F5B11="0";
}  


//td KALI B




 if($C11 == "1"){
	 $F1C11="1";
}else{
	 $F1C11="0";
}  




	  if($C11 == "2"){
	 $F2C11="1";
}else{
	 $F2C11="0";
}  



	  if($C11 == "3"){
	 $F3C11="1";
}else{
	 $F3C11="0";
}  



	  if($C11 == "4"){
	 $F4C11="1";
}else{
	 $F4C11="0";
}  



	  if($C11 == "5"){
	 $F5C11="1";
}else{
	 $F5C11="0";
}  


//td KALI C





	  if($D11 == "1"){
	 $F1D11="1";
}else{
	 $F1D11="0";
}  




	  if($D11 == "2"){
	 $F2D11="1";
}else{
	 $F2D11="0";
}  



	  if($D11 == "3"){
	 $F3D11="1";
}else{
	 $F3D11="0";
}  



	  if($D11 == "4"){
	 $F4D11="1";
}else{
	 $F4D11="0";
}  



	  if($D11 == "5"){
	 $F5D11="1";
}else{
	 $F5D11="0";
}  


//td KALI D



 "<th>5</th>";
	  if($E11 == "1"){
	 $F1E11="1";
}else{
	 $F1E11="0";
}  




	  if($E11 == "2"){
	 $F2E11="1";
}else{
	 $F2E11="0";
}  



	  if($E11 == "3"){
	 $F3E11="1";
}else{
	 $F3E11="0";
}  



	  if($E11 == "4"){
	 $F4E11="1";
}else{
	 $F4E11="0";
}  



	  if($E11 == "5"){
	 $F5E11="1";
}else{
	 $F5E11="0";
}  


//td KALI E


 "<td>TOTAL"; 	  


	  

 
$F1TOTALK1=$F1A11+$F1B11+$F1C11+$F1D11+$F1E11;




 
$F2TOTALK2=$F2A11+$F2B11+$F2C11+$F2D11+$F2E11;




 
$F3TOTALK3=$F3A11+$F3B11+$F3C11+$F3D11+$F3E11;



 
$F4TOTALK4=$F4A11+$F4B11+$F4C11+$F4D11+$F4E11;



 
$F5TOTALK5=$F5A11+$F5B11+$F5C11+$F5D11+$F5E11;







// FREKUENSI K



	  if($A12 == "1"){
	 $F1A12="1";
}else{
	 $F1A12="0";
}  




	  if($A12 == "2"){
	 $F2A12="1";
}else{
	 $F2A12="0";
}  



	  if($A12 == "3"){
	 $F3A12="1";
}else{
	 $F3A12="0";
}  



	  if($A12 == "4"){
	 $F4A12="1";
}else{
	 $F4A12="0";
}  



	  if($A12 == "5"){
	 $F5A12="1";
}else{
	 $F5A12="0";
}  





//td KALI A




 if($B12 == "1"){
	 $F1B12="1";
}else{
	 $F1B12="0";
}  




	  if($B12 == "2"){
	 $F2B12="1";
}else{
	 $F2B12="0";
}  



	  if($B12 == "3"){
	 $F3B12="1";
}else{
	 $F3B12="0";
}  



	  if($B12 == "4"){
	 $F4B12="1";
}else{
	 $F4B12="0";
}  



	  if($B12 == "5"){
	 $F5B12="1";
}else{
	 $F5B12="0";
}  


//td KALI B




 if($C12 == "1"){
	 $F1C12="1";
}else{
	 $F1C12="0";
}  




	  if($C12 == "2"){
	 $F2C12="1";
}else{
	 $F2C12="0";
}  



	  if($C12 == "3"){
	 $F3C12="1";
}else{
	 $F3C12="0";
}  



	  if($C12 == "4"){
	 $F4C12="1";
}else{
	 $F4C12="0";
}  



	  if($C12 == "5"){
	 $F5C12="1";
}else{
	 $F5C12="0";
}  


//td KALI C





	  if($D12 == "1"){
	 $F1D12="1";
}else{
	 $F1D12="0";
}  




	  if($D12 == "2"){
	 $F2D12="1";
}else{
	 $F2D12="0";
}  



	  if($D12 == "3"){
	 $F3D12="1";
}else{
	 $F3D12="0";
}  



	  if($D12 == "4"){
	 $F4D12="1";
}else{
	 $F4D12="0";
}  



	  if($D12 == "5"){
	 $F5D12="1";
}else{
	 $F5D12="0";
}  


//td KALI D



 "<th>5</th>";
	  if($E12 == "1"){
	 $F1E12="1";
}else{
	 $F1E12="0";
}  




	  if($E12 == "2"){
	 $F2E12="1";
}else{
	 $F2E12="0";
}  



	  if($E12 == "3"){
	 $F3E12="1";
}else{
	 $F3E12="0";
}  



	  if($E12 == "4"){
	 $F4E12="1";
}else{
	 $F4E12="0";
}  



	  if($E12 == "5"){
	 $F5E12="1";
}else{
	 $F5E12="0";
}  


//td KALI E


 "<td>TOTAL"; 	  


	  

 
$F1TOTALL1=$F1A12+$F1B12+$F1C12+$F1D12+$F1E12;




 
$F2TOTALL2=$F2A12+$F2B12+$F2C12+$F2D12+$F2E12;




 
$F3TOTALL3=$F3A12+$F3B12+$F3C12+$F3D12+$F3E12;



 
$F4TOTALL4=$F4A12+$F4B12+$F4C12+$F4D12+$F4E12;



 
$F5TOTALL5=$F5A12+$F5B12+$F5C12+$F5D12+$F5E12;







// FREKUENSI L







 $F1TOTALA1;




 $F1TOTALB1;



 $F1TOTALC1;




 $F1TOTALD1;





 $F1TOTALE1;




 $F1TOTALF1;




 $F1TOTALG1;





 $F1TOTALH1;




 $F1TOTALI1;




 $F1TOTALJ1;





 $F1TOTALK1;




 $F1TOTALL1;





 $SF1=$F1TOTALA1+$F1TOTALB1+$F1TOTALC1+$F1TOTALD1+$F1TOTALE1+$F1TOTALF1
+$F1TOTALG1+$F1TOTALH1+$F1TOTALI1+$F1TOTALJ1+$F1TOTALK1+$F1TOTALL1;






 "<td>2"; 



 $F2TOTALA2;




 $F2TOTALB2;




 $F2TOTALC2;





 $F2TOTALD2;




 $F2TOTALE2;




 $F2TOTALF2;




 $F2TOTALG2;




 $F2TOTALH2;





 $F2TOTALI2;




 $F2TOTALJ2;




 $F2TOTALK2;





 $F2TOTALL2;





 $SF2=$F2TOTALA2+$F2TOTALB2+$F2TOTALC2+$F2TOTALD2+$F2TOTALE2+$F2TOTALF2
+$F2TOTALG2+$F2TOTALH2+$F2TOTALI2+$F2TOTALJ2+$F2TOTALK2+$F2TOTALL2;






 "<td>3"; 




 $F3TOTALA3;




 $F3TOTALB3;




 $F3TOTALC3;





 $F3TOTALD3;




 $F3TOTALE3;





 $F3TOTALF3;





 $F3TOTALG3;





 $F3TOTALH3;




 $F3TOTALI3;




 $F3TOTALJ3;




 $F3TOTALK3;




 $F3TOTALL3;




 $SF3=$F3TOTALA3+$F3TOTALB3+$F3TOTALC3+$F3TOTALD3+$F3TOTALE3+$F3TOTALF3
+$F3TOTALG3+$F3TOTALH3+$F3TOTALI3+$F3TOTALJ3+$F3TOTALK3+$F3TOTALL3;








 "<td>4"; 




 $F4TOTALA4;




 $F4TOTALB4;




 $F4TOTALC4;




 $F4TOTALD4;




 $F4TOTALE4;




 $F4TOTALF4;




 $F4TOTALG4;




 $F4TOTALH4;




 $F4TOTALI4;




 $F4TOTALJ4;




 $F4TOTALK4;




 $F4TOTALL4;




 $SF4=$F4TOTALA4+$F4TOTALB4+$F4TOTALC4+$F4TOTALD4+$F4TOTALE4+$F4TOTALF4
+$F4TOTALG4+$F4TOTALH4+$F4TOTALI4+$F4TOTALJ4+$F4TOTALK4+$F4TOTALL4;






 "<td>5"; 



 $F5TOTALA5;




 $F5TOTALB5;




 $F5TOTALC5;




 $F5TOTALD5;




 $F5TOTALE5;



 $F5TOTALF5;




 $F5TOTALG5;




 $F5TOTALH5;




 $F5TOTALI5;



 $F5TOTALJ5;





 $F5TOTALK5;




 $F5TOTALL5;




 $SF5=$F5TOTALA5+$F5TOTALB5+$F5TOTALC5+$F5TOTALD5+$F5TOTALE5+$F5TOTALF5
+$F5TOTALG5+$F5TOTALH5+$F5TOTALI5+$F5TOTALJ5+$F5TOTALK5+$F5TOTALL5;





 "</tbody>";
			
"	</table>";

"
</div>
</div>";



if($F1TOTALA1==0 || $SF1==0){
	 $NR1=0;
} ELSE {
 $NR1=$F1TOTALA1/$SF1;
}



if($F1TOTALB1==0 || $SF1==0){
	 $NR2=0;
} ELSE {
 $NR2=$F1TOTALB1/$SF1;
}



if($F1TOTALC1==0 || $SF1==0){
	 $NR3=0;
} ELSE {
 $NR3=$F1TOTALC1/$SF1;
}



if($F1TOTALD1==0 || $SF1==0){
	 $NR4=0;
} ELSE {
 $NR4=$F1TOTALD1/$SF1;
}



if($F1TOTALE1==0 || $SF1==0){
	 $NR5=0;
} ELSE {
 $NR5=$F1TOTALE1/$SF1;
}



if($F1TOTALF1==0 || $SF1==0){
	 $NR6=0;
} ELSE {
 $NR6=$F1TOTALF1/$SF1;
}



if($F1TOTALG1==0 || $SF1==0){
	 $NR7=0;
} ELSE {
 $NR7=$F1TOTALG1/$SF1;
}



if($F1TOTALH1==0 || $SF1==0){
	 $NR8=0;
} ELSE {
 $NR8=$F1TOTALH1/$SF1;
}



if($F1TOTALI1==0 || $SF1==0){
	 $NR9=0;
} ELSE {
 $NR9=$F1TOTALI1/$SF1;
}



if($F1TOTALJ1==0 || $SF1==0){
	 $NR10=0;
} ELSE {
 $NR10=$F1TOTALJ1/$SF1;
}



if($F1TOTALK1==0 || $SF1==0){
	 $NR11=0;
} ELSE {
 $NR11=$F1TOTALK1/$SF1;
}



if($F1TOTALL1==0 || $SF1==0){
	 $NR12=0;
} ELSE {
 $NR12=$F1TOTALL1/$SF1;
}



 

 "<tr>"; 
"
<th>2</th>";

if($F2TOTALA2==0 || $SF2==0){
	 $NR13=0;
} ELSE {
 $NR13=$F2TOTALA2/$SF2;
}



if($F2TOTALB2==0 || $SF2==0){
	 $NR14=0;
} ELSE {
 $NR14=$F2TOTALB2/$SF2;
}



if($F2TOTALC2==0 || $SF2==0){
	 $NR15=0;
} ELSE {
 $NR15=$F2TOTALC2/$SF2;
}



if($F2TOTALD2==0 || $SF2==0){
	 $NR16=0;
} ELSE {
 $NR16=$F2TOTALD2/$SF2;
}



if($F2TOTALE2==0 || $SF2==0){
	 $NR17=0;
} ELSE {
 $NR17=$F2TOTALE2/$SF2;
}



if($F2TOTALF2==0 || $SF2==0){
	 $NR18=0;
} ELSE {
 $NR18=$F2TOTALF2/$SF2;
}



if($F2TOTALG2==0 || $SF2==0){
	 $NR19=0;
} ELSE {
 $NR19=$F2TOTALG2/$SF2;
}



if($F2TOTALH2==0 || $SF2==0){
	 $NR20=0;
} ELSE {
 $NR20=$F2TOTALH2/$SF2;
}



if($F2TOTALI2==0 || $SF2==0){
	 $NR21=0;
} ELSE {
 $NR21=$F2TOTALI2/$SF2;
}



if($F2TOTALJ2==0 || $SF2==0){
	 $NR22=0;
} ELSE {
 $NR22=$F2TOTALJ2/$SF2;
}



if($F2TOTALK2==0 || $SF2==0){
	 $NR23=0;
} ELSE {
 $NR23=$F2TOTALK2/$SF2;
}



if($F2TOTALL2==0 || $SF2==0){
	 $NR24=0;
} ELSE {
 $NR24=$F2TOTALL2/$SF2;
}


 


 "<tr>"; 
"
<th>3</th>";

if($F3TOTALA3==0 || $SF3==0){
	 $NR25=0;
} ELSE {
 $NR25=$F3TOTALA3/$SF3;
}



if($F3TOTALB3==0 || $SF3==0){
	 $NR26=0;
} ELSE {
 $NR26=$F3TOTALB3/$SF3;
}



if($F3TOTALC3==0 || $SF3==0){
	 $NR27=0;
} ELSE {
 $NR27=$F3TOTALC3/$SF3;
}



if($F3TOTALD3==0 || $SF3==0){
	 $NR28=0;
} ELSE {
 $NR28=$F3TOTALD3/$SF3;
}



if($F3TOTALE3==0 || $SF3==0){
	 $NR29=0;
} ELSE {
 $NR29=$F3TOTALE3/$SF3;
}



if($F3TOTALF3==0 || $SF3==0){
	 $NR30=0;
} ELSE {
 $NR30=$F3TOTALF3/$SF3;
}



if($F3TOTALG3==0 || $SF3==0){
	 $NR31=0;
} ELSE {
 $NR31=$F3TOTALG3/$SF3;
}



if($F3TOTALH3==0 || $SF3==0){
	 $NR32=0;
} ELSE {
 $NR32=$F3TOTALH3/$SF3;
}



if($F3TOTALI3==0 || $SF3==0){
	 $NR33=0;
} ELSE {
 $NR33=$F3TOTALI3/$SF3;
}



if($F3TOTALJ3==0 || $SF3==0){
	 $NR34=0;
} ELSE {
 $NR34=$F3TOTALJ3/$SF3;
}



if($F3TOTALK3==0 || $SF3==0){
	 $NR35=0;
} ELSE {
 $NR35=$F3TOTALK3/$SF3;
}



if($F3TOTALL3==0 || $SF3==0){
	 $NR36=0;
} ELSE {
 $NR36=$F3TOTALL3/$SF3;
}






 "<tr>"; 
"
<th>4</th>";

if($F4TOTALA4==0 || $SF4==0){
	 $NR37=0;
} ELSE {
 $NR37=$F4TOTALA4/$SF4;
}



if($F4TOTALB4==0 || $SF4==0){
	 $NR38=0;
} ELSE {
 $NR38=$F4TOTALB4/$SF4;
}



if($F4TOTALC4==0 || $SF4==0){
	 $NR39=0;
} ELSE {
 $NR39=$F4TOTALC4/$SF4;
}



if($F4TOTALD4==0 || $SF4==0){
	 $NR40=0;
} ELSE {
 $NR40=$F4TOTALD4/$SF4;
}



if($F4TOTALE4==0 || $SF4==0){
	 $NR41=0;
} ELSE {
 $NR41=$F4TOTALE4/$SF4;
}



if($F4TOTALF4==0 || $SF4==0){
	 $NR42=0;
} ELSE {
 $NR42=$F4TOTALF4/$SF4;
}



if($F4TOTALG4==0 || $SF4==0){
	 $NR43=0;
} ELSE {
 $NR43=$F4TOTALG4/$SF4;
}



if($F4TOTALH4==0 || $SF4==0){
	 $NR44=0;
} ELSE {
 $NR44=$F4TOTALH4/$SF4;
}



if($F4TOTALI4==0 || $SF4==0){
	 $NR45=0;
} ELSE {
 $NR45=$F4TOTALI4/$SF4;
}



if($F4TOTALJ4==0 || $SF4==0){
	 $NR46=0;
} ELSE {
 $NR46=$F4TOTALJ4/$SF4;
}



if($F4TOTALK4==0 || $SF4==0){
	 $NR47=0;
} ELSE {
 $NR47=$F4TOTALK4/$SF4;
}



if($F4TOTALL4==0 || $SF4==0){
	 $NR48=0;
} ELSE {
 $NR48=$F4TOTALL4/$SF4;
}


 
 



 "<tr>"; 
"
<th>5</th>";
if($F5TOTALA5==0 || $SF5==0){
	 $NR49=0;
} ELSE {
 $NR49=$F5TOTALA5/$SF5;
}



if($F5TOTALB5==0 || $SF5==0){
	 $NR50=0;
} ELSE {
 $NR50=$F5TOTALB5/$SF5;
}



if($F5TOTALC5==0 || $SF5==0){
	 $NR51=0;
} ELSE {
 $NR51=$F5TOTALC5/$SF5;
}



if($F5TOTALD5==0 || $SF5==0){
	 $NR52=0;
} ELSE {
 $NR52=$F5TOTALD5/$SF5;
}



if($F5TOTALE5==0 || $SF5==0){
	 $NR53=0;
} ELSE {
 $NR53=$F5TOTALE5/$SF5;
}



if($F5TOTALF5==0 || $SF5==0){
	 $NR54=0;
} ELSE {
 $NR54=$F5TOTALF5/$SF5;
}



if($F5TOTALG5==0 || $SF5==0){
	 $NR55=0;
} ELSE {
 $NR55=$F5TOTALG5/$SF5;
}



if($F5TOTALH5==0 || $SF5==0){
	 $NR56=0;
} ELSE {
 $NR56=$F5TOTALH5/$SF5;
}



if($F5TOTALI5==0 || $SF5==0){
	 $NR57=0;
} ELSE {
 $NR57=$F5TOTALI5/$SF5;
}



if($F5TOTALJ5==0 || $SF5==0){
	 $NR58=0;
} ELSE {
 $NR58=$F5TOTALJ5/$SF5;
}



if($F5TOTALK5==0 || $SF5==0){
	 $NR59=0;
} ELSE {
 $NR59=$F5TOTALK5/$SF5;
}



if($F5TOTALL5==0 || $SF5==0){
	 $NR60=0;
} ELSE {
 $NR60=$F5TOTALL5/$SF5;
}



 

 $WR1=$NR1*1;

 $WR2=$NR2*1;

 $WR3=$NR3*1;

 $WR4=$NR4*1;

 $WR5=$NR5*1;

 $WR6=$NR6*1;

 $WR7=$NR7*1;

 $WR8=$NR8*1;

 $WR9=$NR9*1;

 $WR10=$NR10*1;

 $WR11=$NR11*1;

 $WR12=$NR12*1;


 

 "<tr>"; 

 

 $WR13=$NR13*2;

 $WR14=$NR14*2;

 $WR15=$NR15*2;

 $WR16=$NR16*2;

 $WR17=$NR17*2;

 $WR18=$NR18*2;

 $WR19=$NR19*2;

 $WR20=$NR20*2;

 $WR21=$NR21*2;

 $WR22=$NR22*2;

 $WR23=$NR23*2;

 $WR24=$NR24*2;



 

 "<tr>"; 

 

 $WR25=$NR25*3;

 $WR26=$NR26*3;

 $WR27=$NR27*3;

 $WR28=$NR28*3;

 $WR29=$NR29*3;

 $WR30=$NR30*3;

 $WR31=$NR31*3;

 $WR32=$NR32*3;

 $WR33=$NR33*3;

 $WR34=$NR34*3;

 $WR35=$NR35*3;

 $WR36=$NR36*3;

 

 

 "<tr>"; 

 

 $WR37=$NR37*4;

 $WR38=$NR38*4;

 $WR39=$NR39*4;

 $WR40=$NR40*4;

 $WR41=$NR41*4;

 $WR42=$NR42*4;

 $WR43=$NR43*4;

 $WR44=$NR44*4;

 $WR45=$NR45*4;

 $WR46=$NR46*4;

 $WR47=$NR47*4;

 $WR48=$NR48*4;


 

 "<tr>"; 

 "<th>5</th>"; 

 $WR49=$NR49*5;

 $WR50=$NR50*5;

 $WR51=$NR51*5;

 $WR52=$NR52*5;

 $WR53=$NR53*5;

 $WR54=$NR54*5;

 $WR55=$NR55*5;

 $WR56=$NR56*5;

 $WR57=$NR57*5;

 $WR58=$NR58*5;

 $WR59=$NR59*5;

 $WR60=$NR60*5;

 










 echo"<h4>total weight rating </h4><div class='table-responsive'>
 <table class='table table-bordered table-hover table-striped'>

 
<thead>";
echo "<tr>";
foreach ($_POST['id_set'] as $id) {
	$id_set=$id;
	$sqh=mysqli_query($conn,"select * from `user` where id_set='$id_set'");
	while($sroh=mysqli_fetch_array($sqh)){
		$nama= $sroh['nama'];

echo "<th>"; echo $nama; echo"</th>";


}
}
echo"</tr>";

echo"</thead> <tbody>";

$TWR1=$WR1+$WR13+$WR25+$WR37+$WR49;
$TWR2=$WR2+$WR14+$WR26+$WR38+$WR50;
$TWR3=$WR3+$WR15+$WR27+$WR39+$WR51;
$TWR4=$WR4+$WR16+$WR28+$WR40+$WR52;
$TWR5=$WR5+$WR17+$WR29+$WR41+$WR53;
$TWR6=$WR6+$WR18+$WR30+$WR42+$WR54;
$TWR7=$WR7+$WR19+$WR31+$WR43+$WR55;
$TWR8=$WR8+$WR20+$WR32+$WR44+$WR56;
$TWR9=$WR9+$WR21+$WR33+$WR45+$WR57;
$TWR10=$WR10+$WR22+$WR34+$WR46+$WR58;
$TWR11=$WR11+$WR23+$WR35+$WR47+$WR59;
$TWR12=$WR12+$WR24+$WR36+$WR48+$WR60;

echo"<tr>";
if ($TWR1 == 0){

} else {
	echo"<td>";
	echo $TWR1=$WR1+$WR13+$WR25+$WR37+$WR49;
	
	echo"</td>";
}


if ($TWR2 == 0){

} else {
	echo"<td>";
	echo $TWR2=$WR2+$WR14+$WR26+$WR38+$WR50;
	
	echo"</td>";
}


if ($TWR3 == 0){

} else {

	echo"<td>";
	echo $TWR3=$WR3+$WR15+$WR27+$WR39+$WR51;
	
	echo"</td>";
}

if ($TWR4 == 0){

} else {

echo"<td>";
echo $TWR4=$WR4+$WR16+$WR28+$WR40+$WR52;

echo"</td>";
}


if ($TWR5 == 0){

} else {
	echo"<td>";
	echo $TWR5=$WR5+$WR17+$WR29+$WR41+$WR53;
	
	echo"</td>";
}



if ($TWR6 == 0){

} else {

	echo"<td>";
	echo $TWR6=$WR6+$WR18+$WR30+$WR42+$WR54;
	
	echo"</td>";
}


if ($TWR7 == 0){

} else {

	echo"<td>";
	echo $TWR7=$WR7+$WR19+$WR31+$WR43+$WR55;
	
	echo"</td>";
}


if ($TWR8 == 0){

} else {

	echo"<td>";
	echo $TWR8=$WR8+$WR20+$WR32+$WR44+$WR56;
	
	echo"</td>";
}


if ($TWR9 == 0){

} else {

	echo"<td>";
echo $TWR9=$WR9+$WR21+$WR33+$WR45+$WR57;

echo"</td>";
}



if ($TWR10 == 0){

} else {
	echo"<td>";
	echo $TWR10=$WR10+$WR22+$WR34+$WR46+$WR58;
	
	echo"</td>";
}


if ($TWR11 == 0){

} else {
	echo"<td>";
	echo $TWR11=$WR11+$WR23+$WR35+$WR47+$WR59;
	
	echo"</td>";
}


if ($TWR12 == 0){

} else {
	echo"<td>";
	echo $TWR12=$WR12+$WR24+$WR36+$WR48+$WR60;
	
	echo"</td>";
}




echo "</tr>"; 
echo "</tbody>";
	 
echo"	</table>";





$URUT=array (
'0' => "<input type='hidden' value='".$TWR1."'>"."Pembiayaan usaha/ modal",
 '1' => "<input type='hidden' value='".$TWR2."'>"."Pengelolaan keuangan",
	'2' => "<input type='hidden' value='".$TWR3."'>"."Proses produksi",
	'3' =>"<input type='hidden' value='".$TWR4."'>"."Inovasi produk",
	'4' => "<input type='hidden' value='".$TWR5."'>"."Distribusi barang",
	'5' =>"<input type='hidden' value='".$TWR6."'>"."Penjualan online",
	'6' => "<input type='hidden' value='".$TWR7."'>"."Branding/Merk dagang",
	'7' =>"<input type='hidden' value='".$TWR8."'>"."Izin usaha",
	'8' => "<input type='hidden' value='".$TWR9."'>"."Penggunaan teknologi",
	'9' => "<input type='hidden' value='".$TWR10."'>"."Pengelolaan SDM",
	'10' => "<input type='hidden' value='".$TWR11."'>"."Manajemen waktu",
	'11' => "<input type='hidden' value='".$TWR12."'>"."Loyalitas konsumen");
	

RSORT($URUT);

$URUTx=array (
	'0' => "<input type='hidden' value='".$TWR1."'>"."$saran1",
	 '1' => "<input type='hidden' value='".$TWR2."'>"."$saran2",
		'2' => "<input type='hidden' value='".$TWR3."'>"."$saran3",
		'3' =>"<input type='hidden' value='".$TWR4."'>"."$saran4",
		'4' => "<input type='hidden' value='".$TWR5."'>"."$saran5",
		'5' =>"<input type='hidden' value='".$TWR6."'>"."$saran6",
		'6' => "<input type='hidden' value='".$TWR7."'>"."$saran7",
		'7' =>"<input type='hidden' value='".$TWR8."'>"."$saran8",
		'8' => "<input type='hidden' value='".$TWR9."'>"."$saran9",
		'9' => "<input type='hidden' value='".$TWR10."'>"."$saran10",
		'10' => "<input type='hidden' value='".$TWR11."'>"."$saran11",
		'11' => "<input type='hidden' value='".$TWR12."'>"."$saran12");
		
	
	RSORT($URUTx);


	foreach ($_POST['id_set'] as $id) {
		 $id_setx=$id;
		
		$data+=count(array($id_setx));
		

	}
	 $data; 


  
echo"<h4>Hasil Rank dan Rekomendasi </h4><div class='table-responsive'>
<table class='table table-bordered table-hover table-striped'>
<head>
";

echo"<tr>";
echo"<th>Ranking";
echo"</th>";

echo"<th>Alternatif";
echo"</th>";

echo"<th>Rekomendasi";
echo"</th>";
echo"</tr>";

echo"	</head>
		
<tbody>";

//echo "<td>".$URUT[$x]."</td>";

for($x=0;$x<$data;$x++)
for($x=0;$x<$data;$x++)

{
echo"<tr>";
echo"<th>";
echo $i=$x+1;
echo"</th>";

echo "<td>".$URUT[$x]."</td>";
echo "<td>".$URUTx[$x]."</td>";
echo"</tr>";

}



echo"</tbody>";

echo"</table>";





echo"
</div>
</div>";



}
?>

<script>
   $('.a').on('change', function() {
            $('.a').not(this).prop('checked',false);
    });

	$('.b').on('change', function() {
            $('.b').not(this).prop('checked',false);
    });


	$('.c').on('change', function() {
            $('.c').not(this).prop('checked',false);
    });

	$('.d').on('change', function() {
            $('.d').not(this).prop('checked',false);
    });

	$('.e').on('change', function() {
            $('.e').not(this).prop('checked',false);
    });

	$('.f').on('change', function() {
            $('.f').not(this).prop('checked',false);
    });


	$('.g').on('change', function() {
            $('.g').not(this).prop('checked',false);
    });

	$('.h').on('change', function() {
            $('.h').not(this).prop('checked',false);
    });

	$('.i').on('change', function() {
            $('.i').not(this).prop('checked',false);
    });

	$('.j').on('change', function() {
            $('.j').not(this).prop('checked',false);
    });

	$('.k').on('change', function() {
            $('.k').not(this).prop('checked',false);
    });

	$('.l').on('change', function() {
            $('.l').not(this).prop('checked',false);
    });

</script>
