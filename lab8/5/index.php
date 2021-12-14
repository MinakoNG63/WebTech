<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Prompt', sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $url = "http://10.0.15.20/lab8/restapis/10countries";
    $response = file_get_contents($url);
    $result = json_decode($response);
    foreach ($result as $country){
        echo "<div class=\"card\">";
        echo "<div class=\"row\">";
        echo "<div class=\"col-6\">";
        echo "<p><b>Name: ". $country->name ."</b></p>";
        echo "<p>Capital:". $country->capital ."</p>";
        echo "<p>Population:". $country->population ."</p>";
        echo "<p>Region:". $country->population ."</p>";
        echo "<p>Location: ";
        foreach ($country->latlng as $post){
            echo $post." ";
        }
        echo "</p>";
        echo "<p>Borders: ";
        foreach ($country->borders as $near){
            echo $near." ";
        }
        echo "</p>";
        echo "</div>";
        echo "<div class=\"col-6\">";
        echo "<img class=\"card-img-bottom\" src=\"". $country->flag ."\">";
        echo "</div></div></div>";
    }
    ?>

            </div>
        </div>
    </div>
</body>

</html>