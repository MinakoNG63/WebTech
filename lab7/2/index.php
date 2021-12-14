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
            text-align: center;
        }
        table, td, th {
            border: 1px solid black;
        }
        .container{
            display: flex;
            justify-content: center;
        }
    </style>

</head>
<body>
    <h1>63070240 ตุลาคม</h1>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Su</th>
                    <th>Mo</th>
                    <th>Tu</th>
                    <th>We</th>
                    <th>Th</th>
                    <th>Fr</th>
                    <th>Sa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>1</td>
                    <td>2</td>
                </tr>
                <?php
                    $k = 3;
                    for ($j = 0; $j < 4; $j++) {
                        echo "<tr>";
                        for ($i = 0; $i < 7; $i++) {
                            echo "<td>". $k ."</td>";
                            $k++;
                        }
                        echo "</tr>";
                    }
                ?>
                <tr>
                    <td>31</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>


</body>
</html>