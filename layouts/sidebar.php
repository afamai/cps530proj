<!DOCTYPE html>
<html>
  <head>
    <?php include '../includes/head.php'; ?>
  </head>
  <style>
  body {
  height: 100%;
  width: 100%;
  }


  .active {
    background-color: #99cc6a; /*current hover colour*/
  }
  .center {
    text-align: center;

  }
  .extend{
    background: rgba(255, 204, 153, 0.6);
  }
  li a{
    color:#009900;
    font-size: 15px;
  }
  h1.serif {
    font-family: "Courier New", Times, serif;
  font-size: 3.8em; font-color: /* 40px/16=2.5em */
  }
  </style>
  <body>
    <div id="horizontal-scroll">
    <div class="container"><b>
  	   <header>
  		     <?php include '../includes/header.php'; ?>
  		</header>
      <div class="col-sm-10 col-sm-offset-2"><?php echo $title?></div>
      <div class="col-sm-2 ">
			  <ul class="nav nav-sidebar extend">
					<li><a href="directorystruct.php">Directory Structure</a></li>
					<li><a href="routes.php">Routing</a></li>
					<li><a href="views.php">Views</a></li>
					<li><a href="bladetemp.php">Blade Template</a></li>
				</ul>
      </div>
		  <div class="col-sm-10">
		    <?php echo $content?>
		  </div>
    </div>
  </b></div>
  </body>
</html>
