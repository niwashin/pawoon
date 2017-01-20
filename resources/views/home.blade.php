<html>
	<head>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<style>
			body{
				margin: 10px;
			}
		</style>
	</head>
	<body>
		<body>
			<div class="container">
				
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6">
			            <h1>Form Registrasi:</h1>

			            <table class="table">
			            	<tr>
			            		<td>ID</td>
			            		<td><input type="id" id="id" class="form-control" disabled="disabled"></td>
			            	</tr>
			            	<tr>
			            		<td>Nama</td>
			            		<td><input type="nama" id="nama" class="form-control"></td>
			            	</tr>
			            	<tr>
			            		<td>Alamat</td>
			            		<td><input type="nama" id="alamat" class="form-control"></td>
			            	</tr>
			            </table>

			            <button type="button" id="send" class="btn btn-default">SUBMIT</button>
			        </div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
			            <h1>Daftar User</h1>

			            <table class="table table-striped">
			            	<tr class="info">
			            		<td>ID Customer</td>
			            		<td>Nama</td>
			            		<td>Alamat</td>
			            	</tr>
			            	@foreach($users as $each)
				            	<tr>
				            		<td>{{$each->uuid}}</td>
				            		<td>{{$each->nama}}</td>
				            		<td>{{$each->alamat}}</td>
				            	</tr>
			            	@endforeach
			            </table>
			        </div>
				</div>

			</div>
		</body>

		<script
			src="https://code.jquery.com/jquery-3.1.1.min.js"
			integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  		<script>
  			$("#send").click(function()
  			{
  				var nama = $("#nama").val();
			    var alamat = $("#alamat").val();

			    $.post("api/user/new", {nama: nama, alamat: alamat}, function(result)
			    {
			        $("#id").val(result);
			    });
			});
  		</script>
	</body>
</html>