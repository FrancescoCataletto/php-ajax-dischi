<?php
require_once __DIR__ . "/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../style/style.css">

    <title>php-dischi</title>
</head>
<body>
    <h1>DISCHI</h1>
    
    <div id="contenitore">
        <ul id="box-disc">
            <?php foreach($db['response'] as $disc): ?>
                <div>
                    <li><img src="<?php echo $disc['poster']?>" alt=""></li>
                    <li><?php echo $disc['title']?></li>
                    <li><?php echo $disc['author']?></li>
                    <li><?php echo $disc['genre']?></li>
                    <li><?php echo $disc['year']?></li>
                </div>
            <?php endforeach;?>
        </ul>
    </div>

</body>
</html>