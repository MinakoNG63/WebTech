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

        td {
            border-bottom: 1px solid black;
        }
    </style>
</head>

<body>

    <form id="showmsg" action="index.php" method="post">
        <label>กรอกูตรคูณ : </label>
        <input type="number" id="txtMsg" name="txtMsg" value="Hello World" />
        <input type="submit" id="submit" value="แสดงตาราง">
    </form>
    <table>
        <?php
        if (!empty($_POST)) {
            $value = $_POST["txtMsg"];
            for ($i = 1; $i < 13; $i++) {
                echo "<tr><td>". $i . " x " . $value . " = " . $i * $value . "</tr></td>";
            }
        }
        ?>
    </table>



</body>

</html>