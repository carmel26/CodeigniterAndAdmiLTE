<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tutorial On codeigniter</title>

  <!-- Google Font: Source Sans Pro -->

    <link rel="stylesheet" href="<?= base_url('assets/AdminLTE-3.2.0/dist/css/adminlte.min.css') ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 
	<style type="text/css">

		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }
	
		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper"> 

<!-- Include header -->
<?php $this->load->view('templates/header'); ?>

<!-- Include sidebar -->
<?php $this->load->view('templates/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->


	<!-- Main content -->
	<div class="content">
		<div><?=$msg?></div>
		<div class="container-fluid">
			<!-- Main content area -->
			<?php $this->load->view($content_view, $data); ?>
		</div>
	</div>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Include footer -->
<?php $this->load->view('templates/footer'); ?>
</div>
   
</body>
</html>
