<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Geek</title>
    <link href="https://fonts.googleapis.com/css?family=Orbitron|Philosopher:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  </head>
   <body>
    <header>
      <h1 class="logo"><strike>GoGeek ></strike></h1>
      <nav>
        <ul class="nav">
          <li><a href="index.html">Home</a></li>
          <li><a href="employees.php">Employees</a></li>
          <li><a href="fandoms.html">Fandoms</a></li>
          <li><a href="browse.php" class="selected">Browse</a></li>
        </ul>
      </nav>
    </header>
      <main class="browse-list">
        
        <?php
          include "database.php";
          $query = "SELECT * FROM Products";
          $product_bio_query = "SELECT productName, fandom, category, genre, picture, unitPrice FROM Products";
          $result = $db->query($product_bio_query);
  
          $result->data_seek(0);
          while ($row = $result->fetch_assoc()) {
            echo "<figure> <figcaption>" . $row["productName"] . "<br>" . "Fandom: " . $row["fandom"] . "<br>" . "Genre: " . $row["genre"] . "<br>" . "Category: " . $row["category"] . "<br>" . "Price: " . $row["unitPrice"] . "</figcaption>" . "</figure>";
          }
        ?>
      
       <!-- SELECT * FROM products WHERE fandom="Full Metal Alchemist" -->
        
      </main>
    <footer>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="employees.php">Employees</a></li>
          <li><a href="fandoms.html">Fandoms</a></li>
          <li><a href="browse.php">Browse</a></li>
        </ul>
      </nav>
      <p>&copyTeamDreemur, 2017</p>
    </footer>
  </body>
</html>