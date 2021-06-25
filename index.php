<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->


<?php 
    $paragrafo = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem laboriosam odio Lorem nulla officia similique dolorem culpa. Lorem, sapiente Lorem.';  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h2,h3{
            text-align:center;
            padding:5px;         
        }

        .versione-base{
            border:1px solid black;
            background-color: lightgreen;    
        }
        .versione-censurata{
            margin-top:20px;
            border:1px solid black;
            background-color:lightgreen;
        }
    </style>

</head>
<body>
    <!-- versione non censurata -->
    <div class="versione-base">
        <h2>
            Versione non censurata
        </h2>
        <h3>
            <?php 
                echo $paragrafo . "<br/>" . "Lunghezza paragrafo : " . strlen($paragrafo);
            ?> 
        </h3>
    </div>
        

    <!-- versione censurata -->
    <div class="versione-censurata">
        <h2>
            Versione censurata
        </h2>
        <h3>
            <?php 
                $censuraApplicata = str_replace($_GET["censura"], '***', $paragrafo);
                echo $censuraApplicata . "<br/>" . " Lunghezza paragrafo : " . strlen($censuraApplicata);
            ?> 
        </h3>
    </div>
</body>
</html>