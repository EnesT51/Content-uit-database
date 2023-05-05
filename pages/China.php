<!-- jouw HTML met de inhoud over onderwerp 1 komt hier... -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>China</title>
</head>
<body>

    <main>

        <section id="LandDescription">
            <h1>Hunan: Fenghuang</h1>
            <?php

                $pdo = PDO();
                foreach($d as $pdo){
                    if($d["name"] === $_GET["page"]){
                        echo "<img src=images/{$d["image"]}>";
                        echo "<p> {$d["description"]} </p>";
                    }
                    break;
                }
            ?>
        </section>

    </main>
    
</body>
</html>