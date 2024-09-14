<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
    <title>Ruang | Rotonengen</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png" />
    <link rel="shortcut icon" type="image/png" sizes="48x48" href="images/favicons/favicon.ico" />
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="images/favicons/site.webmanifest" />

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- set the page title -->
	<title>Scavvios | One Page Parallax HTML5 Template</title>
	<!-- inlcude google poppins font cdn link -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- include theme color setting stylesheet -->
	<link rel="stylesheet" href="css/colors.css">
	<!-- include the site responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- phStickyWrap -->
		<div class="phStickyWrap">
			<!-- pageHeader -->
			<header class="navbar">
					<div class="navbar-container">
							<div class="logo">
									<a href="/">
										<img src="images/favicons/ruangroto.png" class="img-fluid" alt="scavvios">
									</a>
							</div>
							<input type="checkbox" id="menu-toggle" class="menu-toggle">
							<label for="menu-toggle" class="menu-icon">
									<span class="burger-icon"></span>
							</label>
							<nav class="nav-menu">
									<ul>
											<li><a href="#hero" class="active">BERANDA</a></li>
											<li><a href="#about">TENTANG</a></li>
											<li><a href="#daftar">FORM</a></li>
									</ul>
							</nav>
					</div>
			</header>
		</div>
		<main>
			<!-- introBlock -->
			<article class="introBlock w-100 d-flex" >
				<!-- vAlign -->
				<div class="vAlign d-flex w-100 align-items-sm-center" >
					<!-- xAlign -->
					<div class="xAlign w-100 pt-15 pt-md-28 pb-md-14 pt-xl-41 pb-xl-19" id="hero">
						<div class="container">
							<div class="row">
								<div class="col-12 col-sm-8 col-md-6">
									<!-- ibCaptionHolder -->
									<div class="position-relative ibCaptionHolder">
										{{-- <h1 class="text-capitalize mb-3 mb-md-5">
											<!-- headingTitle -->
											<span class="d-block wow fadeInLeft" data-wow-delay="2.5s">Sudirman</span>
										</h1> --}}
										<p class="wow fadeInLeft" data-wow-delay="2.8s">
											Selamat datang di ruangroto, <br>kelas terampil digital</p>
										<span class="d-block wow fadeInLeft" data-wow-delay="2.5s">Sudirman</span>

									</div>
								</div>
								<div class="col-12 col-md-6 position-static">
									<!-- ibImgHolder -->
									<div class="ibImgHolder wow fadeInRight" data-wow-delay="3.6s">
										<img src="images/Dirman.png" class="img-fluid" alt="image description">
									</div>
									<!-- ibSocialNetworks -->
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- vline1 -->
				<span class="vline wow vline1 position-absolute d-none d-md-block"></span>
				<!-- vline2 -->
				<span class="vline wow vline2 position-absolute d-none d-md-block"></span>
				<!-- vline3 -->
				<span class="vline wow vline3 position-absolute d-none d-md-block"></span>
				<!-- vline4 -->
				<span class="vline wow vline4 position-absolute d-none d-md-block"></span>
				<!-- edot1 -->
				<span class="edot edot1 edotsizelg position-absolute rounded-circle bg-warning wow bounceIn"
					data-wow-delay="4.3s"></span>
				<!-- edot2 -->
				<span class="edot edot2 position-absolute rounded-circle bg-warning wow bounceIn" data-wow-delay="4.7s"></span>
				<!-- edot3 -->
				<span class="edot edot3 position-absolute rounded-circle wow bounceIn" data-wow-delay="4.9s"></span>
				<!-- edot4 -->
				<span class="edot edot4 position-absolute rounded-circle bg-warning wow bounceIn" data-wow-delay="5s"></span>
				</article>
				<!-- ibUpperWrap -->
				<div class="ibUpperWrap">
					<!-- aboutBlock -->
					<article class="aboutBlock bg-secondary pt-7 pb-7 pt-md-13 pb-md-13 pt-lg-18 pb-lg-18 pt-xl-23 pb-xl-24">
						<div id="about" class="mt-n43 pt-43">
							<div class="container">
								<div class="row">
									<div class="col-12 col-md-6 order-md-2">
										<header class="mb-lg-5">
											<h2 class="text-capitalize mb-4 mb-lg-7">
												<!-- headingTitle -->
												<strong
													class="fwMedium d-block text-white position-relative headingTitle text-capitalize mb-3 wow fadeInRight">
													Tentang
												</strong>
												<span class="d-block wow fadeInRight" data-wow-delay="0.7s">
													RuangRoto
												</span>
											</h2>
										</header>
										<p class="wow fadeInRight" data-wow-delay="0.7s">
											Ruang Roto adalah platform pendidikan kreatif
											yang menyediakan program pembelajaran
											berbasis proyek untuk siswa yang ingin
											mengembangkan keterampilan praktis
											di bidang digital.
										</p>
										<!-- btn -->
										<a href="https://www.rotonengen.co.id/ruang-roto"
											class="btn btnThemeOutline position-relative btnMinSmall mt-3 mt-lg-5 wow bounceIn" data-wow-delay="2.3s"><span class="d-block btnText">Informasi Lengkap</span></a>
									</div>
									<div class="col-12 col-md-6 order-md-1">
										<!-- abFeaturesWrap -->
										<div class="abFeaturesWrap mx-auto mx-md-0 position-relative">
											<!-- abFeatureList -->
											<ul
												class="list-unstyled abFeatureList text-center d-flex justify-content-center justify-content-sm-start flex-wrap pt-12 mb-n8 mb-sm-3">
												<li>
													<!-- abflColumn -->
													<div
														class="abflColumn rounded-circle bg-dark text-white d-flex align-items-center justify-content-center position-relative mx-auto mx-sm-0 wow bounceIn">
														<!-- abflcHeading -->
														<h4 class="abflcHeading text-white fwMedium">Kelas Office Basic</h4>
													</div>
												</li>
												<li>
													<!-- abflColumn -->
													<div
														class="abflColumn rounded-circle bg-dark text-white d-flex align-items-center justify-content-center position-relative mx-auto mx-sm-0 wow bounceIn"
														data-wow-delay="1.3s">
														<!-- abflcHeading -->
														<h4 class="abflcHeading text-white fwMedium">Kelas Desain Grafis</h4>
													</div>
												</li>
												<li>
													<!-- abflColumn -->
													<div
														class="abflColumn rounded-circle bg-dark text-white d-flex align-items-center justify-content-center position-relative mx-auto mx-sm-0 wow bounceIn"
														data-wow-delay="1.7s">
														<!-- abflcHeading -->
														<h4 class="abflcHeading text-white fwMedium">Kelas Desain Web</h4>
													</div>
												</li>
												<li>
													<!-- abflColumn -->
													<div
														class="abflColumn rounded-circle bg-dark text-white d-flex align-items-center justify-content-center position-relative mx-auto mx-sm-0 wow bounceIn"
														data-wow-delay="1.9s">
														<!-- abflcHeading -->
														<h4 class="abflcHeading text-white fwMedium">Kelas Digital Marketing</h4>
													</div>
												</li>
											</ul>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
					<!-- ftAreaWrap -->
					<div class="ftAreaWrap position-relative">
						<!-- footerAside -->
						<aside class="footerAside pt-6 pb-6 pt-md-10 pb-md-8 pt-lg-16 pb-lg-13 pt-xl-24 pb-xl-18 wow fadeIn">
							<div id="daftar" class="mt-n43 pt-43">
								<div class="container">
									<div class="row">
										<div class="col-12 col-md-6 col-lg-5 col-xl-4">
											<!-- extraWrap -->
											<div class="extraWrap pr-lg-6 pr-xl-12 mb-5 mb-md-0">
												<!-- ftLogo -->
												<div class="ftLogo mb-7 mb-lg-12">
													<a href="#">
														<img src="images/favicons/ruangroto.png" class="img-fluid" alt="scavvios">
													</a>
												</div>
												{{-- <strong class="h2 d-block mb-4">Ruang<span class="text-white">Roto</span></strong> --}}
												<p>
													Jadilah bagian dari kami, mulai belajar dan upgrade diri anda
												</p>
												<!-- textCopyright -->
												<div class="textCopyright pt-7 d-none d-md-block">
													<p><strong class="fwMedium">&copy; 
														<a href="https://www.rotonengen.co.id">Rotonengen</a> 2024</strong></p>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-7 col-xl-8">
											<header class="mb-6 mb-lg-10">
												<h2 class="text-capitalize">
													<!-- headingTitle -->
													<strong class="fwMedium d-block text-white position-relative headingTitle text-capitalize mb-3">
														Ikuti Event Kami
													</strong>
													<span class="d-block">Data diri</span>
												</h2>
											</header>
											<!-- messageForm -->
											<div class="messageForm">
												<form id="contactForm" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group position-relative">
                                        <input id="name" name="name" type="text" class="form-control w-100 d-block" required>
                                        <label class="labelAbsolute mb-0 font-weight-normal position-absolute">Nama</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group position-relative">
                                        <input id="email" name="email" type="email" class="form-control w-100 d-block" required>
                                        <label class="labelAbsolute mb-0 font-weight-normal position-absolute">Email</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group position-relative">
                                        <input id="phone" name="phone" type="tel" class="form-control w-100 d-block" required>
                                        <label class="labelAbsolute mb-0 font-weight-normal position-absolute">Nomor Whatsapp</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group position-relative">
                                        <input id="school" name="school" type="text" class="form-control w-100 d-block" required>
                                        <label class="labelAbsolute mb-0 font-weight-normal position-absolute">Asal Sekolah</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group position-relative">
                                        <textarea id="class" name="class" class="form-control w-100 d-block textareaInput" required></textarea>
                                        <label class="labelAbsolute mb-0 font-weight-normal position-absolute">Kelas</label>
                                    </div>
                                </div>
                            </div>
                            <button id="form-submit" type="submit" class="btn btnThemeOutline position-relative btnMinSmall mt-4 mt-lg-8">
																<span class="d-block btnText">Kirim</span>
														</button>
                        </form>

												<!-- Tampilkan Daftar Pengguna di Bawah Form -->
    
											</div>
										</div>
									</div>
								</div>
							</div>
						</aside>
					</div>

					<h2>Daftar Pengguna yang Telah Mengisi Data</h2>
						@if(isset($users) && count($users) > 0)
						<table border="1">
								<thead>
										<tr>
												<th>Nama</th>
												<th>Asal Sekolah</th>
												<th>Kelas</th>
										</tr>
								</thead>
								<tbody>
										@foreach ($users as $user)
												<tr>
														<td>{{ $user->name }}</td>
														<td>{{ $user->school }}</td>
														<td>{{ $user->class }}</td>
												</tr>
										@endforeach
								</tbody>
						</table>
						@else
								<p>Tidak ada data pengguna.</p>
						@endif
						
				</main>
				</div>
				<script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault(); // Mencegah form untuk submit secara default
            $.ajax({
                url: "{{ route('contact.store') }}", // URL endpoint
                type: 'POST',
                data: $(this).serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Tambahkan header CSRF token
                },
                success: function(response) {
                    alert(response.message); // Menampilkan alert sukses
                },
                error: function(xhr) {
                    // Tampilkan pesan error yang lebih spesifik
                    let errors = xhr.responseJSON.errors;
                    let errorMessage = 'Terjadi kesalahan: \n';
                    $.each(errors, function(key, value) {
                        errorMessage += value + '\n';
                    });
                    alert(errorMessage);
                }
            });
        });
    });
</script>

	<!-- include jQuery library -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<!-- include bootstrap popper JavaScript -->
	<script src="js/popper.min.js"></script>
	<!-- include bootstrap JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="js/jqueryCustom.js"></script>
	<!-- include fontAwesome -->
	<script src="https://kit.fontawesome.com/391f644c42.js"></script>
</body>
</html>