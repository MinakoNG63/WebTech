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

        .pic {
            padding: 20px;
        }

        .text {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            /* number of lines to show */
            -webkit-box-orient: vertical;
        }
        .refresh{
            width: 30px;
        }
        .card{
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $url = "https://www.themealdb.com/api/json/v1/1/random.php";
    $response = file_get_contents($url);
    $result = json_decode($response);
    ?>
    <div class="card" style="width: 25rem;">
        <div class="pic">
            <img class="card-img-top" src="<?php echo $result->meals[0]->strMealThumb; ?>" alt="Card image cap">
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $result->meals[0]->strMeal; ?></h5>
            <hr>
            <p class="card-text text"><?php echo $result->meals[0]->strInstructions; ?></p>
            <a href="index.php"><img class="refresh" src="https://cdn-icons-png.flaticon.com/512/179/179407.png"></a>
            <a type="submit" target="_" class="btn btn-info" href="<?php echo $result->meals[0]->strYoutube;?>">Learn more</a>
        </div>

    </div>
</body>

</html>