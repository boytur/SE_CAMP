<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/hw3.css">
    <title>HW#3</title>
</head>

<body>
    <div class="container">
        <div>
            <?php $multi_x = 2 ?>
            <h1>ตารางสูตรคูณแม่
                <?php echo $multi_x ?>
            </h1>
            <div class="content">
                <?php
                for ($x = 1; $x <= 24; $x++) {
                    $result = $multi_x * $x;
                    echo $multi_x . " x " . $x . " = " . $result . "<br>";
                }
                ?>
            </div>
            <br>
        </div>
    </div>
</body>
</html>