<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>while</h1>
    <?php 
        echo '1<br>';
        $i = 0;
        while ($i < 3) {
            echo '2<br>';
            $i += 1;
        }
        echo '3<br>';
    ?>
</body>

</html>