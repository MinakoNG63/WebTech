<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Prompt', sans-serif;
        }
        table,th,td{
            border: 1px solid black;
            padding: 10px;
            border-spacing:0;
        }
        th {
            background-color: lightpink;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>
</head>
<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>x</th>
                    <?php
                    for ($i = 1; $i < 13; $i++){
                        echo "<th>" . $i. "</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($j = 1; $j < 13; $j++){
                    echo "<tr>";
                    for ($k = 0; $k < 13; $k++){
                        if ($k == 0){
                            echo "<th>" . $j. "</th>";
                        } else {
                            echo "<td>" . $j*$k. "</td>";
                        }
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>

        </table>
    </div>


</body>
</html>