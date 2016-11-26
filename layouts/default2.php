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
        <div class="container-fluid">
	  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Tutorial</h1>
          </div>
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
          <li class="active"><a href="#">something <span class="sr-only">(current)</span></a></li>
          <li><a href="#">something</a></li>
          <li><a href="#">something</a></li>
          <li><a href="#">something</a></li>
        </ul>
        </div>
          <?php echo $content?>
	    </div>
      </div>
    </div>
  </body>
</html>
