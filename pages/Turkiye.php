<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turkiye</title>
</head>
<body>

    <main>

        <section id="LandDescription">
            <h1> Cappadocia</h1>
            <?php
            $pdo = PDO();
            foreach($d as $pdo){
                if($d["name"] === $_GET["page"]){
                    echo "<img src=images/{$d["image"]}>";
                    echo "<p> {$d["description"]} </p>";
                }
                break;
            }
            $page = $_GET['page'];
            if($page == 'Turkiye'){

                 
            }
            ?>
            <!-- <p>The surreal, swooping rock valleys of Cappadocia are every photographer's dream.
            Cliff ridges and hill crests are home to rippling panoramas of wave-like rock or wacky-shaped pinnacles that have been formed by millennia of wind and water action.<br>
            And if you don't feel like hiking for the views, this is one of the world's top destinations to take a hot-air balloon ride.<br>
            Nestled in this unique lunar-like landscape are the frescoed rock-cut churches and cave-cut architecture of the Byzantine Era, when this area was home to monastic Christian communities.<br>
            In particular, the multiple cave-churches of Göreme Open-Air Museum and Ihlara Valley are home to some of the best examples of surviving mid-Byzantine-era religious art in the world.<br>
            Cappadocia's villages, half hewn into the hillsides, where travelers base themselves to explore the surrounding countryside, are also an attraction in themselves, with their boutique hotels that allow you to bed down in a cave with full contemporary comforts.<br></p> -->
        </section>
        
        
    </main>

    
</body>
</html>