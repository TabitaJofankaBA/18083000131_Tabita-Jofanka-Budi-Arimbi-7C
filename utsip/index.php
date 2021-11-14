<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pameran Seni Budaya</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body class "container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SMANGAT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user.php">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Register.php">Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Pameran Seni SMAN 1 Ngantang</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead">Informasi</p>
		</div>
	</div>
    </div>

<!--- Three Column Section -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<h3>Profile</h3>
			<p>Informasi tentang seniman yang terlibat</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<h3>Pendaftaran</h3>
			<p>Cara mendaftar untuk tiket masuk</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<h3>Biaya</h3>
			<p>Informasi mengenai biaya terbaru dari karya seni yang di lelang</p>
		</div>
	</div>
	<hr class="my-4">

<!--- Cards -->
<div class="container-fluid padding">
	<div class="row padding">
    <div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/img.jpg">
				<div class="card-body">
					<h4 class="card-title"></h4>
					<a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/img1.jpg">
				<div class="card-body">
					<h4 class="card-title"></h4>
					<a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/img2.jpg">
				<div class="card-body">
					<h4 class="card-title"></h4>
					<a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
    <footer class="bg-light">
    <div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-4">
				<hr class="light" text="center">
                <h5>Contact Person</h5>
				<p>Tabita Jofanka Budi Arimbi</p>
				<p>085655419109</p>
			</div>
            <div class="col-md-4">
				<hr class="light">
				<h5>Alamat</h5>
				<hr class="light">
				<p>SMAN 1 Ngantang</p>
                <p>Jl Raya Mulyorejo 253 Kec. Ngantang Kab. Malang</p>
			</div>
			<div class="col-md-4">
				<hr class="light" text="center">
                <h5>About Us</h5>
			</div>
        <div class="text-center p-3" style="background:#CCCCCC">
        Copyright &copy;2021
        </div>
    </footer>

</body>
</html>