<?php
$testo = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, provident corporis nulla labore id excepturi accusamus impedit exercitationem illo quis enim voluptatum sint dicta voluptatem pariatur eos assumenda eum aliquam!loremLorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, provident corporis nulla labore id excepturi accusamus impedit exercitationem illo quis enim voluptatum sint dicta voluptatem pariatur eos assumenda eum aliquam!loremLorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, provident corporis nulla labore id excepturi accusamus impedit exercitationem illo quis enim voluptatum sint dicta voluptatem pariatur eos assumenda eum aliquam!loremLorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, provident corporis nulla labore id excepturi accusamus impedit exercitationem illo quis enim voluptatum sint dicta voluptatem pariatur eos assumenda eum aliquam!loremLorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, provident corporis nulla labore id excepturi accusamus impedit exercitationem illo quis enim voluptatum sint dicta voluptatem pariatur eos assumenda eum aliquam!loremLorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, provident corporis nulla labore id excepturi accusamus impedit exercitationem illo quis enim voluptatum sint dicta voluptatem pariatur eos assumenda eum aliquam!lorem";

// var_dump($_GET);
$keyWord = $_GET["parola"];
$filtered = str_replace($keyWord, "***", $testo);

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
    <h2>Aggiungi alla fine di questo link la parola da censurare -> http://localhost/php-badwords/?parola=</h2>
    <p> <?php echo $filtered ?></p>
</body>
</html>