<html>
	<head>
		<title>setor-i</title>
	    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://bootswatch.com/4/slate/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="http://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
	</head>
	<body>
		<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
	      <div class="container">
	      	<div class="navbar-header">
	        	<a href="<?php echo base_url(); ?>" class="navbar-brand">setor-i</a>
	    	</div>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarResponsive">
	          <ul class="navbar-nav">
	          	<li class="nav-item">
	              <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
	            </li>
	            <li class="nav-item dropdown">
	              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Themes <span class="caret"></span></a>
	              <div class="dropdown-menu" aria-labelledby="Sub Menu">
	                <a class="dropdown-item" href="../default/">Default</a>
	                <div class="dropdown-divider"></div>
	                <a class="dropdown-item" href="../cerulean/">Cerulean</a>
	                <a class="dropdown-item" href="../cosmo/">Cosmo</a>
	              </div>
	            </li>
	          </ul>

	          <ul class="nav navbar-nav ml-auto">
	            <li class="nav-item">
	              <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
	            </li>
	          </ul>

	        </div>
	      </div>
	    </div>

	    <div class="container">