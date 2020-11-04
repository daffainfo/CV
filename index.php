<!DOCTYPE html>
<html>
<head>
	<title>CV Daffa</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Membuat CV menggunakan HTML dan CSS dari awal-->
	<style type="text/css">
		body {
			margin: 0;
		}
		nav ul {
			list-style: none;
			overflow: hidden;
			margin: 0;
			padding: 0;
			background-color: white;
		}
		nav li {
			float: left;
		}
		nav li a {
			display: block;
			color: #7d7d7d;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		nav li a:active {
  			color: #00b7c4;
		}

		.is-1 {
			font-size: 3em;
		}

		.is-2 {
			font-size: 2.6em;
		}

		.is-3 {
			font-size: 2.2em;
		}

		.is-4 {
			font-size: 1.8em;
		}

		.is-5 {
			font-size: 1.4em;
		}

		.center {
			text-align: center;
		}

		.clearfix {
  			overflow: auto;
		}

		.border {
			border-bottom: 5px solid black;
		}

		.home {
			padding: 10px 40px;
			background-color: #40ffd2;
		}

		.home h1 {
			margin-bottom: -25px;
		}

		.about {
			background-color: #a2fef2;
		}

		.about img{
			float: right;
			margin: 0px 50px 50px 50px;
		}

		.about p {
			word-wrap: break-word;
			margin-left: 30px;
		}

		.education {
			background-color: #00b3ff;
		}

		.education ul {
			margin-left: 100px;
			margin-bottom: 50px;
		}

		.work {
			background-color: #c8bfff;
		}

		.work img{
			margin: 0px 50px 10px 50px;
			float: left;
		}

		.work p{
			word-wrap: break-word;
		}

		.organization {
			background-color: #dddddd;
		}

		.organization img {
			margin: 0px 50px 10px 50px;
			float: left;
		}

		.organization p{
			word-wrap: break-word;
		}

		.marginorg {
			margin-bottom: 200px;
		}

		.skills {
			background-color: #ff82da;
		}

		.skills ul {
			margin-left: 100px;
			margin-bottom: 50px;
		}

		.skills ul li{
			margin-top: 10px;
		}

		.contact {
			background-color: white;
	/*		text-align: center;*/
		}

		.media-social {
        	text-align: center;
        	margin-top: 5px;
        	margin-bottom: 5px;
        }

        .social {
        	font-size: 70px;
        	margin: 10px 10px;
        }
	</style>
</head>
<body>
<nav>
	<ul>
		<li><a href="#home">Home</a></li>
		<li><a href="#about">About</a></li>
		<li><a href="#education">Education</a></li>
		<li><a href="#work">Work Experience</a></li>
		<li><a href="#organization">Organization Experience</a></li>
		<li><a href="#skills">Skills</a></li>
		<li><a href="#contact">Contact</a></li>
	</ul>
</nav>
	<section id="home" class="home">
		<h1 class="is-1">Muhammad Daffa</h1>
		<p class="is-3">Security Enthutiast, especially penetration test</p>
	</section>

	<section id="about" class="about clearfix">
		<h1 class="is-1 center">About Me</h1>
		<img src="https://media-exp1.licdn.com/dms/image/C5603AQExwM7rZkP_MA/profile-displayphoto-shrink_400_400/0?e=1609977600&v=beta&t=R-yMradA7KEUHAAMpJQRSiq4vk9jSjDD0o8KJeZnA4k" height="200" width="200">
		<p class="is-4">Perkenalkan, Nama saya Muhammad Daffa. Domisili Sidoarjo , Jawa Timur. Saya seorang mahasiswa undergraduate S-1 dari Institut Teknologi Sepuluh Nopember jurusan teknik informatika. Saya tertarik di bidang cybersecurity, khususnya di bidang penetration testing. Dan sekarang mencoba mengembangkan diri ke depannya dengan belajar bahasa pemrograman yaitu PHP dan MySQL. Saya senang bertemu orang baru, mendapatkan pengalaman baru, serta sanggup bekerja baik secara individu maupun kelompok.
