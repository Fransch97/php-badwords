<?php
$testo = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, provident corporis nulla labore id excepturi accusamus impedit exercitationem illo quis enim voluptatum sint dicta voluptatem pariatur eos assumenda eum aliquam!loremLorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, provident corporis nulla labore id excepturi accusamus impedit exercitationem illo quis enim voluptatum sint dicta voluptatem pariatur eos assumenda eum aliquam!loremLorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, provident corporis nulla labore id excepturi accusamus impedit exercitationem illo quis enim voluptatum sint dicta voluptatem pariatur eos assumenda eum aliquam!loremLorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, provident corporis nulla labore id excepturi accusamus impedit exercitationem illo quis enim voluptatum sint dicta voluptatem pariatur eos assumenda eum aliquam!loremLorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, provident corporis nulla labore id excepturi accusamus impedit exercitationem illo quis enim voluptatum sint dicta voluptatem pariatur eos assumenda eum aliquam!loremLorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, provident corporis nulla labore id excepturi accusamus impedit exercitationem illo quis enim voluptatum sint dicta voluptatem pariatur eos assumenda eum aliquam!lorem";

// var_dump($_GET);
$keyWord = $_GET["parola"];
$filtered = str_replace($keyWord, "***", $testo);
$testArray = explode(" ", $testo)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body style="text-align: center;">
    <h1>Censura il testo</h1>
    <form method="get">
        <label for="parola"> Inserisci la parola da censure </label>
        <input type="text" name="parola">
        <button type="submit"> vai</button>
    </form>
    <p> <?php echo $filtered ?></p>
    <p>La lunghezza del testo censuarto ??: <?php echo strlen($filtered)?></p>
    <p>La lunghezza del testo non censuarto ??: <?php echo strlen($testo)?></p>
    <?php if($keyWord) :?>
        <p>La parola censurata ??: <?php echo $keyWord ?></p>
    <?php endif ; ?>
</body>
</html>