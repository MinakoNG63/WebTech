<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>map</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,500&display=swap" rel="stylesheet">


    <style>
        body{
            font-family: 'Lora', serif;
        }
    </style>
</head>

<body>
    <!-- 63070240 รมิตา ศรีภูธร -->
    <?php
    $url = "http://161.246.38.86/final-restapi/places";
    $response = file_get_contents($url);
    $result = json_decode($response, true);
    // foreach ($result['places'] as $key) {
    //     echo $key['name'] . "<br>";
    // }
    ?>
    <form>

        <div class="input-group mb-3">
        <label>Choose a tourist attraction: </label>
            <select class="custom-select" id="post" name="post">
                <?php
                foreach ($result['places'] as $key) {
                    echo "<option>" . $key['name'] . "</option>";
                }
                ?>
            </select>
            <button onclick="fn1()" type="button" class="btn btn-outline-secondary">แสดงแผนที่</button>
        </div>
    </form>
    <iframe id="map"
        width="100%"
        height="500"
        src="https://maps.google.com/maps?q=&t=&z=15&ie=UTF8&iwloc=&output=embed"
        frameborder="0"
        allowfullscreen>
    </iframe>

    <script>
         function fn1() {
            var place = document.getElementById('post').value;
            document.getElementById('map').src = 'https://maps.google.com/maps?q=' + place + '&t=&z=15&ie=UTF8&iwloc=&output=embed';
        }
    </script>


</body>

</html>