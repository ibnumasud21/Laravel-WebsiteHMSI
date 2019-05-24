<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Himpunan Mahasiswa Sistem Informasi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/tubes.css') }}">
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="bootstrap/dist/popper.min.js"></script>
	<script src="bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{ asset('/js/tubes.js') }}"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div id="preloader">
	<div id="status"></div>
		<div class="container">
			<div class="row">
				<div class="animationload">
					<center><div class="HMSI">
						<img src="/assets/Untitled.png"></center>
							<div class="loader3">Loading..</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<body>
	<div id="font">
		<div class="jumbotron gedung" style="margin-bottom:0">
		<h1>HIMPUNAN MAHASISWA SISTEM INFORMASI</h1>
		<p>Institut Teknologi Kalimantan</p>
		</div>
		<div id="navbar">
			<nav class = "navbar navbar-expand-sm center">
				<a class = "navbar-brand" href="#"></a>
				<button class = "navbar-toggler" type="button" data-toggle="collape" data-target = "#collapsibleNavbar">
					<span class = "navbar-toggler-icon"></span>
				</button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class = "navbar-nav">
						<li class = "nav-item">
						<a class="nav-link active" href="/">HOME</a></li>
						<li class = "nav-item">
						<a class="nav-link" href="/profile/user">PROFILE</a></li>
						<li class = "nav-item">
						<a class="nav-link" href="/news/user">NEWS</a></li>
						<li class = "nav-item">
						<a class="nav-link" href="/calendar/user">CALENDAR</a></li>
						<li class = "nav-item">
						<a class="nav-link" href="/feedback/tambah">FEEDBACK</a></li>
						<li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DATA</a>
			        <div class="dropdown-menu" aria-labelledby="dropdown01">
			          <a class="dropdown-item" href="/data/mahasiswa/user">Mahasiswa HMSI</a>
			          <a class="dropdown-item" href="/data/prestasi/user">Data Prestasi</a>
			          <a class="dropdown-item" href="/data/dosen/user">Data Dosen HMSI</a>
								<a class="dropdown-item" href="/data/prodi/user">Data Program Studi</a>
								<a class="dropdown-item" href="/data/departemen/user">Data Departemen</a>
								<a class="dropdown-item" href="/data/angkatan/user">Data Angkatan</a>
			        </div>
			      </li>
            <a class="btn btn-sm btn btn-light " style="color: dodgerblue" href="/signin">LOGIN</a>
					</ul>
				</div>
			</nav>

		</div>
	</div>
				<br/>
				<br/>
			<div class="body-1">
				<div class="jumbotron text-black home" style="background-color:ghostwhite">
					<div class="row">
						<div class="col-lg-2">
						</div>
						<div class="col-lg-8">
							<h3 align-text="center">HMSI KONEKSI</h3>
						</div>
						<div class="col-lg-2">
							<p>Tahun Kepengurusan 2018 - 2019</p>
						</div>
					</div>
		     </div>
				 	</div>
				  <main role="main">
						<div id="font">
						<section class="jumbotron text-center aa" style="background-color:white">
        			<div class="row">
								<div class="col-lg-7" style="padding-left: 50px">
									<h3 class="jumbotron-heading" style="text-align:left">About HMSI Institut Teknologi Kalimantan.</h3>
									<br/>
									<p style="text-align:left" style="color: lightslategrey">HMSI (Himpunan Mahasiswa Sistem Informasi) terbentuk atas dasar peraturan yang dikeluarkan oleh birokrasi pada tahun 2017 yang mengharuskan adanya ormawa di setiap
										program studi yang ada di Institut Teknologi Kalimantan. HMSI terbentuk pada tanggal 28 April 2017 di Institut Teknologi Kalimantan bertepat di ruang 204 A. Pemilihan tanggal pembentukan HMSI didasarkan pada pelegalan Himpunan Mahasiswa
										 Institut Teknologi Kalimantan pada tanggal yang sama yaitu 28 April 2017.</p>
										 	<form action="/profile/user">
												<button type="submit" class="btn btn-primary" style="float: left">
												 <span class="spinner-grow spinner-grow-sm"></span>
												 Baca Lebih Lanjut
											 </button>
											</form>
								</div>
								<div class="col-lg-1">
										</div>
								<div class="col-lg-4">
									<div class="zoom">
									<br/>
									<br/>
									<img src="/assets/HMSI-1.png">
								</div>
								</div>
        			</div>
      			</section>
						<section class="jumbotron text-center aaaa" style="background-color:ghostwhite" style="color: dodgerblue" style="font-weight:bold">
        			<div class="row">
								<div class="col-lg-1">
										</div>
								<div class="col-lg-4">
									<div class="zoom">
									<img src="/assets/Kalendaaar.png">
									<br/>
									<br/>
										<p>
										 See Upcoming Events on HMSI ITK
									 </p>

								</div>
							</div>
								<div class="col-lg-3">
										</div>
								<div class="col-lg-3" style="padding-left: 50px">
									<br/>
									<br/>
									<h3 class="jumbotron-heading bungkusin" style="text-align:left" style="font-size:40px" style="font-weight:bold" style="color: dodgerblue">Calendar of <br/>Information System<br/> Activity</h3>
									<br/>
									<form action="/calendar/user">
										<button type="submit" class="btn btn-primary" style="float: left">
										 <span class="spinner-grow spinner-grow-sm"></span>
										 See Upcoming Events
									 </button>
									</form>


								</div>
								<div class="col-lg-1">
										</div>
        			</div>
      			</section>



		<script>
			window.onscroll = function() {myFunction()};

			var navbar = document.getElementById("navbar");
			var sticky = navbar.offsetTop;

			function myFunction() {
			  if (window.pageYOffset >= sticky) {
		    	navbar.classList.add("sticky")
		  	} else {
		    	navbar.classList.remove("sticky");
		  	}
		}
