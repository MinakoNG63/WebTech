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
<div class="container">

        <form id="myForm" action="show.php" method="post">
            <div class="form-group">
                <label for='NumID'>หมายเลขบัตรประชาชน:</label>
                <input class="form-control" type="ID" id="NumID" name="NumID" value="<?php $numid = 123456789123; echo $numid;?>"/>
            </div>

            <div class="form-group">
                <label for='FirstName'>ชื่อ:</label>
                <input class="form-control" type="text" id="FirstName" name="FirstName" value="<?php $fname = "Ramita"; echo $fname;?>"/>
            </div>

            <div class="form-group">
                <label for='LastName'>นามสกุล:</label>
                <input class="form-control" type="text" id="LastName" name="LastName" value="<?php $lname = "Sri"; echo $lname;?>"/>
            </div>

            <div class="form-group">
                <label for='Address'>ที่อยู่</label>
                <textarea class="form-control" cols="20" rows="2" id="Address" name="Address"><?php $address = "46 xxx"; echo $address;?></textarea>
            </div>

            <div class="form-group">
                <label for='County'>อำเภอ/เขต:</label>
                <input class="form-control" type="text" id="County" name="County" value="<?php $county = "xxx"; echo $county;?>"/>
            </div>

            <div class="form-group">
                <label for='Country'>จังหวัด:</label>
                <input class="form-control" type="text" id="Country" name="Country" value="<?php $country = "Bangkok"; echo $country;?>"/>
            </div>

            <div class="form-group">
                <label for='Code'>รหัสไปรษณีย์:</label>
                <input class="form-control" type="text" id="Code" name="Code" value="<?php $code = "10101"; echo $code;?>"/>
            </div>

            <div class="form-group">
                <label for='Phone'>เบอร์โทรศัพท์:</label>
                <input class="form-control" type="tel" id="Phone" name="Phone" value="<?php $phone = "090xxxxxxx"; echo $phone;?>"/>
            </div>
            <br>
            <input type="submit" class="btn btn-primary btn-lg btn-block" id="submit" value="แสดงตาราง">
            <br>
        </form>

    </div>
    <div class="container">

    </div>

</body>
</html>