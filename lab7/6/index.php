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
        img{
            width: 100%;
            margin: 5px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
        <?php
        $pic = array("https://img.playbuzz.com/image/upload/ar_1.5,c_pad,f_jpg,b_auto/cdn/a06edd4f-9379-4d95-84d4-46a137c58587/506c12bc-8611-4ca1-86c2-bead4ad150e8.jpg",
                    "https://tse1.mm.bing.net/th?id=OIP.M3erNo1p6DnsqyXlKcOlzAHaE8&pid=Api&P=0&w=265&h=178",
                    "https://wonkywonderful.com/wp-content/uploads/2020/10/smores-fudge-recipe-3.jpg",
                    "http://nourishedkitchen.com/wp-content/uploads/2016/12/IMG_2182.jpg",
                    "https://tse2.mm.bing.net/th?id=OIP.PjMxZYTO6S8cZICXXIRMjAHaLJ&pid=Api&P=0&w=300&h=300",
                    "https://tse3.mm.bing.net/th?id=OIP.ehmvMUNhDhwD5kKZ9PII5AHaLH&pid=Api&P=0&w=300&h=300",
                    "https://www.teacher-chef.com/wp-content/uploads/2012/01/12-23-chocolate-dipped-citrus1.jpg",
                    "https://freecaloriechart.uk/wp-content/uploads/2018/06/caloriesinchocolatecake.jpg",
                    "https://tse2.mm.bing.net/th?id=OIP.PjMxZYTO6S8cZICXXIRMjAHaLJ&pid=Api&P=0&w=300&h=300",
                    "https://www.eazypeazymealz.com/wp-content/uploads/2020/02/chocolate-babka-8.jpg",
                    "https://wonkywonderful.com/wp-content/uploads/2020/11/white-chocolate-fudge-recipe-4.jpg",
                    "https://thestayathomechef.com/wp-content/uploads/2019/12/Chocolate-Sugar-Cookies-5.jpg",
                    "https://img.playbuzz.com/image/upload/ar_1.5,c_pad,f_jpg,b_auto/cdn/a06edd4f-9379-4d95-84d4-46a137c58587/506c12bc-8611-4ca1-86c2-bead4ad150e8.jpg",
                    "https://tse1.mm.bing.net/th?id=OIP.M3erNo1p6DnsqyXlKcOlzAHaE8&pid=Api&P=0&w=265&h=178",
                    "https://wonkywonderful.com/wp-content/uploads/2020/10/smores-fudge-recipe-3.jpg",
                    "http://nourishedkitchen.com/wp-content/uploads/2016/12/IMG_2182.jpg",
                    "https://tse2.mm.bing.net/th?id=OIP.PjMxZYTO6S8cZICXXIRMjAHaLJ&pid=Api&P=0&w=300&h=300",
                    "https://tse3.mm.bing.net/th?id=OIP.ehmvMUNhDhwD5kKZ9PII5AHaLH&pid=Api&P=0&w=300&h=300",
                    "https://www.teacher-chef.com/wp-content/uploads/2012/01/12-23-chocolate-dipped-citrus1.jpg",
                    "https://freecaloriechart.uk/wp-content/uploads/2018/06/caloriesinchocolatecake.jpg"
                    );
        ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                        echo "<a href=" . $pic[$i] . " target=\"_\"><img src=" . $pic[$i] . "></a>";
                    }
                    ?>
                </div>
                <div class="col">
                    <?php
                    for ($i = 5; $i < 10; $i++) {
                        echo "<a href=" . $pic[$i] . " target=\"_\"><img src=" . $pic[$i] . "></a>";
                    }
                    ?>
                </div>
                <div class="col">
                    <?php
                    for ($i = 10; $i < 15; $i++) {
                        echo "<a href=" . $pic[$i] . " target=\"_\"><img src=" . $pic[$i] . "></a>";
                    }
                    ?>
                </div>
                <div class="col">
                    <?php
                    for ($i = 15; $i < 20; $i++) {
                        echo "<a href=" . $pic[$i] . " target=\"_\"><img src=" . $pic[$i] . "></a>";
                    }
                    ?>
                </div>

            </div>


        </div>
</body>
</html>