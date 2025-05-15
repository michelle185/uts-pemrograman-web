<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?= base_url('assets/img/favicon.png') ?>">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="<?= base_url('assets/css/all.min.css') ?>">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.css') ?>">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">
	<!-- animate css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">
	<!-- mean menu css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/meanmenu.min.css') ?>">
	<!-- main style -->
	<link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
	<!-- responsive -->
	<link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
    <?php $this->load->view('layouts/navbar'); ?>

	<?= isset($content) ? $content : '' ?>

	<?php $this->load->view('layouts/footer'); ?>
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="<?= base_url('assets/js/jquery-1.11.3.min.js') ?>"></script>
	<!-- bootstrap -->
	<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
	<!-- count down -->
	<script src="<?= base_url('assets/js/jquery.countdown.js') ?>"></script>
	<!-- isotope -->
	<script src="<?= base_url('assets/js/jquery.isotope-3.0.6.min.js') ?>"></script>
	<!-- waypoints -->
	<script src="<?= base_url('assets/js/waypoints.js') ?>"></script>
	<!-- owl carousel -->
	<script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
	<!-- magnific popup -->
	<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
	<!-- mean menu -->
	<script src="<?= base_url('assets/js/jquery.meanmenu.min.js') ?>"></script>
	<!-- sticker js -->
	<script src="<?= base_url('assets/js/sticker.js') ?>"></script>
	<!-- main js -->
	<script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>
</html>
