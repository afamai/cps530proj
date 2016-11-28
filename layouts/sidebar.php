<!DOCTYPE html>
<html>
  <head>
    <?php include '../includes/head.php'; ?>
  </head>
  <body>
    <div class="container">
  	   <header>
  		     <?php include '../includes/header.php'; ?>
  		</header>
      <div class="col-sm-10 col-sm-offset-2"><?php echo $title?></div>
      <div class="col-sm-2">
			  <ul class="nav nav-sidebar">
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
  </body>
</html>
