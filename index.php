<?php 

include 'database.php';

?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Lato google font -->
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>


    <div class="disco">

    <!-- scrivo il ciclo foreach -->
        <?php foreach ($database as $value_singolo_disco) { ?>
            <img src="<?php echo $value_singolo_disco['poster'] ?>" alt="immagine-disco">
            <h3> <?php echo $value_singolo_disco['title']; ?> </h3>
            <span> <?php echo $value_singolo_disco['author']; ?></span>
            <span> <?php echo $value_singolo_disco['year']; ?></span>
        <?php } ?>

    </div>



</body>

</html>