</p>
	</section>

	<section id="education" class="education clearfix">
		<h1 class="is-1 center">Education</h1>
		<ul>
			<li class="is-4">SMA Negeri 1 Sidoarjo (2016 - 2019)</li>
			<p class="is-5">Jurusan MIPA</p>
			<li class="is-4">Institut Teknologi Sepuluh Nopember (2019 - Sekarang)</li>
			<p class="is-5">S1 - Teknik Informatika</p>
		</ul>
	</section>

	<section id="work" class="work clearfix">
		<h1 class="is-1 center">Work Experience</h1>
		<img src="https://admindt.net//img/logodt1.png" height="300" width="300">
		<p class="is-4">Mengambil proyek bersama dosen program SMA Double Track Support System sebagai penetration tester</p>
		<p class="is-4">(Juni 2020 - Sekarang)</p>
		<p class="is-4 marginorg">Deskripsi pekerjaan: Mencari kelemahan pada website-website yang ada program SMA DoubleTrack dan membuat hasil laporannya.</p>
		<div class="border"></div>
		<img src="https://pbs.twimg.com/profile_images/1270957944423641089/zmYeKWnK_400x400.jpg" width="300" height="300">
		<p class="is-4">Magang kerja di Direktorat Pengembangan Teknologi dan Sistem Informasi (DPTSI) ITS sebagai penetration tester</p>
		<p class="is-4">(Juni 2020 - Sekarang)</p>
		<p class="is-4 marginorg">Deskripsi pekerjaan: Mencari kelemahan pada domain dan subdomain ITS dan membuat laporan setiap 2 minggu.</p>
		<div class="border"></div>
		<img src="https://scontent-sin6-2.xx.fbcdn.net/v/t1.0-9/84878228_2289128368051744_3870605491860144128_n.jpg?_nc_cat=102&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeFw11-EQ8g7SvRutHTAZCG2K5LRh74BxdErktGHvgHF0UavXbxjNCNYrmIahibLK1x4GFqWIdf9MiST6UvRUjfD&_nc_ohc=8BLxgFX1G5gAX_ulYAQ&_nc_ht=scontent-sin6-2.xx&oh=3e25413a465c2d4c8fdade9f06a4033f&oe=5FC75515" width="300" height="300">
		<p class="is-4">Full-time di unit.ventures sebagai penetration tester</p>
		<p class="is-4">(Juni 2020 - November 2020)</p>
		<p class="is-4 marginorg">Deskripsi pekerjaan: Mencari kelemahan pada website-website unit.ventures</p>
	</section>

	<section id="organization" class="organization clearfix">
		<h1 class="is-1 center">Organization Experience</h1>
		<img src="http://salamits.com/wp-content/uploads/2019/10/logo_panjang.png" height="200" width="400">
		<p class="is-4">Mengambil proyek bersama dosen program SMA Double Track Support System sebagai penetration tester</p>
		<p class="is-4">(April 2020 - Sekarang)</p>
		<p class="is-4">Deskripsi pekerjaan: Membuat website SALAMITS menggunakan CMS WordPress dan menggunakan plugin elementor untuk membuat desain website</p>
	</section>
	<section id="skills" class="skills clearfix">
		<h1 class="is-1 center">Skills</h1>
		<ul>
			<li class="is-4">Penetration Test</li>
			<li class="is-4">HTML</li>
			<li class="is-4">CSS</li>
			<li class="is-4">PHP</li>
			<li class="is-4">MySQL</li>
		</ul>
	</section>
	<section id="contact" class="contact">
		<h1 class="is-1 center">Contact Me!</h1>
		<div class="media-social">    
			<a href="mailto:md15ev@gmail.com" class="fa fa-envelope fa-fw social"></a>
			<a href="https://github.com/daffainfo/" class="fa fa-github fa-fw social"></a>
			<a href="#" class="fa fa-facebook fa-fw social"></a>
			<a href="https://twitter.com/daffainfo" class="fa fa-twitter fa-fw social"></a>
			<a href="https://www.linkedin.com/in/muhammaddaffa" class="fa fa-linkedin fa-fw social"></a>
		</div>	
	</section>
</body>
</html>