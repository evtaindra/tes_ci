<!doctype html>
<html>
    <head>
        <title>
            Evta Indra
        </title>
        <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?=base_url()?>public/css/style.css" />
        
        <script type="text/javascript" src="<?=base_url()?>public/js/jquery.js" ></script>
        <script type="text/javascript" src="<?=base_url()?>public/js/bootstrap.js" ></script>
    </head>
    <body> 
            
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Evta Indra</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Dashboard</a></li>
            <li><a href="#">User</a></li>
            <li><a href="<?=  base_url('dashboard/logout'); ?>">Logout</a></li>               
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>

    <div class="container">
