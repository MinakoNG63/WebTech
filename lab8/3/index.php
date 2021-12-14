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
    <div class="container">
        <?php
        $url = "http://10.0.15.20/lab8/restapis/movies90";
        $response = file_get_contents($url);
        $result = json_decode($response);

        foreach ($result as $case) {
            echo "<div class=\"card border-success mb-3\" style=\"max-width: 18rem;\">";
            echo " <div class=\"card-header bg-transparent border-success\">" . $case->title . "</div>";
            echo "<div class=\"card-body text-success\">";
            echo "<h5 class=\"card-title\"><span class=\"badge badge-pill badge-success\">Cast</span></h5>";
            echo "<p class=\"card-text\">";
            foreach ($case->cast as $actor) {
                echo "- " . $actor . "<br>";
            }
            echo "</p>";
            echo "<h5 class=\"card-title\"><span class=\"badge badge-pill badge-primary\">Genres</span></h5>";
            echo "<p class=\"card-text\">";
            foreach ($case->genres as $type) {
                echo "- " . $type . "<br>";
            }
            echo "</p></div>";
            echo "</div>";
        }
        ?>

    </div>
</body>

</html>