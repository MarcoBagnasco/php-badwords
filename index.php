<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>PHP Badwords</h1>

    
    <?php
    // Variables
    $string = 'Mentre andavo nelle Ardenne vidi un uomo e sette donne, ogni donna ha sette sacche, ogni sacca sette gatte, ogni gatta sette figli; gattini gatte sacche donne, quanti andavano nelle Ardenne?'
    ?>

    <p><?php echo $string?></p>
    <p>The paragraph length is: <?php echo strlen($string) ?></p>
</body>
</html>