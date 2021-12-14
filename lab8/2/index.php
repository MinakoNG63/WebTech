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
    $url = "https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces";
    $response = file_get_contents($url);
    $result = json_decode($response);
    echo "<h1>ข้อมูลวันที่: " . $result[0]->txn_date . "</h1>";
    ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">จังหวัด</th>
                <th scope="col">ผู้ติดเชื้อ</th>
                <th scope="col">เสียชีวิต</th>
                <th scope="col">ยอดผู้ป่วยสะสม</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count = 1;
            foreach ($result as $case) {
                // echo "New case:  $case->new_case <br>";
                // echo "Recovered:  $case->new_recovered <br>";
                // echo "Deaths:  $case->total_death <br>";
                // echo "New deaths:  $case->new_death <br>";
                echo "<tr>
                <td>$count</td>
                <td>$case->province</td>
                <td>$case->new_case</td>
                <td>$case->new_death</td>
                <td>$case->total_case</td>
                </tr>";
                $count ++;
            }
            ?>
        </tbody>
    </table>




</body>

</html>