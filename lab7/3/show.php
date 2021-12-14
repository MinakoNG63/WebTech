<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php
        $numid = $_POST['NumID'];
        $fname = $_POST['FirstName'];
        $lname = $_POST['LastName'];
        $address = $_POST['Address'];
        $county = $_POST['County'];
        $country = $_POST['Country'];
        $code = $_POST['Code'];
        $phone = $_POST['Phone'];
    ?>
    <div>
        <p>
            หมายเลขบัตรประชาชน: <?php
            if (iconv_strlen($numid,"UTF-8") < 5){
                echo "<span style=\"color:red\">".$numid;
            }else{
                echo "<span>".$numid;
            }
             ?></span>
        </p>
        <p>
            ชื่อ: <?php
            if (iconv_strlen($fname,"UTF-8") < 5){
                echo "<span style=\"color:red\">".$fname;
            }else{
                echo "<span>".$fname;
            }
            ?></span> นามสกุล: <?php
            if (iconv_strlen($lname,"UTF-8") < 5){
                echo "<span style=\"color:red\">".$lname;
            }else{
                echo "<span>".$lname;
            }
            ?></span>
        </p>
        <p>
            ที่อยู่: <?php
            if (iconv_strlen($address,"UTF-8") < 5){
                echo "<span style=\"color:red\">".$address;
            }else{
                echo "<span>".$address;
            }
            ?></span>
        </p>
        <p>
            อำเภอ/เขต: <?php
            if (iconv_strlen($county,"UTF-8") < 5){
                echo "<span style=\"color:red\">".$county;
            }else{
                echo "<span>".$county;
            }
            ?></span> จังหวัด: <?php
            if (iconv_strlen($country,"UTF-8") < 5){
                echo "<span style=\"color:red\">".$country;
            }else{
                echo "<span>".$country;
            }
            ?></span> รหัสไปรษณีย์: <?php
            if (iconv_strlen($code,"UTF-8") < 5){
                echo "<span style=\"color:red\">".$code;
            }else{
                echo "<span>".$code;
            }
            ?></span>
        </p>
        <p>เบอร์โทรศัพท์: <?php
        if (iconv_strlen($phone,"UTF-8") < 5){
            echo "<span style=\"color:red\">".$phone;
        }else{
            echo "<span>".$phone;
        }
        ?></span></p>
    </div>
</body>
</html>