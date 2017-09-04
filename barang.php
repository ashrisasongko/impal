
<!DOCTYPE html>
<htm lang="en">
<head>
	<title>Citramart</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="barang.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<h1 align="right">Citramart <br> Telkom University</h1>
			<nav class="navbar navbar-default">
				<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#"></a>
						</div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="home.html">Home<span class="sr-only">(current)</span></a></li>
								<li><a href="profile.html">Logout</a></li>
							</ul>
						</nav>

			<div class="row">
				<div class="col-md-7">
					<!-- show form -->
				</div>
				<div class=col-md-5>
				<form method="post" action="tambahbarang.php">
				<h1>Data Barang</h1><br>
				<div class="form-group">
				    <label for="exampleInputEmail1">ID Admin</label>
				    <input class="form-control" placeholder="Enter ID" name="IDAdmin">
				    <small id="emailHelp" class="form-text text-muted">ID Admin yang memasukan data barang</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Kode Barang</label>
				    <input type="text" class="form-control" name="KodeBarang" placeholder="Kode Barang">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Nama Barang</label>
				    <input type="text" class="form-control" name="NamaBarang" placeholder="Nama Barang">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Tanggal Expired</label><br>
				    <input id="date" type="date" name="TanggaExpired">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Metode Pembayaran</label>
				    <input type="text" class="form-control" name="MetodePembayaran" placeholder="Metode Pembayaran">
				  </div>			  
				  <input type="submit" value="Submit"/>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <!-- <button type="submit" class="btn btn-primary">Batal</button> -->
				</form>
				</div>
			</div>
	</div>

</body>
</html>

?/