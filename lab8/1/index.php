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
    <h4>Currency Converter</h4>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div>
            <label>
            <span>From:</span>
            <select name="from">
                <?php
                $url = "http://10.0.15.20/lab8/restapis/currencyrate";
                $response = file_get_contents($url);
                $result = json_decode($response);

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // collect value of input field
                    $from = $_POST['from'];
                    $boxfrom = $_POST['boxfrom'];
                }
                foreach ($result->rates as $key => $value) {
                    if ($from == $key){
                        echo "<option selected>$key</option>";
                    }else{
                        echo "<option>$key</option>";
                    }
                }
                ?>
            </select>
            <input type="number" name="boxfrom" value="<?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $from = $_POST['from'];
                $boxfrom = $_POST['boxfrom'];
                $to = $_POST['to'];
                if (empty($boxfrom)) {
                    echo "";
                } else {
                    echo $boxfrom;
                }
            }else{
                echo "error";
            }
            ?>">
        </label>
        </div>
        <div>
            <label form-group>
            <span>To:</span>
            <select name="to">
                <?php
                foreach ($result->rates as $key => $value) {
                    if ($to == $key){
                        echo "<option selected>$key</option>";
                    }else{
                        echo "<option>$key</option>";
                    }
                }
                ?>
            </select>
            <input type="number" name="boxto" disabled value="<?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $from = $_POST['from'];
                $boxfrom = $_POST['boxfrom'];
                $to = $_POST['to'];
                if (empty($boxfrom)) {
                    echo "";
                } else {
                    foreach ($result->rates as $key => $value) {
                        if ($from == $key){
                            $fromvalue = $value;
                        }
                        if ($to == $key){
                            $tovalue = $value;
                        }
                    }
                    $number = $boxfrom/$fromvalue*$tovalue;
                    echo number_format($number, 2, '.', '');
                }
            }
            ?>">
        </label>
        </div>
        <button type="submit">Convert</button>
    </form>



</body>

</html>