<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Product List</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'resources/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'resources/dropify/css/dropify.css'?>">
</head>
<body>
<div class="container">
	<!-- Page Heading -->
    <div class="row">
        <div class="col-6 offset-md-3">
            <form action="<?php echo site_url('upload/do_upload');?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title">
              </div>
    
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" class="dropify" name="filefoto" data-height="300">
                
              </div>

              <button type="submit" class="btn btn-primary">Upload</button>
            </form>
            
        </div>
    </div>
        
</div>


<script type="text/javascript" src="<?php echo base_url().'resources/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'resources/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'resources/dropify/js/dropify.js'?>"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.dropify').dropify();
	});

</script>
</body>
</html>