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

    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php
    $array["numid"] = $_POST['NumID'];
    $array["fname"] = $_POST['FirstName'];
    $array["lname"] = $_POST['LastName'];
    $array["address"] = $_POST['Address'];
    $array["county"] = $_POST['County'];
    $array["country"] = $_POST['Country'];
    $array["code"] = $_POST['Code'];
    $array["phone"] = $_POST['Phone'];
    ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">หมายเลขบัตรประชาชน</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">นามสกุล</th>
                <th scope="col">ที่อยู่</th>
                <th scope="col">อำเภอ/เขต</th>
                <th scope="col">จังหวัด</th>
                <th scope="col">รหัสไปรษณีย์</th>
                <th scope="col">เบอร์โทรศัพท์</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <?php
                if (iconv_strlen($array["numid"], "UTF-8") < 5) {
                    echo "<td style=\"color:red\">" . $array["numid"];
                } else {
                    echo "<td>" . $array["numid"];
                }
                ?>
                <?php
                if (iconv_strlen($array["fname"], "UTF-8") < 5) {
                    echo "<td style=\"color:red\">" . $array["fname"];
                } else {
                    echo "<td>" . $array["fname"];
                }
                ?>
                </td>
                <?php
                if (iconv_strlen($array["lname"], "UTF-8") < 5) {
                    echo "<td style=\"color:red\">" . $array["lname"];
                } else {
                    echo "<td>" . $array["lname"];
                }
                ?>
                </td>
                <?php
                if (iconv_strlen($array["address"], "UTF-8") < 5) {
                    echo "<td style=\"color:red\">" . $array["address"];
                } else {
                    echo "<td>" . $array["address"];
                }
                ?>
                </td>
                <?php
                if (iconv_strlen($array["county"], "UTF-8") < 5) {
                    echo "<td style=\"color:red\">" . $array["county"];
                } else {
                    echo "<td>" . $array["county"];
                }
                ?>
                </td>
                <?php
                if (iconv_strlen($array["country"], "UTF-8") < 5) {
                    echo "<td style=\"color:red\">" . $array["country"];
                } else {
                    echo "<td>" . $array["country"];
                }
                ?>
                </td>
                <?php
                if (iconv_strlen($array["code"], "UTF-8") < 5) {
                    echo "<td style=\"color:red\">" . $array["code"];
                } else {
                    echo "<td>" . $array["code"];
                }
                ?>
                </td>
                <?php
                if (iconv_strlen($array["phone"], "UTF-8") < 5) {
                    echo "<td style=\"color:red\">" . $array["phone"];
                } else {
                    echo "<td>" . $array["phone"];
                }
                ?>
                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>