<?php 
$conn = mysqli_connect("localhost","root","","checkbox");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<div class='page-header'>
    <h1>SISTEM REKOMENDASI DENGAN METODE NRF</h1>
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



	echo "<br>Data yang dipilih:<br>";

	echo"<div class='table-responsive'><table class='table table-bordered table-hover table-striped'>

	
		<thead>
		<tr>";
	
		//isi

		foreach ($_POST['id_set'] as $id) {
			echo $id_set=$id;

			$sqd=mysqli_query($conn,"select * from `dataset` where id_set='$id_set'");
			while($srod=mysqli_fetch_array($sqd)){
			
				echo"<th>";
				echo $srod['nama'];
				echo"</th>";
		
	}


		}

		//isi



//pisah kepala




echo"<tbody>";
echo"<table>";
	
echo"</div>";
echo"</div>";

// atas kedua UNTUK DATA A



// atas kedua

}
?>