<!DOCTYPE html>
<html>
<head>
	<title>Telkom</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body onload="view_data()">

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<div class="row mb-3">
	    <div class="col-sm-12"><h4>Cari</h4></div>
		    <div class="col-sm-3">
		        <div class="form-group form-inline">
		            <label>Kota</label>
		            <select name="s_kota" id="kota" class="form-control">
		                <option value=""></option>
		                <option value="samarinda">Samarinda</option>
		                <option value="balikpapan">Balikpapan</option>
		                <option value="banjarmasin">Banjarmasin</option>
		            </select>
		        </div>
		    </div>
	    	<div class="col-sm-4">
	        <div class="form-group form-inline">
	            <label>Nama</label>
	            <input type="text" name="s_nama" id="nama" class="form-control">
	        </div>
	    </div>
	    <div class="col-sm-4">
	        <button id="search" name="search" class="btn btn-warning"><i class="fa fa-search"></i> Filter</button>
	    </div>
	</div>

	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">id</th>
	      <th scope="col">Nama</th>
	      <th scope="col">Gender</th>
	      <th scope="col">Alamat</th>
	      <th scope="col">Kota</th>
	      <th scope="col">Phone</th>
	      <th scope="col">Provinsi</th>
	    </tr>
	  </thead>
	  <tbody>
	  </tbody>
	</table>
	 
	
	<script type="text/javascript">
		function view_data(){
			$.ajax({
				url: "cari.php",
				method: "GET",
				success: function(data){
					$('tbody').html(data);
				}
			});
		}
		$(document).ready(function(){
			$('#search').click(function(){
				var kota = $('#kota').val();
				var nama = $('#nama').val();
				
					$.ajax({
					url: "cari.php",
					method: "POST",
					data: {kota : kota, nama : nama},
					success: function(data){
						$('tbody').html(data);
					}
				})	
				
				
			})
		})
	</script>
</body>

</html>
