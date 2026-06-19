<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    
    <div class = "card">

       <div class = "seccard">
            <div class = "text">

                <?php
                    $student_name = $_POST['student_name'];
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];

                    echo " สูง : " . $num1 . " ซม. " . "<br>" ; 

                    echo "<br>";
                    
                    echo " ฐาน : " . $num2 . " ซม. " . "<br>" ;

                    echo "<br>";

                    $total = 1/2 * $num1 * $num2;
                    echo "พื้นที่ : " . $total . " ตร.ซม. " . "<br>";
            

                ?>

            </div>
       </div>

        <div class = "back">
            <a href="index.php">กลับหน้าแรก</a>
        </div>

    </div>

</body>
</html>