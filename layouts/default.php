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
      <div>
        <?php echo $content?>
      </div>
    </div>
  </b></div>
  </body>
</html>
