<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<?php
if($_SESSION['logged_in']!=TRUE){
	
	header('Location: welcome/logout');
} 
?>
<html>
  <head>
  <base href="<?php echo base_url()?>">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
		<link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href="vendors/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
		<link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
       <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">
	   <link href="vendors/datepicker.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	 <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
     <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
      <script src="vendors/chosen.jquery.min.js"></script>
	 
	  <script src="vendors/bootstrap-datepicker.js"></script>
	  <script src="assets/scripts.js"></script>
  </head>
  