</script>
  <footer>
	<div id="bungkuus">
		<div class="wrapper">
    <div class="row">
			<div class="col-lg-3">
			</div>
			<div class="col-lg-6 ">
				<br/>
				<h2>HMSI INSTITUT TEKNOLOGI KALIMANTAN </h2>
				<br/>
				<a href="https://www.instagram.com/hmsi_itk/" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="https://www.instagram.com/hmsi_itk/" class="fa fa-instagram"></a>
				<a href="https://www.youtube.com/channel/UCMsPJUusJn39I8R7Eny_b5g" class="fa fa-youtube"></a>
				<a href="#" class="fa fa-line"></a>
			</div>
			<div class="col-lg-3">
			</div>
    </div>
		<div class="row">
			<div class="col-lg-4" style="padding-left: 3em">
				<br/>
				<p style="font-weight: bold">CONTACT</p>

				<a class="fa fa-map text-info ml-2"></a>
				<a>Jl. Soekarno-Hatta Km. 15, Karang Joang, Balikpapan, Kalimantan Timur, 76127</a><br/>
				<br/>
				<a class="fa fa-envelope text-info ml-2"></a>
				<a>hmsi@itk.ac.id</a><br/>
				<br/>
				<a class="fa fa-phone text-info ml-2"></a>
				<a>0548 5512 5134</a><br/>
				<br/>
			</div>
			<div class="col-lg-4" style="text-align: justify">
				<br/>
				<p style="font-weight: bold">ABOUT HMSI</p>
				<a>HMSI (Himpunan Mahasiswa Sistem Informasi) terbentuk atas dasar peraturan yang dikeluarkan oleh birokrasi pada tahun 2017 yang mengharuskan adanya ormawa di setiap
					program studi yang ada di Institut Teknologi Kalimantan.</a>
			</div>
			<div class="col-lg-4">
				<br/>
				<p style="font-weight: bold">FIND US</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d18975.066910362242!2d116.86235247867259!3d-1.1487465044255867!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8489d5309f45c0db!2sInstitut+Teknologi+Kalimantan!5e0!3m2!1sid!2sid!4v1557759970176!5m2!1sid!2sid" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

		</div>
		</div>
		<hr/>
		<p style="text-align:center">&copy; <a href="http://websitehmsi.com/">websitehmsi.com</a>. 2018 - 2019
		</p>

	</div>
		  </footer>

	</div>
</body>

</html>
