<?php
  require_once("controller.php");
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Homepage</title>
  </head>
  <body>
    <header>
      <h1>Jeks Homepage</h1>
    </header>
    <section>
      <h3>Enter your Name:</h3>
        <form action="index.php" method="get">
          Name: <input type="text" name="name"><br>
          <input type="submit" value="Enter">
        </form>

    </section>

  </body>
</html>
