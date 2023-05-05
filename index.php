<?php

  function PDO(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'database_php';

    try{
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      echo "Connection failed:". $e->getMessage();
    }

    return $conn;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Lab 2 - Includes en require</title>
</head>
<body>
  <!-- laad hier via php je header in (vanuit je includes map) -->
  <header>
    <?php
      include("includes/header.php");
    ?>
  </header>

	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  <?php
    $pdo = PDO();
    $sql = "SELECT * FROM onderwerpen";
    $data = $pdo->query($sql);
    
    foreach($data as $d){
      if($_GET["page"] === $d["name"]){
        $page = $d["name"];
        $display = 'pages/'.$page.'.php';
        include $display;
        break;
      }
    }
    if($_GET["page"] == "Home"){
      
      echo "<h1> Welcome to Land Information</h1><br>";
      echo "<img src=images/Worldmap.png>";
    }
    
  ?>
	
	<!-- laad hier via php je footer in (vanuit je includes map)-->
  <section id="footer">
    <?php
      include("includes/footer.php");
    ?>
  </section>
  
</body>
</html>
