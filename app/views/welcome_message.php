<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/standard/css/bootstrap.css">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
	<script src="<?php echo base_url(); ?>themes/standard/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/standard/css/main.css">
	</head>
<body>
 <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand">CodeIgniter</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
           
            <li>
              <a href="../help/">Help</a>
            </li>
            <li>
              <a href="http://news.bootswatch.com">Blog</a>
            </li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://builtwithbootstrap.com/" target="_blank">Built With Bootstrap</a></li>
            <li><a href="https://wrapbootstrap.com/?ref=bsw" target="_blank">WrapBootstrap</a></li>
          </ul>

        </div>
      </div>
    </div>
               
	
	 <div class="container">
	 <div class="row">
	  <div class="col-lg-12">
	 <ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Library</a></li>
  <li class="active">Data</li>
</ol>
</div>
	 </div>
	 <div class="row">
	 <div class="col-lg-3">
		<div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Upload</h3>
                </div>
                <ul class="list-group">
                    <a href="#" class="list-group-item">Upload files</a>
                    <a href="http://www.jquery2dotnet.com/2014/01/two-way-scrolling-in-single-div.html" class="list-group-item active">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item">Morbi leo risus</a>
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </ul>
		</div>
		
		<div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Panel Primary</h3>
                </div>
                <ul class="list-group">
                    <a href="#" class="list-group-item">Cras justo odio</a>
                    <a href="http://www.jquery2dotnet.com/2014/01/jquery-export-table-data-into-ms-excel.html" class="list-group-item active">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item">Morbi leo risus</a>
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </ul>
		</div>
            
	 </div>
	 
	 <div class="col-lg-9">
	 <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Upload</h3>
                </div>
	 <?php echo $error;?>

		<?php echo form_open_multipart('welcome/do_upload');?>
		<input type="file" multiple name="userfile[]" size="20" />
		<br /><br />
		<input type="submit" value="upload" />
		</form>
	 </div>
	 </div>
	 
	 
	 
	 
	 </div>
	 </div>
		
		
		
	

</body>
</html>