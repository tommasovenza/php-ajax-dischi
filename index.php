<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Lato google font -->
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title>Document</title>
</head>

<body>

    <header>
        <img src="img/logo.png" alt="">
    </header>


    <!-- contenitore dischi -->
    <div class="cds-container">

        <!-- singolo disco -->
        <div class="disco">

        </div>

    </div>

    <!-- template sorgente di handlebars -->
    <script id="entry-template" type="text/x-handlebars-template">

                <img src=" {{ poster }} " alt="immagine-disco">
                <h3> {{ title }} </h3>
                <span> {{ author }} </span>
                <span> {{ year }}</span>

    </script>

    <script src="src/app.js"></script>

</body>

</html>