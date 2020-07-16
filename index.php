<?php 

include 'database.php';

?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div class="disco">

    <!-- scrivo il ciclo foreach -->
        <?php foreach ($database as $value) { ?>
            <img src="<?php echo $value['poster'] ?>" alt="">
            <h3> <?php echo $value['title']; ?> </h3>
            <span> <?php echo $value['author']; ?></span>
            <span> <?php echo $value['year']; ?></span>
        <?php } ?>

    </div>



</body>

</html>