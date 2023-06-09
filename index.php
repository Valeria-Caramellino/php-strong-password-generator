<?php


include "./function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document New</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body{
            font-family: sans-serif;
        }
    </style>
</head>
<body>

<header>
    <div class="container bg-black text-light">
        <div class="row text-center">
            <div class="col-12 my-4">
                <h1>Genera Pw</h1>
            </div>
            
        </div> 
    </div>
</header>
<main>
    <section class="container">
        <div class="row text-center bg-success text-light">
            <div class="col-12 my-4 ">

                <p class="my-3">La pw generata è: <?php echo generaStringaRandom($lunghezza) ?>  </p>
            </div>
                
            <div class="col-12 my-4">
                <form class="my-3" action="index.php" method="GET">
                    <label for="lunghezza">Inserisci un numero in cifra per decidere la lunghezza della tua pw</label>
                    <input type="number" name="lunghezza" placeholder="numero per lunghezza" max="15">
                    <button type="submit">Invia</button>
                     
                </form>
            </div>
        </div>

    </section>
    
</main>

</body>
</html>