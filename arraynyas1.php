<!DOCTYPE html>
<html>
<head>
	<title>Percobaan Array</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<h1>belajar Array</h1>
	<?php 
$mahasiswa = ["husnul","hendri","bagas","chairul","fajar"];
	$prodi = [
		[ 
		  "id"=>1,
		  "nama"=>"sisfo",
		  "kuota"=>"58",
		  "kaprodi"=>"ilhamsyah"
		],
		[ 
		  "id"=>2,
		  "nama"=>"kelautan",
		  "kuota"=>"32",
		  "kaprodi"=>"nora"
		],
		[ 
		  "id"=>3,
		  "nama"=>"kimia",
		  "kuota"=>"40",
		  "kaprodi"=>"andi"
		],
		[ 
		  "id"=>4,
		  "nama"=>"fisika",
		  "kuota"=>"25",
		  "kaprodi"=>"nurhasanah"
		],
		[ 
		  "id"=>4,
		  "nama"=>"biologi",
		  "kuota"=>"40",
		  "kaprodi"=>"rizalinda"
		]
		];					
 ?>
<h2>  	
<?php 
	echo $prodi[4]["kaprodi"];
	?>
</h2>
  <table class="table table-hover">
  	<thead>
  		<tr>
  			<th>No</th>
  			<th>nama prodi</th>
  			<th>nama kaprodi</th>
  		</tr>
  		<tbody>
  			<?php foreach ($prodi as $prod): ?>
  			<tr>
  				<td><?php echo $prod ['id']; ?></td>
  				<td><?php echo $prod ['nama']; ?></td>
  				<td><?php echo $prod ['kaprodi']; ?></td>
  			</tr>
  		<?php endforeach; ?>
  		</tbody>
  	</thead>
  </table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>	