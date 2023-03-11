<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title> Watch and Relax with PHP</title>
  </head>
  <body>
    <?php echo "<h1>Chill Night in PHP</h1>" ?>
    <form action="./welcome.php" method="post" target="result">
    <!--Area to insert information-->
      <label for="favourite-movie">Favourite Movie</label>
      <input type="text" id="favourite-movie" placeholder="Favourite movie" name="favourite-movie"><br><br>
      <label for="favourite-snack">Favourite Snack</label>
      <input type="text" id="favourite-snack" placeholder="Favourite snack" name="favourite-snack"><br><br>
      <input type="submit" value="Enter">
			<br><br>	
    </form>
    <!--Return result-->
<div id="result"></div>
    <center>
      <iframe id="result" name="result">
				Your favourite movie is <?php echo $_POST["favourite-movie"]; ?> and your favourite snack is <?php echo $_POST["favourite-snack"]; ?>.
      </iframe>
    </center>
  </body>
</html>